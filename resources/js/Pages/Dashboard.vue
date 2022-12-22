<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import DashboardLayout from '../Layouts/DashboardLayout.vue';
</script>

<template>
    <Head title="Dashboard" />


    <DashboardLayout>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div>
            </div>
        </div>

    </DashboardLayout>
</template>
