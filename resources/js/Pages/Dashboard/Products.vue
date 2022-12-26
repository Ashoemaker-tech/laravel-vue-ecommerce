<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import ProductsTable from './Partials/ProductsTable.vue';
import PrimaryButton from '../../Components/PrimaryButton.vue'
import ProductModal from './Partials/ProductModal.vue';





</script>

<template>
     <DashboardLayout>
        <div class="flex items-center justify-between mb-3">
            <h1 class="text-3xl font-semibold">Products</h1>
            <label for="my-modal-3" class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-slate-900 to-zinc-400  rounded-md font-semibold text-sm text-white uppercase tracking-widest active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-slate-600 focus:ring-offset-2 cursor-pointer">Add New Product</label>
        </div>
        <ProductsTable />
     </DashboardLayout>   
     <ProductModal />
</template>