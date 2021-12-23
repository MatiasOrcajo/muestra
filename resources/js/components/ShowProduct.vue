<template>
    <div>
        <NavbarSecondary/>
        <div class="show-product p-0">
            <h3 class="text-center">ARANCELES</h3>
            <h1 class="text-center uppercase">{{product.title}}</h1>
            <span class="block text-center" v-if="product.subtitle">{{product.subtitle}}</span>

            <div class="mt-16 flex items-center justify-center flex-col md:flex-row">
                <div class="cliente-text mx-4 text-center">
                    CLIENTE A
                    <Texts v-bind:text="this.texts.cliente_a"></Texts>
                    <div class="price-box flex justify-center align-center flex-col">
                        ${{product.A}}
                    </div>
                </div>
                <div class="cliente-text mx-4 text-center">
                    CLIENTE B
                    <Texts v-bind:text="this.texts.cliente_b"></Texts>
                    <div class="price-box flex justify-center align-center flex-col">
                        ${{product.B}}
                    </div>
                </div>
                <div class="cliente-text mx-4 text-center">
                    CLIENTE C
                    <Texts v-bind:text="this.texts.cliente_c"></Texts>
                    <div class="price-box flex justify-center align-center flex-col">
                        ${{product.C}}
                    </div>
                </div>
            </div>
        </div>

        <div class="">

        </div>
    </div>
</template>

<script>
import Texts from './products/Texts.vue';
import NavbarSecondary from './NavbarSecondary.vue';

export default {
    components: {
      Texts,
      NavbarSecondary
    },
    data(){
        return{
            product: [],
            texts: [],
            slug: this.$route.params.slug,
        }
    },
    created(){
        this.loadProduct();
    },
    methods: {
        async loadProduct() {
            await this.axios.get(routes['product-showProduct']+'/'+this.slug)
                .then(res=>{
                    this.product = res.data.product;
                    this.texts = res.data.texts[0];
                })
                .catch(err=>{
                    console.log(err);
                })
        }
    }
}
</script>