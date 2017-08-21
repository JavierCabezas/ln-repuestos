<template>
    <section class="container stylization maincont">
        <breadcrumbs :crumbs="crumbs"></breadcrumbs>

        <h1 class="main-ttl"><span>Contacto</span></h1>
        <br>

        <p>Si necesitas contactarnos, por favor completa el siguiente formulario y nos comunicaremos a la brevedad.</p>

        <p>Si nos escribes por la cotización o de un repuesto en específico por favor ingresa el número de VIN (disponible en el <vin></vin>) para agilizar el trámite.</p>

        <p>Recuerda que también podemos darte cotizaciones por productos que no tengamos en el sitio web.</p>

        <!-- Contact Form -->
        <div class="contactform-wrap">
            <form action="#" class="form-validate">
                <p class="contactform-field contactform-text">
                    <label class="contactform-label">Nombre</label>
                    <span class="contactform-input"><input placeholder="Tu nombre" v-model="form.name" type="text" name="name"></span>
                </p>
                <p class="contactform-field contactform-email">
                    <label class="contactform-label">E-mail</label>
                    <span class="contactform-input"><input placeholder="Tu dirección de correo electrónico" v-model="form.email" type="email" name="email" data-required="text"></span>
                </p>
                <p class="contactform-field contactform-email">
                    <label class="contactform-label">Teléfono (opcional)</label>
                    <span class="contactform-input"><input placeholder="Tu número de teléfono" type="tel" v-model="form.telephone" name="telephone" data-required="text"></span>
                </p>
                <p class="contactform-field contactform-email">
                    <label class="contactform-label">VIN (opcional)</label>
                    <span class="contactform-input"><input placeholder="Tu número de VIN" type="text" v-model="form.vin" name="vin" data-required="text"></span>
                </p>
                <p class="contactform-field contactform-textarea">
                    <label class="contactform-label">Mensaje</label>
                    <span class="contactform-input"> <textarea placeholder="Tu mensaje o detalles para realización de cotización" v-model="form.message" name="mess"></textarea></span>
                </p>
                <p class="contactform-submit">
                    <input value="Send" @click.prevent="send_form()" type="submit">
                </p>
            </form>
        </div>
        <br>
    </section>
</template>

<script>
    import Breadcrumbs from '../other/Breadcrumbs.vue';
    import Vin from '../other/Vin.vue'

    export default {
        data () {
            return {
                crumbs: [
                    { 'title': 'Contacto',  'path': null }
                ],
                form: {
                    name: 'Javier',
                    email: 'jcleyton@gmail.com',
                    telephone: '',
                    vin: '',
                    message: 'test 123'
                }
            }
        },
        components: {
            Breadcrumbs,
            Vin
        },
        methods: {
            is_email: function(email) {
                let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                return reg.test(email)
            },
            send_form: function() {
                let vm = this;

                if(vm.form.email === "" || vm.form.message === "" || vm.form.name === ""){
                    swal("Oops...", "No se ingresaron todos los campos obligatorios (Nombre, correo electrónico y mensaje).", "error");
                } else if(!vm.is_email(vm.form.email)){
                    swal("Oops...", "La dirección de correo electrónico ingresada no es correcta.", "error");
                }else{
                    $.ajax({
                        url: vm.url_backend + 'communications/contact',
                        data: { contact_form: vm.form },
                        method: 'POST',
                        success: function (result) {
                            //vm.form.name = '';
                            //vm.form.email = '';
                            //vm.form.telephone = '';
                            //vm.form.vin = '';
                            //vm.form.message = '';
                            swal("Éxito", "Recibimos su mensaje correctamente, le responderemos en el corto plazo.", "success")
                        }
                    });
                }
            }
        }
    }
</script>