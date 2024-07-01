<template>
     <div>
            <Link :href="'games/create'"  as="button">
            Create Games </Link>
    </div>
    <div v-for="game in games" :key="game.id">
        <Link :href="`/games/${game.id}`">
            <GameList :game="game"/>         
        </Link>
        <div>
            <Link :href="`/games/${game.id}/edit`"  as="button">
           Edit </Link>
        </div>
        <div>
            <Link :href="`/games/${game.id}`" method="DELETE"  as="button">
           Delete </Link>
        </div>
           
    </div>
</template>

<script setup>
     import { Link } from '@inertiajs/vue3';
     import GameList from '../../Components/GameList.vue';  
    defineProps({
        games: Array,
    })
</script>