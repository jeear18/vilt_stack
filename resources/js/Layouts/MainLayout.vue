<template>

  <header class="border-b border-gray-200 dark:border-gray-700 bg-white dark:bg-gray-900 w-full">
    <div class="container mx-auto w-full">
      <nav class="p-4 flex items-center justify-between">
        <div class="text-lg font-medium">
          <Link :href="route('listing.index')">Listings Page</Link>
        </div>
        <div class="text-xl text-indigo-300 font-bold text-center">
          <Link :href="route('listing.index')">Comids</Link>
        </div>
        <div v-if="user" class="flex items-center gap-4">
          <div class="text-sm text-gray-500">{{ user.name }}</div>
          <Link :href="route('listing.create')" class="btn-primary">+ New Listing</Link>
          <div>
            <Link :href="route('logout')" method="delete" as="button">Logout</Link>
          </div>
        </div>
        <div v-else class="flex items-center gap-2">
          <Link :href="route('user-account.create')">Register</Link>
          <Link :href="route('login')">Sign-In</Link>
        </div>
      </nav>
    </div>
  </header>

  <main class="container mx-auto p-4">
    <div v-if="flashSuccess" class="mb-4 border rounded-md shadow-sm border-green-200 dark:border-green-800 bg-green-50 dark:bg-green-900 p-2">
      <!-- {{ page.props.flash.success }}      -->
        {{ flashSuccess }}
        
    </div>
    <slot></slot>
  </main>
 
  <!-- <div>The time is {{ timer }}</div> -->

  
</template>
<script setup>
  import {computed} from 'vue'
  import { Link, usePage } from '@inertiajs/vue3';
// import { route } from '../../../vendor/tightenco/ziggy/src/js';
import { route } from '../../../vendor/tightenco/ziggy/src/js';

//page/.props.value.flash.success
  const page= usePage() 
  const flashSuccess = computed(
    () => page.props.flash.success,)

    const user = computed(
  () => page.props.user,
)

  
  // import {ref} from 'vue';

  // const timer = ref(0);
  //  setInterval(() => timer.value++, 1000 );
 

</script>
