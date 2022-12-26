<script setup>
import { reactive } from 'vue'
import { Inertia } from '@inertiajs/inertia';
import TextInput from '@/Components/TextInput.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';


const emits = defineEmits(['show-modal'])

let product = reactive({
  title: '',
  image: '',
  description: '',
  price: '',
})

let submit = () => {
  Inertia.post('/dashboard/products/add', product)
}

</script>

<template>
  <div class="modal-backdrop transition-all duation-900"></div>
  <div class="modal-container">
    <div class="modal-content transition ease-in-out delay-500 w-96 lg:w-2/5">
      <header class="modal-header flex justify-between items-center">
        <!-- modal header content goes here -->
        <h3 class="text-lg leading-6 font-medium text-gray-900"> Create New Product</h3>
        <button @click="emits('show-modal')" class="modal-close btn btn-xs text-white btn-circle border-red-600 shadow bg-red-600 hover:bg-red-500">
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </header>

      <div class="modal-body">
        <!-- modal body content goes here -->
        <form @submit.prevent="submit">
          <InputLabel>Title</InputLabel>
          <TextInput class="mb-2 w-full"  v-model="product.title" required />
          <InputLabel>Image</InputLabel>
          <TextInput type="file" class="mb-2 w-full" @change="file => product.image = file"/>
            <InputLabel>Description</InputLabel>
          <TextArea type="textarea" class="textarea mb-2 w-full border-2 border-gray-300 focus:border-gray-400 focus:ring-gray-400" v-model="product.description"/>
          <InputLabel>Price</InputLabel>
          <TextInput type="number" class="mb-2 w-full" v-model="product.price" prepend="$"/>
          <div class="flex justify-end mt-2">
            <PrimaryButton class="ml-auto">
              Create product
            </PrimaryButton>
          </div>
        </form>
      </div>
    </div>
  </div>

</template>

<style>
.modal-content {
  @apply bg-white p-4 rounded-lg shadow-xl  mx-auto my-36 fixed top-0 left-0 right-0 bottom-0;
}

.modal-backdrop {
  @apply bg-black/50 absolute top-0 w-full h-full;
}
</style>