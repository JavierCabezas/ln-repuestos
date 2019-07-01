<template>
    <div class="fr-pop-wrap">

        <h3 class="component-ttl"><span>Repuestos de mantenimiento</span></h3>

        <div class="fr-pop-tab-cont">

            <div class="flexslider prod-items fr-pop-tab" id="frpoptab-tab-1">
                <ul class="slides">
                    <li class="prod-i" v-for="p in products">
                        <div class="prod-i-top">
                            <router-link :to="{name:'product_name', params: {product_id: p.seo_name}}" >
                                <img :src="url_server + p.picture" :alt="p.name">
                            </router-link>
                            <p class="prod-i-addwrap">
                                <router-link class="prod-i-add" :to="{name:'product_name', params: {product_id: p.seo_name}}" >
                                    <span class="fa fa-search"> </span> Ver más detalles
                                </router-link>
                            </p>
                        </div>
                        <h3>
                            <router-link :to="{name:'product_name', params: {product_id: p.seo_name}}" >
                                {{p.name}}
                            </router-link>
                        </h3>
                        <p class="prod-i-price">
                            <b>{{p.price | cash }}</b>
                        </p>
                    </li>
                </ul>
            </div>
        </div><!-- .fr-pop-tab-cont -->
    </div><!-- .fr-pop-wrap -->
</template>

<script>
    export default {
        data () {
            return {
                products: { }
            }
        },
        mounted() {
            let vm = this;
            $.ajax({
                url: vm.url_backend + 'products/popular',
                success: function (result) {
                    vm.products = result;
                    vm.$nextTick(function () {
                        vm.initialize_flexslider();
                    });
                }
            });
        },
        methods: {
            initialize_flexslider: function(){
                this.$nextTick(function () {
                    $(".fr-pop-tab").each(function () {
                        let fr_pop_this = $(this);
                        let flexslider_slider = { vars:{} };
                        $(this).flexslider({
                            animation: "slide",
                            controlNav: true,
                            slideshow: false,
                            itemWidth: 270,
                            itemMargin: 12,
                            minItems: getGridSize_pop(),
                            maxItems: getGridSize_pop(),
                            start: function(slider){
                                flexslider_slider = slider;
                                fr_pop_this.resize();
                            }
                        });
                        $(window).resize(function() {
                            let gridSize = getGridSize_pop();
                            if (typeof flexslider_slider.vars !== "undefined") {
                                flexslider_slider.vars.minItems = gridSize;
                                flexslider_slider.vars.maxItems = gridSize;
                            }
                        });
                    });
                });
            }
        }
    }
</script>
