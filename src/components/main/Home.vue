<template>
    <div>
        <main>
            <section class="container">
                <slider></slider>
                <p> Somos <b>LN Repuestos</b>:</p>
                <p> Ofrecemos venta de repuestos importados para automóviles Volvo, originales y alternativos de comprobada calidad, tanto nuevos y usados, en stock y a pedido.  </p>
                <p>Despachos, por pagar, a todo Chile.</p>
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