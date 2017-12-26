<template>
    <div class="prod-related">
        <h2><span>Productos relacionados</span></h2>
        <div class="prod-related-car" id="prod-related-car">
            <ul class="slides">
                <li class="prod-rel-wrap">
                    <div class="prod-rel" v-for="product in products">
                        <router-link class="prod-rel-img"
                                     :to="{name:'product_name', params: {product_id: product.seo_name}}" >
                            <img :src="url_server+product.picture" :alt="product.name">
                        </router-link>

                        <div class="prod-rel-cont">
                            <h3>
                                <router-link :to="{name:'product_name', params: {product_id: product.seo_name}}" >
                                    {{product.name}}
                                </router-link>
                            </h3>

                            <p class="prod-rel-price">
                                <b v-if="!product.upon_request">{{product.price | cash }}</b>
                                <b v-if="product.upon_request"> A pedido </b>
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import ProductDetailRelated from './ProductDetailRelated.vue'

    export default {
        props: {
            products: {
                default: []
            }
        }
    }
</script>