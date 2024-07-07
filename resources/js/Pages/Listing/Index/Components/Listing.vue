<template>
    <!-- <Box  v-for="listing in listings" :key="listing.id"> -->
    <Box>
       <div> 
                    <!--OLD STYLE  -->
        <!-- <Link :href="`/listing/${listing.id}`">
            <ListingAdress :listing="listing"/> -->
            <!-- {{ listing.street }} {{ listing.street_nr }}, {{ listing.city }}, for ${{ listing.price }} -->
        <!-- </Link> -->
       
                    <!--USING ROUTE IN ZIGGY  -->
       <Link :href="route('listing.show', {listing: listing.id})">
            <div class=" flex items-center gap-1">
                <Price :price="listing.price" class="text-2xl font-bold"/>
                <div class=" text-xs text-gray-500">
                    <Price :price="monthlyPayment"/> pm
                </div>
            </div>
            <ListingSpace :listing = "listing" class="text-lg"/>
            <ListingAdress :listing="listing" class="text-gray-500"/>   
        </Link>
       <div>
            <Link :href="route('listing.edit', {listing: listing.id})" >
                Edit</Link>                
        </div>
        <div>
            <Link :href="route('listing.destroy', {listing: listing.id})" method="DELETE" as="button">
            Delete</Link>
        </div>
    </div>
    </Box>
</template>

<script setup>


    import { Link } from '@inertiajs/inertia-vue3'
    import ListingAdress from '@/Components/ListingAdress.vue'
    import Box from '@/Components/UI/Box.vue'
    import ListingSpace from '@/Components/UI/ListingSpace.vue'
    import Price from '@/Components/UI/Price.vue'
    import { useMonthlyPayment } from '@/Composables/useMonthlyPayment'

    defineProps({listing: Object})
//     const { monthlyPayment } = useMonthlyPayment(
//     props.listing.price, 2.5, 25,
// )
</script>



