@extends('web.layouts.main')

@section('content')
<section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="4000" data-simulate-touch="true">
    <div class="swiper-wrapper text-center">
        <div class="swiper-slide" data-slide-bg="{{ url('themes/images/aboutus.jpg') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">A Little Bit About Us</h2>
                            {{-- <h3 data-caption-animate="fadeInUp" data-caption-delay="0s">Gateway to Excellence in Accounting and Finance</h3> --}}
                            <p class="text-bigger slider-text text-center" data-caption-animate="fadeInUp" data-caption-delay="100">Dangi is more than a company; it's a commitment to excellence in the financial domain. Established with a passion for fostering financial success, Dangi has emerged as a leading player in the realms of accounting, taxation, and finance. With a focus on four core verticals, we bring a holistic approach to addressing the diverse needs of our clients and partners.</p>
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
{{-- <section class="container-fluid bg-yellow left-right" id="sub-it-data-security">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 col-no-padding">
            <img class="img-full" src="{{ url('themes/images/about-bottom.png') }}" />
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="inner default">
                <div class="inner">
                    <h2>A Little Bit About Us</h2>
                    <div>
                        <p>Dangi is more than a company; it's a commitment to excellence in the financial domain. Established with a passion for fostering financial success, Dangi has emerged as a leading player in the realms of accounting, taxation, and finance. With a focus on four core verticals, we bring a holistic approach to addressing the diverse needs of our clients and partners.</p>
                    </div>
                </div>
                <!-- end inner -->
            </div>
        </div>
        
    </div>
</section> --}}


<section class="section section-60 section-md-90 bg-image bg-image-1 novi-background" style="">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inset-md-left-30 inset-md-right-30">
                    <ul class="list-xl">
                        <li>
                            <article class="icon-box-horizontal">
                                <div class="unit unit-spacing-md">
                                    <div class="unit-left"><span class="novi-icon icon icon-primary icon-md fa-leanpub"></span></div>
                                    <div class="unit-body">
                                        <h3><a href="#">Our Vision</a></h3>
                                        <p class="font-16px">At Dangi, we envision a world where financial excellence propels businesses to unprecedented heights. Our vision is to be the premier catalyst in shaping global financial landscapes, fostering growth through expertise, innovation, and unwavering commitment. We aspire to create a lasting impact by empowering individuals, businesses, and communities with the knowledge and services needed for financial success on a global scale.</p>
                                    </div>
                                </div>
                            </article>
                        </li>
                        <li>
                            <article class="icon-box-horizontal">
                                <div class="unit unit-spacing-md">
                                    <div class="unit-left"><span class="novi-icon icon icon-primary icon-md fa fa-gg-circle"></span></div>
                                    <div class="unit-body">
                                        <h3><a href="#">Our Mission</a></h3>
                                        <p>Dangi's mission is to redefine the standards of excellence in the fields of accounting, taxation, and finance. We are dedicated to providing exceptional services across our four key verticals – Global, Consultancy, Training, and Recruitment. Our mission is to:</p>
                                        <div class="about-mission-child-item">
                                            <h5>Dangi Global</h5>
                                            <p class="font-16px">Facilitate seamless access to offshore talent, enabling businesses worldwide to thrive by leveraging our expertise in accounting, taxation, and finance.</p>
                                        </div>
                                        <div class="about-mission-child-item">
                                            <h5>Dangi Consultancy</h5>
                                            <p class="font-16px">Empower Indian businesses with comprehensive consultancy services, simplifying complex financial processes and paving the way for sustainable growth.</p>
                                        </div>
                                        <div class="about-mission-child-item">
                                            <h5>Dangi Training</h5>
                                            <p class="font-16px">Shape the future of the accounting profession by offering cutting-edge training programs. Our mission is to equip aspiring accountants with the skills and knowledge essential for success in the dynamic financial landscape.</p>
                                        </div>
                                        <div class="about-mission-child-item">
                                            <h5>Dangi Recruitment</h5>
                                            <p class="font-16px">Bridge the gap between businesses seeking top-notch accountants and talented professionals aiming for the perfect career recruitment. Our mission is to be the trusted matchmaker in the world of finance.</p>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-50 section-md-90 section-xl-bottom-120 bg-light-gray custom-home-services">
    <div class="container text-center">
        <h3>Our Core Values</h3>
        
        <div class="row justify-content-sm-center row-50">
            <div class="col-sm-6 col-lg-3 wow fadeInUpSmall">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="fa fa-trophy"></span></div>
                        <div class="box-header">
                            <h4><a href="#">Excellence</a></h4>
                        </div>
                    </div>
                    <div class="icon-box-divider"></div>
                    <div class="box-body">
                        <p class="text-center font-16px">We are committed to delivering services of the highest quality, exceeding expectations and setting new standards in the industry.</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInUpSmall" data-wow-delay="0.1s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="material-icons-perm_device_information"></span></div>
                        <div class="box-header">
                            <h4><a href="#">Integrity</a></h4>
                        </div>
                    </div>
                    <div class="icon-box-divider"></div>
                    <div class="box-body">
                        <p class="text-center font-16px">We operate with transparency, honesty, and ethical practices, building trust with our clients, partners, and employees.</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInUpSmall" data-wow-delay="0.2s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="material-icons-movie_creation"></span></div>
                        <div class="box-header">
                            <h4><a href="#">Innovation</a></h4>
                        </div>
                    </div>
                    <div class="icon-box-divider"></div>
                    <div class="box-body">
                        <p class="text-center font-16px">Embracing change and fostering a culture of continuous improvement, we strive to bring innovative solutions to the financial landscape.</p>
                    </div>
                </article>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeInUpSmall" data-wow-delay="0.3s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="material-icons-people"></span></div>
                        <div class="box-header">
                            <h4><a href="#">Collaboration</a></h4>
                        </div>
                    </div>
                    <div class="icon-box-divider"></div>
                    <div class="box-body">
                        <p class="text-center font-16px">We believe in the power of collaboration – internally and externally. By working together, we amplify our impact and achieve shared success.</p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>


<section class="section section-66 section-md-90 section-xl-bottom-120 bg-white" id="sub-how-we-operate">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            
            <div class="col-md-12 col-xl-12 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h3 class="text-center">Our Journey</h3>
                    <p class="text-center font-16px">Founded on the principles of expertise and commitment, Dangi embarked on a journey to redefine the dynamics of the financial sector. From our humble beginnings, we have evolved into a multifaceted organization with a global reach. Our journey is marked by a relentless pursuit of excellence and an unwavering dedication to the success of our clients and partners.</p>
                </div>
            </div>

            <div class="col-md-12 timeline-new">
                <div class="timeline">
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-globe"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Global Vertical - Connecting Talent Worldwide</h4>
                            <div>
                                <p class="font-16px">In our Global Vertical, we serve as a bridge between businesses seeking offshore talent and skilled professionals looking for global opportunities. Our vision is to create a network that transcends geographical boundaries, where the best minds in accounting, taxation, and finance converge to drive global success.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-briefcase"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Consultancy Vertical - Guiding Businesses to Success</h4>
                            <div>
                                <p class="font-16px">In the Consultancy Vertical, we take pride in being the strategic partner for Indian businesses. From assisting in business setup to navigating the intricacies of GST registrations and tax filings, we provide end-to-end consultancy services. Our mission is to simplify complex financial processes, enabling businesses to focus on their core competencies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-book"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Training Vertical - Shaping Future Accountants</h4>
                            <div>
                                <p class="font-16px">The Training Vertical at Dangi is dedicated to shaping the future of the accounting profession. Our comprehensive training programs are designed to equip individuals with the skills and knowledge needed to excel in the dynamic and competitive field of accounting. We believe in nurturing talent and empowering aspiring accountants to reach new heights in their careers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-users"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Recruitment Vertical - Connecting Talent with Opportunities</h4>
                            <div>
                                <p class="font-16px">In the Recruitment Vertical, we play a crucial role as the matchmaker between businesses in need of skilled accountants and professionals seeking the right career recruitment. Our meticulous filtering process ensures that businesses find the perfect fit, and candidates discover opportunities aligned with their skills and aspirations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>  

<section class="container-fluid bg-purple left-right" id="sub-it-data-security">
    <div class="row">
        
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="inner default">
                <div class="inner">
                    <h2>Dangi is not just a Company</h2>
                    <div>
                        <p>Dangi is not just a company; it's a commitment to excellence, a journey of growth, and a vision for a future where financial success knows no bounds. Our mission is to be the driving force behind global financial excellence, and our core values guide us in every step of this journey. As we continue to evolve and expand, our dedication to excellence, integrity, innovation, and collaboration remains unwavering. Join us on this journey towards financial excellence – where expertise meets opportunity, and success becomes a shared reality.</p>
                    </div>
                </div>
                <!-- end inner -->
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 col-no-padding">
            <img class="img-full" src="{{ url('themes/images/about-not-a-company.png') }}" />
        </div>
    </div>
</section>

@stop