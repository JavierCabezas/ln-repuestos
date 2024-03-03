<template>
    <section class="container stylization maincont">
        <breadcrumbs :crumbs="crumbs"></breadcrumbs>

        <h1 class="main-ttl"><span> Contacto</span></h1>

        <p>Si necesitas contactarnos, puede hacerlo via Whatsap , mail, telefónico o completando  el siguiente formulario y nos comunicaremos a la brevedad. Si nos escribes por la cotización o de un repuesto en específico por favor ingresa el número de VIN (disponible en el <vin></vin>) para agilizar el trámite.</p>

        <p >Recuerda que también podemos darte cotizaciones por productos que no tengamos en el sitio web.</p>

        <p>Además puedes encontrarnos en:
          <contact-info :show_contact_form="false"> </contact-info>
        </p>

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
                    <span class="contactform-input"> <textarea placeholder="Tu mensaje o detalles para realización de cotización" v-model="form.message" name="mess">
                    </textarea></span>
                </p>
                <p class="contactform-submit">
                    <input value="Enviar" @click.prevent="send_form()" type="submit">
                </p>
            </form>
        </div>
        <br>
    </section>
</template>

<script>
    import Breadcrumbs from '../other/Breadcrumbs.vue';
    import Vin from '../other/Vin.vue'
    import ContactInfo from "../other/ContactInfo.vue";

    export default {
        data () {
            return {
                crumbs: [
                    { 'title': 'Contacto',  'path': null }
                ],
                product_id: this.$route.params.product_id,
                form: {
                    name: '',
                    email: '',
                    telephone: '',
                    vin: '',
                    message: ''
                },
                default_text: ''
            }
        },
        components: {
          ContactInfo,
            Breadcrumbs,
            Vin
        },
        created: function () {
            if(this.product_id !== undefined){
                this.get_product_description(this.product_id);
            }
        },
        mounted: function () {
          if(this.product_id !== undefined) {
            document.getElementById("anchor_producto").scrollIntoView();
          }
        },
        methods: {
            is_email: function(email) {
                let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                return reg.test(email)
            },
            get_product_description(product_id){
                let vm = this;
                $.ajax({
                    url: vm.url_backend + 'products/get-by-id',
                    data: { id: product_id },
                    method: 'GET',
                    success: function (result) {
                        if(result.upon_request){
                            vm.form.message = "Escribía para comprar el producto " + result.name + " (Identificador =" + result.id+") \n";
                        }else{
                            vm.form.message = "Escribía para solicitar el producto " + result.name + " (Identificador =" + result.id+") \n";
                        }
                    }
                });
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
                            vm.form.name = '';
                            vm.form.email = '';
                            vm.form.telephone = '';
                            vm.form.vin = '';
                            vm.form.message = '';
                            swal("Éxito", "Recibimos su mensaje correctamente, le responderemos en el corto plazo.", "success")
                        }
                    });
                }
            }
        }
    }
</script>
