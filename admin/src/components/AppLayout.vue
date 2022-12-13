<template>
    <div class="flex min-h-full bg-gray-200">
        <Sidebar />
        <div class="flex-1">
           <DashHeader /> 
            <main class="p-6">
                <div class="rounded p-4 bg-white">
                    <router-view></router-view>
                </div>
            </main>
        </div>
    </div>
  </template>
  
<script setup>
    import Sidebar from './Sidebar.vue';
    import DashHeader from './DashHeader.vue';
</script>