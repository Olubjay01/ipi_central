import { createRouter, createWebHistory } from "vue-router";
import AppLayout from '../components/AppLayout.vue';
import Dashboard from '../views/Dashboard.vue';
import Products from '../views/Products.vue';
import Users from '../views/Users.vue';
import Login from '../views/Login.vue';
import ResetPassword from '../views/ResetPassword.vue';
import RequestPassword from '../views/RequestPassword.vue';
import NotFound from '../views/NotFound.vue';
import store from "../store";

const routes = [
    {
        path: '/app',
        name: 'app',
        component: AppLayout,
        meta: {
            requireAuth: true
        },
        children: [
            {
                path: 'dashboard',
                name: 'app.dashboard',
                component: Dashboard
            },
            {
                path: 'products',
                name: 'app.products',
                component: Products
            },
            {
                path: 'users',
                name: 'app.users',
                component: Users
            }
        ]
    },
    {
        path: '/login',
        name: 'login',
        meta: {
            requireGuest: true
        },
        component: Login
    },
    {
        path: '/reset-password/:token',
        name: 'resetPassword',
        meta: {
            requireGuest: true
        },
        component: ResetPassword
    },
    {
        path: '/request-password',
        name: 'requestPassword',
        meta: {
            requireGuest: true
        },
        component: RequestPassword
    },
    {
        path: '/:pathMatch(.*)',
        name: 'notFound',
        component: NotFound
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
})

router.beforeEach((to, from, next) => {
    if (to.meta.requireAuth && !store.state.user.token) {
        next({ name: 'login' })
    }
    else if(to.meta.requireGuest && store.state.user.token)
    {
        next({ name: 'app.dashboard' })
    }
    else{
        next()
    }
})

export default router;