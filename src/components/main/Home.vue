<template>
    <div>
        <!-- Header - start -->
        <header class="header">

            <top-bar></top-bar>
            <logo></logo>
            <top-menu></top-menu>
            <!-- Topmenu - start -->
            <!-- Topmenu - end -->

        </header>
        <!-- Header - end -->


        <!-- Main Content - start -->
        <main>
            <section class="container">

                <slider></slider>
                <popular-products></popular-products>



                <special-offer></special-offer>
                <newsletter></newsletter>

            </section>
        </main>
        <!-- Main Content - end -->

        <footer-main></footer-main>
    </div>
</template>

<script>
    import TopBar from './TopBar.vue'
    import Logo from './Logo.vue'
    import TopMenu from './TopMenu.vue'
    import Slider from './Slider.vue'
    import PopularProducts from './products/PopularProducts.vue'
    import SpecialOffer from './products/SpecialOffer.vue'
    import FooterMain from './footer/FooterMain.vue'
    import Newsletter from './Newsletter.vue'

    export default {
        data () {
            return {

            }
        },
        components: {
            TopBar,
            Logo,
            TopMenu,
            Slider,
            PopularProducts,
            SpecialOffer,
            FooterMain,
            Newsletter
        }
    }
</script>