import React from 'react';
import ReactDOM from 'react-dom';
// import { BrowserRouter as Router, Switch } from 'react-router-dom';
import { Router, Switch } from 'react-router-dom';
import { Provider } from 'react-redux';
import Routes from './routes';
import store from './store';
import * as action from './store/actions';
import './scss/style.scss';
import { createBrowserHistory } from 'history';  
export const history = createBrowserHistory();

store.dispatch(action.authAdminCheck());
store.dispatch(action.authCheck());

console.log = function (...args) {
  	console.dir(...args);
};
console.error = function (...args) {
  	console.log(...args);
};
console.warn = function (...args) {
  	// console.log(...args);
};
console.info = function (...args) {
  	// console.log(...args);
};

ReactDOM.render(
  	<Provider store={store}>
  	    <Router history={history}>
  	      	<Switch>
  	        	  <Routes />
  	      	</Switch>
  	    </Router>
  	</Provider>,
  	document.getElementById('app'),
);
