<template>
    <section class="container">
        <breadcrumbs :crumbs="crumbs"></breadcrumbs>
        <h1 class="main-ttl"><span>Sobre Repuestos LN</span></h1>
        <div class="row">

            <div class="stylization col-md-8 text-justify">
                <p>Somos una empresa que se dedica a la venta de repuestos para automóviles Volvo. Contamos con soporte técnico de manuales de piezas y partes, para tener la mejor opción a sus necesidades.</p>
                <p>Además, disponemos de un scanner para revisar su vehículo Volvo. El valor de este servicio es de $30.000 y le dará derecho a un 5 % de descuento su compra, con tope del valor del scanner.</p>
                <p>Mantenemos en stock e Importamos repuestos originales y alternativos de comprobada calidad, tanto nueva como usada. Los valores de repuestos de nuestra página incluyen IVA.</p>
                <p>
                    Este es un negocio virtual, realizamos entrega en nuestro domicilio de Las Condes, en horarios a acordar con cliente. También hacemos envíos a provincias por Chilexpress o Turbus. Podemos recibir tus consultas por medio de nuestro formulario de contacto, donde
                    <b>es importante que nos envíen el VIN y número de motor de su vehículo para poder cotizar</b>.(Pueden encontrar el número de VIN en el siguiente diagrama).

                </p>

                <p>Además si estás buscando un repuesto en específico que no tengamos en stock puedes contactarnos para evaluar la posibilidad de traerlo de forma especial.</p>

                <p>Nuestra vía de contacto es el formulario de <router-link to="contacto">contacto</router-link> o el correo electrónico. Una vez recibida la consulta le responderemos en 24 horas, con su cotización y condiciones comerciales. </p>

            </div>
            <div class="col-md-4 container-img">
                <img :src="img_logo_volvo" class="img-responsive" alt="LN Repuestos - Especialistas en Volvo">
            </div>

        </div>

    </section>
</template>

<script>
    import Breadcrumbs from '../main/Breadcrumbs.vue';

    export default {
        data () {
            return {
                crumbs: [
                    { 'title': 'Sobre Nosotros',  'path': null }
                ],
                img_logo_volvo: 'src/assets/img/logo-volvo.png'
            }
        },
        components: {
            Breadcrumbs
        }
    }
</script>