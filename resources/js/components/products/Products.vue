<template>
    <div class="px-2 md:px-16">
        <div :key="category.id" class="my-10 cuadro-categoria " v-for="category in categories">
          <h1 class="uppercase category-title">{{category.title}}</h1>
            <div class="grid grid-cols-12 mt-3 barra-descripcion p-4 " style="box-shadow: 0 0 13px #00000029">
              <div class="col-span-6 md:col-span-5 bold-title">
                <h1 class="">Descripción</h1>
              </div>
              <div class="col-span-3 md:col-span-3 aclaracion-title">
                <h1 class="">Aclaración</h1>
              </div>
              <div class="col-span-1 md:col-span-1 bold-title">
                <div class="hidden md:block bold-title">
                  CLIENTE A
                </div>
                <div class="block md:hidden bold-title">
                  A
                </div>
              </div>
              <div class="col-span-1 md:col-span-1 bold-title">
                <div class="hidden md:block bold-title">
                  CLIENTE B
                </div>
                <div class="block md:hidden bold-title">
                  B
                </div>
              </div>
              <div class="col-span-1 md:col-span-1 bold-title">
                <div class="hidden md:block bold-title">
                  CLIENTE C
                </div>
                <div class="block md:hidden bold-title">
                  C
                </div>
              </div>
              <div class="hidden md:block col-span-2 md:col-span-1 consultar-title flex justify-center consultar-title">
              </div>
            </div>

            <div :key="product.id" v-for="(product, index) in category.products" class="p-4 grid grid-cols-12 cuadro-producto" v-bind:style= "index % 2 == 0 ?  'background: white' : 'background: #F5F5F5'" style="box-shadow: 0 0 13px #00000029">
              <div class="col-span-6 md:col-span-5">

                <router-link class="py-0 flex items-center" :to="{ name: 'showProduct', params: { slug: product.slug } }">
                  <h1 class="bold-title" style="color: #131F3E">{{product.title}}</h1>
                </router-link>
              </div>
              <div class="col-span-3 md:col-span-3 flex items-center align-center">
                <h1 class="aclaracion-title" style="color: #131F3E;" v-if="product.subtitle">{{product.subtitle}}</h1>
              </div>
              <div class="col-span-1 md:col-span-1 flex items-center justify-center bold-title" style="color: #131F3E">
                  {{product.A}}
              </div>
              <div class="col-span-1 md:col-span-1 flex items-center justify-center bold-title" style="color: #131F3E">
                  {{product.B}}
              </div>
              <div class="col-span-1 md:col-span-1 flex items-center justify-center bold-title" style="color: #131F3E">
                  {{product.C}}
              </div>
              <div class="hidden md:block col-span-2 md:col-span-1 flex items-center justify-center">
                  <a href="" class="consultar-title" style="text-decoration: underline; color: #131F3E">Consultar</a>
              </div>
            </div>
          </div>
        
      </div>
</template>

<script>
export default {
    name: 'Products',
    data(){
        return{
            categories:[]
        }
    },
    created(){
        this.loadPage();
    },
    methods:{
        async loadPage(){
            await this.axios.get(routes['product-index'])
                .then(res=>{
                    this.categories = res.data;
                })
                .catch(err=>{
                    console.log(err);
                })
        }
    }
}
</script>