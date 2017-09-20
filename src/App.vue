<template>
    <div>
        <top-main :categories="categories"></top-main>
        <transition name="fade">
            <router-view></router-view>
        </transition>
        <footer-main :categories="categories"></footer-main>
    </div>
</template>

<script>
    import TopMain from './components/main/top/TopMain.vue'
    import FooterMain from './components/main/footer/FooterMain.vue'
    import { EventBus } from './event-bus.js';

    export default {
        name: 'app',
        data () {
            return {
                categories: [ ],
            }
        },
        watch: {
            '$route': function (url) {
                let urls = ['product_name', 'products_subsubcategory', 'products_subcategory', 'products_category', 'products', ];
                if(jQuery.inArray(url.name, urls) !== -1){
                    EventBus.$emit('updated_product_url');
                }
            }
        },
        created: function () {
            let vm = this;
            $.ajax({
                url: vm.url_backend + 'products/nested-categories',
                success: function (result) {
                    vm.categories = result;
                }
            });
        },
        components:{
            TopMain,
            FooterMain
        }
    }
</script>