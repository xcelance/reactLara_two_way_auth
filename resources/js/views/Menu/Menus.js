import React, { Component } from 'react';
import { connect } from 'react-redux';
import axios from 'axios';
import { Link } from 'react-router-dom';
import { CCard, CCardBody, CCol, CRow, CCardHeader, CDataTable } from '@coreui/react'
import CIcon from '@coreui/icons-react'
import { freeSet } from '@coreui/icons'
import swal from 'sweetalert';


class Menus extends Component {
    constructor(props) {
        super(props);
        this.state = {
            fields: ['name', 'elements', { key: 'action', sorter: false, filter: false }],
            menus: [],
            error: '',
            success: ''
        };

        this.listMenus = this.listMenus.bind(this);
        this.deleteMenu = this.deleteMenu.bind(this);
    }
    componentDidMount() {
        this.listMenus();
    }
    listMenus() {
        let token = 'Bearer '+localStorage.getItem('admin_access_token');
        axios.get(`/api/v1/menu/menu`, { headers: { authorization: token }}).then((response) => {
            this.setState({
                menus: response.data.menulist,
                error: ''
            });
        }).catch(() => {
            this.setState({ error: 'Unable to fetch records.' })
        });
    }
    deleteMenu(id) {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this menu!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                AdminHttp.get(`/api/v1/menu/menu/delete?id=`+id).then((response) => {
                    if(response.data.success) {
                        this.listMenus();
                        this.setState({ success: 'Menu Deleted Successfully.', error: '' });
                    } else {
                        this.setState({ success: '', error: 'Something went wrong.' });
                    }
                }).catch(() => {
                    this.setState({ success: '', error: 'Unable to delete record.' });
                });
            }
        });
    }

    render() {
        const { fields, menus, error,success } = this.state;
        return (
            <div className="dashboard-content">
                <CCard>
                    <CCardHeader className="d-flex justify-content-between align-item-center">
                        <h4>Menus</h4>
                        <Link className="btn btn-primary" to='/admin/menu/add' href='/admin/menu/add'>
                            <CIcon content={freeSet.cilPlus}/> Create
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
                                <CDataTable
                                    items={menus}
                                    fields={fields}
                                    itemsPerPage={10}
                                    pagination
                                    scopedSlots = {{
                                        'name':
                                            (item)=>(
                                                <td>
                                                    {item.name}
                                                </td>
                                            ),
                                        'elements':
                                            (item)=>(
                                                <td>
                                                    <Link className="btn btn-primary mr-1" to={"/menu/element/"+item.id} href={'/menu/edit/'+item.id}>
                                                        Elements
                                                    </Link>
                                                </td>
                                            ),
                                        'action':
                                            (item)=>(
                                                <td>
                                                    <Link className="mr-1" to={'/menu/edit/'+item.id} href={'/menu/edit/'+item.id}>
                                                        <CIcon content={freeSet.cilPencil}/>
                                                    </Link>
                                                    <a onClick={() => this.deleteMenu(item.id)} className="text-danger mr-1"><CIcon content={freeSet.cilTrash} /></a>
                                                </td>
                                            )
                                    }
                                }
                                />
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

export default connect(mapStateToProps)(Menus);
