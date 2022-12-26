<script setup>
import { Head, usePage } from '@inertiajs/inertia-vue3';
import { computed } from 'vue'
import SiteLayout from '../Layouts/SiteLayout.vue'
import ProductCard from '@/Components/ProductCard.vue';

defineProps({
  products: computed(() => usePage().props.products)
})

</script>

<template>
    <Head title="Welcome" />

    <SiteLayout>
        <div class="container mx-auto mt-20 px-4">
<div class="bg-gray-800 bg-center bg-cover rounded-lg shadow-lg"
style="background-image: url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/hero/phone-mockup.png');">
 <div class="max-w-screen-xl mx-auto py-12 px-4">
    <div class="text-left">
      <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10">
        Hero banner title
      </h2>
      <p class="mt-3 max-w-md text-lg leading-7 text-gray-300">
        Hero banner description
      </p>
      <div class="mt-8">
        <div class="inline-flex rounded-md shadow">
          <a href="#" class="inline-flex items-center justify-center px-5 py-3  text-base leading-6 font-medium rounded-md text-gray-800  bg-gradient-to-r from-slate-200 to-zinc-500  focus:outline-none hover:to-zinc-600 hover:from-slate-300 ">
            Shop Now
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<section class="text-gray-800 body-font">
  <div class="container px-5 py-24 mx-auto ">
    <div  class="grid grid-cols-12 gap-8">
    <div v-for="product in products" class="col-span-12 md:col-span-6 lg:col-span-4">
      <ProductCard :image="product.image" :title="product.title" :price="product.price" />
    </div>
    </div>
  </div>
</section>
    </SiteLayout> 
</template>
