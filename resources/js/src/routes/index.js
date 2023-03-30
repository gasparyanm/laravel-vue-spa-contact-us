import VueRouter from 'vue-router';

import ContactUsCreate from "../pages/ContactUs/Create";
import ContactUsList from "../pages/ContactUs/Index";

const routes = [
    {
        name: 'contact-us.create',
        path: '/contact-us',
        component: ContactUsCreate,
    },
    {
        name: 'contact-us.list',
        path: '/contact-us/list',
        component: ContactUsList,
    },
];

const router = new VueRouter({
    history: true,
    mode: 'history',
    routes,
});

export default router
