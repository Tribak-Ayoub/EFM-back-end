import { createRouter, createWebHistory } from "vue-router";

const routes = [
    {
        path: "/test",
        component: () =>
            import(
                "../../modules/Core/Resources/Views/Pages/Test.vue"
            ),
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
