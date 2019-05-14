<template>
    <div class="f-block-wrap">
        <div class="f-block" @click="go_up()">
            <router-link :to="{name: block.name}" class="f-block-btn">
                <div class="iframe-img">
                    <img :src="block.img_src" :alt="block.section_name">
                </div>
                <div class="overlay-icon">
                    <i class="fa" :class="'fa-'+block.icon_name"></i>
                </div>
            </router-link>
            <router-link tag="a" :to="{name: block.name}" class="f-info-ttl">
                {{ block.section_name }}
            </router-link>
            <p>{{block.section_subtext}}</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["block"],
        methods: {
            go_up: function() {
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            }
        }
    }
</script>