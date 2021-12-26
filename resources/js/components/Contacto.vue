<template>
    <div>

        <NavbarSecondary/>

        <div class="flex contacto justify-center items-center flex-col">
            <h3 class="text-center hide-on-click">
                CONSULTAS
                <br>
                Y SUGERENCIAS
            </h3>
            <h3 class="text-center hidden show-on-click">
                MUCHAS GRACIAS
            </h3>
            <p class="text-center block mb-0 mt-5 hide-on-click">
                Si tenés alguna duda o sugerencia sobre la información <br>en el sitio ponete en contacto con nosotros.
            </p>
            <p class="text-center block mb-0 mt-5 hidden show-on-click">
                Nos pondremos en contacto a la brevedad.
            </p>
            


            <form @submit.prevent="send" class="formulario mt-12 hide-on-click">
                <!-- <p v-if="errors.length">
                    <ul>
                        <li :key="index" v-for="(error, index) in errors">{{error}}</li>
                    </ul>
                </p> -->

                <div class="field">
                    <div class="control">
                        <input class="input" type="text" placeholder="Nombre" v-model="contact.name">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input" type="text" placeholder="Teléfono" v-model="contact.phone">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <input class="input" type="email" placeholder="Mail" v-model="contact.email">
                    </div>
                </div>

                <div class="field">
                    <div class="control">
                        <textarea class="textarea" placeholder="Mensaje" v-model="contact.message"></textarea>
                    </div>
                </div>

                <button @click="thankYou" type="submit" class="my-5">
                    ENVIAR
                </button>
            </form>
        </div>
    </div>
</template>

<script>

import NavbarSecondary from './NavbarSecondary.vue';
export default {
    components: {
        NavbarSecondary,
    },
    data(){
        return{
            contact: {
                name:"",
                phone:"",
                email:"",
                message:""
            },
        }
    },
    methods:{
        async send(){
            await this.axios.post('/api/contact', this.contact)
                .then(res=>{
                    // console.log(res);
                })
                .catch(err=>{
                    console.log(err);
                })
        },
        thankYou(){
            let elementsToHide = document.querySelectorAll('.hide-on-click');
            let elementsToShow = document.querySelectorAll('.show-on-click');

            elementsToHide.forEach(el => {
                el.classList.replace('hide-on-click', 'hidden');
            })
            elementsToShow.forEach(el => {
                el.classList.replace('hidden', 'show-on-click');
            })
        }

    }
}
</script>