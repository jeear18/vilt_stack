<template>
    <span>
        {{ game.Mobile_Legend }} {{ game.CoD }}, and {{ game.Wildrift }}
    </span>
</template>

<script setup>  
    defineProps({
        game: Object,
    })
</script>