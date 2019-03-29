<template>
    <ul class="b-crumbs">
        <li @click="update()">
            <router-link :to="{name: 'home'}">
                Inicio
            </router-link>
        </li>

        <li v-if="breadcrumbs.category !== null" @click="update()">
            <router-link :to="{name:'products_category', params: {'category': breadcrumbs.category.path }}">
                {{ breadcrumbs.category.name }}
            </router-link>
        </li>

        <li v-if="breadcrumbs.subcategory !== null" @click="update()">
            <router-link :to="{name:'products_subcategory', params: {'subcategory': breadcrumbs.subcategory.path }}">
                {{ breadcrumbs.subcategory.name }}
            </router-link>
        </li>

        <li v-if="active_page !== null"> {{ active_page }}  </li>
    </ul>
</template>

<script>
    import { EventBus } from './../../event-bus.js';

    export default {
        props: {
            active_page: {
                default: null
            }
        },
        data () {
            return {
                breadcrumbs: {
                    category: null,
                    subcategory: null
                }
            }
        },
        created: function () {
            this.get_breadcrumbs();
        },
        methods: {
            update: function() {
                let vm = this;
                this.get_breadcrumbs();
                EventBus.$on('updated_product_url', function() {
                    vm.get_breadcrumbs();
                });
            },
            get_breadcrumbs: function(){
                let vm = this;
                $.ajax({
                    url: vm.url_backend + 'site/breadcrumbs',
                    data: {
                        category: vm.$route.params.category,
                        subcategory: vm.$route.params.subcategory,
                        subsubcategory: vm.$route.params.subsubcategory,
                        name: vm.$route.params.name
                    },
                    success: function (result) {
                        vm.breadcrumbs = result;
                    }
                });
            }
        }
    }
</script>