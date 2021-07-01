import React, { Component } from 'react';
import { connect } from 'react-redux';
import axios from 'axios';
import { Link } from 'react-router-dom';
import { CCard, CCardBody, CCol, CRow, CCardHeader, CDataTable } from '@coreui/react'
import CIcon from '@coreui/icons-react'
import { freeSet } from '@coreui/icons'
import swal from 'sweetalert';


class Elements extends Component {
    constructor(props) {
        super(props);
        this.state = {
            fields: ['dropdown', 'name', 'up', 'down', { key: 'action', sorter: false, filter: false }],
            elements: [],
            _id: '',
            error: ''
        };

        this.listElements = this.listElements.bind(this);
        this.deleteElement = this.deleteElement.bind(this);
        this.upElement = this.upElement.bind(this);
        this.dowmElement = this.dowmElement.bind(this);
    }
    componentDidMount() {
        this.setState({ _id: this.props.match.params.id });
        this.listElements();
    }
    listElements() {
        let token = 'Bearer '+localStorage.getItem('admin_access_token');
        axios.get(`/api/v1/menu/element?menu=`+this.props.match.params.id, { headers: { authorization: token }}).then((response) => {
            this.setState({
                elements: response.data.menuToEdit,
                error: ''
            });
        }).catch(() => {
            this.setState({ error: 'Unable to fetch records.' })
        });
    }
    deleteElement(id) {
        swal({
            title: "Are you sure?",
            text: "Once deleted, you will not be able to recover this menu!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                let token = 'Bearer '+localStorage.getItem('admin_access_token');
                axios.get(`/api/v1/menu/element/delete?id=`+id, { headers: { authorization: token }}).then((response) => {
                    this.setState({
                        menus: response.data.menulist,
                        error: ''
                    });
                    this.listElements();
                }).catch(() => {
                    this.setState({ error: 'Unable to fetch records.' })
                });
            }
        });
    }
    upElement(id) {
        console.log(id)
        Http.get(`/api/v1/menu/element/move-up?id=`+id).then((response) => {
            if(response.data.success) {
                this.listElements();
            }
        }).catch(() => {
            this.setState({ error: 'Unable to move records.' })
        });
    }
    dowmElement(id) {
        Http.get(`/api/v1/menu/element/move-down?id=`+id).then((response) => {
            if(response.data.success) {
                this.listElements();
            }
        }).catch(() => {
            this.setState({ error: 'Unable to move records.' })
        });
    }

    render() {
        const { fields, elements, error, _id } = this.state;
        return (
            <div className="dashboard-content">
                <CCard>
                    <CCardHeader className="d-flex justify-content-between align-item-center">
                        <h4>Menus</h4>
                        <Link className="btn btn-primary" to={'/menu/element/'+_id+'/add'} href={'/menu/element/'+_id+'/add'}>
                            <CIcon content={freeSet.cilPlus}/> Create
                        </Link>
                    </CCardHeader>
                    <CCardBody>
                        {error && (
                            <div className="alert alert-warning" role="alert">
                                {error}
                            </div>
                        )}
                        <CRow>
                            <CCol col="12">
                                <CDataTable
                                    items={elements}
                                    fields={fields}
                                    itemsPerPage={10}
                                    pagination
                                    scopedSlots = {{
                                        'dropdown':
                                            (item)=>(
                                                <td>
                                                    {item.slug === "dropdown" && (
                                                        <CIcon content={freeSet.cilArrowThickToBottom} />
                                                    )}
                                                </td>
                                            ),
                                    
                                        'up':
                                            (item)=>(
                                                <td>
                                                   <a className="btn btn-primary text-white" onClick={() => this.upElement(item.id)}>Move <CIcon content={freeSet.cilArrowTop} /></a>
                                                </td>
                                            ),
                                    
                                        'down':
                                            (item)=>(
                                                <td>
                                                    <a className="btn btn-primary text-white" onClick={() => this.dowmElement(item.id)}>Move <CIcon content={freeSet.cilArrowBottom} /></a>
                                                </td>
                                            ),
                                    
                                        'action':
                                            (item)=>(
                                                <td>
                                                    <Link className="mr-1" to={'/menu/element/'+_id+'/edit/'+item.id} href={'/menu/edit/'+item.id}>
                                                        <CIcon content={freeSet.cilPencil}/>
                                                    </Link>
                                                    <a onClick={() => this.deleteElement(item.id)} className="text-danger mr-1"><CIcon content={freeSet.cilTrash} /></a>
                                                </td>
                                            )
                                    }}
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
    isAuthenticated: state.Auth.isAuthenticated,
    user: state.Auth.user,
});

export default connect(mapStateToProps)(Elements);
