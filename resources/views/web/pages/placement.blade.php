@extends('web.layouts.main')

@section('content')

<section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="10000" data-simulate-touch="true">
    <div class="swiper-wrapper text-center">
        <div class="swiper-slide" data-slide-bg="{{ url('themes/images/placement-slider-2.png') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">Great People. Great Jobs.<br>Amazing Outcomes.</h2>
                            <p class="text-bigger slider-text text-center" data-caption-animate="fadeInUp" data-caption-delay="100">Unlock the potential of your workforce with Dangi Recruitment, where expertise meets excellence. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="swiper-slide" data-slide-bg="{{ url('themes/images/global-slide1.jpg') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">Your Gateway to Quality Talent and Strategic Recruitment!</h2>
                            <p class="text-bigger slider-text text-center" data-caption-animate="fadeInUp" data-caption-delay="100">Specializing in accounting, we redefine placement services by connecting businesses with skilled professionals who not only understand software but possess a strong foundation in accounting fundamentals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
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
                            <a class="nav-link active" aria-current="page" href="#sub-ourservices"><i class="bi bi-house-fill me-2"></i>Our Services</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#sub-why-choose-us"><i class="bi bi-people-fill me-2"></i>Why Choose Us</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#sub-about"><i class="bi bi-telephone-fill me-2"></i>About</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#sub-how-we-operate"><i class="bi bi-telephone-fill me-2"></i>Our Onboard Process</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>

<section class="section-50 section-md-90" id="sub-ourservices">
    <div class="container text-center">
        <h3>Our Services</h3>
        <div class="row row-40 row-offset-3">
            <div class="col-md-6 col-lg-4 height-fill wow fadeInUp" data-wow-delay="0s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-primary icon-lg-bigger material-icons-remove_red_eye material-icons-device_hub"></span></div>
                        <div class="box-header">
                            <h5><a href="#">Accounting & Finance</a></h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="box-body">
                        <p class="text-gray-05">Comprehensive accounting professionals with a strong foundation in fundamentals</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4 height-fill wow fadeInUp" data-wow-delay=".1s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-primary icon-lg-bigger fa fa-briefcase"></span></div>
                        <div class="box-header">
                            <h5><a href="#">Sales & Marketing Executives</a></h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="box-body">
                        <p class="text-gray-05">Our Investment Management Services help you pursue your financial needs as they grow and change.</p>
                    </div>
                </article>
            </div>
            <div class="col-md-6 col-lg-4 height-fill wow fadeInUp" data-wow-delay=".2s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-primary icon-lg-bigger material-icons-supervisor_account"></span></div>
                        <div class="box-header">
                            <h5><a href="#">Admin & HR Executives</a></h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="box-body">
                        <p class="text-gray-05">This service offers a variety of benefits to boost your sales and suit your company’s fixed income.</p>
                    </div>
                </article>
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
                            <img class="ratio-item" src="themes/images/Why-Choose-Us-placement.png" />
                        </div>
                    </div>
                    <div class="row wow fadeInUp" data-wow-delay=".1s">
                        <div class="col-lg-1 d-none d-lg-inline-block"></div>
                        <div class="col-lg-10">
                            <blockquote class="quote-simple inset-lg-left-15">
                                Why Choose Us
                                <div class="quote-body">
                                    <q>Transforming Visions into Recruitments - Dangi Recruitment, Your Partner in Talent Excellence.</q>
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
                                <div class="unit-left"><span class="icon fa fa-filter"></span></div>
                                <div class="unit-body">
                                    <h6>Tailored Filtering</h6>
                                    <p class="text-white-05">We assess candidates to match pay scales and job roles.</p>
                                </div>
                            </div>
                            <div class="unit unit-spacing-md flex-sm-row wow fadeInRight" data-wow-delay=".2s">
                                <div class="unit-left"><span class="icon fa fa-star"></span></div>
                                <div class="unit-body">
                                    <h6>Quality Over Quantity</h6>
                                    <p class="text-white-05">We prioritize candidates committed to longer employment.</p>
                                </div>
                            </div>
                            <div class="unit unit-spacing-md flex-sm-row wow fadeInRight" data-wow-delay=".3s">
                                <div class="unit-left"><span class="icon fa fa-check-circle"></span></div>
                                <div class="unit-body">
                                    <h6>Expertise in Accountancy</h6>
                                    <p class="text-white-05">Leveraging our accounting background for precision recruitments.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-75 section-bottom-60 section-md-100 bg-default bg-image" style="background-image: url(themes/images/placement-about.png);" id="sub-about">
    <div class="container">
        <div class="row row-40 g-0 justify-content-center justify-content-md-end align-items-center">
            <div class="col-sm-10 col-md-7 col-lg-6 col-xl-5" style="max-width:430px;">
                <div class="box bg-cello section-relative">
                    <h3 class="text-white">About Us</h3>
                    <p class="text-white">At Dangi Recruitment, we stand out in the competitive world of recruitment services. With a background in accountancy, consultancy, and global offshoring, we understand the unique needs of both employers and candidates. Our mission is to provide filtered, knowledgeable accountants and professionals for the right roles, ensuring a perfect match that fosters growth.</p>
                    <ul class="list-marked">
                        <li class="text-white">Beyond Recruitments, Building Careers </li>
                        <li class="text-white">Dangi Recruitment, Where Your Success Begins.</li>
                        {{-- <li class="text-white">High Successful Recovery</li> --}}
                    </ul>
                    
                </div>
            </div>
            <div class="col-sm-10 col-md-4 col-lg-3 col-xl-2 box-list-xs">
                <div class="counter-boxed box-xs bg-cello text-center">
                    <div class="counter">570</div>
                    <div class="offset-top-5">
                        <p class="text-bismark text-center fw-sbold">Happy Clients</p>
                    </div>
                </div>
                <div class="counter-boxed box-xs bg-cello text-center">
                    <div class="counter">27</div>
                    <div class="offset-top-5">
                        <p class="text-bismark text-center fw-sbold">HR Recruiters</p>
                    </div>
                </div>
                <div class="counter-boxed box-xs bg-cello text-center">
                    <div class="counter">11</div>
                    <div class="offset-top-5">
                        <p class="text-bismark text-center fw-sbold" style="line-height:1.2;">Average Working Days to Hire</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-pink" id="sub-how-we-operate">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            
            <div class="col-md-12 col-xl-12 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h3 class="text-center">Our Onboard Process</h3>
                </div>
            </div>

            <div class="col-md-12 timeline-new">
                <div class="timeline">
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-play-circle"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Identify the Client Requirement</h4>
                            <div>
                                <p>Understanding your unique needs and expectations</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-thumbs-up"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Candidate Interaction</h4>
                            <div>
                                <p>Contacting and scheduling interviews promptly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-desktop"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Precise Screening</h4>
                            <div>
                                <p>Rigorous screening to ensure a match in professional capabilities and cultural fit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-cogs"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Candidate Priority</h4>
                            <div>
                                <p>Prioritizing candidates committed to longer employment.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-list"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Final Interview</h4>
                            <div>
                                <p>Conducting the final interview at the client's place.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-random"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Job Offer</h4>
                            <div>
                                <p>Presenting candidates with job offers from our esteemed clients.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-12 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h6 class="text-center">Seamless Onboarding – Your Success Journey Begins with Dangi Recruitment.</h6>
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

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-blue">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            
            <div class="col-md-12 col-xl-12 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h3 class="text-center">Locations we operate</h3>
                </div>
            </div>

            <div class="col-md-12 timeline-new">
                <img src="themes/images/map-01-01.jpg" />
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