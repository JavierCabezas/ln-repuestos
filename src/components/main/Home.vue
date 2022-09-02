<template>
    <div>
        <main>
            <section class="container">
                <slider></slider>
                <p> Somos <b>LN Repuestos</b>:</p>
                <p>
                    Repuestos para automóviles Volvo, amplio stock, originales y alternativos de comprobada calidad.
                    Repuestos Audi, BMW y Mini, a pedido, plazo estimado de 15 días .
                </p>
                <p>No trabajamos partes y piezas de carrocería</p>
                <p>
                    Tenemos experiencia comprobada desde 2012 en el rubro.
                    Despachos a todo Chile.
                </p>
                <p>&nbsp;</p>
                <popular-products></popular-products>
                <newsletter section="top"></newsletter>
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
