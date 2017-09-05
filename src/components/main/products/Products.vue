<template>
    <section class="container">
        <ul class="b-crumbs">
            <li>
                <a href="index.html">
                    Home
                </a>
            </li>
            <li>
                <a href="catalog-list.html">
                    Catalog
                </a>
            </li>
            <li>
                <span>Women</span>
            </li>
        </ul>
        <h1 class="main-ttl"><span>Women</span></h1>

        <div class="section-sb">
            <catalog-categories></catalog-categories>
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
            <catalog-thumb :product="{'a': 'b'}"></catalog-thumb>

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
                subsubcategory: this.$route.params.subsubcategory === undefined ? null : this.$route.params.subsubcategory
            }
        },
        created: function () {

        },
        components: {
            CatalogThumb,
            CatalogCategories
        },
        methods: {

        }
    }
</script>