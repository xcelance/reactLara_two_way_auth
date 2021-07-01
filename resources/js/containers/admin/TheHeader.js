import React from 'react'
import { useSelector, useDispatch } from 'react-redux'
import {
    CHeader,
    CToggler,
    CHeaderBrand,
    CHeaderNav,
    CHeaderNavItem,
    CHeaderNavLink,
    CSubheader,
    CBreadcrumbRouter,
    CLink
} from '@coreui/react'
import CIcon from '@coreui/icons-react'

// routes config
import routes from '../../routes/routes'
import GlobalSearch from './GlobalSearch';

import { 
    TheHeaderDropdown
}  from './index'

const TheHeader = () => {
    const dispatch = useDispatch()
    const sidebarShow = useSelector(state => state.sidebarShow)

    const toggleSidebar = () => {
        const val = [true, 'responsive'].includes(sidebarShow) ? false : 'responsive'
        var div = document.querySelector('.c-sidebar.c-sidebar-fixed');

        if(div.classList.contains('c-sidebar-lg-show')) {
            div.classList.remove('c-sidebar-lg-show')
        } else {
            div.classList.add('c-sidebar-lg-show')
        }
        dispatch({type: 'set', sidebarShow: val})
    }

    const toggleSidebarMobile = () => {
        const val = [false, 'responsive'].includes(sidebarShow) ? true : 'responsive'
        dispatch({type: 'set', sidebarShow: val})
    }

    return (
        <CHeader withSubheader className="custom-headers">
            <CToggler
                inHeader
                className="ml-md-3 d-lg-none"
                onClick={toggleSidebarMobile}
            />
            <CToggler
                inHeader
                className="ml-3 d-md-down-none"
                onClick={toggleSidebar}
            />
            <CHeaderBrand className="mx-auto d-lg-none" to="/">
                <CIcon name="logo" height="48" alt="Logo"/>
            </CHeaderBrand>

            <CHeaderNav className="d-md-down-none mr-auto ul-global-search">
                <GlobalSearch />
            </CHeaderNav>

            <CHeaderNav className="px-3 ul-user-section">
                <TheHeaderDropdown/>
            </CHeaderNav>

            <CSubheader className="px-3 justify-content-between">
                <CBreadcrumbRouter 
                    className="border-0 c-subheader-nav m-0 px-0 px-md-3" 
                    routes={routes} 
                />
                <div className="d-md-down-none mfe-2 c-subheader-nav"></div>
            </CSubheader>
        </CHeader>
    )
}

export default TheHeader
