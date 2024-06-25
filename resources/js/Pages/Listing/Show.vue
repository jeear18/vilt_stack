<template>
    <div >
        <ListingAdress :listing="listing"/>       
            <!-- {{ listing.street }} {{ listing.street_nr }}, {{ listing.city }}, for ${{ listing.price }}      -->
         
    </div>
</template>

<script setup>  
    import ListingAdress from '../../Components/ListingAdress.vue';
    defineProps({
        listing: Object,
    })
</script>