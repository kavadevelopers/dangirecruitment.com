@extends('web.layouts.main')

@section('content')

<section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="10000" data-simulate-touch="true">
    <div class="swiper-wrapper text-center">
        <div class="swiper-slide" data-slide-bg="{{ url('themes/images/traning-slider-1.png') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">Welcome to Dangi Training<br>Your Gateway to a Successful Career in Accounting!</h2>
                            <p class="text-bigger slider-text text-center" data-caption-animate="fadeInUp" data-caption-delay="100"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" data-slide-bg="{{ url('themes/images/traning-slider-2.png') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s"></h2>
                            <p class="text-bigger slider-text text-center" data-caption-animate="fadeInUp" data-caption-delay="100"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" data-slide-bg="{{ url('themes/images/traning-slider-3.png') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s"></h2>
                            <p class="text-bigger slider-text text-center" data-caption-animate="fadeInUp" data-caption-delay="100"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-scrollbar"></div>
    <div class="swiper-nav-wrap">
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</section>



<section class="child-nav">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav gap-2">
                        <li class="nav-item rounded">
                            <a class="nav-link active" aria-current="page" href="#sub-courses"><i class="bi bi-house-fill me-2"></i>Courses</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#sub-whotakes"><i class="bi bi-people-fill me-2"></i>Topics</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#sub-why-choose-us"><i class="bi bi-telephone-fill me-2"></i>Why choose us</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#sub-certificate"><i class="bi bi-telephone-fill me-2"></i>Certification</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>

<div class="divider-spectrum"></div>
<section class="parallax-container bg-black" data-parallax-img="images/parallax-1.jpg" id="sub-courses">
    <div class="parallax-content">
        <div class="section-50 section-md-75 section-xl-top-100 section-xl-bottom-120">
            <div class="container">
                <div class="row justify-content-md-center">
                    <div class="col-md-11 col-lg-10 col-xl-9 text-center">
                        <h3><span>Certified</span><em>Expert Accountant</em><span>Course</span></h3>
                        <p>
                            
                        </p>
                    </div>
                </div>
                <div class="row row-40 row-xl-60 offset-xl-top-60">
                    <div class="col-md-6 col-lg-4">
                        <article class="icon-box-vertical">
                            <span class="novi-icon icon icon-primary icon-md material-icons-security"></span>
                            <h5 class="icon-box-header"><a href="#">Foundational Understanding</a></h5>
                            <p>Master the fundamentals of accounting, including practical working with Tally ERP 9 and other similar softwares.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="icon-box-vertical">
                            <span class="novi-icon icon icon-primary icon-md material-icons-build"></span>
                            <h5 class="icon-box-header"><a href="#">Taxation Expertise</a></h5>
                            <p>Gain insights into income tax, TDS, indirect tax (Goods & Service Tax), professional tax, PF, and ESI to handle diverse financial scenarios.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="icon-box-vertical">
                            <span class="novi-icon icon icon-primary icon-md fa fa-money"></span>
                            <h5 class="icon-box-header"><a href="#">Financial Management</a></h5>
                            <p>Learn about banking, MIS reporting, auditing, company law, and the essentials of import & export.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="icon-box-vertical">
                            <span class="novi-icon icon icon-primary icon-md material-icons-layers"></span>
                            <h5 class="icon-box-header"><a href="#">Soft Skills and Personality Development</a></h5>
                            <p>Develop not only technical expertise but also enhance your soft skills for professional success.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="icon-box-vertical">
                            <span class="novi-icon icon icon-primary icon-md material-icons-device_hub"></span>
                            <h5 class="icon-box-header"><a href="#">Job Assurance</a></h5>
                            <p>Our Certified Expert Accountant Course comes with a 100% job assurance guarantee.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <article class="icon-box-vertical">
                            <span class="novi-icon icon icon-primary icon-md fa fa-life-ring"></span>
                            <h5 class="icon-box-header"><a href="#">Online Live and Offline Courses Available</a></h5>
                            <p>Accessible from anywhere, our online courses provide flexibility with a computer setup to embark on your learning journey and also one can join us in person for a traditional classroom experience.</p>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-pink">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h3 class="text-center" style="margin-bottom: 50px;">Our Accounting Course Includes</h3>
                </div>
            </div>
            
            <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <div class="data-certification">
                            <ul class="list-unstyled p-0 m-0">
                                <li>Fundamental of Accounting</li>
                                <li>Learning and practical working with Tally ERP 9</li>
                                <li>Understanding income tax and TDS</li>
                                <li>Indirect tax (Goods & Service Tax)</li>
                                <li>Professional tax, PF and ESI</li>
                                <li>Banking</li>
                                <li>Soft skills and personality development</li>
                                <li>Auditing </li>
                                <li>Company law</li>
                                <li>Import & Export</li>
                                <li>MIS reporting</li>
                                <li>Overview of SAP</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                <img class="img-full" src="themes/images/Our-Accounting-Course-Includes.png" />
            </div>
    
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-whisperapprox ">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h3 class="text-center" style="margin-bottom: 50px;">Career Opportunities</h3>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-6 col-xl-12">
                <img class="img-full" src="themes/images/traning-career-opportu.jpg" />
            </div>
    
        </div>
    </div>
</section>

{{-- <section class="section">
    <div class="google-map-container">
        <img src="{{ url('temp/oppochunities.png') }}" style="width:100%;"/>
    </div>
</section> --}}

<section class="section-50 section-md-90 bg-pink" id="sub-whotakes">
    <div class="container text-center">
        <h3>Who can Take This Course</h3>
        <div class="row row-40 row-offset-3">
            <div class="col-md-6 col-lg-3 height-fill wow fadeInUp" data-wow-delay="0s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><img class="icon img-icon" src="themes/images/icons/entrepreneur.png" /></div>
                        <div class="box-header">
                            <h5><a href="#">Entrepreneurs</a></h5>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-3 height-fill wow fadeInUp" data-wow-delay="0s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><img class="icon img-icon" src="themes/images/icons/businessman.png" /></div>
                        <div class="box-header">
                            <h5><a href="#">Working Professional</a></h5>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-3 height-fill wow fadeInUp" data-wow-delay=".1s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><img class="icon img-icon" src="themes/images/icons/consultation.png" /></div>
                        <div class="box-header">
                            <h5><a href="#">Freelancer/Consultant</a></h5>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-3 height-fill wow fadeInUp" data-wow-delay=".2s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><img class="icon img-icon" src="themes/images/icons/graduated.png" /></div>
                        <div class="box-header">
                            <h5><a href="#">Students</a></h5>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-light-gray" >
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h3 class="text-center" style="margin-bottom: 50px;">What You Will Learn</h3>
                </div>
            </div>
        </div>  
        <div class="row">  
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <ul class="list-unstyled p-0 m-0">
                            <li>Maintaining books of accounts and journal diaries along with scrutinizing ledger, accounts reconciliation, finalizing accounts for different entities, and preparing accounting statements.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <ul class="list-unstyled p-0 m-0">
                            <li>Using Tally ERP to create, update and delete accounts and data entries. Learning to maintain books of account in the software along with other features, such as order processing, bill entry, TDS entry, and more.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <ul class="list-unstyled p-0 m-0">
                            <li>Computation of total income and tax liability and how to perform tax audit. Practical accounting training of filing returns, calculating interest, and making an online payment on the government websites.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <ul class="list-unstyled p-0 m-0">
                            <li>Understanding the core working of GST, such as registration, input tax credit, tax invoice, debit and credit note, payment of taxes and interest, levy of and exemption from tax, valuation rules, refund of taxes, valuation rules an e-way bill preparation.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <ul class="list-unstyled p-0 m-0">
                            <li>Registration of professional tax & shops. Calculating and e-filing of returns related to professional tax, maintaining records, and payroll processing.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <ul class="list-unstyled p-0 m-0">
                            <li>Understanding fundamentals of banking and its facilities, developing personal skills and workplace etiquettes, learning different concepts of audits and overall understanding of the duties and responsibilities of a certified corporate accountant.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-whisperapprox cus-why-choose" id="sub-why-choose-us">  
    <div class="container">
        <div class="row justify-content-sm-center justify-content-md-start">
            <div class="col-sm-10 col-md-6 text-start section-60 section-md-75">
                <div class="inset-right-30">
                    <div class="box-photo-frame d-block wow fadeIn" data-wow-delay="0s">
                        <div class="ratio">
                            <img class="ratio-item" src="themes/images/Why-Choose-Us-training.png" />
                        </div>
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay=".1s">
                        <div class="col-lg-1 d-none d-lg-inline-block"></div>
                        <div class="col-lg-10">
                            <blockquote class="quote-simple inset-lg-left-15">
                                Why Choose Us
                                <div class="quote-body">
                                    <q>Your Gateway to a Successful Career in Accounting!</q>
                                </div>
                            </blockquote>
                            <p class="text-dusty-gray"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 context-dark section-image-aside section-image-aside-right pos-relative-before-sm section-60 section-md-0 d-md-flex">
                <div class="section-image-aside-img" style="background-image: url({{ url('themes/images/bg-image-9.jpg') }})">
                    <div class="section-bordered-inside"></div>
                </div>
                <div class="row align-items-md-center offset-top-0">
                    <div class="col-lg-10 col-xl-9 to-front offset-md-1 offset-lg-2">
                        <div class="inset-lg-left-15">
                            <h3 class="wow fadeIn" data-wow-delay="0s">Why Choose Us</h3>
                            <div class="unit unit-spacing-md flex-sm-row wow fadeInRight" data-wow-delay=".1s">
                                <div class="unit-left"><span class="icon fa fa-comments"></span></div>
                                <div class="unit-body">
                                    <h6>Expert Faculty </h6>
                                    <p class="text-white-05">Learn from industry professionals and chartered accountants who bring real-world experience to the classroom.</p>
                                </div>
                            </div>
                            <div class="unit unit-spacing-md flex-sm-row wow fadeInRight" data-wow-delay=".2s">
                                <div class="unit-left"><span class="icon fa fa-briefcase"></span></div>
                                <div class="unit-body">
                                    <h6>Job Recruitment Services </h6>
                                    <p class="text-white-05">As a part of our commitment to your success, we offer HR recruitment services, ensuring you find the right job with the right salary.</p>
                                </div>
                            </div>
                            <div class="unit unit-spacing-md flex-sm-row wow fadeInRight" data-wow-delay=".3s">
                                <div class="unit-left"><span class="icon fa fa-globe"></span></div>
                                <div class="unit-body">
                                    <h6>Global Opportunities </h6>
                                    <p class="text-white-05">Explore offshore accountant services with job recruitments in countries like the UK, US, Australia, Canada, and more.</p>
                                </div>
                            </div>
                            <div class="unit unit-spacing-md flex-sm-row wow fadeInRight" data-wow-delay=".3s">
                                <div class="unit-body">
                                    <p class="text-white-05">We understand the challenges that individuals face in the accounting field and are here to bridge the gap with our comprehensive training programs. Our courses, led by expert faculties, including chartered accountants, are designed to take you from the fundamentals to advanced levels, ensuring you are well-equipped for practical job roles in the market.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-pink" id="sub-certificate">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h3 class="text-center" style="margin-bottom: 50px;">Dangi's Certification</h3>
                </div>
            </div>
            
            <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <div class="data-certification">
                            <h4>How Our Certification Can Help You</h4>
                            <p>Our certification will stand as proof that demonstrates the wealth of knowledge, competencies, and skills that you possess, which qualify you to practice taxation and accounting professionally.</p>
                            <ul class="list-unstyled p-0 m-0">
                                <li>Tax and accounting industry recognition</li>
                                <li>Improves credibility in the market</li>
                                <li>Better job opportunities</li>
                                <li>Higher payout</li>
                                <li>Exhibits high academic performance for further studies</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
                <img class="img-full" style="box-shadow: 1px 3px 9px rgba(0, 0, 0, 0.1);" src="themes/images/training-certificate.jpeg" />
            </div>
    
        </div>
    </div>
</section>

<section class="section-50 bg-whisper-1 section-lg-75 section-lg-90 section-xl-100">
    <div class="container">
        <div class="row align-items-lg-center">
            <div class="col-lg-6">
                <div class="video-wrap">
                    <figure><img class="img-responsive" src="themes/images/traning-Our-Verticals.png" width="571" height="378" alt=""></figure>
                    {{-- <a class="link-circle link-white" data-lightbox="iframe" href="https://www.youtube.com/watch?v=1UWpbtUupQQ"><span class="icon icon-xl fl-36-slim-icons-play90"></span></a> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="inset-xl-left-70 inset-xl-right-70">
                    <h3><span class="sub-head-small">Our Verticals</span></h3>
                    <div class="row text-cello">
                        <div class="col-md-12">
                            <ul class="list-marked-dotted">
                                <li class="mb-10"><strong>Accounting and Taxation Consultancy : </strong>Rely on our expertise for sound financial advice and efficient tax planning.</li>
                                <li class="mb-10"><strong>HR Recruitment Services : </strong>We connect skilled accountants with the right employers, fostering a mutually beneficial partnership.</li>
                                <li class="mb-10"><strong>Offshore Accountant Services : </strong>Join our elite team providing accounting services to clients around the globe.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-yellow">
    <div class="container">
        <h3 class="text-center">Testimonials</h3>
        <div class="owl-carousel owl-quote-bordered owl-nav-style-1" data-autoplay="true" data-items="1" data-lg-items="2" data-stage-padding="0" data-loop="true" data-margin="30" data-mouse-drag="true" data-dots-each="1" data-owl="{&quot;dots&quot;:true,&quot;nav&quot;:true,&quot;autoplayTimeout&quot;:3500}">
            <div class="item">
                <div class="inset-xl-left-60 inset-xl-right-40">
                    <blockquote class="quote-bordered">
                        <div class="quote-body">
                            <div class="quote-open">
                                <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                                    <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                </svg>
                            </div>
                            <div class="quote-body-inner">
                                <h6>Highly Professional Team</h6>
                                <p>
                                    <q>Working with TopInvest has been a great experience. An exceptional group of people who are well versed in all legal, accounting, and compliance aspects of fund administration for onshore or offshore funds. I would highly recommend.</q>
                                </p>
                            </div>
                        </div>
                        <div class="quote-footer">
                            <div class="unit flex-row unit-spacing-sm align-items-center">
                                <div class="unit-left"><img class="img-circle" src="themes/images/user.png" width="68" height="68" alt=""/>
                                </div>
                                <div class="unit-body">
                                    <cite class="">Emily Wilson</cite>
                                    <p class="text-primary">Top Manager</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
            <div class="item">
                <div class="inset-xl-left-60 inset-xl-right-40">
                    <blockquote class="quote-bordered">
                        <div class="quote-body">
                            <div class="quote-open">
                                <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                                    <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                </svg>
                            </div>
                            <div class="quote-body-inner">
                                <h6>Real Experts in Investment Management</h6>
                                <p>
                                    <q>These guys are efficient! From the first moment that I dealt with TopInvest I knew that they were real pros. They are asking the right questions, and when getting the answers they are on ball non-stop, providing an excellent service!</q>
                                </p>
                            </div>
                        </div>
                        <div class="quote-footer">
                            <div class="unit flex-row unit-spacing-sm align-items-center">
                                <div class="unit-left"><img class="img-circle" src="themes/images/user.png" width="68" height="68" alt=""/>
                                </div>
                                <div class="unit-body">
                                    <cite class="">Dennis Lewis</cite>
                                    <p class="text-primary">Civil Servant</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
            <div class="item">
                <div class="inset-xl-left-60 inset-xl-right-40">
                    <blockquote class="quote-bordered">
                        <div class="quote-body">
                            <div class="quote-open">
                                <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                                    <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                </svg>
                            </div>
                            <div class="quote-body-inner">
                                <h6>A Team of Dedicated Investment Specialists</h6>
                                <p>
                                    <q>It took me a while to find someone who could accomplish what I needed for my company. I have to say it was well worth the wait. TopInvest is a team of real professionals who showed their hard work, patience, and professionalism, and they far exceeded my expectations.</q>
                                </p>
                            </div>
                        </div>
                        <div class="quote-footer">
                            <div class="unit flex-row unit-spacing-sm align-items-center">
                                <div class="unit-left"><img class="img-circle" src="themes/images/user.png" width="68" height="68" alt=""/>
                                </div>
                                <div class="unit-body">
                                    <cite class="">Jack McGee</cite>
                                    <p class="text-primary">Founder, The Therapy</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
            <div class="item">
                <div class="inset-xl-left-60 inset-xl-right-40">
                    <blockquote class="quote-bordered">
                        <div class="quote-body">
                            <div class="quote-open">
                                <svg version="1.1" baseprofile="tiny" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37px" height="27px" viewbox="0 0 21 15" preserveAspectRatio="none">
                                    <path d="M9.597,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.349,1.316                    c-1.287,0-2.414-0.44-3.382-1.316C0.482,12.811,0,11.758,0,10.535c0-1.226,0.58-2.716,1.739-4.473L5.603,0H9.34L6.956,6.37                    C8.716,7.145,9.597,8.493,9.597,10.412z M20.987,10.412c0,1.306-0.473,2.399-1.418,3.277c-0.944,0.876-2.06,1.316-3.35,1.316                    c-1.288,0-2.415-0.44-3.381-1.316c-0.966-0.879-1.45-1.931-1.45-3.154c0-1.226,0.582-2.716,1.74-4.473L16.994,0h3.734l-2.382,6.37                    C20.106,7.145,20.987,8.493,20.987,10.412z"></path>
                                </svg>
                            </div>
                            <div class="quote-body-inner">
                                <h6>A Team of Dedicated Investment Specialists</h6>
                                <p>
                                    <q>It has been a pleasure to work with Meet Our Team of professional designers. The Reactive team was quick studies who learned about our complex business and market and created a web presence that we are all proud to call our own. Many thanks to all of you!</q>
                                </p>
                            </div>
                        </div>
                        <div class="quote-footer">
                            <div class="unit flex-row unit-spacing-sm align-items-center">
                                <div class="unit-left"><img class="img-circle" src="themes/images/user.png" width="68" height="68" alt=""/>
                                </div>
                                <div class="unit-body">
                                    <cite class="">Jill Miller</cite>
                                    <p class="text-primary">Artist</p>
                                </div>
                            </div>
                        </div>
                    </blockquote>
                </div>
            </div>
        </div>

    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-whisper-1">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h3 class="text-center" style="margin-bottom: 50px;">Dangi's Students in Companies</h3>
                </div>
            </div>
            
            <div class="col-md-12 col-sm-12">
                <img class="img-full" src="themes/images/companies-logo.jpg" />
            </div>
    
        </div>
    </div>
</section>

<section class="section section-60 section-md-top-90 section-md-bottom-100">
    <div class="container">
        <div class="row row-50 justify-content-md-between">
            <div class="col-lg-5 col-xl-4">
                <div class="inset-lg-right-15 inset-xl-right-0">
                    <div class="row row-30 row-md-40">
                        {{-- <div class="col-md-10 col-lg-12">
                            <h3>How to find us</h3>
                            <p class="offset-sm-top-40 text-secondary">
                                If you have any questions, just fill in the contact form, and we will answer you shortly. If you are living nearby, come visit Starbis in one of our comfortable offices.
                            </p>
                        </div> --}}
                        <div class="col-sm-12">
                            <div class="row row-30">
                                <div class="col-md-6 col-lg-12">
                                    <h5>Contact Information</h5>
                                    <address class="contact-info">
                                        <p class="text-uppercase">{!! nl2br(CommonHelper::getsetting('web_address')) !!}</p>
                                        <p class="text-uppercase">{!! nl2br(CommonHelper::getsetting('web_address2')) !!}</p>
                                        <br>
                                        <dl class="list-terms-inline">
                                            <dt>Mobile 1</dt>
                                            <dd><a class="link-secondary" href="tel:{{ CommonHelper::getsetting('web_mobile1') }}">{{ CommonHelper::getsetting('web_mobile1') }}</a></dd>
                                        </dl>
                                        @if (CommonHelper::getsetting('web_mobile2') != "")
                                            <dl class="list-terms-inline">
                                                <dt>Mobile 2</dt>
                                                <dd><a class="link-secondary" href="tel:{{ CommonHelper::getsetting('web_mobile2') }}">{{ CommonHelper::getsetting('web_mobile2') }}</a></dd>
                                            </dl>
                                        @endif
                                        <br>
                                        <dl class="list-terms-inline">
                                            <dt>E-mail</dt>
                                            <dd><a class="link-primary" href="mailto:{{ CommonHelper::getsetting('web_email') }}">{{ CommonHelper::getsetting('web_email') }}</a></dd>
                                        </dl>
                                    </address>
                                </div>
                                {{-- <div class="col-md-6 col-lg-12">
                                    <h5>Support Centre</h5>
                                    <address class="contact-info">
                                        <p class="text-uppercase">9870 ST VINCENT PLACE, GLASGOW, DC 45 FR 45</p>
                                        <dl class="list-terms-inline">
                                            <dt>Telephone</dt>
                                            <dd><a class="link-secondary" href="tel:#">+1 800 603 6035</a></dd>
                                        </dl>
                                        <dl class="list-terms-inline">
                                            <dt>E-mail</dt>
                                            <dd><a class="link-primary" href="mailto:#">mail@demolink.org</a></dd>
                                        </dl>
                                    </address>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-xl-6">
                <h3>Enquiry</h3>
                <form method="post" action="{{ url('contact-us') }}">
                    @csrf
                    <div class="row row-30">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Name <span class="-req">*</span></label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Name" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email <span class="-req">*</span></label>
                                <input type="email" name="email" class="form-control" placeholder="Enter Email" required/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone no.</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Phone no."/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Company</label>
                                <input type="text" name="company" class="form-control" placeholder="Enter Company"/>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Message</label>
                                <textarea name="message" class="form-control" placeholder="Enter Message" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row row-30 row-sm-50">
                        <div class="col-sm-12">
                            <button class="btn btn-primary btn-block" type="submit">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="google-map-container">
        <iframe class="" src="{{ CommonHelper::getsetting('contact_map_url') }}" frameborder="0" style="border:0; width: 100%; height: 384px; margin-bottom: -10px;" allowfullscreen=""></iframe>    
    </div>
</section>


<script>
    $(function(){
        $(document).on("scroll", onScroll);
        stickyOffset = $('.child-nav').offset().top;

        $(window).scroll(function(){
            sticky = $('.child-nav');
            scroll = $(window).scrollTop();

            if (scroll >= stickyOffset) {
                sticky.addClass('fixed');
            }else {
                sticky.removeClass('fixed');
            }
        });

        $('.readmore').click(function(e){
            e.preventDefault();
            $('.'+$(this).data('class')).toggleClass('height-auto');
            if($(this).html() == 'Read more'){
                $(this).html('Read less');
            }else{
                $(this).html('Read more');
            }
        });

        function onScroll(event){
            var scrollPos = $(document).scrollTop();
            $('.child-nav ul li a').each(function () {
                var currLink = $(this);
                var refElement = $(currLink.attr("href"));
                if (refElement.position().top <= (scrollPos + 150) && refElement.position().top + refElement.height() > scrollPos) {
                    $('.child-nav ul li a').removeClass("active");
                    currLink.addClass("active");
                }
                else{
                    currLink.removeClass("active");
                }
            });
        }
    })
</script>
@stop