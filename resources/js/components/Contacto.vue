<template>
    <div class="flex contacto justify-center items-center flex-col">
        <h3 class="text-center">
            CONSULTAS
            <br>
            Y SUGERENCIAS
        </h3>
        <p class="text-center">
            Si tenés alguna duda o sugerencia sobre la información en el sitio ponete en contacto con nosotros.
        </p>


        <form class="formulario mt-12" action="" method="POST">
            <!-- <p v-if="errors.length">
                <ul>
                    <li :key="index" v-for="(error, index) in errors">{{error}}</li>
                </ul>
            </p> -->

            <div class="field">
                <div class="control">
                    <input class="input" type="text" placeholder="Nombre" v-model="name">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <input class="input" type="text" placeholder="Teléfono" v-model="phone">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <input class="input" type="email" placeholder="Mail" v-model="name">
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <textarea class="textarea" placeholder="Mensaje"></textarea>
                </div>
            </div>

            <button type="submit">
                ENVIAR
            </button>
        </form>
    </div>
</template>

<script>
export default {
    
}
</script>