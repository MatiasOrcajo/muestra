<template>
    
    <div class="w-full mb-16 text-center navbar-secondary" :style="image">
        <div class="blue-filter relative flex items-center justify-center">
            <div class="text-left ml-5 block m-0 tarifario-title absolute" style="
                    left: 0;
                    width: 100%;">
                <router-link :to="{name: 'home'}">
                    <h1>TARIFARIO <span>2021</span></h1>
                </router-link>
                <!-- <h5>ARANCELES DE DISEÑO, ARGENTINA, 2021</h5> -->
            </div>
            <div class="absolute flex mb-0 right-0 space-x-6 mr-5 right-0 mt-0">
                <router-link :to="{name: 'home'}">
                    <h6 class="inicio" >INICIO</h6>
                </router-link>
                <router-link :to="{name: 'contacto'}">
                    <h6 :style="[this.slug == 'contacto' ? {'font-family':'Montserrat-Black'} : 'Montserrat-Medium']" class="contacto">CONSULTAS</h6>
                </router-link>
            </div>
        </div>
    </div>    

</template>

<script>
export default {
    data(){
        return{
            image: {backgroundImage: "url(./img/navbar-secundario-img.png)",
                    backgroundPosition: 'center',
                    height: '106px',
                    width:'100%',
                    backgroundSize: 'cover',
                    backgroundRepeat: 'no-repeat'},
            slug: this.$route.name
        }
    },
}
</script>