import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import Login from "../views/Login.vue";
import PasswordReset from "../views/PasswordReset.vue";

const routes = [
    {
        path: '/dashboard',
        name: 'dashboard',
        component: Dashboard
    },
    {
        path: '/login',
        name: 'login',
        component: Login
    },
    {
        path: '/password-reset',
        name: 'passwordReset',
        component: PasswordReset
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

export default router;