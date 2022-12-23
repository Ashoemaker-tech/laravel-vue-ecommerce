<script setup>
import Sidebar from '../Layouts/Partials/Sidebar.vue';
import Header from '../Layouts/Partials/Header.vue';
import { Link } from '@inertiajs/inertia-vue3';
import { ref, onMounted, onUnmounted } from 'vue'

const sidebarOpen = ref(false);

function updateSidebarState() {
  sidebarOpen.value = window.outerWidth > 768;
}

function toggleSidebar() {
  sidebarOpen.value = !sidebarOpen.value
}

onMounted(() => {
  updateSidebarState();
  window.addEventListener('resize', updateSidebarState);
})

onUnmounted(() => {
  window.removeEventListener('resize', updateSidebarState)
})
</script>

<template>
    <div class="flex h-screen bg-gray-200 font-roboto">
    <Sidebar :class="{'-ml-64': !sidebarOpen}" />

    <div class="flex-1 flex flex-col overflow-hidden">
      <Header @toggle-sidebar="toggleSidebar" />

      <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
        <div class="container mx-auto px-6 py-8">
          <slot />
        </div>
      </main>
    </div>
  </div>
</template>
