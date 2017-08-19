<template>
    <footer class="footer-wrap">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <footer-company-info></footer-company-info>
                    <footer-block-list></footer-block-list>
                    <footer-delivery></footer-delivery>
                </div>
            </div>
        </div>

        <div class="container f-menu-list">
            <div class="row">
                <footer-menu></footer-menu>
                <newsletter section="bottom"></newsletter>
            </div>
        </div>
        <footer-bottom></footer-bottom>
    </footer>

</template>

<script>
    import FooterBottom from './FooterBottom.vue'
    import FooterMenu from './FooterMenu.vue'
    import FooterCompanyInfo from './FooterCompanyInfo.vue'
    import FooterBlockList from './FooterBlockList.vue'
    import FooterDelivery from './FooterDelivery.vue'
    import Newsletter from '../Newsletter.vue'

    export default {
        components: {
            FooterBottom,
            FooterMenu,
            Newsletter,
            FooterCompanyInfo,
            FooterBlockList,
            FooterDelivery
        }
    }
</script>