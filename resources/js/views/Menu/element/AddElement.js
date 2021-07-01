import React, { Component } from 'react';
import { connect } from 'react-redux';
import axios from 'axios';
import { Link } from 'react-router-dom';
import { CCard, CCardBody, CCol, CRow, CCardHeader, CDataTable, CForm, CInput, CInputCheckbox } from '@coreui/react'
import CIcon from '@coreui/icons-react'
import { freeSet } from '@coreui/icons'
import swal from 'sweetalert';


class AddElement extends Component {
    constructor(props) {
        super(props);
        this.state = {
            menus: [],
            roles: [],
            dropdowns: [],
            role: [],
            types: [
                {label: 'Link', value: 'link'},
                {label: 'Title', value: 'title'},
                {label: 'Dropdown', value: 'dropdown'},
            ],
            name: '',
            dropdown: '',
            href: '',
            icons: '',
            element: 0,
            _id: '',
            type: 'link',
            error: '',
            success: '',
            DropdownParent: true,
            divHref: true
        };

        this.getParents = this.getParents.bind(this);
        this.radioSelectRole = this.radioSelectRole.bind(this);
        this.handleMenuChange = this.handleMenuChange.bind(this);
        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }
    componentDidMount() {
        let token = 'Bearer '+localStorage.getItem('admin_access_token');
        this.setState({ _id: this.props.match.params.id });
        axios.get(`/api/v1/menu/element/create?id=`+this.props.match.params.id, { headers: { authorization: token }}).then((response) => {
            this.setState({
                menus: response.data.menulist,
                roles: response.data.roles
            })
        }).catch(() => {
            this.setState({ error: 'Unable to fetch records.' })
        });
        this.getParents();
    }
    radioSelectRole(role){
        let temp = this.state.role.indexOf(role); 
        if (temp > -1) {
            this.state.role.splice(temp, 1);
        }else{
            this.state.role.push(role);
        }
    }
    getParents(id=0) {
        let token = 'Bearer '+localStorage.getItem('admin_access_token');
        axios.get(`/api/v1/menu/element/get-parents?menu=`+id, { headers: { authorization: token }}).then((response) => {
            this.setState({
                dropdowns: response.data
            })
        }).catch(() => {
            this.setState({ error: 'Unable to fetch records.' })
        });
    }

    handleChange = (e) => {
        const { name, value } = e.target;
        this.setState({ [name]: value });
    }
    handleMenuChange = (e) => {
        const { name, value } = e.target;
        this.setState({ [name]: value });
        this.getParents(value);
    }
    changeType = (e) => {
        const { name, value } = e.target;
        this.setState({ [name]: value });
        if(value == 'title') {
            this.setState({ 
                divHref: false,
                DropdownParent: false
            });
        }else if(value == 'link') {
            this.setState({ 
                divHref: true,
                DropdownParent: true
            });
        } else {
            this.setState({ 
                divHref: false,
                DropdownParent: true
            });
        }
    }
    handleSubmit = (e) => {
        let token = 'Bearer '+localStorage.getItem('admin_access_token');
        e.preventDefault();
        var formdata = new FormData();
        formdata.append('menu', this.state.element);
        formdata.append('name', this.state.name);
        formdata.append('type', this.state.type);
        for (var i = this.state.role.length - 1; i >= 0; i--) {
            formdata.append('role['+i+']', this.state.role[i]);
        }
        formdata.append('href', this.state.href);
        formdata.append('icon', this.state.icons);
        formdata.append('parent', this.state.dropdown);
        
        axios.post(`/api/v1/menu/element/store`, formdata, { headers: { authorization: token }}).then((response) => {
            if(response.data.success) {
                this.setState({
                    error: '',
                    success: 'Added element sucessfully.'
                });
            } else {
                this.setState({
                    error: 'Something went wrong',
                    success: ''
                });
            }
        }).catch(() => {
            this.setState({ error: 'Unable to fetch records.' })
        });
    }

    render() {
        const that = this;
        const { menus, roles, error, success, _id, types, dropdowns } = this.state;
        return (
            <div className="dashboard-content">
                <CCard>
                    <CCardHeader className="d-flex justify-content-between align-item-center">
                        <h4>Add New Element</h4>
                        <Link className="btn btn-secondary" to={'/menu/element/'+_id} href={'/menu/element/'+_id}>
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
                                        <label className="w-100">
                                            Select Menu
                                            <select name="element" className="form-control" required onChange={this.handleMenuChange}>
                                                <option value="">-- Select Element --</option>
                                                { menus.map(function(menu, index) {
                                                    return <option key={ index } value={menu.value}>{menu.label}</option>;
                                                })}
                                            </select>
                                        </label>
                                    </div>
                                    <div className="form-group">
                                        <label className="w-100">
                                            Select Roles
                                            { roles.map(function(rol, index) {
                                                return <div className="roles-div" key={index}>
                                                    <input
                                                        type="checkbox"
                                                        onChange={() => that.radioSelectRole(rol) }
                                                    />
                                                    <label>{rol}</label>
                                                </div>
                                            })} 
                                        </label>
                                    </div>
                                    <div className="form-group">
                                        <label className="w-100">
                                            Name
                                            <input
                                                type="text"
                                                name="name"
                                                className='form-control'
                                                placeholder="Enter Name"
                                                required
                                                onChange={this.handleChange}
                                            /> 
                                        </label>
                                    </div>
                                    <div className="form-group">
                                        <label className="w-100">
                                            Types
                                            <select name="type" className="form-control" value={this.state.type} onChange={this.changeType}>
                                                <option value="">-- Select Type --</option>
                                                { types.map(function(type, index) {
                                                    return <option key={ index } value={type.value}>{type.label}</option>;
                                                })}
                                            </select>
                                        </label>
                                    </div>

                                    <p>Other</p>
                                    { this.state.divHref == true && (
                                        <div className="form-group">
                                            <label className="w-100">
                                                Href
                                                <input
                                                    type="text"
                                                    name="href"
                                                    className='form-control'
                                                    placeholder="Href"
                                                    onChange={this.handleChange}
                                                /> 
                                            </label>
                                        </div>
                                    )}
                                    { this.state.DropdownParent == true && (
                                        <div className="form-group">
                                            <label className="w-100">
                                                Dropdown parent 
                                                <select name="dropdown" className="form-control" onChange={this.handleChange}>
                                                    <option value="">-- Has no parent  --</option>
                                                    { dropdowns.map(function(drops, index) {
                                                        return <option key={ index } value={drops.value}>{drops.label}</option>;
                                                    })}
                                                </select>
                                            </label>
                                        </div>
                                    )}
                                    <div className="form-group">
                                        <label className="w-100">
                                            Icon
                                            <input
                                                type="text"
                                                name="icons"
                                                className='form-control'
                                                placeholder="Icon"
                                                onChange={this.handleChange}
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
    isAuthenticated: state.Auth.isAuthenticated,
    user: state.Auth.user,
});

export default connect(mapStateToProps)(AddElement);
