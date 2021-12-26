<template>
    <div>
        <Navbar/>
        <h2 class="text-center categories-h2">CATEGORIA</h2>
        <div class="grid grid-cols-12 padding-x-responsive">
            <router-link class="uppercase category-box m-2 p-2 col-span-12 md:col-span-3" :to="{name: 'showCategory', params: {slug: category.slug}}" :key="category.id" v-for="category in menuCategories">
                  {{category.title}}
            </router-link>
        </div>
        <Products/>
    </div>
</template>

<script>

import Products from '../components/products/Products.vue';
import Navbar from '../components/Navbar.vue'

export default {
    components: {
      Products,
      Navbar
    },
    data(){
        return{
            menuCategories: []
        }
    },
    created(){
        this.getCategories();
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