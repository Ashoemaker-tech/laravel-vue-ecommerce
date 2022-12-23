<script setup>
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

const emit = defineEmits(['toggle-sidebar'])



</script>
<template>
    <header
      class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-slate-900 to-zinc-400 border-b border-gray-100 shadow-xl"
    >
      <div class="flex items-center">
        <button
          @click="emit('toggle-sidebar')" 
          class="text-gray-300 focus:outline-none lg:hidden"
        >
          <svg
            class="w-6 h-6"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M4 6H20M4 12H20M4 18H11"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
            />
          </svg>
        </button>
        <!-- TODO fix search on xs screens move to component -->
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
            class="w-42 pl-10 pr-4 text-gray-800 border-gray-200 rounded-md sm:w-96 focus:border-slate-700 focus:ring focus:ring-opacity-40 focus:ring-slate-700"
            type="text"
            placeholder="Search"
          />
        </div>
      </div>
        <div class="flex items-center ml-6">
            <!-- Settings Dropdown -->
            <div class="ml-3 relative">
                <Dropdown align="right" width="48">
                    <template #trigger>
                        <span class="inline-flex rounded-md">
                            <button
                                type="button"
                                class=" px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-full text-gray-200 bg-slate-700 hover:bg-slate-600 focus:outline-none transition ease-in-out duration-150"
                            >
                                {{ $page.props.auth.user.name[0] }}

                            </button>
                        </span>
                    </template>

                    <template #content>
                        <DropdownLink :href="route('profile.edit')"> Profile </DropdownLink>
                        <DropdownLink :href="route('logout')" method="post" as="button">
                            Log Out
                        </DropdownLink>
                    </template>
                </Dropdown>
            </div>
        </div>
    </header>
  </template>