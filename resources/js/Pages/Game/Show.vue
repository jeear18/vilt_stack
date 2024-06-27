<template>
    <div >
        <GameList :game="game"/>       
            <!-- {{ listing.street }} {{ listing.street_nr }}, {{ listing.city }}, for ${{ listing.price }}      -->
         
    </div>
</template>

<script setup>  
    import GameList from '../../Components/GameList.vue';
    import Game from '../../Components/GameList.vue';
    defineProps({
        games: Object,
    })
</script>