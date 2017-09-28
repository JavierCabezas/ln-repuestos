<template>
    <ul class="pagi">
        <li class="pagi-prev" v-if="active_page > 1"><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a @click.prevent=""> ... </a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
</template>

<script>
    import { EventBus } from './../../../event-bus.js';

    export default {
        props: ['active_page', 'products_per_page'],
        data () {
            return {
                categories: {},
                categories_loaded: false
            }
        },
        created: function () {
            let vm = this;

            this.get_categories();
            EventBus.$on('updated_product_url', function() {
                vm.get_categories();
            });
        },
        methods: {
            get_categories: function(){
                let vm = this;
                $.ajax({
                    url: vm.url_backend + 'site/categories',
                    data: {
                        category: vm.$route.params.category,
                        subcategory: vm.$route.params.subcategory,
                        subsubcategory: vm.$route.params.subsubcategory
                    },
                    success: function (result) {
                        vm.categories = result;
                        vm.categories_loaded = true;
                    }
                });
            }
        }
    }
</script>