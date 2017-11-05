<template>
    <div class="prod-items section-items">
        <div class="prodlist-i">
            <router-link v-if="product.subcategory !== null" class="prodlist-i-img"
                         :to="{name:'product_name', params: {category: product.category, product_name: product.seo_name}}" >
                <img :src="url_server + product.picture" :alt="product.name">
            </router-link>

            <div class="prodlist-i-cont">
                <h3>
                    <router-link v-if="product.subcategory !== null"
                                 :to="{name:'product_name', params: {category: product.category, product_name: product.seo_name}}" >
                        {{product.name}}
                    </router-link>
                </h3>
                <div class="prodlist-i-txt">
                    {{product.description}}
                </div>

                <div class="prodlist-i-action">
                    <p class="prodlist-i-addwrap">
                        <a href="#" @click.prevent="solicitar(product.id)" class="prodlist-i-add">Solicitar este producto</a>
                    </p>
                    <span class="prodlist-i-price">
                        <b v-if="!product.upon_request">{{ product.price | cash }}</b>
                        <b v-if="product.upon_request">Producto a pedido</b>
                    </span>
                </div>
                <p class="prodlist-i-info">
                    <router-link v-if="product.subcategory !== null"
                                 :to="{name:'product_name', params: {category: product.category, product_name: product.seo_name}}" >
                        <i class="fa fa-search"></i> Ver más detalles
                    </router-link>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['product'],
        filters: {
            cash: function(value) {
                return "$"+value.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
            }
        },
        methods: {
            solicitar: function(product_id) {
                alert("solicitado producto"+product_id);
            },

        }
    }
</script>