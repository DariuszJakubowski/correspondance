import Vue from 'vue'
import VueRouter from 'vue-router'
import Posts from '../views/Posts'

Vue.use(VueRouter)

export default new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/posts',
            name: 'posts',
            component: Posts,
        },
        // {
        //     path: '/categories',
        //     name: 'categories',
        //     component: Categories
        // },
        // {
        //     path: '/posts',
        //     name: 'posts',
        //     component: posts
        // },
        // {
        //     path: '/login',
        //     name: 'login',
        //     component: Login
        // }
    ]
})
