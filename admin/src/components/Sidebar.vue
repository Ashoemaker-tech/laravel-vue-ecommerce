<template>
 <!-- Sidebar -->
  <div class="bg-indigo-700 w-64 text-gray-300 py-4 px-2">
     <router-link to="dashboard" class="flex items-center transition-colors py-2 px-3 rounded hover:bg-black/30 mb-2">
      <span class="mr-2">
         <HomeIcon class="w-6"/>
      </span>
      <span >
         Dashboard
      </span>
     </router-link> 
      <router-link to="dashboard" class="flex items-center transition-colors py-2 px-3 rounded hover:bg-black/30 mb-2">
      <span class="mr-2">
         <ViewColumnsIcon class="w-6"/>
      </span>
      <span >
         Products
      </span>
     </router-link> 
      <router-link to="dashboard" class="flex items-center transition-colors py-2 px-3 rounded hover:bg-black/30 mb-2">
      <span class="mr-2">
         <UserIcon class="w-6"/>
      </span>
      <span >
         Users
      </span>
     </router-link> 
      <router-link to="dashboard" class="flex items-center transition-colors py-2 px-3 rounded hover:bg-black/30 mb-2">
      <span class="mr-2">
         <ChartBarIcon class="w-6"/>
      </span>
      <span >
         Reports
      </span>
     </router-link> 

  </div>     
</template>

<script setup>
   import { HomeIcon, UserIcon, ViewColumnsIcon, ChartBarIcon } from '@heroicons/vue/20/solid';
</script>
