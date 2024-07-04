<template>
    <div>
      <span class="font-bold">{{ game.Mobile_Legend }}</span> bds <span class="text-gray-400">| </span>  
      <span class="font-bold">{{ listing.baths }}</span> ba 
      <span class="text-gray-400">| </span>
      <span class="font-bold">{{ listing.area }}</span> m²
    </div>

    <main class="container mx-auto p-4">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
      <!-- {{ page.props.flash.success }}      -->
        {{ flashSuccess }}
        
    </div>
    <slot></slot>
  </main>
  </template>
  
  <script setup>
  defineProps({
    listing: Object,
  })
  </script>