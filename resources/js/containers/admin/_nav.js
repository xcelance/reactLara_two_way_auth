import React from 'react'
import CIcon from '@coreui/icons-react'

const _nav =  [
    {
        _tag: 'CSidebarNavItem',
        name: 'Dashboard',
        to: '/',
        icon: <CIcon name="cil-speedometer" customClasses="c-sidebar-nav-icon"/>
    },
    {
        _tag: 'CSidebarNavItem',
        name: 'Menu',
        to: '/menu',
        icon: <CIcon name="cil-speedometer" customClasses="c-sidebar-nav-icon"/>
    }
]

export default _nav
