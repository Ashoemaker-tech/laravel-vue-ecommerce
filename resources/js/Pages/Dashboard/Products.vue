<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import ProductsTable from './Partials/ProductsTable.vue';
import PrimaryButton from '../../Components/PrimaryButton.vue'
import { computed } from 'vue'
import { usePage } from '@inertiajs/inertia-vue3';

const buttonClick = () => {
    console.log('clicked');
}


</script>

<template>
     <DashboardLayout>
        <div class="flex items-center justify-between mb-3">
            <h1 class="text-3xl font-semibold">Products</h1>
            <PrimaryButton @click="buttonClick">
               Add New Product 
            </PrimaryButton>
        </div>
        <ProductsTable />
     </DashboardLayout>   
</template>