<template>
    <ul class="b-crumbs">
        <li> <router-link to="inicio"> Inicio </router-link> </li>
        <router-link v-if="category !== null" :to="{name:'products_category', params: {'category': category }}"> {{category | beautify }}</router-link>
        <li v-if="category === null"> Productos </li>
    </ul>
</template>

<script>
    export default {
        /*Crumbs should be in the format [
         { 'title': String, 'path: 'string' },
         {  'title': String, 'path: 'string' },
         { 'title': String, 'path: 'string' },
         ...
         { 'title': String, 'path: null }
         ]
         */
        props: ["category", "subcategory", "subsubcategory"],
        filters: {
            beautify: function (value) {
                if (!value) return '';
                value = value.toString();
                return value.charAt(0).toUpperCase() + value.slice(1);
            }
        }
    }
</script>