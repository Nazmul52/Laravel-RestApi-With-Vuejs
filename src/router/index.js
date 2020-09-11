import Home from "@/views/Home";

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
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
    {
        path: '/user-home',
        name: 'UserHome',
        component: () => import(/* webpackChunkName: "user-home" */'@/views/LoggedInHome'),
        beforeEnter: (to, from, next) => {
            next();
        }

    }, {
        path: '/confirm-team',
        name: 'ConfirmTeam',
        component: () => import(/* webpackChunkName: "confirm-team" */'@/views/ConfirmTeam'),
        beforeEnter: (to, from, next) => {
            next();
        }

    },
    {
        path: '/contest',
        name: 'Contest',
        component: () => import(/* webpackChunkName: "confirm-team" */'@/views/Contest'),
        beforeEnter: (to, from, next) => {
            next();
        }

    },
    {
        path: '/create-team',
        name: 'CreateTeam',
        component: () => import(/* webpackChunkName: "create-team" */'@/views/CreateTeam'),
        beforeEnter: (to, from, next) => {
            next();
        }

    },
    {
        path: '/match-list',
        name: 'MatchList',
        component: () => import(/* webpackChunkName: "match-list" */'@/views/MatchList'),
        beforeEnter: (to, from, next) => {
            next();
        }

    },{
        path: '/user-profile',
        name: 'UserProfile',
        component: () => import(/* webpackChunkName: "match-list" */'@/views/UserProfile'),
        beforeEnter: (to, from, next) => {
            next();
        }

    },
    {
        // path: "*",
        path: "*",
        name: "404",
        component: () => import(/* webpackChunkName: "404" */'@/views/NOTFOUND'),
        meta: {
            requiresAuth: false
        }
    }
]

export default routes