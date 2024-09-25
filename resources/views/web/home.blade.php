@extends('web.layouts.main')

@section('content')

<section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="4000" data-simulate-touch="true">
    <div class="swiper-wrapper text-center">
        <div class="swiper-slide" data-slide-bg="{{ url('themes/images/home-slider1.jpg') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">Welcome to Dangi</h2>
                            <h3 data-caption-animate="fadeInUp" data-caption-delay="0s">Gateway to Excellence in Accounting and Finance</h3>
                            <p class="text-bigger slider-text text-center" data-caption-animate="fadeInUp" data-caption-delay="100">Feel the power of global expertise, consultancy finesse, training excellence, and recruitment perfection – all under one roof. Join Dangi for a journey that transforms careers and elevates businesses in the field of Accounting and Finance.</p>
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

<section class="container custom-home-icons" style="margin-top: 50px; margin-bottom: 100px;">
    <div class="row g-0 justify-content-sm-center justify-content-md-start row-40 row-sm-0">
        <div class="col-sm-10 col-md-6 height-fill">
            <article class="icon-box icon-box-top-line icon-box-hover">
                <div class="box-top">
                    <div class="box-icon"><span class="fa fa-globe"></span></div>
                    <div class="box-header">
                        <h3><a href="{{ url('global') }}">Dangi Global</a></h3>
                        <h5>Connecting Talent Worldwide</h5>
                    </div>
                </div>
                <div class="box-body">
                    <p class="text-black font-16px text-center">Unlocking offshore talent in Accounting, Taxation, and Finance. Dangi connects global businesses with expert professionals for seamless financial operations.</p>
                </div>
                <a class="btn btn-icon-only btn-icon-single btn-icon-default" href="{{ url('global') }}"><span class="icon icon-sm material-icons-arrow_forward"></span></a>
            </article>
        </div>
        <div class="col-sm-10 col-md-6 height-fill">
            <article class="icon-box icon-box-top-line icon-box-hover">
                <div class="box-top">
                    <div class="box-icon"><span class="fa fa-briefcase"></span></div>
                    <div class="box-header">
                        <h3><a href="{{ url('consultancy/business-setup') }}">Dangi Consultancy</a></h3>
                        <h5>Guiding Businesses to Success</h5>
                    </div>
                </div>
                <div class="box-body">
                    <p class="text-black font-16px text-center">Empowering Indian clients with business setup, GST registrations, tax filing, and comprehensive consultancy services in Accounting and Finance.</p>
                </div>
                <a class="btn btn-icon-only btn-icon-single btn-icon-default" href="{{ url('consultancy/business-setup') }}"><span class="icon icon-sm material-icons-arrow_forward"></span></a>
            </article>
        </div>
        <div class="col-sm-10 col-md-6 height-fill">
            <article class="icon-box icon-box-top-line icon-box-hover">
                <div class="box-top">
                    <div class="box-icon"><span class="fa fa-book"></span></div>
                    <div class="box-header">
                        <h3><a href="{{ url('training') }}">Dangi Training</a></h3>
                        <h5>Shaping Future Accountants</h5>
                    </div>
                </div>
                <div class="box-body">
                    <p class="text-black font-16px text-center">Shape your accounting career with Dangi's specialized training programs. Learn accounting and bookkeeping skills, preparing candidates for success in the dynamic world of finance.</p>
                </div>
                <a class="btn btn-icon-only btn-icon-single btn-icon-default" href="{{ url('training') }}"><span class="icon icon-sm material-icons-arrow_forward"></span></a>
            </article>
        </div>
        <div class="col-sm-10 col-md-6 height-fill">
            <article class="icon-box icon-box-top-line icon-box-hover">
                <div class="box-top">
                    <div class="box-icon"><span class="fa fa-users"></span></div>
                    <div class="box-header">
                        <h3><a href="{{ url('recruitment') }}">Dangi Recruitment</a></h3>
                        <h5>Connecting Talent with Opportunities</h5>
                    </div>
                </div>
                <div class="box-body">
                    <p class="text-black font-16px text-center">Dangi specializes in placing top-notch accountants. We filter and facilitate candidates, ensuring they find the right position while providing companies with skilled professionals.</p>
                </div>
                <a class="btn btn-icon-only btn-icon-single btn-icon-default" href="{{ url('recruitment') }}"><span class="icon icon-sm material-icons-arrow_forward"></span></a>
            </article>
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
<section class="section section-60 section-md-100 novi-background bg-black custom-home-counter">
    <div class="container text-center">
        <h3>Our Company in Numbers</h3>
        <div class="row row-40">
            <div class="col-sm-6 col-md-3">
                <div class="box-counter">
                    <span class="novi-icon icon icon-md icon-primary material-icons-mood"></span>
                    <div class="text-large counter">3000+</div>
                    <h5 class="box-header">Trusted Clients</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter">
                    <span class="novi-icon icon icon-md icon-primary material-icons-content_copy"></span>
                    <div class="text-large counter counter">110+</div>
                    <h5 class="box-header">Types of Services</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter">
                    <span class="novi-icon icon icon-md icon-primary material-icons-access_time"></span>
                    <div class="text-large counter">15+</div>
                    <h5 class="box-header">Years of Experience</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter">
                    <span class="novi-icon icon icon-md icon-primary material-icons-code"></span>
                    <div class="text-large counter counter">4</div>
                    <h5 class="box-header">Business Verticals</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-50 section-md-90 section-md-bottom-100 custom-home-blogs">
    <div class="container text-center">
        <h3>Blogs</h3>
        <div class="row row-40 row-offset-6 justify-content-sm-center">
            @foreach ($list as $item)
                <div class="col-sm-8 col-md-5 col-xl-3 wow fadeInUp" data-wow-delay="0s">
                    <div class="post-boxed d-xl-inline-block">
                        <div class="post-boxed-img-wrap"><a href="{{ url('blog/'.$item->slug) }}"><img src="{{ CommonHelper::getBlogBanner($item->banner) }}" alt="" width="268" height="179"/></a></div>
                        <div class="post-boxed-caption">
                            <div class="post-boxed-title fw-bold"><a href="{{ url('blog/'.$item->slug) }}">{{ CommonHelper::read_more_hide($item->title,45) }}</a></div>
                            <ul class="list-inline list-inline-dashed text-uppercase font-accent">
                                <li>{{ CommonHelper::dateFormat($item->created_at,'d M Y') }}</li>
                                <li><span>by <a class="link-primary" href="{{ url('blog/'.$item->slug) }}">{{ CommonHelper::read_more_hide($item->posted_by,15) }}</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@stop