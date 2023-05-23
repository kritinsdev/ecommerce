<template>
    <GuestLayout title="Login to your account">
        <form class="space-y-6" method="POST" @submit.prevent="login">
            <div v-if="errorMsg" class="flex items-center justify-center py-2 text-white bg-red-400 rounded">
                {{ errorMsg }}
            </div>
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <div class="mt-2">
                    <input v-model="user.email" id="email" name="email" type="email" autocomplete="email" required=""
                        class="block w-full rounded-md border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                    <div class="text-sm">
                        <router-link :to="{ name: 'passwordReset' }"
                            class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</router-link>
                    </div>
                </div>
                <div class="mt-2">
                    <input v-model="user.password" id="password" name="password" type="password"
                        autocomplete="current-password" required=""
                        class="block w-full rounded-md border-0 pl-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                </div>
            </div>

            <div>
                <button :disabled="loading" type="submit"
                    :class="{ 'cursor-not-allowed': loading, 'bg-indigo-300': loading }"
                    class="flex w-full items-center justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <svg v-if="loading" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                        </path>
                    </svg>
                    Sign in
                </button>
            </div>
        </form>
    </GuestLayout>
</template>

<script setup>
import { ref } from 'vue';
import store from '../store';
import router from '../router';
import GuestLayout from '../components/GuestLayout.vue';

let loading = ref(false);
let errorMsg = ref("");

const user = {
    email: '',
    password: '',
}

function login() {
    loading.value = true;
    store.dispatch('login', user)
        .then(() => {
            loading.value = false;
            router.push({ name: 'app.dashboard' });
        })
        .catch(({ response }) => {
            loading.value = false;
            errorMsg.value = response.data.message;
        })
}
</script>