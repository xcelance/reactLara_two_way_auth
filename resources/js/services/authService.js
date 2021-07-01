import axios from 'axios';
import * as action from '../store/actions';

export function login(credentials) {
  return (dispatch) => new Promise((resolve, reject) => {
    axios.post('/api/v1/auth/login', credentials)
      .then((res) => {
        dispatch(action.authLogin(res.data));
        return resolve();
      })
      .catch((err) => {
        const { status, errors } = err.response.data;
        const data = {
          status,
          errors,
        };
        return reject(data);
      });
  });
}

export function adminLogin(credentials) {
  return (dispatch) => new Promise((resolve, reject) => {
    axios.post('/api/v1/auth/login', credentials)
      .then((res) => {
        dispatch(action.adminAuthLogin(res.data));
        return resolve();
      })
      .catch((err) => {
        const { status, errors } = err.response.data;
        const data = {
          status,
          errors,
        };
        return reject(data);
      });
  });
}

export function logout() {
  return (dispatch) => new Promise((resolve, reject) => {
    axios.get('/api/v1/auth/logout')
      .then((res) => {
        dispatch(action.authLogout(res.data));
        return resolve();
      })
      .catch((err) => {
        const { status, errors } = err.response.data;
        const data = {
          status,
          errors,
        };
        return reject(data);
      });
  });
}

export function adminLogout() {
  return (dispatch) => new Promise((resolve, reject) => {
    axios.get('/api/v1/auth/logout')
      .then((res) => {
        dispatch(action.authAdminLogout(res.data));
        return resolve();
      })
      .catch((err) => {
        const { status, errors } = err.response.data;
        const data = {
          status,
          errors,
        };
        return reject(data);
      });
  });
}