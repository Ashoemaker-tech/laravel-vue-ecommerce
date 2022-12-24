<script setup>

defineProps({
image: String,
title: String,
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
      <div class="card card-compact w-96 bg-base-100 shadow-xl">
        <figure><img src="https://placeimg.com/400/225/arch" alt="Shoes" /></figure>
        <div class="card-body">
            <h2 class="card-title">Shoes!</h2>
            <p>If a dog chews shoes whose shoes does he choose?</p>
            <div class="card-actions justify-end">
            <button class="btn btn-primary">Buy Now</button>
            </div>
        </div>
      </div>
</template>