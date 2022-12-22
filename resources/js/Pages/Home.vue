<script setup>
import { Head } from '@inertiajs/inertia-vue3';
import SiteLayout from '../Layouts/SiteLayout.vue'

defineProps({
 
});
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
    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center w-full gap-y-10">
      <div class="p-4 w-full bg-gray-100 rounded-lg shadow-lg">
        <a class="block relative h-100 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?ixlib">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">The Catalyzer</h2>
          <p class="mt-1">$16.00</p>
        </div>
      </div>
      <div class="p-4 w-full bg-gray-100 rounded-lg shadow-lg">
        <a class="block relative h-100 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://images.unsplash.com/photo-1565130183887-876f81a87bbe?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8Mnw5NTYwOTQ5fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60">
        </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Shooting Stars</h2>
          <p class="mt-1">$21.15</p>
        </div>
      </div>
      <div class="p-4 w-full bg-gray-100 rounded-lg shadow-lg">
        <a class="block relative h-100 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ-0tU8hBwAKX1OhZeFUQ5FEfuJoAM2UJ4nIxVdWc0xEI6WUF2lTwG6GXfn8XtjIkUUFmA&usqp=CAU">
       </a>
        <div class="mt-4">
          <h3 class="text-gray-500 text-xs tracking-widest title-font mb-1">CATEGORY</h3>
          <h2 class="text-gray-900 title-font text-lg font-medium">Neptune</h2>
          <p class="mt-1">$12.00</p>
        </div>
      </div>
      <div class="p-4 w-full bg-gray-100 rounded-lg shadow-lg">
        <a class="block relative h-100 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" src="http://cdn.shopify.com/s/files/1/0021/7055/2364/products/j-thomas-home-thick-alder-stovetop-cover-cutout-handles-37243439972580.jpg?v=1660092453">
        </a>
        <div class="mt-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">The 400 Blows</h2>
          <p class="mt-1">$18.40</p>
        </div>
      </div>
    </div>
  </div>
</section>
    </SiteLayout> 
</template>
