<template>
    <div class="w-[200px] bg-blue-700 text-white p-4">
        <div class="flex flex-col gap-4">
            <router-link :to="{ name: 'app.dashboard' }"
                class="flex gap-2 items-center hover:bg-black/30 py-1 px-2 rounded">
                <div>
                    <HomeIcon class="w-6 h-6" />
                </div>
                <span class="text-sm font-light">Dashboard</span>
            </router-link>

            <router-link :to="{ name: 'app.dashboard' }"
                class="flex gap-2 items-center hover:bg-black/30 py-1 px-2 rounded">
                <div>
                    <ListBulletIcon class="w-6 h-6" />
                </div>
                <span class="text-sm font-light">Products</span>
            </router-link>

            <router-link :to="{ name: 'app.dashboard' }"
                class="flex gap-2 items-center hover:bg-black/30 py-1 px-2 rounded">
                <div>
                    <UserCircleIcon class="w-6 h-6" />
                </div>
                <span class="text-sm font-light">Users</span>
            </router-link>

            <router-link :to="{ name: 'app.dashboard' }"
                class="flex gap-2 items-center hover:bg-black/30 py-1 px-2 rounded">
                <div>
                    <ChartBarIcon class="w-6 h-6" />
                </div>
                <span class="text-sm font-light">Reports</span>
            </router-link>
        </div>
    </div>
</template>

<script setup>
import { HomeIcon, UserCircleIcon, ListBulletIcon, ChartBarIcon } from '@heroicons/vue/24/outline';
</script>

<style lang="scss" scoped></style>