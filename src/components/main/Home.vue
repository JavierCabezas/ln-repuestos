<template>
    <div>
        <main>
            <section class="container">
                <slider></slider>
                <p> Somos <b>LN Repuestos</b>:</p>
                <p>
                    Venta de repuestos nuevos,  importados para automóviles Volvo;  originales y alternativos de comprobada calidad. Amplio stock disponible. Tenemos experiencia comprobada desde 2012 en el rubro.
Despachos, por pagar, a todo Chile.
                </p>

                <p>Despachos, por pagar, a todo Chile.</p>
                <p>&nbsp;</p>
                <popular-products></popular-products>
                <newsletter v-if="false" section="top"></newsletter>
            </section>
        </main>
    </div>
</template>

<script>
    import Slider from './Slider.vue'
    import PopularProducts from './products/PopularProducts.vue'
    import Newsletter from './Newsletter.vue'

    export default {
        components: {
            Slider,
            PopularProducts,
            Newsletter
        }
    }
</script>
