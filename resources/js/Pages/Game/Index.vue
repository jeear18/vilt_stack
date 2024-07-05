<template>
    <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('games.index')">Games Page</Link>
        </div>
        <div class="text-xl text-indigo-300 font-bold text-center">
          <Link :href="route('games.index')">Comids</Link>
        </div>
        <div >
          <Link :href="route('games.create')" class="btn-primary">+ New Game</Link>
        </div>
      </nav>
    </div>
    </header>

    <main class="container mx-auto px-4 mt-5">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
        {{ flashSuccess }}
        
    </div>
    <slot></slot>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-3">
        <Box  v-for="game in games" :key="game.id">
            <Link :href="route('games.show', {game: game.id})">
              <HeroName :game="game"  class="text-2xl font-bold"/>
            </Link>
            <div class="col-span-6 mt-3 ">
              <Link :href="`/games/${game.id}/edit`"  as="button"  class="btn-primary w-full bg-yellow-600 hover:bg-yellow-500">
                Edit </Link>
            
            </div>
            <div class="col-span-6 mt-3" >
                <Link :href="`/games/${game.id}`" method="DELETE"   as="button" class="btn-primary w-full bg-red-600 hover:bg-red-400">Delete </Link>            
            </div>
        </Box>
    </div>
  </main>

</template>

<script setup>
    import {computed} from 'vue'
     import { Link, usePage } from '@inertiajs/vue3';
     import GameList from '../../Components/GameList.vue';  
     import Box from '../../Components/UI/Box.vue';
     import HeroName from '../../Pages/Game/HeroName.vue'
     import { route } from '../../../../vendor/tightenco/ziggy/src/js';


    defineProps({
        games: Array,
    })

    const page= usePage()
    const flashSuccess = computed(
    () => page.props.flash.success,)
</script>