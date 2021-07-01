import React, { Suspense } from 'react';
import { connect } from 'react-redux';
import { CContainer } from '@coreui/react'
import {
    TheSidebar,
    TheFooter,
    TheHeader
} from './containers/admin/index';

const loading = (
  	<div className="pt-3 text-center">
    	<div className="sk-spinner sk-spinner-pulse"></div>
  	</div>
);

const AdminLayout = ({ children }) => (
	<div className="c-app c-default-layout">
        <TheSidebar/>
        <div className="c-wrapper">
            <TheHeader/>
            <div className="c-body">
                <main className="c-main">
	                <CContainer fluid>
	                	<Suspense fallback={loading}>{children}</Suspense>
	                </CContainer>
                </main>
            </div>
            <TheFooter/>
        </div>
    </div>
);

const mapStateToProps = (state) => ({
    isAdminAuthenticated: state.Auth.isAdminAuthenticated,
});

export default connect(mapStateToProps)(AdminLayout);
