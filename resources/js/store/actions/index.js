import * as ActionTypes from '../action-types';

export function adminAuthLogin(payload) {
    return {
        type: ActionTypes.AUTH_ADMIN_LOGIN,
        payload,
    };
}

export function authLogin(payload) {
    return {
        type: ActionTypes.AUTH_LOGIN,
        payload,
    };
}

export function authLogout() {
    return {
        type: ActionTypes.AUTH_LOGOUT,
    };
}

export function authAdminLogout() {
    return {
        type: ActionTypes.AUTH_ADMIN_LOGOUT,
    };
}

export function authCheck() {
    return {
        type: ActionTypes.AUTH_CHECK,
    };
}

export function authAdminCheck() {
    return {
        type: ActionTypes.AUTH_ADMIN_CHECK,
    };
}