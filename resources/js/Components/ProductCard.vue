<script setup>

defineProps({
image: String,
title: String,
description: String,
price: String
})

</script>

<template>
     <!-- <div class="col-span-4 bg-gray-100 rounded-lg shadow-lg">
        <a class="block relative h-100 rounded overflow-hidden">
          <img alt="ecommerce" class="object-cover object-center w-full h-full block" :src="image">
        </a>
        <div class="mt-4 px-4">
          <h2 class="text-gray-900 title-font text-lg font-medium">{{ title }}</h2>
          <p class="mt-1">${{ price }}</p>
        </div>
      </div>  -->
      <div class="card card-compact bg-base-100 shadow-xl">
        <figure><img class="w-full h-1/2" :src="image" alt="product" /></figure>
        <div class="card-body">
            <h2 class="card-title">{{ title }}</h2>
            <div class="flex justify-end">
            <span class="">${{ price }}</span>
            </div>
        </div>
      </div>
</template>