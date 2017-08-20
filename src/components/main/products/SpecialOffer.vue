<template>
    <div class="discounts-wrap">
        <h3 class="component-ttl"><span>Ofertas Especiales</span></h3>
        <div class="flexslider discounts-list">
            <ul class="slides">
                <li class="discounts-i" v-for="p in products">
                    <router-link :to="p.link" class="discounts-i-img">
                        <img :src="p.img_src" :alt="p.title">
                    </router-link>
                    <h3 class="discounts-i-ttl">
                        <router-link :to="p.link">{{p.title}}</router-link>
                    </h3>
                    <p class="discounts-i-price">
                        <b>{{p.now | money }}</b> <del> {{p.before | money }}</del>
                    </p>
                </li>
            </ul>
        </div>
        <div class="discounts-info">
            <p>Ofertas especiales por un tiempo limitado</p>
            <router-link to="productos"> Comprar ahora </router-link>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
               products: []
            }
        },
        created: function () {
            let vm = this;
            $.ajax({
                url: vm.url_backend + 'products/special-offer',
                success: function (result) {
                    vm.products = result;
                    vm.$nextTick(function () {
                        vm.call_flexslider();
                    });
                }
            });
        },
        methods: {
            call_flexslider () {
                if ($('.discounts-list').length > 0) {
                    $('.discounts-list').each(function () {
                        var flexslider_discounts = { vars:{} };
                        var discounts_this = $(this);
                        $(this).flexslider({
                            animation: "slide",
                            controlNav: false,
                            slideshow: false,
                            itemWidth: 288,
                            itemMargin: 30,
                            minItems: getGridSize_discounts(),
                            maxItems: getGridSize_discounts(),
                            start: function(slider){
                                flexslider_discounts = slider;
                                discounts_this.resize();
                            }
                        });
                        $(window).resize(function () {
                            var gridSize = getGridSize_discounts();
                            if (typeof flexslider_discounts.vars !== "undefined") {
                                flexslider_discounts.vars.minItems = gridSize;
                                flexslider_discounts.vars.maxItems = gridSize;
                            }
                        });

                    });
                }
            }
        }
    }
</script>