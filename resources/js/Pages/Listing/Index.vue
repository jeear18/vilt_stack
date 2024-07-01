<template>
    <div v-for="listing in listings" :key="listing.id">
       <div> 
                    <!--OLD STYLE  -->
        <!-- <Link :href="`/listing/${listing.id}`">
            <ListingAdress :listing="listing"/> -->
            <!-- {{ listing.street }} {{ listing.street_nr }}, {{ listing.city }}, for ${{ listing.price }} -->
        <!-- </Link> -->
       </div>
                    <!--USING ROUTE IN ZIGGY  -->
       <Link :href="route('listing.show', {listing: listing.id})">
            <ListingAdress :listing="listing"/>
        </Link>
       <div>
            <Link :href="route('listing.edit', {listing: listing.id})">
            Edit</Link>
        </div>
        <div>
            <Link :href="route('listing.destroy', {listing: listing.id})" method="DELETE" as="button">
            Delete</Link>
        </div>
           
    </div>
</template>

<script setup>
     import { Link } from '@inertiajs/vue3';
    import ListingAdress from '../../Components/ListingAdress.vue';
    defineProps({
        listings: Array,
    })
</script>