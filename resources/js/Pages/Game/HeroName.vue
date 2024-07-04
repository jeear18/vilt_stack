<template>
    <span>
        {{ game.Mobile_Legend	 }} {{ game.CoD }}, {{ game.Wildrift }}
    </span>
</template>

<script setup>  
    defineProps({
        game: Object,
    })
</script>