<template>
    <div class="f-block-wrap">
        <div class="f-block">
            <router-link :to="block.path" class="f-block-btn">
                <div class="iframe-img">
                    <img :src="block.img_src" :alt="block.section_name">
                </div>
                <div class="overlay-icon">
                    <i class="fa" :class="'fa-'+block.icon_name"></i>
                </div>
            </router-link>
            <p class="f-info-ttl">{{block.section_name}}</p>
            <p>{{block.section_subtext}}</p>
        </div>
    </div>
</template>

<script>
    export default {
        props: ["block"]
    }
</script>