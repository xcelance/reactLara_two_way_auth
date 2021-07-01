import React from 'react';
import PropTypes from 'prop-types';
import { Route, Redirect } from 'react-router';
import { connect } from 'react-redux';
import AdminLayout from '../AdminLayout';

const PrivateAdminRoute = ({ component: Component, isAdminAuthenticated, ...rest }) => (
    <Route
        {...rest}
        render={(props) => (isAdminAuthenticated ? (
            <AdminLayout>
                <Component {...props} />
            </AdminLayout>
        ) : (
            <Redirect
                to={{
                    pathname: '/admin/login',
                    state: { from: props.location },
                }}
            />
        ))}
    />
);

PrivateAdminRoute.propTypes = {
    isAdminAuthenticated: PropTypes.bool.isRequired,
};

const mapStateToProps = (state) => ({
    isAdminAuthenticated: state.Auth.isAdminAuthenticated,
});

export default connect(mapStateToProps)(PrivateAdminRoute);
