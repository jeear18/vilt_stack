<template>
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">Games Page</Link>
        </div>
        <div class="text-xl text-indigo-300 font-bold text-center">
          <Link :href="route('listing.index')">Comids</Link>
        </div>
        <div >
          <Link :href="route('listing.create')" class="btn-primary">+ New Game</Link>
        </div>
      </nav>
    </div>
    </header>

    <main class="container mx-auto px-4">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
      <!-- {{ page.props.flash.success }}      -->
        {{ flashSuccess }}
        
    </div>
    <slot></slot>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3">
        <Box  v-for="game in games" :key="game.id">
            <Link :href="route('games.show', {game: game.id})">
              <HeroName :game="game"  class="text-2xl font-bold"/>
            </Link>
        </Box>
    </div>
  </main>

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
     import Box from '../../Components/UI/Box.vue';
     import HeroName from '../../Game/Heroname.vue'


    defineProps({
        games: Array,
    })
</script>