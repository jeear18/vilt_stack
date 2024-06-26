<template>
    <div v-for="listing in listings" :key="listing.id">
        <Link :href="`/listing/${listing.id}`">
            <Games :listing="listing"/>
            <!-- {{ listing.street }} {{ listing.street_nr }}, {{ listing.city }}, for ${{ listing.price }} -->
        </Link>
           
    </div>
</template>

<script setup>
     import { Link } from '@inertiajs/vue3';
    import ListingAdress from '../../Components/Games.vue';
    defineProps({
        listings: Array,
    })
</script>