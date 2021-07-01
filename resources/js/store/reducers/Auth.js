import * as ActionTypes from '../action-types';

const defaultUser = {
    id: null,
    name: null,
    email: null,
};

const initialState = {
    isAuthenticated: false,
    isAdminAuthenticated: false,
    user: defaultUser,
    admin: defaultUser,
};

const adminAuthLogin = (state, payload) => {
    const { access_token: AccessToken, user } = payload;
    localStorage.setItem('admin_access_token', AccessToken);
    localStorage.setItem('admin', JSON.stringify(user));

    const stateObj = {
        ...state,
        isAdminAuthenticated: true,
        admin: user,
    };
    return stateObj;
};

const authLogin = (state, payload) => {
    const { access_token: AccessToken, user } = payload;
    localStorage.setItem('access_token', AccessToken);
    localStorage.setItem('user', JSON.stringify(user));

    const stateObj = {
        ...state,
        isAuthenticated: true,
        user,
    };
    return stateObj;
};

const checkAuth = (state) => {
    const stateObj = {
        ...state,
        isAuthenticated: !!localStorage.getItem('access_token'),
        user: JSON.parse(localStorage.getItem('user')),
    };

    return stateObj;
};

const checkAdminAuth = (state) => {
    const stateObj = {
        ...state,
        isAdminAuthenticated: !!localStorage.getItem('admin_access_token'),
        user: JSON.parse(localStorage.getItem('admin')),
    };
    
    return stateObj;
};

const logout = (state) => {
    localStorage.removeItem('access_token');
    localStorage.removeItem('user');
    // localStorage.clear();
    const stateObj = {
        ...state,
        isAuthenticated: false,
        user: defaultUser,
    };
    return stateObj;
};

const authAdminLogout = (state) => {
    localStorage.removeItem('admin_access_token');
    localStorage.removeItem('admin');
    // localStorage.clear();
    const stateObj = {
        ...state,
        isAdminAuthenticated: false,
        admin: defaultUser,
    };
    return stateObj;
};

const Auth = (state = initialState, { type, payload = null }) => {
    switch (type) {
        case ActionTypes.AUTH_ADMIN_LOGIN:
            return adminAuthLogin(state, payload);
        case ActionTypes.AUTH_LOGIN:
            return authLogin(state, payload);
        case ActionTypes.AUTH_CHECK:
            return checkAuth(state);
        case ActionTypes.AUTH_ADMIN_CHECK:
            return checkAdminAuth(state);
        case ActionTypes.AUTH_LOGOUT:
            return logout(state);
        case ActionTypes.AUTH_ADMIN_LOGOUT:
            return authAdminLogout(state);
        default:
            return state;
  }
};

export default Auth;
