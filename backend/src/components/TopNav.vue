<template>
    <header class="h-12 bg-white shadow flex justify-between items-center px-6">
        <button>
            <Bars3Icon class="w-6" />
        </button>

        <Menu as="div" class="relative inline-block text-left">
            <div>
                <MenuButton
                    class="flex gap-1 w-full items-center px-4 py-2 text-sm focus-visible:ring-2 focus-visible:ring-white focus-visible:ring-opacity-75">
                    <img src="https://randomuser.me/api/portraits/men/2.jpg" alt="user" class="rounded-full w-8">
                    <span>Vera</span>
                    <ChevronDownIcon class="ml-2 -mr-1 h-5 w-5 text-blue-200 hover:text-blue-100" aria-hidden="true" />
                </MenuButton>
            </div>

            <MenuItems
                class="absolute right-0 mt-2 w-32 origin-top-right divide-y divide-gray-100 rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                <div class="px-1 py-1">
                    <MenuItem v-slot="{ active }">
                    <button :class="[
                        active ? 'bg-blue-700 text-white' : 'text-gray-900',
                        'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                    ]">
                        Profile
                    </button>
                    </MenuItem>
                    <MenuItem v-slot="{ active }">
                    <button :class="[
                        active ? 'bg-blue-700 text-white' : 'text-gray-900',
                        'group flex w-full items-center rounded-md px-2 py-2 text-sm',
                    ]">
                        Logout
                    </button>
                    </MenuItem>
                </div>

            </MenuItems>
        </Menu>
    </header>
</template>

<script setup>
import { Bars3Icon, ChevronDownIcon } from '@heroicons/vue/24/outline';
import { Menu, MenuButton, MenuItems, MenuItem } from '@headlessui/vue'
</script>

<style lang="scss" scoped></style>