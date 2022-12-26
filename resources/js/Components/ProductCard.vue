<script setup>
defineProps({
image: String,
title: String,
description: String,
price: String
})

</script>

<template>
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