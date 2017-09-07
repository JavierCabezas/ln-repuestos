<template>
    <div class="prod-items section-items">
        <div class="prodlist-i">
            <a class="prodlist-i-img" href="product.html">
                <img :src="product.picture" :alt="product.name">
            </a>
            <div class="prodlist-i-cont">
                <h3><a href="product.html">{{product.name}}</a></h3>
                <div class="prodlist-i-txt">
                    {{product.description}}
                </div>

                <div class="prodlist-i-action">
                    <p class="prodlist-i-addwrap">
                        <a href="#" @click.prevent="solicitar(product.id)" class="prodlist-i-add">Solicitar este producto</a>
                    </p>
                    <span v-if="!product.upon_request"class="prodlist-i-price">
                        <b>$59</b>
                    </span>
                    <span v-if="product.upon_request"class="prodlist-i-price">
                        <b>Producto a pedido</b>
                    </span>
                </div>
                <p class="prodlist-i-info">
                    <a href="#" class="qview-btn prodlist-i-qview"><i class="fa fa-search"></i> Ver más detalles </a>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['product'],
        methods: {
            solicitar: function(product_id) {
                alert("solicitado producto"+product_id);
            }
        }
    }
</script>