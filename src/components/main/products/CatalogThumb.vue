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
                        <a href="#" class="prodlist-i-add">Pedir este producto</a>
                    </p>
                    <span class="prodlist-i-price">
							<b>$59</b>
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
        props: ['product']
    }
</script>