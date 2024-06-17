
<template>
  <div>This is {{ ContactMessage }} Page</div>
  <br>
  <Link href="/">Back to Index Page</Link>
</template>
<script setup>
  import { Link } from '@inertiajs/vue3';
  defineProps({
    ContactMessage: String
  })
</script>