<template>
    <div class="newsletter">
        <h3>Subscríbete a nosotros</h3>
        <p>Ingresa tu dirección de correo electrónico para recibir ofertas</p>
        <form action="#">
            <input placeholder="Tu dirección de correo electrónico" type="email" v-model="input_mail">
            <input name="OK" value="Subscribirse" type="submit" @click.prevent="add_to_database()">
        </form>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                input_mail: '',
            }
        },
        methods: {
            add_to_database: function() {
                $.ajax({
                    url: vm.url_backend + 'newsletter/add',
                    success: function (result) {
                        vm.items = result;
                    }
                });
            }
        }
    }
</script>