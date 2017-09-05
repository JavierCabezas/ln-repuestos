<template>
    <div class="prod-items section-items">
        <div class="prodlist-i">
            <a class="prodlist-i-img" href="product.html"><!-- NO SPACE --><img src="http://placehold.it/300x311" alt="Adipisci aperiam commodi"><!-- NO SPACE --></a>
            <div class="prodlist-i-cont">
                <h3><a href="product.html">{{product}}</a></h3>
                <div class="prodlist-i-txt">
                    Quisquam totam quas veritatis dolor voluptates, laudantium repellendus. Cupiditate repellat tempora consequatur sequi, neque					</div>

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