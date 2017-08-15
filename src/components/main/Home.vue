<template>
    <div>
        <main>
            <section class="container">
                <slider></slider>
                <popular-products></popular-products>
                <special-offer></special-offer>
                <newsletter></newsletter>
            </section>
        </main>
    </div>
</template>

<script>
    import Slider from './Slider.vue'
    import PopularProducts from './products/PopularProducts.vue'
    import SpecialOffer from './products/SpecialOffer.vue'
    import Newsletter from './Newsletter.vue'

    export default {
        components: {
            Slider,
            PopularProducts,
            SpecialOffer,
            Newsletter
        }
    }
</script>