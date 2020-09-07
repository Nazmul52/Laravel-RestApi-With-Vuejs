import {createRouter, createWebHistory} from 'vue-router'
import Home from '../views/Home.vue'
import HelloWorld from "@/components/HelloWorld";
// import HelloWorld from "@/components/HelloWorld";

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
        // beforeEnter: (to, from, next) => {
        //    next('Home');
        // }
        // before: () => {
        //     alert('okay');
        // },
        // children: [
        //     {
        //         path: 'hello',
        //         name: 'hello',
        //         components: {
        //             default: HelloWorld,
        //             header: HelloWorld
        //         }
        //     },
        // ]
    },
    // {
    //     path: '/about',
    //     name: 'About',
    //     // route level code-splitting
    //     // this generates a separate chunk (about.[hash].js) for this route
    //     // which is lazy-loaded when the route is visited.
    //     component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
    // }
    {
        // path: "*",
        path: "/:catchAll(.*)",
        name: "404",
        component: HelloWorld,
        meta: {
            requiresAuth: false
        }
    }
]

const router = createRouter({
    history: createWebHistory(process.env.BASE_URL),
    routes
})
function isAuthenticated(){
    return true;
}
// GOOD
router.beforeEach((to, from, next) => {
    if (to.name !== 'Login' && !isAuthenticated) next({ name: 'home' })
    else next()
})
export default router
