<template>
    <div class="dropdown is-hoverable">
        <div class="dropdown-trigger">
            <button class="button" aria-haspopup="true" aria-controls="dropdown-menu1">
            ?
            </button>
        </div>
        <div class="dropdown-menu texto" id="dropdown-menu4" role="menu">
            <div class="dropdown-content">
                <div class="dropdown-item">
                    <p>{{text}}</p>
                </div>
            </div>
        </div>
    </div> 
</template>

<script>
export default {
    props:['text']
}
</script>