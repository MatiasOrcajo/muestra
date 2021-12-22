<template>
    
    <div class="w-full" :style="image">
        <div class="blue-filter"></div>
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
    }
}
</script>