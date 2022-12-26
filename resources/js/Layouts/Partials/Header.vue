<script setup>
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

</script>
<template>
    <header
      class="flex items-center justify-between px-6 py-4 bg-gradient-to-r from-slate-900 to-zinc-400 border-b border-gray-100 shadow-xl"
    >
      <div class="flex items-center">
        <slot />
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