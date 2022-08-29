import Vue from 'vue'
import VueRouter from 'vue-router'
import Items from '../views/Items'

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/items',
            name: 'items',
            component: Items,
        },
        // {
        //     path: '/categories',
        //     name: 'categories',
        //     component: Categories
        // },
        // {
        //     path: '/items',
        //     name: 'items',
        //     component: Items
        // },
        // {
        //     path: '/login',
        //     name: 'login',
        //     component: Login
        // }
    ]
})
