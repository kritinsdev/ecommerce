<template>
    <div class="flex min-h-full">

        <Sidebar />

        <div class="flex-1">
            <TopNav />

            <main class="p-6">
                <router-view></router-view>
            </main>
        </div>
    </div>
</template>
  
<script setup>
import Sidebar from './Sidebar.vue';
import TopNav from './TopNav.vue';
const { title } = defineProps({
    title: String
})
</script>