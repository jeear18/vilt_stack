<template>
  <div>This is {{ AboutMessage }} Page</div>
  <br>
  <Link href="/">Back to Index Page</Link>
</template>
<script setup>
  import { Link } from '@inertiajs/vue3';
  defineProps({
    AboutMessage: String
  })
</script>