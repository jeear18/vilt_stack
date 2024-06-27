<template>
    <span>
        {{ games.Mobile_Legend }} {{ games.CoD }}, {{ games.Wildrift }}
    </span>
</template>

<script setup>  
    defineProps({
        games: Object,
    })
</script>