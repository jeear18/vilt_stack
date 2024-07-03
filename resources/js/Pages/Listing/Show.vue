<template>
    <div  class="grid grid-cols-12 gap-4">
        <Box class="col-span-7 flex items-center w-full">
           <div class="w-full text-center font-medium text-gray-500">No images</div> 
        </Box>
        <Box class=" col-span-5 ">
            <Price :price="listing.price" class="text-2xl font-bold"/>
            <ListingSpace :listing = "listing" class="text-lg"/>
            <ListingAdress :listing="listing" class="text-gray-500"/>
        </Box>
        
        <!-- <ListingAdress :listing="listing"/>        -->
            <!-- {{ listing.street }} {{ listing.street_nr }}, {{ listing.city }}, for ${{ listing.price }}      -->         
    </div>
</template>

<script setup>  
    import ListingAdress from '../../Components/ListingAdress.vue';
    import ListingSpace from '../../Components/UI/ListingSpace.vue';
    import Price from '../../Components/UI/Price.vue';
    import Box from '../../Components/UI/Box.vue';
    
    defineProps({
        listing: Object,
    })
</script>