<template>
    <div class="padding-x-responsive">
        <div :key="category.id" class="my-10 cuadro-categoria">
            <h1 class="uppercase category-title">{{category.title}}</h1>
              <div :key="subcategory.id" v-for="subcategory in subcategories">
                <div v-if="subcategory.category_id == category.id" >
                  <span class="subcategory-title my-5 block">{{subcategory.title}}</span>
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
              </div>
              <div :key="key" v-for="(value, key) in subcategory.products">
                <div class="subcategory" v-bind:style= "key % 2 == 0 ?  'background: white' : 'background: #F5F5F5'" style="box-shadow: 0 0 13px #00000029" v-if="subcategory.category_id == category.id">
                  <div class="p-4 grid grid-cols-12 cuadro-producto" v-bind:style= "key % 2 == 0 ?  'background: white' : 'background: #F5F5F5'" style="box-shadow: 0 0 13px #00000029">
                    <div class="col-span-6 md:col-span-5">
                      <router-link class="py-0 flex items-center" :to="{ name: 'showProduct', params: { slug: value.slug } }">
                        <h1 class="bold-title" style="color: #131F3E">{{value.title}}</h1>
                      </router-link>
                    </div>
                    <div class="col-span-3 md:col-span-3 flex items-center align-center">
                      <h1 class="aclaracion-title" style="color: #131F3E;" v-if="value.subtitle">{{value.subtitle}}</h1>
                    </div>
                    <div class="col-span-1 md:col-span-1 flex items-center justify-center bold-title" style="color: #131F3E">
                        ${{value.A}}
                    </div>
                    <div class="col-span-1 md:col-span-1 flex items-center justify-center bold-title" style="color: #131F3E">
                        ${{value.B}}
                    </div>
                    <div class="col-span-1 md:col-span-1 flex items-center justify-center bold-title" style="color: #131F3E">
                        ${{value.C}}
                    </div>
                    <div class="hidden md:block col-span-2 md:col-span-1 flex items-center justify-center">
                        <router-link :to="{name: 'contacto'}" class="consultar-title" style="text-decoration: underline; color: #131F3E">
                          Consultar
                        </router-link>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data(){
        return{
            slug: this.$route.params.slug,
            category: [],
            subcategories: []
        }
    },
    watch:{
        $route() {
            this.slug = this.$route.params.slug;
            this.loadCategory();
        }
    },
    methods:{
        async loadCategory(){
            await this.axios.get(routes['category-showCategory']+'/'+this.slug)
                .then(res=>{
                    this.category = res.data.category;
                    this.subcategories = res.data.subcategories;
                })
                .catch(err=>{
                    console.log(err);
                })
        }       
    },
    computed:{
      getNodes: function(){
        let nodes = document.querySelectorAll('div');
        console.log(nodes);
      }
    },
    created(){
        this.loadCategory();
        this.getNodes;
    },
    
}
</script>