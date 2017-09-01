<template>
    <div>
        <div v-for="c in categories" class="f-menu">
            <router-link :to="{name:'products_category', params: {category: c.id}}"> {{c.n}} </router-link>
            <ul class="nav nav-pills nav-stacked" v-for="son in c.s">
                <li>
                    <router-link :to="{name:'products_subcategory', params: {category: c.id, subcategory: son.id }}"> {{son.n }}</router-link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['categories']
    }
</script>