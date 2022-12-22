<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Sidebar from '../Layouts/Partials/Sidebar.vue';
import Header from '../Layouts/Partials/Header.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="flex h-screen bg-gray-200 font-roboto">
    <Sidebar />

    <div class="flex-1 flex flex-col overflow-hidden">
      <Header />

      <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
          <slot />
        </div>
      </main>
    </div>
  </div>
</template>
