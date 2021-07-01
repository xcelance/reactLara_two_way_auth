import React, { Component } from 'react';
import { connect } from 'react-redux';
import axios from 'axios';

import { CCard, CCardBody, CCol, CRow, CContainer, CButton, CForm, CInput, CLink } from '@coreui/react'
import banner from '../../assets/images/girls.jpg'; 
import bannert from '../../assets/images/girls.jpg';
import mentalhealth from '../../assets/images/mental-health.png';
import wave from '../../assets/images/wave.png';
import videoimg from '../../assets/images/video.png';
import sensoryimg from '../../assets/images/sensory-img.png';
import opensch from '../../assets/images/open-sch.png';
import { FaSearch } from 'react-icons/fa';
import { BsQuestionCircleFill } from 'react-icons/bs';
import { AiFillStar } from 'react-icons/ai';

class Home extends Component {
    constructor(props) {
        super(props);
        this.state = {};
    }

    componentDidMount() {}
    render() {
        return (
            <div className="home-content">
                <section className="home-banner">
                    <CContainer>
                      <CRow>
                        <CCol md={12}>
                          <div className="banner-img">
                            <CButton className="btn-yellow btn-custom" color="secondary">Hear from other Wirral families</CButton>
                              <img src={banner} className="w-100" />
                              <div className="home-form">
                                <h2 className="mb-3">What are you looking for today?</h2>
                                <CForm className="form-home">
                                  <div className="mb-3">
                                    <CInput
                                      type="email"
                                      id="exampleFormControlInput1"
                                      placeholder="Search for keywords, online resources and organisations..."
                                    />
                                    <CButton className="btn-yellow btn-circle" color="secondary"><FaSearch /></CButton>
                                  </div>
                                </CForm>
                                <div className="bottom-form">
                                    <p><span>< BsQuestionCircleFill /></span>Unsure where to start? <br />Take a quick quiz so we can help you find what you're looking for!</p>
                                </div>
                              </div>
                          </div>
                        </CCol>
                      </CRow>
                    </CContainer>
                </section>
                <section className="popular-cat-sec">
                    <CContainer>
                      <CRow className="align-items-center">
                        <CCol md={4}>
                            <div className="outer-main-title title-with-img">
                                <h2>Popular Categories</h2>
                            </div>
                        </CCol>
                        <CCol md={8}>
                            <div className="cat-outer">
                                <div className="cat-inner">
                                    <div className="cat-shapes yellow-bg clip-path">
                                        <img src={mentalhealth} className="" />
                                    </div>
                                    <p>Mental Health</p>
                                </div>
                                <div className="cat-inner">
                                    <div className="cat-shapes purple-bg clip-path">
                                        <img src={mentalhealth} className="" />
                                    </div>
                                    <p>New Mum</p>
                                </div>
                                <div className="cat-inner">
                                    <div className="cat-shapes skyblue-bg clip-path">
                                        <img src={mentalhealth} className="" />
                                    </div>
                                    <p>Additional Needs</p>
                                </div>
                                <div className="cat-inner">
                                    <div className="cat-shapes yellow-bg clip-path">
                                        <img src={mentalhealth} className="" />
                                    </div>
                                    <p>Relationships</p>
                                </div>
                                <div className="cat-inner">
                                    <div className="cat-shapes purple-bg clip-path">
                                        <img src={mentalhealth} className="" />
                                    </div>
                                    <p>Drug and alcohol</p>
                                </div>
                            </div>
                        </CCol>
                      </CRow>
                    </CContainer>
                </section>
                <section className="popular-week-sec">
                    <CContainer>
                      <CRow className="mb-3">
                        <CCol md={4}>
                            <div className="outer-main-title title-with-img">
                                <h2>Popular this week</h2>
                            </div>
                        </CCol>
                        <CCol md={8}>
                            <div className="viewall-div">
                                <CLink className="" href="" target="">View all ></CLink>
                                  
                            </div>
                        </CCol>
                      </CRow>
                      <CRow>
                        <CCol md={6} className="mb-3">
                            <div className="video-sec">
                                <div className="video-part">
                                    <img src={videoimg} />
                                    <span className="skyblue-bg">Video</span>
                                </div>
                                <div className="right-part">
                                    <h3>Substance Abuse and Young Adults</h3>
                                    <p>Substance abuswe in young adults can be something that can effect families in many different ways. It is important to try get an understanding before you try force any kind...</p>
                                    <div className="viewall-div text-left">
                                        <CLink className="" href="" target="">Duration: 5 mins</CLink>
                                    </div>
                                    <span className="star-icon">< AiFillStar /></span>
                                </div>
                            </div>
                        </CCol>
                        <CCol md={6} className="mb-3">
                            <div className="video-sec">
                                <div className="video-part">
                                    <img src={videoimg} />
                                    <span className="skyblue-bg">Video</span>
                                </div>
                                <div className="right-part">
                                    <h3>Substance Abuse and Young Adults</h3>
                                    <p>Substance abuswe in young adults can be something that can effect families in many different ways. It is important to try get an understanding before you try force any kind...</p>
                                    <div className="viewall-div text-left">
                                        <CLink className="" href="" target="">Duration: 5 mins</CLink>
                                    </div>
                                    <span className="star-icon">< AiFillStar /></span>
                                </div>
                            </div>
                        </CCol>
                        <CCol md={6}>
                            <div className="video-sec">
                                <div className="video-part">
                                    <img src={videoimg} />
                                    <span className="red-bg">PDF</span>
                                </div>
                                <div className="right-part">
                                    <h3>Substance Abuse and Young Adults</h3>
                                    <p>Substance abuswe in young adults can be something that can effect families in many different ways. It is important to try get an understanding before you try force any kind...</p>
                                    <div className="viewall-div text-left">
                                        <CLink className="" href="" target="">Duration: 5 mins</CLink>
                                    </div>
                                    <span className="star-icon">< AiFillStar /></span>
                                </div>
                            </div>
                        </CCol>
                        <CCol md={6}>
                            <div className="video-sec">
                                <div className="video-part">
                                    <img src={videoimg} />
                                    <span className="skyblue-bg">Video</span>
                                </div>
                                <div className="right-part">
                                    <h3>Substance Abuse and Young Adults</h3>
                                    <p>Substance abuswe in young adults can be something that can effect families in many different ways. It is important to try get an understanding before you try force any kind...</p>
                                    <div className="viewall-div text-left">
                                        <CLink className="" href="" target="">Duration: 5 mins</CLink>
                                    </div>
                                    <span className="star-icon">< AiFillStar /></span>
                                </div>
                            </div>
                        </CCol>
                      </CRow>
                    </CContainer>
                </section>
                <section className="near-sec">
                    <CContainer>
                      <CRow className="align-items-center">
                        <CCol md={4}>
                            <div className="outer-main-title title-with-img mb-4">
                                <h2>Please near me</h2>
                            </div>
                        </CCol>
                      </CRow>
                      <CRow>
                        <CCol md={3}>
                            <div className="sensoryroom-outer">
                                <img src={sensoryimg} className="w-100" />
                                <h3>Sensory Rooms</h3>
                            </div>
                        </CCol>
                        <CCol md={3}>
                            <div className="sensoryroom-outer">
                                <img src={sensoryimg} className="w-100" />
                                <h3>Sensory Rooms</h3>
                            </div>
                        </CCol>
                        <CCol md={3}>
                            <div className="sensoryroom-outer">
                                <img src={sensoryimg} className="w-100" />
                                <h3>Sensory Rooms</h3>
                            </div>
                        </CCol>
                        <CCol md={3}>
                            <div className="sensoryroom-outer">
                                <img src={sensoryimg} className="w-100" />
                                <h3>Sensory Rooms</h3>
                            </div>
                        </CCol>
                      </CRow>
                      <CRow className="align-items-center">
                        <CCol md={8}>
                            <div className="outer-main-title title-with-img mb-4 mt-5">
                                <h2>Find resources and services based on age range</h2>
                            </div>
                        </CCol>
                      </CRow>
                      <CRow>
                        <CCol>
                            <div className="skyblue-bg resources-div">
                                <h2 className="text-white">Babies</h2>
                            </div>
                        </CCol>
                        <CCol>
                            <div className="yellow-bg resources-div">
                                <h2 className="text-white">Children</h2>
                            </div>
                        </CCol>
                        <CCol>
                            <div className="skyblue-bg resources-div">
                                <h2 className="text-white">Teenagers</h2>
                            </div>
                        </CCol>
                        <CCol>
                            <div className="yellow-bg resources-div">
                                <h2 className="text-white">Young Adults</h2>
                            </div>
                        </CCol>
                        <CCol>
                            <div className="skyblue-bg resources-div">
                                <h2 className="text-white">Young and Carers</h2>
                            </div>
                        </CCol>
                      </CRow>
                    </CContainer>
                </section>
                <section className="popular-week-sec center-section">
                    <CContainer>
                      <CRow className="mb-3">
                        <CCol md={8}>
                            <div className="outer-main-title">
                                <h2>After-school Centers for children with disabilities...</h2>
                                <h4>Tailored for you</h4>
                            </div>
                        </CCol>
                        <CCol md={4}>
                            <div className="viewall-div">
                                <CLink className="" href="" target="">View all ></CLink>
                                  
                            </div>
                        </CCol>
                      </CRow>
                      <CRow>
                        <CCol md={6} className="mb-3">
                            <div className="video-sec">
                                <div className="video-part">
                                    <img src={opensch} />
                                    <span className="school-open-sec">Open Now</span>
                                </div>
                                <div className="right-part">
                                    <h3>Substance Abuse and Young Adults</h3>
                                    <p>Substance abuswe in young adults can be something that can effect families in many different ways. It is important to try get an understanding before you try force any kind...</p>
                                    <div className="number-div text-left">
                                        <CLink className="" href="" target="">Duration: 5 mins</CLink>
                                    </div>
                                    <span className="star-icon">< AiFillStar /></span>
                                </div>
                            </div>
                        </CCol>
                      </CRow>
                    </CContainer>
                </section>
            </div>
        );
    }
}

const mapStateToProps = (state) => ({
    isAuthenticated: state.Auth.isAuthenticated,
    user: state.Auth.user,
});

export default connect(mapStateToProps)(Home);
