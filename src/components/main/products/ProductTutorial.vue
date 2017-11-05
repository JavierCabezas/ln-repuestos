<template>
    <div class="videoWrapper" v-if="is_tutorial_video">
        <iframe width="560" height="349" :src="'http://www.youtube.com/embed/'+tutorial_text+'?rel=0&hd=1'" frameborder="0" allowfullscreen></iframe>
    </div>
    <p v-else> {{tutorial_text}}</p>
</template>

<script>
    export default {
        props: {
            'tutorial_text': {
                default: ''
            },
            'is_tutorial_video': {
                default: false
            }
        }
    }
</script>

<style scoped>
    .videoWrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        padding-top: 25px;
        height: 0;
    }
    .videoWrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
</style>