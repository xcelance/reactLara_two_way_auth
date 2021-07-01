import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import CIcon from '@coreui/icons-react'
import { freeSet } from '@coreui/icons'
import axios from 'axios';

class GlobalSearch extends Component {
	constructor(props) {
        super(props);
        this.state = {
            gsearch: '',
            clients: [],
            invoices: [],
            proposals: [],
            show: false
        };
    }

    componentDidMount() {
        const that = this;
    }
    closeSearch = () => {
        this.setState({ clients: [], invoices: [], proposals: [], show: false });
    }
    searchValues = (value) => {
        let formdata = new FormData();
        formdata.append('searchval', value);

        axios.post(`/api/v1/global-search`, formdata).then((response) => {
            var _client = [], _invoice = [], _proposal = []; let status = false;
            let data = response.data.data;
            if(response.data.status && data) {
                _client = (data.clients)?data.clients:[];
                _invoice = (data.invoices)?data.invoices:[];
                _proposal = (data.proposals)?data.proposals:[];
                status = true;
            }
            this.setState({ clients: _client, invoices: _invoice, proposals: _proposal, show: status });
        });
    }
    render() {
        const { show, clients, invoices, proposals } = this.state;

    	return(
    		<div className="search-result-wrap">
                <input type="text" id="gsearch" name="gsearch" className="global-search" placeholder="Search.." />
                {show &&
                    <div className="gsearch-result">
                        <a className="close-gres" href="javascript:void(0);" onClick={this.closeSearch}>
                            <CIcon content={freeSet.cilX}/>
                        </a>
                        {proposals.length > 0 &&
                            <div className="search-result-outer proposals-search-result">
                                <div className="search-main-title">Proposals</div>
                                { proposals.map(function(proposal, i) {
                                    return (
                                        <div className="searchdata-list" key={i}>
                                            <Link to={proposal.link} href={proposal.link} target="_blank">{proposal.title}</Link>
                                        </div>
                                    );
                                })}
                            </div>
                        }

                        {clients.length > 0 &&
                            <div className="search-result-outer">
                                <div className="search-main-title">Clients</div>
                                { clients.map(function(client, j) {
                                    return (
                                        <div className="searchdata-list" key={j}>
                                            <Link to={client.link} href={client.link} target="_blank">{client.title}</Link>
                                        </div>
                                    );
                                })}
                            </div>
                        }

                        {invoices.length > 0 &&
                            <div className="search-result-outer">
                                <div className="search-main-title">Invoices</div>
                                { invoices.map(function(invoice, k) {
                                    return (
                                        <div className="searchdata-list" key={k}>
                                            <Link to={invoice.link} href={invoice.link} target="_blank">{invoice.title}</Link>
                                        </div>
                                    );
                                })}
                            </div>
                        }
                    </div>
                }
            </div>
    	)
    }
}

export default GlobalSearch