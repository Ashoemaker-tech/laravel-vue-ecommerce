<template>
    <div class="flex min-h-full bg-gray-200">
        <Sidebar :class="{'-ml-64' : !sidebarOpened}" />
        <div class="flex-1">
           <NavBar @toggle-sidebar="toggleSidebar" /> 
            <main class="p-6">
                <div class="rounded p-4 bg-white">
                    <router-view></router-view>
                </div>
            </main>
        </div>
    </div>
  </template>
  
<script setup>
    import { ref, onMounted, onUnmounted } from 'vue';
    import Sidebar from './Sidebar.vue';
    import NavBar from './NavBar.vue';

const sidebarOpened = ref(true)

    onMounted(() => {
        window.addEventListener('resize', handleSidebar)
    })
  
    onUnmounted(() => {
        window.removeEventListener('resize', handleSidebar)
    })

    function toggleSidebar() {
       sidebarOpened.value = !sidebarOpened.value; 
    }
    
    function handleSidebar() {
        sidebarOpened.value = window.innerWidth > 768
        
    }
</script>