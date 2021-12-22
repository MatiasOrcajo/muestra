const Home = ()=> import('./components/Home.vue');
const Contacto = ()=> import('./components/Contacto.vue');
const ShowCategory = ()=> import('./components/ShowCategory.vue');
const ShowProduct = ()=> import('./components/ShowProduct.vue');

// import the components

// const Contacto = ()=> import('.components/Contacto.vue');

export const routes = 
[
    {   
        path: '/',
        name: 'home',
        component: Home,
    },
    {
        path: '/contacto',
        name: 'contacto',
        component: Contacto
    },
    {
        path: '/categoria/:slug',
        name: 'showCategory',
        component: ShowCategory,
        props: {
            default: true
        }
    },
    {
        path: '/:slug',
        name: 'showProduct',
        component: ShowProduct
    }
]
