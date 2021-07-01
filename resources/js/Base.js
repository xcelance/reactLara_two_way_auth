import React from 'react';
import { connect } from 'react-redux';

const Base = ({ children }) => (
  	<div className="main-no-headers">
	    <main>{children}</main>
  	</div>
);

const mapStateToProps = (state) => ({
  	isAuthenticated: state.Auth.isAuthenticated,
  	isAdminAuthenticated: state.Auth.isAdminAuthenticated,
});

export default connect(mapStateToProps)(Base);
