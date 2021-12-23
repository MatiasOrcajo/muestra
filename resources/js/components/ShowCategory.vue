<template>
    <div>
        <NavbarSecondary/>
        <h2 class="text-center categories-h2">CATEGORIA</h2>
        <div class="grid grid-cols-12 px-16">
            <router-link class="uppercase category-box m-2 p-2 md:col-span-3" :to="{name: 'showCategory', params: {slug: category.slug}}"
            :class="category.slug == $route.params.slug ? 'category-box-active' : ''" :key="category.id" v-for="category in menuCategories">
                  {{category.title}}
            </router-link>
        </div>
        <Category/>
    </div>
</template>

<script>

import Category from '../components/categories/Category.vue';
import NavbarSecondary from './NavbarSecondary.vue';

export default {
    components: {
      Category,
      NavbarSecondary
    },
    data(){
        return{
            menuCategories: [],
            slug: this.$route.params.slug,
            style: {'background-color': '#131F3E;', 'color': 'white'}
        }
    },
    watch:{
      $route(){
        this.slug = this.$route.params.slug;
      }
    },
    computed:{
      getSlug: function(){
        return this.slug;
      }
    },
    created(){
        this.getCategories();
        this.getSlug;
    },
    methods:{
        async getCategories(){
            await this.axios.get(routes['product-getCategories'])
                .then(res=>{
                    this.menuCategories = res.data;
                })
                .catch(err=>{
                    console.log(err);
                })
        }
    }
}
</script>