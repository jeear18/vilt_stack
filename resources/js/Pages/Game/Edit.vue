<template>
   <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
    <div class="container mx-auto">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('games.index')">Games Page</Link>
        </div>
        <div class="text-xl text-indigo-300 font-bold text-center">
          <Link :href="route('games.index')">Comidsss</Link>
        </div>
        <div >
          <Link :href="route('games.create')" class="btn-primary">+ New Game</Link>
        </div>
      </nav>
    </div>
    </header>

    <main class="container mx-auto p-4">
      <form @submit.prevent="update">
    <div class="grid grid-cols-6 gap-4">
      <div class="col-span-2">
        <label class="label">Mobile_Legend</label>
        <input v-model="form.Mobile_Legend"  type="text" class="input" />
        <div v-if="form.errors.Mobile_Legend" class="input-error">
          {{ form.errors.Mobile_Legend }}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">CoD</label>
        <input v-model="form.CoD" type="text" class="input" />
        <div v-if="form.errors.CoD" class="input-error">
          {{ form.errors.CoD }}
        </div>
      </div>

      <div class="col-span-2">
        <label class="label">Wildrift</label>
        <input v-model.number="form.Wildrift" type="text" class="input" />
        <div v-if="form.errors.Wildrift" class="input-error">
          {{ form.errors.Wildrift }}
        </div>
      </div>


      <div>
        <button type="submit" class="btn-primary">Edit</button>
      </div>
    </div>
  </form>
    </main>
  
</template>

<script setup>
  // import {reactive} from 'vue'
  import { useForm } from '@inertiajs/vue3';
  import { Link, usePage } from '@inertiajs/vue3';
  
 const props = defineProps({
    game: Object,
  })

  const form = useForm({
    Mobile_Legend: props.game.Mobile_Legend,
    CoD: props.game.CoD,
    Wildrift: props.game.Wildrift,
    
    

  })

  // const create = () => {Inertia.post( '/listing', form)

  //------- HAS ERROR
  // const update = () => form.post(url: `/listing/${props.id}`)
  //-------- NO ERROR
  const update = () => form.put(`/games/${props.game.id}`)


  const x = form.Mobile_Legend
</script>

<style scoped>
label {
  margin-right: 2em;
}

div {
  padding: 2px
}
</style>