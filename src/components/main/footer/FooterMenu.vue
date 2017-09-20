<template>
    <div>
        <div v-for="c in categories" class="f-menu">
            <h4><router-link :to="{name:'products_category', params: {category: c.id}}"> {{c.n}} </router-link></h4>
            <ul class="nav nav-pills nav-stacked" v-for="son in c.s">
                <li>
                    <router-link :to="{name:'products_subcategory', params: { subcategory: son.id }}"> {{son.n }}</router-link>
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