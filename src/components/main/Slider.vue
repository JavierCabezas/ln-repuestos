<template>
    <div class="fr-slider-wrap">
        <div class="fr-slider">
            <ul class="slides">
                <li v-for="s in slides">
                    <img :src="url_server + s.img_src" :alt="s.title">
                    <div class="fr-slider-cont">
                        <h3> {{ s.title }} </h3>
                        <p> {{ s.subtitle }}</p>
                        <p class="fr-slider-more-wrap" v-if="s.has_button">
                            <router-link class="fr-slider-more" :to="s.button_url">Ver más</router-link>
                        </p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                slides: [ ],
            }
        },
        created: function () {
            let vm = this;
            $.ajax({
                url: vm.url_backend + 'site/slider',
                success: function (result) {
                    vm.slides = result;
                    vm.$nextTick(function () {
                        vm.call_flexslider();
                    });
                }
            });
        },
        methods: {
            call_flexslider () {
                $('.fr-slider').flexslider({
                    directionNav: false,
                });
            }
        }
    }
</script>