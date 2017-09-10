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
                <a href="catalog-list.html">
                    Women
                </a>
            </li>
            <li>
                <span>Aperiam nihil veniam</span>
            </li>
        </ul>

        <h1 class="main-ttl"><span>{{product.main.name}}</span></h1>
        <!-- Single Product - start -->
        <div class="prod-wrap">

            <!-- Product Images -->
            <div class="prod-slider-wrap">
                <div class="prod-slider">
                    <ul class="prod-slider-car">
                        <li>
                            <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x642">
                                <img src="http://placehold.it/500x642" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-fancybox-group="product" class="fancy-img" href="http://placehold.it/500x722">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="prod-thumbs">
                    <ul class="prod-thumbs-car">
                        <li>
                            <a data-slide-index="0" href="#">
                                <img src="http://placehold.it/500x642" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="1" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="2" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="3" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="4" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="5" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="6" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                        <li>
                            <a data-slide-index="7" href="#">
                                <img src="http://placehold.it/500x722" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Product Description/Info -->
            <div class="prod-cont">
                <div class="prod-cont-txt">
                    {{product.main.description}}
                </div>

                <div class="prod-info">
                    <p class="prod-price">
                        <b class="item_current_price">{{product.main.price | cash }}</b>
                    </p>
                    <p class="prod-addwrap">
                        <a href="#" @click.prevent="enviar_solicitud()" class="prod-add" rel="nofollow">Solicitar</a>
                    </p>
                </div>
            </div>

            <!-- Product Tabs -->
            <div class="prod-tabs-wrap">
                <ul class="prod-tabs">
                    <li><a data-prodtab-num="1" class="active" href="#" data-prodtab="#prod-tab-1">Description</a></li>
                    <li><a data-prodtab-num="2" id="prod-props" href="#" data-prodtab="#prod-tab-2">Features</a></li>
                    <li><a data-prodtab-num="3" v-if="parseInt(product.main.tutorial_type) > 0" href="#" data-prodtab="#prod-tab-3">Video</a></li>
                </ul>
                <div class="prod-tab-cont">

                    <p data-prodtab-num="1" class="prod-tab-mob active" data-prodtab="#prod-tab-1">Description</p>
                    <div class="prod-tab stylization" id="prod-tab-1">
                        <p>{{product.main.description}}</p>
                    </div>
                    <p data-prodtab-num="2" class="prod-tab-mob" data-prodtab="#prod-tab-2">Features</p>
                    <div class="prod-tab prod-props" id="prod-tab-2">
                        <!-- Tab 2-->
                    </div>
                    <p data-prodtab-num="3" class="prod-tab-mob" data-prodtab="#prod-tab-3">Video</p>
                    <div class="prod-tab prod-tab-video" id="prod-tab-3">
                        <!-- Tab 3 -->
                    </div>
                </div>
            </div>

        </div>

        <product-detail-related></product-detail-related>
    </section>
</template>

<script>
    import ProductDetailRelated from './ProductDetailRelated.vue'

    export default {
        data () {
            return {
                category: this.$route.params.category,
                product_id: this.$route.params.product_name,
                product: {main: {}, pictures: {}}
            }
        },
        filters: {
            cash: function(value) {
                return "$"+value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }
        },
        created: function () {
            this.get_product(this.product_id)
        },
        methods: {
            get_product: function(product_id) {
                let vm = this;
                $.ajax({
                    url: vm.url_backend + 'products/get',
                    data: { product_id: product_id },
                    success: function (result) {
                        vm.product = result;
                    }
                });
            },
            enviar_solicitud: function(){
                alert("solicitado producto");
            }
        },
        components: {
            ProductDetailRelated
        }
    }
</script>