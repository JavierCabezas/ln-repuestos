<template>
    <div class="prod-slider-wrap">
        <div class="prod-slider">
            <ul class="prod-slider-car">
                <li>
                    <a data-fancybox-group="product" class="fancy-img">
                        <img :src="url_server+product.main.picture" :alt="product.main.name">
                    </a>
                </li>
                <li v-for="pic in product.pictures">
                    <a data-fancybox-group="product" class="fancy-img">
                        <img :src="url_server+pic" :alt="product.main.name">
                    </a>
                </li>
            </ul>
        </div>
        <div class="prod-thumbs">
            <ul class="prod-thumbs-car">
                <li>
                    <a data-slide-index="0">
                        <img :src="url_server+product.main.picture" :alt="product.main.name">
                    </a>
                </li>
                <li v-if="product.pictures.lenght > 0" v-for="(pic, index) in product.pictures">
                    <a :data-slide-index="index+1">
                        <img :src="pic" :alt="product.main.name">
                    </a>
                </li>
            </ul>
        </div>
    </div>
</template>


<script>
    export default {
        props: ['product']
    }
</script>