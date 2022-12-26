<script setup>

</script>

<template>
<div class="modal-container modal-backdrop">
  <div class="modal-content">
    <header class="modal-header flex justify-between items-center">
      <!-- modal header content goes here -->
      modal header
      <button class="modal-close btn btn-xs text-white btn-circle border-red-600 shadow bg-red-600 hover:bg-red-500">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
      </button>
    </header>
    
    <div class="modal-body">
      <!-- modal body content goes here -->
      modal body
    </div>
  </div>
</div>

</template>

<style>
.modal-content {
  @apply bg-white p-4 rounded-lg shadow-xl max-w-screen-md mx-auto my-12 fixed top-0 left-0 right-0 bottom-0;
}

</style>