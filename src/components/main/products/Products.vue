<template>
    <section class="container">

        <breadcrumbs-products></breadcrumbs-products>
        <catalog-categories></catalog-categories>

        <div class="section-cont">
            <products-per-page @new_products_per_page="update_products_per_page"></products-per-page>
            <catalog-thumb v-for="(p, index) in products" v-if="is_index_in_range(index)" :key="p.product_id" :product="p"></catalog-thumb>
            <paginate
                    :pageCount="products.length / products_per_page"
                    :containerClass="'pagi'"
                    :clickHandler="clickCallback">
            </paginate>
        </div>
    </section>
</template>

<script>
    import { EventBus } from './../../../event-bus.js';
    import CatalogThumb from './CatalogThumb.vue'
    import CatalogCategories from './CatalogCategories.vue'
    import ProductsPerPage from './ProductsPerPage.vue'
    import BreadcrumbsProducts from '../../other/BreadcrumbsProducts.vue'
    import Paginate from 'vuejs-paginate'

    export default {
        computed: {
            has_category: function () {
                return this.category !== null;
            },
            has_subcategory: function () {
                return this.subcategory !== null;
            },
            has_subsubcategory: function() {
                return this.subsubcategory !== null;
            }
        },
        data () {
            return {
                category: this.$route.params.category === undefined ? null : this.$route.params.category ,
                subcategory: this.$route.params.subcategory === undefined ?  null : this.$route.params.subcategory,
                subsubcategory: this.$route.params.subsubcategory === undefined ? null : this.$route.params.subsubcategory,
                products: [],
                products_per_page: 12,
                active_page: 1
            }
        },
        created: function () {
            let vm = this;
            this.get_products();
            EventBus.$on('updated_product_url', function() {
                vm.get_products();
            });
        },
        components: {
            CatalogThumb,
            CatalogCategories,
            BreadcrumbsProducts,
            ProductsPerPage,
            Paginate
        },
        methods: {
            update_products_per_page: function(new_products_per_page){
                this.products_per_page = new_products_per_page;
                this.get_products()
            },
            get_products: function() {
                let vm = this;
                $.ajax({
                    url: vm.url_backend + 'products/list',
                    data: {
                        category: vm.$route.params.category,
                        subcategory: vm.$route.params.subcategory,
                        subsubcategory: vm.$route.params.subsubcategory
                    },
                    success: function (result) {
                        vm.products = result;
                    }
                });
            },
            clickCallback: function(page) {
                this.active_page = page;
            },
            is_index_in_range(index){
                let item_number = index +1;
                return item_number > ( (this.active_page -1 ) * this.products_per_page ) && item_number <= ( (this.active_page ) * this.products_per_page)
            }
        }
    }
</script>