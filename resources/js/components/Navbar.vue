<template>
    
    <div class="w-full text-center" :style="image">
        <div class="blue-filter relative">
            <div class="text-center tarifario-title absolute" style="left: 0; 
                    right: 0; 
                    margin-left: auto; 
                    margin-right: auto; 
                    width: 100%;
                    top: 0;
                    transform: translateY(50%);">
                <h1>TARIFARIO <span>2022</span></h1>
                <h5 class="px-5">ARANCELES DE DISEÑO, ARGENTINA, 2022</h5>
            </div>
            <div class="absolute flex top-0 space-x-6 mr-5 right-0 mt-5">
                <router-link :to="{name: 'home'}">
                    <h6 class="inicio">INICIO</h6>
                </router-link>
                <router-link :to="{name: 'contacto'}">
                    <h6 class="contacto">CONSULTAS</h6>
                </router-link>
            </div>
        </div>
    </div>    

</template>

<script>
export default {
    data(){
        return{
            image: {backgroundImage: "url(./img/navbar-img.png)",
                    backgroundPosition: 'center',
                    height: '400px',
                    width:'100%',
                    backgroundSize: 'cover',
                    backgroundRepeat: 'no-repeat'}
        }
    },
    created(){
        this.watchSize;
    },
    computed: {
        watchSize: function(){
            const x = window.innerWidth;
            if(x > 750 && x < 1600){
                this.image.height = '325px';
            }
        }
    }
}
</script>