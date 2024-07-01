<template>
  <form @submit.prevent="update">
    <div>
      <div>
        <label>Mobile_Legend</label>
        <input v-model="form.Mobile_Legend"  type="text" />
        <div v-if="form.errors.Mobile_Legend">
          {{ form.errors.Mobile_Legend }}
        </div>
      </div>

      <div>
        <label>CoD</label>
        <input v-model="form.CoD" type="text" />
        <div v-if="form.errors.CoD">
          {{ form.errors.CoD }}
        </div>
      </div>

      <div>
        <label>Wildrift</label>
        <input v-model.number="form.Wildrift" type="text" />
        <div v-if="form.errors.Wildrift">
          {{ form.errors.Wildrift }}
        </div>
      </div>


      <div>
        <button type="submit">Edit</button>
      </div>
    </div>
  </form>
</template>

<script setup>
  // import {reactive} from 'vue'
  import { useForm } from '@inertiajs/vue3';
  
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