import React, { Component } from 'react';
import { connect } from 'react-redux';
import axios from 'axios';

import { CCard, CCardBody, CCol, CRow } from '@coreui/react'

class Dashboard extends Component {
    constructor(props) {
        super(props);

        // Initial state.
        this.state = {
            todo: null,
            error: false,
            data: [],
        };
    }

    componentDidMount() {}

    handleChange = (e) => {
        const { name, value } = e.target;
        this.setState({ [name]: value });
    };

    handleSubmit = (e) => {
        e.preventDefault();
        const { todo } = this.state;
    };

    render() {
        const { data, error } = this.state;

        return (
            <div className="dashboard-content">
                <CCard>
                    <CCardBody>
                        <div className="count-graph-main">
                            dfgfdgfdgfdgdf
                        </div>
                    </CCardBody>
                </CCard>
            </div>
        );
    }
}

const mapStateToProps = (state) => ({
    isAuthenticated: state.Auth.isAuthenticated,
    user: state.Auth.user,
});

export default connect(mapStateToProps)(Dashboard);
