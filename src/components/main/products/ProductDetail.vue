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

        <related></related>
    </section>
</template>

<script>
    import Related from './ProductDetailRelated.vue'
    import Slider from './ProductDetailSlider.vue'

    export default {
        data () {
            return {
                category: this.$route.params.category,
                product_id: this.$route.params.product_name,
                product: {main: {}, pictures: {}},
                is_loaded: false
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
            enviar_solicitud: function(){
                alert("solicitado producto");
            }
        },
        components: {
            Related,
            Slider
        }
    }
</script>