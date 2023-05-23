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
import { onMounted } from 'vue';
import Sidebar from './Sidebar.vue';
import TopNav from './TopNav.vue';
import store from '../store';
const { title } = defineProps({
    title: String
});

onMounted(() => {
    store.dispatch('getUser');
})
</script>