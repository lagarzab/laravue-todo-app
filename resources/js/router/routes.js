const routes = [
    {
        path: '/',
        name: 'home',
        component: () => {
            console.log('home')
            return import('../components/ExampleComponent.vue')
        },
    },
    {
        path: '/login',
        name: 'login',
        component: () => {
            console.log('login')
            return import('../components/Login.vue')
        }
    },
    {
        path: '/tasklists',
        name: 'tasklists',
        component: () => {
            console.log('user')
            return import('../components/ExampleComponent.vue')
        },
    },
];

// Always leave this as last one
routes.push({
    path: '*',
    component: () => {
        console.log('Error 404')
        return import('../components/404Error.vue')
    }
})

export default routes;
