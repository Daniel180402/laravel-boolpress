window.axios = require("axios");
window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";
window.Vue = require("vue");

import Vue from "vue";
import VueRouter from "vue-router";

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 *
 *
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import App from "./views/App.vue";

Vue.use(VueRouter);

import Home from "./pages/Home";
import Posts from "./pages/Posts";
import AboutUs from "./pages/AboutUs";

const router = new VueRouter({
    mode: "history",
    routes: [
        {
            path: "/home",
            name: "home",
            component: Home,
        },
        {
            path: "/posts",
            name: "posts",
            component: Posts,
        },
        {
            path: "/about-us",
            name: "about-us",
            component: AboutUs,
        },
    ],
});

const app = new Vue({
    el: "#root",
    render: (h) => h(App),
    router,
});
