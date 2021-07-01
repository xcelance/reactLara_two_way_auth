import React, { Component } from 'react'
import { connect } from 'react-redux';
import {
    CBadge,
    CDropdown,
    CDropdownItem,
    CDropdownMenu,
    CDropdownToggle,
    CImg
} from '@coreui/react'
import CIcon from '@coreui/icons-react'
import { freeSet } from '@coreui/icons'
import * as actions from '../../store/actions';
import { Link } from 'react-router-dom';


class TheHeaderDropdown extends Component {
    constructor() {
        super();
        this.state = {
            avtar: '/images/user-avtar.jpg',
            profile: '',
            name: ''
        }

        this.handleLogout = this.handleLogout.bind(this);
    }
    componentDidMount() {
        var user = JSON.parse(localStorage.admin);
        this.setState({
            name: user.name,
            profile: user.profile
        });
    }
    handleLogout = (e) => {
        e.preventDefault();
        this.props.dispatch(actions.authAdminLogout());
    }

    render() {
        return (
            <CDropdown
                inNav
                className="c-header-nav-items mx-2 user-header-pannel"
                direction="down"
            >
                <CDropdownToggle className="c-header-nav-link" caret={false}>
                    <div className="c-avatar">
                        {this.state.profile ? (
                            <CImg
                                src={this.state.profile}
                                className="c-avatar-img profile-pic"
                            />
                        ) : (
                            <CImg
                                src={this.state.avtar}
                                className="c-avatar-img profile-pic"
                            />
                        )}
                    </div>
                    <p className="top-userName">{this.state.name}</p>
                </CDropdownToggle>
                <CDropdownMenu className="pt-0" placement="bottom-end">
                    <CDropdownItem to="/profile" href="/profile">
                        <CIcon content={freeSet.cilUser}/>
                        Profile
                    </CDropdownItem>
                    <CDropdownItem divider />
                    <CDropdownItem onClick={this.handleLogout}>
                        <CIcon content={freeSet.cilLockLocked} />
                        Logout
                    </CDropdownItem>
                </CDropdownMenu>
            </CDropdown>
        )
    }
}

const mapStateToProps = (state) => ({
    isAdminAuthenticated: state.Auth.isAdminAuthenticated,
});

export default connect(mapStateToProps)(TheHeaderDropdown)