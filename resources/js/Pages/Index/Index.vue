<!-- <template>Count for {{ counter }}</template>

<script setup>
import { ref } from "vue";

const counter = ref(0);
setInterval(() => counter.value++,  1000);
</script> -->

<template>
  
  
  <div>Index Page</div>
  <Link href="/show">Show Page</Link>
  <br>
  <Link href="/contact">Show Contact</Link>
  <br>
  <Link href="/about">Show About</Link>
  <div>The message is {{ message }}</div>


</template>

<script setup>
import { Link } from '@inertiajs/vue3';
defineProps({
  message: String
}
)
</script>

<!-- <script>
import MainLayout from '../../Layouts/MainLayout.vue';

export default {
  
// Using shorthand syntax...
layout: MainLayout
}
</script> -->