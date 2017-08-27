<template>
    <div>
        <div v-for="c in categories" class="f-menu">
            <h3> {{c.n}} </h3>
            <ul class="nav nav-pills nav-stacked" v-for="son in c.s">
                <li>
                    <router-link :to="son.l"> {{son.n }}</router-link>
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