<template>
  <form @submit.prevent="create">
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
        <button type="submit">Create</button>
      </div>
    </div>
  </form>
</template>

<script setup>
  // import {reactive} from 'vue'
  import { useForm } from '@inertiajs/vue3';
  

  const form = useForm({
    Mobile_Legend: null,
    CoD: null,
    Wildrift: null,
  

  })

  // const create = () => {Inertia.post( '/listing', form)
  const create = () => form.post( '/games')


  const x = form.beds
</script>

<style scoped>
label {
  margin-right: 2em;
}

div {
  padding: 2px
}
</style>