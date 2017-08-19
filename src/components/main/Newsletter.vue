<template>
    <div>
        <div class="newsletter" v-if="section === 'top'">
            <h3>Subscríbete a nosotros</h3>
            <p>Ingresa tu dirección de correo electrónico para recibir ofertas y promociones exclusivas.</p>
            <form action="#">
                <input class="form-control" placeholder="Tu dirección de correo electrónico" type="email" v-model="input_mail">
                <input class="form-control" name="OK" value="Subscribirse" type="submit" @click.prevent="add_to_database()">
            </form>
        </div>

        <div class="f-subscribe" v-if="section === 'bottom'">
            <h3>Subscríbete a nostros</h3>
            <form class="f-subscribe-form" action="#">
                <input placeholder="Tu correo electrónico" v-model="input_mail" type="email">
                <button type="submit" @click.prevent="add_to_database()"><i class="fa fa-paper-plane"></i></button>
            </form>
            <p>Ingresa tu correo electrónico para recibir exclusivas ofertas y promociones.</p>
        </div>
    </div>
</template>

<script>
    require('sweetalert');

    export default {
        data () {
            return {
                input_mail: '',
            }
        },
        props: ["section"],
        methods: {
            is_email: function(email) {
                let reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                return reg.test(email)
            },
            add_to_database: function() {
                let vm = this;

                if(!vm.is_email(vm.input_mail)){
                    swal("Oops...", "La dirección de correo electrónico ingresada no es correcta.", "error");
                }else{
                    $.ajax({
                        url: vm.url_backend + 'newsletter/add',
                        data: { client_email: vm.input_mail },
                        method: 'POST',
                        success: function (result) {
                            vm.input_mail = '';
                            swal("Éxito", "Agregamos su dirección correctamente, ¡Gracias!", "success")
                        }
                    });
                }
            }
        }
    }
</script>