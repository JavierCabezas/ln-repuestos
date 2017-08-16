<template>
    <section class="container stylization maincont">
        <breadcrumbs :crumbs="crumbs"></breadcrumbs>

        <h1 class="main-ttl"><span>Contacto</span></h1>
        <br>

        <p>Si necesitas contactarnos, por favor completa el siguiente formulario y nos comunicaremos a la brevedad.</p>

        <p>Si nos escribes por la cotización o de un repuesto en específico por favor ingresa el número de VIN (disponible en el <vin></vin>) para agilizar el trámite.</p>

        <!-- Contact Form -->
        <div class="contactform-wrap">
            <form action="#" class="form-validate">
                <p class="component-desc component-desc-ct">Recuerda que también podemos darte cotizaciones por productos que no tengamos en el sitio web.</p>
                <p class="contactform-field contactform-text">
                    <label class="contactform-label">Nombre</label>
                    <span class="contactform-input"><input placeholder="Tu nombre" type="text" name="name"></span>
                </p>
                <p class="contactform-field contactform-email">
                    <label class="contactform-label">E-mail</label>
                    <span class="contactform-input"><input placeholder="Tu dirección de correo electrónico" type="email" name="email" data-required="text"></span>
                </p>
                <p class="contactform-field contactform-email">
                    <label class="contactform-label">Teléfono (opcional)</label>
                    <span class="contactform-input"><input placeholder="Tu número de teléfono" type="text" name="email" data-required="text"></span>
                </p>
                <p class="contactform-field contactform-email">
                    <label class="contactform-label">VIN (opcional)</label>
                    <span class="contactform-input"><input placeholder="Tu número de VIN" type="text" name="email" data-required="text"></span>
                </p>
                <p class="contactform-field contactform-textarea">
                    <label class="contactform-label">Mensaje</label>
                    <span class="contactform-input"><textarea placeholder="Tu mensaje o detalles para realización de cotización" name="mess"></textarea></span>
                </p>
                <p class="contactform-submit">
                    <input value="Send" type="submit">
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
                ]
            }
        },
        components: {
            Breadcrumbs,
            Vin
        }
    }
</script>