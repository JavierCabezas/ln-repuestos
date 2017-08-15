<template>
    <div>
        <header class="header">
            <top-bar></top-bar>
            <logo></logo>
            <top-menu></top-menu>
        </header>
    </div>
</template>

<script>
    import TopBar from './TopBar.vue'
    import Logo from './Logo.vue'
    import TopMenu from './TopMenu.vue'

    export default {
        name: 'app',
        components:{
            TopBar,
            Logo,
            TopMenu
        }
    }
</script>