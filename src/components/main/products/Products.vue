<template>
    <section class="container">

        <breadcrumbs-products :category="category" :subcategory="subcategory" :subsubcategory="subsubcategory"></breadcrumbs-products>

        <h1 class="main-ttl"><span>Women</span></h1>


        <div class="section-sb">
            <catalog-categories text_to_show="to_fill"></catalog-categories>
        </div>

        <div class="section-cont">

            <!-- Catalog Topbar - start -->
            <div class="section-top">

                <!-- Count per page -->
                <div class="section-count pull-right">
                    <p>12</p>
                    <ul>
                        <li><a href="#">12</a></li>
                        <li><a href="#">24</a></li>
                        <li><a href="#">48</a></li>
                    </ul>
                </div>
                <p class="pull-right"> Repuestos por página </p>
            </div>


            <catalog-thumb v-for="p in products" :product="p"></catalog-thumb>

            <!-- Pagination - start -->
            <ul class="pagi">
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li class="pagi-next"><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
            <!-- Pagination - end -->
        </div>
    </section>
</template>

<script>
    import CatalogThumb from './CatalogThumb.vue'
    import CatalogCategories from './CatalogCategories.vue'
    import BreadcrumbsProducts from '../../other/BreadcrumbsProducts.vue'

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
                products: {}
            }
        },
        created: function () {
            this.get_products();
        },
        components: {
            CatalogThumb,
            CatalogCategories,
            BreadcrumbsProducts
        },
        methods: {
            get_products: function() {
                let vm = this;
                $.ajax({
                    url: vm.url_backend + 'products/list',
                    data: {  },
                    success: function (result) {
                        vm.products = result;
                    }
                });
            }
        }
    }
</script>