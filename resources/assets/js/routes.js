const app = () => import('./components/Perros.vue' /* webpackChunkName: "resource/js/components/welcome" */)
const perroList = () => import('./components/Perros/List.vue' /* webpackChunkName: "resource/js/components/Perros/list" */)
const perroCreate = () => import('./components/Perros/Add.vue' /* webpackChunkName: "resource/js/components/Perros/add" */)
const perroEdit = () => import('./components/Perros/Edit.vue' /* webpackChunkName: "resource/js/components/Perros/edit" */)

export const routes = [
    {
        name: 'home',
        path: '/',
        component: app
    },
    {
        name: 'perroList',
        path: '/Perros',
        component: perroList
    },
    {
        name: 'perroEdit',
        path: '/Perros/:id/edit',
        component: perroEdit
    },
    {
        name: 'perroAdd',
        path: '/Perros/add',
        component: perroCreate
    }
]