<template>
    <section class="container">
        <breadcrumbs :crumbs="crumbs"></breadcrumbs>
        <h1 class="main-ttl"><span>Sobre LN Repuestos</span></h1>

        <div class="row">

            <div class="stylization col-md-8 text-justify">
                <p> <span class="fa fa-car"> </span>
                    Ofrecemos venta de repuestos importados para automóviles Volvo, Audi y BMW, originales y
                    alternativos de comprobada calidad, tanto nuevos y usados, en stock y a pedido.
                </p>
                <p> <span class="fa fa-car"> </span>
                    También ofrecemos repuestos de Mini, pero estos exclusivamente a pedido, con tiempo de llegada de máximo 15 días hábiles.
                </p>
                <p> <span class="fa fa-car"> </span>
                    Tenemos experiencia comprobada desde 2012 en el rubro.</p>
                <p> <span class="fa fa-car"> </span> Soporte técnico de Manual de Piezas y Partes de la marca, para garantizar el repuesto adecuado.</p>
                <p> <span class="fa fa-car"> </span> Servicio de scanner Volvo.</p>
                <p> <span class="fa fa-car"> </span> Estamos ubicados en Santiago, comuna de Las Condes.</p>
                <p> <span class="fa fa-car"> </span> Despachos, por pagar, a todo Chile.</p>

                <p><span class="fa fa-car"> </span> Nuestra vía de contacto es:
                    <contact-info> </contact-info>
                <p>
                <p><span class="fa fa-car"> </span> Una vez recibida la consulta le responderemos en 24 horas, con su cotización y condiciones comerciales. </p>

            </div>
            <div class="col-md-4 container-img">
                <img :src="img_logo_volvo" class="img-responsive" alt="LN Repuestos - Especialistas en Volvo">
                <div class="row">
                    <div class="col-md-4">
                        <img :src="img_logo_bmw" class="img-responsive" alt="LN Repuestos - Repuestos BMW">
                    </div>
                    <div class="col-md-4">
                        <p>&nbsp;</p>
                        <img :src="img_logo_audi" class="img-responsive" alt="LN Repuestos - Repuestos Audi">
                    </div>
                    <div class="col-md-4">
                        <p>&nbsp;</p>
                        <img :src="img_logo_mini" class="img-responsive" alt="LN Repuestos - Repuestos Mini">
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
                img_logo_mini: 'src/assets/img/logo-mini.png',
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
