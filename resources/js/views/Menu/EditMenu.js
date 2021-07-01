import React, { Component } from 'react';
import { connect } from 'react-redux';
import axios from 'axios';
import { Link } from 'react-router-dom';
import { CCard, CCardBody, CCol, CRow, CCardHeader, CDataTable, CForm, CInput } from '@coreui/react'
import CIcon from '@coreui/icons-react'
import { freeSet } from '@coreui/icons'
import swal from 'sweetalert';


class EditMenu extends Component {
    constructor(props) {
        super(props);
        this.state = {
            name: '',
            _id: '',
            success: '',
            error: ''
        };

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }
    componentDidMount() {
        let token = 'Bearer '+localStorage.getItem('admin_access_token');
        axios.get(`/api/v1/menu/menu/edit?id=`+this.props.match.params.id, { headers: { authorization: token }}).then((response) => {
            this.setState({
                name: response.data.menulist.name,
                _id: response.data.menulist.id,
                error: ''
            })
        }).catch(() => {
            this.setState({ error: 'Unable to fetch records.' })
        });
    }

    handleChange = (e) => {
        const { name, value } = e.target;
        this.setState({ [name]: value });
    }
    handleSubmit = (e) => {
        let token = 'Bearer '+localStorage.getItem('admin_access_token');
        e.preventDefault();
        var formdata = new FormData();
        formdata.append('name', this.state.name);
        formdata.append('id', this.state._id);

        axios.post(`/api/v1/menu/menu/update`, formdata, { headers: { authorization: token }}).then((response) => {
            this.setState({
                success: 'Menu Edited Successfully.',
                error: '',
                name: ''
            })
        }).catch(() => {
            this.setState({ success: '', error: 'Unable to edit record.' })
        });
    }

    render() {
        const { name, error, success } = this.state;
        return (
            <div className="dashboard-content">
                <CCard>
                    <CCardHeader className="d-flex justify-content-between align-item-center">
                        <h4>Edit Menu - {name}</h4>
                        <Link className="btn btn-secondary" to='/admin/menu' href='/admin/menu'>
                            <CIcon content={freeSet.cilArrowLeft}/> Back
                        </Link>
                    </CCardHeader>
                    <CCardBody>
                        {success && (
                            <div className="alert alert-success" role="alert">
                                {success}
                            </div>
                        )}
                        {error && (
                            <div className="alert alert-danger" role="alert">
                                {error}
                            </div>
                        )}
                        <CRow>
                            <CCol col="12">
                                <CForm onSubmit={this.handleSubmit}>
                                    <div className="form-group">
                                        <label className="w-100" htmlFor="email">
                                            Name
                                            <input
                                                type="text"
                                                name="name"
                                                className='form-control'
                                                placeholder="Enter Name"
                                                required
                                                onChange={this.handleChange}
                                                value={name}
                                            />
                                        </label>
                                    </div>

                                    <div className="form-group text-center">
                                        <button type="submit" className='btn btn-primary' >
                                            Add
                                        </button>
                                    </div>
                                </CForm>
                            </CCol>
                        </CRow>
                    </CCardBody>
                </CCard>
            </div>
        );
    }
}

const mapStateToProps = (state) => ({
    isAdminAuthenticated: state.Auth.isAdminAuthenticated,
    user: state.Auth.admin,
});

export default connect(mapStateToProps)(EditMenu);
