import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/test",
        component: () =>
            import(
                "../../modules/PkgProduct/Resources/Views/Pages/Test.vue"
            ),
    },
    {
        path: "/index",
        component: () =>
            import(
                "../../modules/PkgProduct/Resources/Views/Pages/index.vue"
            ),
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
