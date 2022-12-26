<script setup>
import DashboardLayout from '@/Layouts/DashboardLayout.vue';
import ProductsTable from './Partials/ProductsTable.vue';
import PrimaryButton from '../../Components/PrimaryButton.vue'
import ProductModal from './Partials/ProductModal.vue';
import { ref } from 'vue'

const showModal = ref(false)

function showProductModal() {
    showModal.value = !showModal.value;
}

</script>

<template>
     <DashboardLayout>
        <div class="flex items-center justify-between mb-3">
            <h1 class="text-3xl font-semibold">Products</h1>
            <PrimaryButton @click="showProductModal">
                Add new product
            </PrimaryButton>
        </div>
        <ProductsTable />
     </DashboardLayout>   
     <ProductModal v-if="showModal" @show-modal="showProductModal" />
</template>