<template>
    <div v-for="game in games" :key="game.id">
        <Link :href="`/games/${game.id}`">
            <GameList :game="game"/>
            <!-- {{ listing.street }} {{ listing.street_nr }}, {{ listing.city }}, for ${{ listing.price }} -->
      </Link>
           
    </div>
</template>

<script setup>
     import { Link } from '@inertiajs/vue3';
     import GameList from '../../Components/GameList.vue';  
    defineProps({
        games: Array,
    })
</script>