<template>
    <div>
        <main>
            <section class="container">
                <slider></slider>
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