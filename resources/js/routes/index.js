import React from 'react';
import { BrowserRouter as Router, Switch, Redirect } from 'react-router-dom';
import routes from './routes';
import PublicRoute from './Public';
import PrivateRoute from './Private';
import PrivateAdminRoute from './PrivateAdminRoute';
import SplitRoute from './Split';

const Routes = () => (
    <Router>
        <Switch>
            {routes.map((route) => {
                if (route.auth && route.fallback && !route.admin) {
                    return <SplitRoute key={route.path} {...route} />;
                } 
                if (route.auth && !route.admin) {
                    return <PrivateRoute key={route.path} {...route} />;
                }
                if (!route.auth && route.auth != null && !route.admin) {
                    return <PublicRoute key={route.path} {...route} />;
                }
                if (route.auth && route.admin) {
                    return <PrivateAdminRoute key={route.path} {...route} />;
                }
                return <Redirect key={route.path} to="/not-found" />;
            })}
        </Switch>
    </Router>
);

export default Routes;
