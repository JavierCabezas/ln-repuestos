<template>
    <ul class="b-crumbs">
        <li> <router-link to="inicio"> Inicio </router-link> </li>
        <li v-for="c in crumbs">
            <router-link v-if="c.path !== null" :to="c.path"> {{c.title}}</router-link>
            <span v-if="c.path === null">{{c.title}}</span>
        </li>
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
        props: ["crumbs"]
    }
</script>