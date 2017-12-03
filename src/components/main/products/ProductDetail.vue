<template>
    <section class="container">
        <breadcrumbs-products :active_page="product.main.name"></breadcrumbs-products>

        <h1 class="main-ttl"><span>{{product.main.name}}</span></h1>
        <!-- Single Product - start -->
        <div class="prod-wrap">

            <slider v-if="is_loaded" :product="product"></slider>

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
                        <router-link :to="{name:'contact_product', params: {'product_id': product.main.id }}"
                                     class="prod-add" rel="nofollow">
                            Solicitar este producto
                        </router-link>
                    </p>
                </div>
            </div>

            <!-- Product Tabs -->
            <div class="prod-tabs-wrap">
                <ul class="prod-tabs">
                    <li>
                        <a :class="{active: active_tab == 1}"
                           href="#"
                           @click.prevent="active_tab = 1">
                            Descripción
                        </a>
                    </li>
                    <li>
                        <a :class="{active: active_tab == 2}"
                           @click.prevent="active_tab = 2"
                           v-if="product.main.has_tutorial"
                           id="prod-props" href="#">
                            Tutorial
                        </a>
                    </li>
                </ul>
                <div class="prod-tab-cont">
                    <p class="prod-tab-mob" :class="{active: active_tab == 1}">Descripción</p>
                    <div class="prod-tab stylization">
                        <p v-if="active_tab == 1">{{product.main.description}}</p>
                        <p v-if="active_tab == 2">
                            <product-tutorial
                                    v-if="product.main.has_tutorial"
                                    :tutorial_text="product.main.tutorial"
                                    :is_tutorial_video="product.main.is_tutorial_video"
                            ></product-tutorial>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <related></related>
    </section>
</template>

<script>
    import Related from './ProductDetailRelated.vue'
    import Slider from './ProductDetailSlider.vue'
    import BreadcrumbsProducts from '../../other/BreadcrumbsProducts.vue'
    import ProductTutorial from './ProductTutorial.vue'

    export default {
        data () {
            return {
                category: this.$route.params.category,
                product_id: this.$route.params.product_id,
                product: {main: {}, pictures: {}},
                is_loaded: false,
                active_tab: 1
            }
        },
        filters: {
            cash: function(value) {
                if(value){
                    return "$"+value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
                }
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
                        vm.is_loaded = true;
                    }
                });
            },
        },
        components: {
            Related,
            Slider,
            BreadcrumbsProducts,
            ProductTutorial
        }
    }
</script>