<template>
    <section class="container">
        <breadcrumbs :crumbs="crumbs"></breadcrumbs>
        <h1 class="main-ttl"><span>Sobre LN Repuestos</span></h1>

        <div class="row">

            <div class="stylization col-md-8 text-justify">
                <p> <span class="fa fa-car"> </span>
                  Somos importadores de repuestos para automóviles marca Volvo y otras marcas Europeas a pedido.
                  Vendemos repuestos originales y alternativos, de marcas reconocidas y procedentes, en su mayoría, de Europa.
                </p>
                <p> <span class="fa fa-car"> </span>
                  Tenemos experiencia comprobada en el rubro, desde el año 2013.
                </p>
                <p> <span class="fa fa-car"> </span> Hacemos envíos a todo Chile, con flete por pagar.</p>

                <p><span class="fa fa-car"> </span> Nuestra vía de contacto es:
                    <contact-info> </contact-info>
                  <span class="fa fa-car"> </span> Una vez recibida la consulta le responderemos en 24 horas, con su cotización y condiciones comerciales. </p>

            </div>
            <div class="col-md-4 container-img">
                <img :src="img_logo_volvo" class="img-responsive" alt="LN Repuestos - Especialistas en Volvo">
                <div class="row">
                    <div class="col-md-5">
                        <img :src="img_logo_bmw" class="img-responsive" alt="LN Repuestos - Repuestos BMW">
                    </div>
                    <div class="col-md-7">
                        <p>&nbsp;</p>
                        <img :src="img_logo_audi" class="img-responsive" alt="LN Repuestos - Repuestos Audi">
                    </div>
                </div>
            </div>


        </div>

    </section>
</template>

<script>
    import Breadcrumbs from '../other/Breadcrumbs.vue';
    import Vin from '../other/Vin.vue'
    import ContactInfo from '../other/ContactInfo.vue';

    export default {
        data () {
            return {
                crumbs: [
                    { 'title': 'Sobre Nosotros',  'path': null }
                ],
                img_logo_volvo: 'src/assets/img/logo-volvo.png',
                img_logo_audi: 'src/assets/img/audi-logo.png',
                img_logo_bmw: 'src/assets/img/logo-bmw.png',
            }
        },
        components: {
            ContactInfo,
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
