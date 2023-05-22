import { createRouter, createWebHistory } from "vue-router";
import Dashboard from "../views/Dashboard.vue";
import Login from "../views/Login.vue";
import PasswordReset from "../views/PasswordReset.vue";
import AppLayout from "../components/AppLayout.vue";
import NotFound from "../views/NotFound.vue";
import store from "../store";

const routes = [
    {
        path: '/app',
        name: 'app',
        component: AppLayout,
        meta: {
            requiresAuth: true
        },
        children: [
            {
                path: 'dashboard',
                name: 'app.dashboard',
                component: Dashboard
            }
        ]
    },
    {
        path: '/login',
        name: 'login',
        meta: {
            requiresGuest: true
        },
        component: Login
    },
    {
        path: '/password-reset',
        name: 'passwordReset',
        meta: {
            requiresGuest: true
        },
        component: PasswordReset
    },
    {
        path: '/:pathMatch(.*)',
        name: 'notFound',
        component: NotFound
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes
});

router.beforeEach((to, from, next) => {
    if (to.meta.requiresAuth && !store.state.user.token) {
        next({ name: 'login' })
    } else if (to.meta.requiresGuest && store.state.user.token) {
        next({ name: 'app.dashboard' })
    } else {
        next();
    }
})

export default router;