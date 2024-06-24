<template>
    <div v-for="listing in listings">
            {{ listing.city }}
    </div>
</template>

<script setup>
    defineProps({
        listings: Array,
    })
</script>