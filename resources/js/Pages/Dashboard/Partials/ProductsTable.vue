<script setup>
import { Link, usePage, useRemember } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'
import { ref, watch, computed } from 'vue'

let props = defineProps({
  filters: {
    type: Array
  }
})

const products = computed(() => usePage().props.value.products.data)

let search = ref('')

watch(search, value => {
  Inertia.get('/dashboard/products', { search: value}, {
    preserveState: true,
    replace: true
  })
})

</script>

<template>

    <div class="w-full bg-gray-200">
      <div class=" w-full bg-white py-3 rounded-lg shadow-lg px-8 my-4">
        <!-- TODO Make this work -->
        <div class="relative mx-4 lg:mx-0">
          <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
              <path
                d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                stroke="currentColor"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </span>
  
          <input
            v-model="search"
            class="w-42 pl-10 pr-4 text-gray-800 border-gray-200 rounded-md sm:w-96 focus:border-slate-700 focus:ring focus:ring-opacity-30 focus:ring-slate-700"
            type="text"
            placeholder="Search products..."
          />
        </div>
      </div>
  <table class="table-compact table-fixed lg:table w-full">
    <!-- head -->
    <thead class="bg-gray-100 border-b-2 border-gray-300">
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Price</th>
        <th>Last Updated</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
    <tr v-for="product in products" :key="product.id" class="bg-gray-100 border-b-2 border-gray-300">
        <th>
          <p>{{ product.id }}</p>
        </th>
        <td>
            <div class="avatar">
              <div class="rounded-lg w-24 h-24">
                <img :src="product.image" alt="product image" />
              </div>
            </div>
        </td>
        <td>
          <p class="truncate"> {{ product.title }}</p>
        </td>
        <td>{{ product.price }}</td>
        <td>
          {{ product.updated_at.substring(0,10) }}
        </td>
        <th>
          <div class="dropdown dropdown-end">
            <label tabindex="0" class="cursor-pointer hover:bg-gray-200 p-2 rounded-full">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-5 h-5 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2  bg-white shadow-xl rounded-box w-52">
                <!-- TODO make this work -->
              <li><a class="hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                </svg>
                Edit
                </a></li>
                <!-- TODO make this work -->
              <li><a class="hover:bg-gray-200">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                </svg>
                Delete
                </a></li>
            </ul>
          </div>
        </th>
      </tr>
    </tbody>
    <!-- foot -->
    <tfoot class="bg-gray-100">
        <tr>
            <td>
                <div class="btn-group">
                    <Link v-for="link in $page.props.products.links" :href="link.url" v-html="link.label" class="btn btn-xs bg-white border-gray-300" :class="{ 'btn-disabled text-gray-300' : !link.url, 'bg-gray-300 font-bold' : link.active }" />
                </div>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </tfoot>
    
  </table>
</div>
</template>