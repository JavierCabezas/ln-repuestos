<template>
    <section class="container">
        <breadcrumbs :crumbs="crumbs"></breadcrumbs>
        <h1 class="main-ttl"><span>Sobre LN Repuestos</span></h1>

        <div class="row">

            <div class="stylization col-md-8 text-justify">
                <p>Ofrecemos venta de repuestos importados para automóviles Volvo, originales y alternativos de comprobada calidad, tanto nuevos y usados, en stock y a pedido. </p>
                <p>Tenemos experiencia comprobada de 5 años en el rubro.</p>
                <p>Soporte técnico de Manual de Piezas y Partes de la marca, para garantizar el repuesto adecuado.</p>
                <p>Servicio de scanner Volvo.</p>
                <p>Estamos ubicados en Santiago, comuna de Las Condes.</p>
                <p>Despachos, por pagar, a todo Chile.</p>

                <p>Nuestra vía de contacto es el formulario de <span @click="go_up()"><router-link to="contacto">contacto</router-link></span> o el correo electrónico. Una vez recibida la consulta le responderemos en 24 horas, con su cotización y condiciones comerciales. </p>

            </div>
            <div class="col-md-4 container-img">
                <img :src="img_logo_volvo" class="img-responsive" alt="LN Repuestos - Especialistas en Volvo">
            </div>

        </div>

    </section>
</template>

<script>
    import Breadcrumbs from '../other/Breadcrumbs.vue';
    import Vin from '../other/Vin.vue'

    export default {
        data () {
            return {
                crumbs: [
                    { 'title': 'Sobre Nosotros',  'path': null }
                ],
                img_logo_volvo: 'src/assets/img/logo-volvo.png',
            }
        },
        components: {
            Breadcrumbs,
            Vin
        },
        methods: {
            go_up: function() {
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            }
        }
    }
</script>