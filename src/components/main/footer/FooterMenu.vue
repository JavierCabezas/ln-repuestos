<template>
    <div>
        <h3>
            <span class="fa fa-shopping-bag"></span>
            <router-link :to="{name: 'products'}"></router-link> Nuestros productos:
        </h3>
        <br>

        <div v-for="c in categories" class="f-menu">
            <h4> <router-link :to="{name:'products_category', params: {category: c.id}}"> {{c.n}} </router-link></h4>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['categories']
    }
</script>