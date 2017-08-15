<template>
    <div>
        <top-main></top-main>
        <router-view></router-view>
        <footer-main></footer-main>
    </div>
</template>

<script>
    import TopMain from './components/main/top/TopMain.vue'
    import FooterMain from './components/main/footer/FooterMain.vue'

    export default {
        name: 'app',
        components:{
            TopMain,
            FooterMain
        }
    }
</script>