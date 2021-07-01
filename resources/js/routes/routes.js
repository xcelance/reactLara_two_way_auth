import React from 'react';

// login page.
import Login from '../pages/Login';
import AdminLogin from '../pages/AdminLogin';
import Page404 from '../pages/page404/Page404';
// dashboard.
import Dashboard from '../views/Dashboard/Dashboard';
import Home from '../views/Home/Home';

import Menu from '../views/Menu/Menus';
import AddMenu from '../views/Menu/AddMenu';
import EditMenu from '../views/Menu/EditMenu';
import Elements from '../views/Menu/element/Elements';
import AddElement from '../views/Menu/element/AddElement';
import EditElement from '../views/Menu/element/EditElement';


const routes = [
    {
        path: '/admin/login',
        name: 'Admin Login',
        exact: true,
        auth: false,
        admin: false,
        component: AdminLogin,
    },
    {
        path: '/login',
        name: 'Login',
        exact: true,
        auth: false,
        admin: false,
        component: Login,
    },
    // *********************************************
    //              dashboard routes.
    // *********************************************
    {
        path: '/',
        name: 'Home',
        exact: true,
        auth: false,
        admin: false,
        component: Home
    },
    // *********************************************
    //              menu routes.
    // *********************************************
    {
        path: '/admin/menu',
        name: 'Menus',
        exact: true,
        auth: true,
        admin: true,
        component: Menu
    },
    {
        path: '/admin/menu/add',
        name: 'Add Menu',
        exact: true,
        auth: true,
        admin: true,
        component: AddMenu
    },
    {
        path: '/admin/menu/edit/:id',
        name: 'Edit Menu',
        exact: true,
        auth: true,
        admin: true,
        component: EditMenu
    },
    // *********************************************
                // menu elements
    // *********************************************
    {
        path: '/admin/menu/element/:id',
        name: 'Menu Elements',
        exact: true,
        auth: true,
        admin: true,
        component: Elements
    },
    {
        path: '/admin/menu/element/:id/add',
        name: 'Add Menu Element',
        exact: true,
        auth: true,
        admin: true,
        component: AddElement
    },
    {
        path: '/admin/menu/element/:id/edit/:element',
        name: 'Edit Menu Element',
        exact: true,
        auth: true,
        admin: true,
        component: EditElement
    },
    // *********************************************
                // all admin routes
    // *********************************************
    {
        path: '/admin',
        name: 'Dashboard',
        exact: true,
        admin: true,
        auth: true,
        component: Dashboard
    },
    // *********************************************
                // all users elements
    // *********************************************
    {
        path: '/dashboard',
        name: 'Dashboard',
        exact: true,
        admin: false,
        auth: true,
        component: Dashboard
    },
    // *********************************************
    //              not found route.
    // *********************************************
    {
        path: '/not-found',
        auth: null,
        component: Page404,
    }
];

export default routes;