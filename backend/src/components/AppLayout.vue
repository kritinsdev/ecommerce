<template>
    <div v-if="currentUser.id" class="min-h-full bg-gray-200 flex">
        <Sidebar :class="{ '-ml-[200px]': !sidebarOpened }" />

        <div class="flex-1">

            <TopNav @toggle-sidebar="toggleSidebar"></TopNav>
            <main class="p-6">
                <router-view></router-view>
            </main>
        </div>
    </div>
    <div v-else class="min-h-full bg-gray-200 flex items-center justify-center">
        <Spinner />
    </div>
</template>
  
<script setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'
import store from "../store";
import Sidebar from "./Sidebar.vue";
import TopNav from "./TopNav.vue";
import Spinner from "./core/Spinner.vue";

const { title } = defineProps({
    title: String
});

const sidebarOpened = ref(true);
const currentUser = computed(() => store.state.user.data);

function toggleSidebar() {
    sidebarOpened.value = !sidebarOpened.value
}

function updateSidebarState() {
    sidebarOpened.value = window.outerWidth > 768;
}

onMounted(async () => {
    await store.dispatch('getUser');
    updateSidebarState();
    window.addEventListener('resize', updateSidebarState);
});


onUnmounted(() => {
    window.removeEventListener('resize', updateSidebarState)
})

</script>
  
<style scoped></style>