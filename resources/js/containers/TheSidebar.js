import React, { Component } from 'react'
import { useSelector, useDispatch } from 'react-redux'
import {
    CCreateElement,
    CSidebar,
    CSidebarBrand,
    CSidebarNav,
    CSidebarNavDivider,
    CSidebarNavTitle,
    CSidebarMinimizer,
    CSidebarNavDropdown,
    CSidebarNavItem,
    CRenderFunction
} from '@coreui/react'
import CIcon from '@coreui/icons-react'
import { freeSet } from '@coreui/icons'

import axios from 'axios';

class TheSidebar extends Component {

    constructor(props) {
        super(props);
        this.state = {
            nav: [],
            logo: '/images/logo.png'
        };
    }
    componentDidMount() {
        this.listNavs();
    }

    showDropdownLinks() {
        let active = document.querySelector('.c-sidebar-nav-link.c-active');
        if(active) {
            var _par = active.parentElement.parentElement.parentElement;
            if(_par.classList.contains('c-sidebar-nav-dropdown')) {
                _par.classList.add('c-show');
                let _uprPar = _par.parentElement.parentElement;
                if(_uprPar.parentElement.classList.contains('c-sidebar-nav-dropdown')) {
                    _uprPar.parentElement.classList.add('c-show');
                    let _last = _uprPar.parentElement.parentElement;
                    if(_last.contains('c-sidebar-nav-dropdown')) {
                        _last.classList.add('c-show');
                    }
                } else if(_uprPar.classList.contains('c-sidebar-nav-dropdown')) {
                    _uprPar.classList.add('c-show');
                }
            }
        }
    }

    listNavs() {
        let token = 'Bearer '+localStorage.getItem('access_token');
        axios.get(`/api/v1/menu`, { headers: { authorization: token }}).then((response) => {
            var data = response.data;
            var navigations = [];
            // generating menu data.
            for(var i = 0; i < data.length; i++) {
                var val = {};
                if(data[i].slug == 'title') {
                    val._tag = 'CSidebarNavTitle';
                    val.icon = <div className={"icon sidebar-icon-"+data[i].icon} />;
                    val.name = data[i].name;
                } else if(data[i].slug == 'dropdown') {
                    var _childs = [];
                    val._tag = 'CSidebarNavDropdown';
                    val.name = data[i].name;
                    val.icon = <div className={"icon sidebar-icon-"+data[i].icon} />;
                    // adding childs to dropdown menu.
                    for(var j = 0; j < data[i].elements.length; j++) {
                        var ch = {};
                        if(data[i].elements[j].slug == 'title') {
                            ch._tag = 'CSidebarNavTitle';
                            ch.icon = <div className={"icon sidebar-icon-"+data[i].elements[j].icon} />;
                            ch.name = data[i].elements[j].name;
                        } else if(data[i].elements[j].slug == 'dropdown') {
                            var _innerchilds = [];
                            ch._tag = 'CSidebarNavDropdown';
                            ch.name = data[i].elements[j].name;
                            ch.icon = <div className={"icon sidebar-icon-"+data[i].elements[j].icon} />;
                            var dt = data[i].elements[j].elements;
                            // adding inner child dropdowm elements.
                            for(var k = 0; k < dt.length; k++) {
                                var _inch = {};
                                _inch._tag = 'CSidebarNavItem';
                                _inch.name = dt[k].name;
                                _inch.icon = <div className={"icon sidebar-icon-"+dt[k].icon} />;;
                                _inch.to = dt[k].href;
                                _innerchilds.push(_inch);
                            }
                            ch._children = _innerchilds;
                        } else {
                            ch._tag = 'CSidebarNavItem';
                            ch.name = data[i].elements[j].name;
                            ch.icon = <div className={"icon sidebar-icon-"+data[i].elements[j].icon} />;
                            ch.to = data[i].elements[j].href;
                            
                        }
                        _childs.push(ch);
                    }
                    val._children = _childs;
                } else {
                    val._tag = 'CSidebarNavItem';
                    val.name = data[i].name;
                    val.icon = <div className={"icon sidebar-icon-"+data[i].icon} />;
                    val.to = data[i].href;
                }
                navigations.push(val);
            }

            this.setState({
                nav: navigations
            }, () => {
                this.showDropdownLinks();
            });
        });
    }

    render() {
        const { nav } = this.state;
       return (
            <CSidebar>
                <CSidebarBrand className="d-md-down-none" to="/">
                    <img src={this.state.logo} alt="login-logo" />
                </CSidebarBrand>
                <CSidebarNav>
                    <CCreateElement
                        items={nav}
                        components={{
                            CSidebarNavDivider,
                            CSidebarNavDropdown,
                            CSidebarNavItem,
                            CSidebarNavTitle
                        }}
                    />
                </CSidebarNav>
                <CSidebarMinimizer className="c-d-md-down-none"/>
            </CSidebar>
        )
    }
}

export default React.memo(TheSidebar)