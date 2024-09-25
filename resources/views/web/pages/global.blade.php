@extends('web.layouts.main')

@section('content')

<section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="10000" data-simulate-touch="true">
    <div class="swiper-wrapper text-center">
        <div class="swiper-slide" data-slide-bg="{{ url('themes/images/global-slide3.jpg') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">Your Team. Your Way.</h2>
                            <p class="text-bigger slider-text text-center" data-caption-animate="fadeInUp" data-caption-delay="100">Unlocking offshore talent in Accounting, Taxation, and Finance. Dangi connects global businesses with expert professionals for seamless financial operations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide" data-slide-bg="{{ url('themes/images/global-slide1.jpg') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">Facilitate Seamless Access To Offshore Talent</h2>
                            <p class="text-bigger slider-text text-center" data-caption-animate="fadeInUp" data-caption-delay="100">Enabling businesses worldwide to thrive by leveraging our expertise.</p>
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
                            <a class="nav-link active" aria-current="page" href="#sub-offshoring"><i class="bi bi-house-fill me-2"></i>Offshoring</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#sub-hire-offshore-talant"><i class="bi bi-people-fill me-2"></i>Hire Offshore Talent</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#sub-how-we-operate"><i class="bi bi-telephone-fill me-2"></i>How We Operate</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" href="#sub-it-data-security"><i class="bi bi-telephone-fill me-2"></i>It & Data Security</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>


<section class="bg-light-gray" id="sub-offshoring">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            <div class="col-md-6 col-xl-6 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <br>
                    <h3>Traditional Offshoring</h3>
                    <h5 class="text-secondary"><i>Unlock Global Talent, Optimize Costs</i></h5>
                    <p style="font-size:16px;">In our traditional offshoring model, we offer a dynamic solution where your accounting firm gains access to skilled professionals in India. We operate on a fixed per-hour billing system, ensuring flexibility and efficiency in your workflow. Our team, handpicked to match your specific requirements, seamlessly integrates with your processes, allowing you to focus on core business functions while we handle the rest. Experience the benefits of a global workforce without the complexities.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <br>
                    <h3>Transparent Offshoring</h3>
                    <h5 class="text-secondary"><i>Empowering Partnerships, Unveiling Costs</i></h5>
                    <p style="font-size:16px;">Welcome to a new era of offshoring with our Transparent Offshoring model. We believe in complete openness, ensuring you have a clear understanding of every aspect of your extended team. In this model, we not only place candidates according to your needs but also reveal their salaries to you. We transparently charge for candidate recruitment, infrastructure, employee responsibilities, and benefits. Whether you prefer a per-hour or weekly billing, our pricing model is straightforward, combining the employee's salary with our fees.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 novi-background">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="inset-md-left-50">
                    <h3 class="text-center">Comparison</h3>
                    <br>
                </div>

            </div>
            <div class="col-md-12 col-xl-12 table-comparision">
                <table class="table table-bordered table-cus">
                    <thead>
                        <tr>
                            <th class="color-main">Benefits</th>
                            <th class="color-main">Traditional Offshoring</th>
                            <th class="color-main">Transparent Offshoring</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><span class="fa fa-arrow-circle-right"></span> Pricing Model</th>
                            <td>Fixed pricing on per hour basis</td>
                            <td>Candidate’s Actual Salary Plus our service fees </td>
                        </tr>
                        <tr>
                            <th><span class="fa fa-arrow-circle-right"></span> Cost Saving</th>
                            <td>
                                <p>Candidate Post : Sr. Bookkeeper</p>
                                <p>12.5£ Per Hour </p>
                            </td>
                            <td>
                                <p>Candidate Post : Sr. Bookkeeper</p>
                                <table>
                                    <tr>
                                        <td>Actual Salary (4 Weeks)</td>
                                        <td>1000£</td>
                                    </tr>
                                    <tr>
                                        <td>Plus : Service Fees</td>
                                        <td>500£</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td>1500£</td>
                                    </tr>
                                    <tr>
                                        <td>No. of Hours (4 Weeks)</td>
                                        <td>160 Hours</td>
                                    </tr>
                                    <tr>
                                        <td>Per Hour Rate</td>
                                        <td>9.37£</td>
                                    </tr>
                                </table>
                                <p>Cost Saving At least Minimum 25%</p>
                            </td>
                        </tr>
                        <tr>
                            <th><span class="fa fa-arrow-circle-right"></span> Candidate Recruitment</th>
                            <td>Clients actively participate in the selection process and approve candidates according to their needs.</td>
                            <td>Clients actively participate in the selection process and approve candidates according to their needs.<br>AND<br>Acquire right talent according to the Budget with the informed Salary Structure of the Candidate by which Client can maximizes the value of the investment.</td>
                        </tr>
                        <tr>
                            <th><span class="fa fa-arrow-circle-right"></span> Financial Transparency</th>
                            <td>There will be fixed Per Hour Cost irrespective of Candidate’s Actual Salary</td>
                            <td>Complete breakdown of costs, including candidate salaries, our fees, and any additional expenses.</td>
                        </tr>
                        <tr>
                            <th><span class="fa fa-arrow-circle-right"></span> Infrastructure Facility</th>
                            <td colspan="2" align="center" style="text-align: center;">Remain Same</td>
                        </tr>
                        <tr>
                            <th><span class="fa fa-arrow-circle-right"></span> Operating Method</th>
                            <td colspan="2" align="center" style="text-align: center;">Remain Same</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid bg-purple left-right">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 col-no-padding">
            <img class="img-full" src="{{ url('themes/images/gr-your-team.png') }}" />
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="inner default">
                <div class="inner">
                    <h2>Your team. Your way. Always.</h2>
                    <div>
                        <p>Create a global team that matches your company brand, culture, time zone, and operational requirements. We start with your staffing pain points and finish with a tailor-made proposal.</p>
                    </div>
                    <!-- end body_wrap -->
                    <div class="standard_ticks" columns="2">
                        <div class="feature">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Workspaces customized to your brand and culture</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Access to offices and private meeting rooms​</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Flexible business terms</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Fine-tuned data security, network, hardware, and software setup​</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Policies and procedures aligned with your local operations ​​</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                    </div>
                    <!-- end ticks_wrap -->
                </div>
                <!-- end inner -->
            </div>
        </div>
    </div>
</section>

{{-- <section class="bg-light-gray wow animate__fadeIn bg-l_blue" style="visibility: visible; animation-name: fadeIn;">
    <div id="" class="angled_section_wrapper row default purple ">
        <div class="container large">
            <div class="col_content col-md-6 col-md-offset-1 col-md-push-5 right purple angle_match" style="height: 752.5px;">
                <div class="angle default" style="right: -132.686px;"></div>
                <div class="inner default">
                    <div class="inner">
                        <h2 class="wow animate__animated animate__fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">Your team. Your way. Always.</h2>
                        <div class="body_wrap wow animate__animated animate__fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <p>Create a global team that matches your company brand, culture, time zone, and operational requirements. We start with your staffing pain points and finish with a tailor-made proposal.</p>
                        </div>
                        <!-- end body_wrap -->
                        <div class="standard_ticks" columns="2">
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Workspaces customized to your brand and culture</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Access to offices and private meeting rooms​</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Flexible business terms</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Fine-tuned data security, network, hardware, and software setup​</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Policies and procedures aligned with your local operations ​​</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                        </div>
                        <!-- end ticks_wrap -->
                    </div>
                    <!-- end inner -->
                </div>
                <!-- end inner -->
            </div>
            <!-- end col_content -->
        </div>
        <!-- end container -->
        <div class="container-fluid angle_image_wrap">
            <div class="col_image col-md-7 angle_match " style="height: 752.5px;">
                <div data-bg="https://cloncdrlva.cloudimg.io/emapta.com/wp-content/uploads/2021/05/Premium-talent2c.jpg" class="background_image no-quote rocket-lazyload entered lazyloaded" style="background-position: center center; background-image: url(&quot;https://cloncdrlva.cloudimg.io/emapta.com/wp-content/uploads/2021/05/Premium-talent2c.jpg&quot;);" data-ll-status="loaded">
                </div>
                <!-- end background_image -->
            </div>
            <!-- end col_image  -->
        </div>
    </div>
</section> --}}

<section class="container-fluid bg-yellow left-right">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="inner default">
                <div class="inner">
                    <h2>What we quote is what you pay for.</h2>
                    <div>
                        <p>Save up to 70% on company hires. Know exactly where your payment is going with flexible, transparent pricing..</p>
                    </div>
                    <!-- end body_wrap -->
                    <div class="standard_ticks" columns="2">
                        <div class="feature">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Pay nothing until you’ve selected your staff</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                        {{-- <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Ease in or out with no lock-in periods</span>
                            </div>
                            <!-- end label -->
                        </div> --}}
                        <!-- end tick -->
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Pay a fixed monthly service fee per role</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Pay staff salary costs with no markups</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Require your approval before any salary or job offer changes</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                    </div>
                    <!-- end ticks_wrap -->
                </div>
                <!-- end inner -->
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 col-no-padding">
            <img class="img-full" src="{{ url('themes/images/global-quote.png') }}" />
        </div>
    </div>
</section>

{{-- <section class="section bg-yellow">
    <div id="" class="angled_section_wrapper row default blue ">
        <div class="container large">
            <div class="col_content col-md-5 left blue angle_match" style="height: 955.9px;">
                <div class="angle default" style="right: -168.551px;"></div>
                <div class="inner default">
                    <div class="inner">
                        <h2 class="wow animate__animated animate__fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">What we quote is what you pay for.</h2>
                        <div class="body_wrap wow animate__animated animate__fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <p><img decoding="async" class="alignnone size-full wp-image-36223 entered lazyloaded" src="https://emapta.com/wp-content/uploads/2023/09/payment-icons-emapta.png" alt="svg  E" width="90%" height="auto" data-lazy-src="https://emapta.com/wp-content/uploads/2023/09/payment-icons-emapta.png" data-ll-status="loaded">
                            <noscript><img decoding="async" class="alignnone size-full wp-image-36223" src="https://emapta.com/wp-content/uploads/2023/09/payment-icons-emapta.png" alt="" width="90%" height="auto" /></noscript>
                            </p>
                            <p>Save up to 70% on company hires. Know exactly where your payment is going with flexible, transparent pricing..</p>
                        </div>
                        <!-- end body_wrap -->
                        <div class="standard_ticks" columns="2">
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="blue" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Pay nothing until you’ve selected your staff</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="blue" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Ease in or out with no lock-in periods</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="blue" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Pay a fixed monthly service fee per role</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="blue" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>pay staff salary costs with no markups</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="blue" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Require your approval before any salary or job offer changes</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                        </div>
                    </div>
                    <!-- end inner -->
                </div>
                <!-- end inner -->
            </div>
            <!-- end col_content -->
        </div>
        <!-- end container -->
        <div class="container-fluid angle_image_wrap">
            <div class="col_image col-md-7 col-md-push-5 angle_match " style="height: 955.9px;">
                <div data-bg="https://cloncdrlva.cloudimg.io/emapta.com/wp-content/uploads/2021/05/Incredible-savings3c-e1695698625688.jpg" class="background_image no-quote rocket-lazyload entered lazyloaded" style="background-position: center center; background-image: url(&quot;https://cloncdrlva.cloudimg.io/emapta.com/wp-content/uploads/2021/05/Incredible-savings3c-e1695698625688.jpg&quot;);" data-ll-status="loaded">
                </div>
                <!-- end background_image -->
            </div>
            <!-- end col_image  -->
        </div>
    </div>
</section> --}}


<section class="section section-66 section-md-90 section-xl-bottom-120 bg-pink" id="sub-hire-offshore-talant">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            
            <div class="col-md-12 col-xl-12 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h3 class="text-center">Build Your Offshore Team</h3>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-xs-6">
                <img src="{{ url('themes/images/g-team11.png') }}" style="width: 100%;" />
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-xs-6">
                <img src="{{ url('themes/images/g-team22.png') }}" style="width: 100%;" />
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-xs-6">
                <img src="{{ url('themes/images/g-team33.png') }}" style="width: 100%;" />
            </div>
            <div class="col-md-6 col-lg-3 col-xl-3 col-sm-6 col-xs-6">
                <img src="{{ url('themes/images/g-team44.png') }}" style="width: 100%;" />
            </div>
        </div>
    </div>
</section>  

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-white" id="sub-how-we-operate">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            
            <div class="col-md-12 col-xl-12 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h3 class="text-center">How We Operate</h3>
                </div>
            </div>

            <div class="col-md-12 timeline-new">
                <div class="timeline">
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-play-circle"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Get Started Hassle-Free</h4>
                            <div>
                                <p><b>Step 1:</b> Schedule a casual, no-obligation call with our team to understand how offshoring works. Offshoring is a big decision, and we're here to guide you through the process.</p>
                                <p><b>Step 2:</b> Sign up online easily, with no commitment or payments. You're not locked into anything at this point; it's just about exploring possibilities.</p>
                                <p><b>Step 3:</b> Dive into a no-obligation interview process. Only proceed if you're 100% satisfied with the talent we present.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-thumbs-up"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Discover Your Perfect Match</h4>
                            <div>
                                <p><b>Step 1:</b> We'll find the best profiles tailored to your needs. Review them, shortlist candidates, and schedule interviews at your convenience.</p>
                                <p><b>Step 2:</b> If we don't have an immediate match, we go the extra mile to find candidates specifically for you.</p>
                                <div>
                                    <p><b>Step 3:</b> Two scenarios for matchmaking: </p>
                                    <div style="margin-left: 20px;">
                                        <p><b>a. </b> Candidates in our database</p>
                                        <p><b>b. </b> Proactive market search if needed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-users"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Conduct Interviews & Assess Candidates</h4>
                            <div>
                                <p>Interview the candidates, provide feedback, and even conduct multiple interviews. Our pre-vetted candidates ensure a high chance of finding the right fit.</p>
                                <p><b>Assessments:</b> If you need additional assessments, share your tests, and candidates will gladly complete them.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-cogs"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Seal the Deal & Set Up</h4>
                            <div>
                                <p><b>Step 1:</b> Select the best candidate based on skills, experience, Salary and cultural fit.</p>
                                <p><b>Step 2:</b> Confirm the selection, set up IT requirements swiftly, and send confirmation and paperwork. Smooth onboarding ensures a successful start.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-list"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Smooth Onboarding Process</h4>
                            <div>
                                <p><b>Step 1:</b> Onshore supervisor involvement for initial training.</p>
                                <p><b>Step 2:</b> Training and knowledge transfer for offshore staff.</p>
                                <p><b>Step 3:</b> Understand processes and client work.</p>
                                <p><b>Step 4:</b> Ongoing reviews and feedback for continuous improvement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-container">
                        <div class="timeline-icon">
                            <span class="fa fa-random"></span>
                        </div>
                        <div class="timeline-body">
                            <h4 class="timeline-title">Co-Source, Co-Train, Co-Manage</h4>
                            <div>
                                <p>We're your partner in co-sourcing, co-training, and co-managing your offshore team. While challenges may arise, our Account Management team is here for workflow, staff management, reviews, training, and more.</p>
                                <p><b>Replacement or Cancellation:</b> You have the flexibility to replace staff or cancel engagements if needed, with an 8 weeks’ notice period. We work efficiently to replace talent within 2 to 6 weeks, or a bit longer for senior roles.</p>
                                <p><b>Onboard Timeframe:</b> Talent onboarding varies from 2 to 6 weeks depending on the level. We're committed to making your offshoring journey seamless and successful.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>  

{{-- <section class="section bg-yellow">
    <div id="" class="angled_section_wrapper row default blue ">
        <div class="container large">
            <div class="col_content col-md-5 left blue angle_match" style="height: 955.9px;">
                <div class="angle default" style="right: -168.551px;"></div>
                <div class="inner default">
                    <div class="inner">
                        <h2 class="wow animate__animated animate__fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">IT & Data Security</h2>
                        <div class="body_wrap wow animate__animated animate__fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            
                            <p style="font-size: 16px;">When engaging in services such as accounting, bookkeeping, payroll, or taxation, businesses often share sensitive data with their service providers. At Dangi Global, we prioritize the meticulous handling of such data, ensuring absolute security and confidentiality</p>
                        </div>
                    </div>
                    <!-- end inner -->
                </div>
                <!-- end inner -->
            </div>
            <!-- end col_content -->
        </div>
        <!-- end container -->
        <div class="container-fluid angle_image_wrap">
            <div class="col_image col-md-7 col-md-push-5 angle_match " style="height: 955.9px;">
                <div data-bg="https://cloncdrlva.cloudimg.io/emapta.com/wp-content/uploads/2021/05/Incredible-savings3c-e1695698625688.jpg" class="background_image no-quote rocket-lazyload entered lazyloaded" style="background-position: center center; background-image: url(&quot;https://cloncdrlva.cloudimg.io/emapta.com/wp-content/uploads/2021/05/Incredible-savings3c-e1695698625688.jpg&quot;);" data-ll-status="loaded">
                </div>
                <!-- end background_image -->
            </div>
            <!-- end col_image  -->
        </div>
    </div>
</section> --}}

<section class="container-fluid bg-blue left-right pd-tb30" id="sub-it-data-security">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 col-no-padding">
            <img class="img-full" src="{{ url('themes/images/gr-it-data-sec.png') }}" />
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="inner default">
                <div class="inner">
                    <h2>IT & Data Security</h2>
                    <div>
                        <p>When engaging in services such as accounting, bookkeeping, payroll, or taxation, businesses often share sensitive data with their service providers. At Dangi Global, we prioritize the meticulous handling of such data, ensuring absolute security and confidentiality</p>
                    </div>
                </div>
                <!-- end inner -->
            </div>
        </div>
        
    </div>
</section>

<section class="container-fluid bg-purple left-right pd-tb30">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="inner default">
                <div class="inner">
                    <h2>Peace of mind through world-class safeguards.</h2>
                    <!-- end body_wrap -->
                    <div class="standard_ticks" columns="2">
                        <div class="feature">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Align network policy configurations to your local operations</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Give your team access to controlled and monitored environments</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                        {{-- <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Protect your office and devices with logical and physical security protocols</span>
                            </div>
                            <!-- end label -->
                        </div> --}}
                        <!-- end tick -->
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Prevent threats with routine Vulnerability Management System scans</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Work peacefully with periodic IT security assessments and protocol enforcement​​</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <div class="feature" style="">
                            <div class="tick">
                                <svg class="purple" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                    <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                    <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                </svg>
                            </div>
                            <!-- end tick -->
                            <div class="the_label">
                                <span>Stay Compliant with ISO, GDPR and Obtain supervision from an on-site IT Manager</span>
                            </div>
                            <!-- end label -->
                        </div>
                        <!-- end tick -->
                    </div>
                    <!-- end ticks_wrap -->
                </div>
                <!-- end inner -->
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 col-no-padding">
            <img class="img-full" src="{{ url('themes/images/gr-ppeace-of-mind.png') }}" />
        </div>
    </div>
</section>

{{-- <section class="bg-light-gray wow animate__fadeIn bg-l_blue" style="visibility: visible; animation-name: fadeIn;">
    <div id="" class="angled_section_wrapper row default yellow ">
        <div class="container large">
            <div class="col_content col-md-6 col-md-offset-1 col-md-push-5 right yellow angle_match" style="height: 1026.9px;">
                <div class="angle default" style="right: -181.07px;"></div>
                <div class="inner default">
                    <div class="inner">
                        <h2 class="wow animate__animated animate__fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">Peace of mind through world-class safeguards.</h2>
                        <!-- end body_wrap -->
                        <div class="standard_ticks" columns="2">
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="yellow" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Align network policy configurations to your local operations</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="yellow" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Give your team access to controlled and monitored environments</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="yellow" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Protect your office and devices with logical and physical security protocols</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="yellow" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Prevent threats with routine Vulnerability Management System scans</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="yellow" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Work peacefully with periodic IT security assessments and protocol enforcement</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                            <div class="feature wow animate__animated animate__fadeIn" style="">
                                <div class="tick">
                                    <svg class="yellow" data-name="emaptatick" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35 35">
                                        <rect id="Area" width="35" height="35" style="fill:none"></rect>
                                        <path id="Border" d="M11.41,20.68,30.63,1.61l1.86,1.84L11.43,24.36l-.09-.09L1.51,14.52l1.86-1.84Z" transform="translate(0.5 4.52)" style="stroke-width:2px"></path>
                                    </svg>
                                </div>
                                <!-- end tick -->
                                <div class="the_label">
                                    <span>Stay Compliant with ISO, GDPR and Obtain supervision from an on-site IT Manager</span>
                                </div>
                                <!-- end label -->
                            </div>
                            <!-- end tick -->
                        </div>
                    </div>
                    <!-- end inner -->
                </div>
                <!-- end inner -->
            </div>
            <!-- end col_content -->
        </div>
        <!-- end container -->
        <div class="container-fluid angle_image_wrap">
            <div class="col_image col-md-7 angle_match " style="height: 1026.9px;">
                <div data-bg="https://cloncdrlva.cloudimg.io/emapta.com/wp-content/uploads/2021/05/IT-Homepage-g-scaled.jpg" class="background_image no-quote rocket-lazyload entered lazyloaded" style="background-position: center center; background-image: url(&quot;https://cloncdrlva.cloudimg.io/emapta.com/wp-content/uploads/2021/05/IT-Homepage-g-scaled.jpg&quot;);" data-ll-status="loaded">
                </div>
                <!-- end background_image -->
            </div>
            <!-- end col_image  -->
        </div>
    </div>
</section> --}}

<section class="container-fluid bg-l_blue left-right pd-tb30">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6">
            <div class="inner default">
                <div class="inner">
                    <h2>Data Privacy Commitment</h2>
                    <div>
                        <p>We hold the privacy and protection of our clients' data in the highest regard. To uphold this commitment, we adhere to the standards set by the General Data Protection Regulation (GDPR) and proudly carry the certification of being a GDPR compliant company. Our stringent policies for data security and confidentiality align with ISO 27001-2013 standards, showcasing our dedication to maintaining the highest Quality Measures for Information Security.</p>
                    </div>
                </div>
                <!-- end inner -->
            </div>
        </div>
        <div class="col-md-12 col-sm-12 col-lg-6 col-xl-6 col-no-padding">
            <img class="img-full" src="{{ url('themes/images/gr-data-privacy.png') }}" />
        </div>
    </div>
</section>

{{-- <section class="bg-light-gray wow animate__fadeIn bg-l_blue" style="visibility: visible; animation-name: fadeIn;">
    <div id="" class="angled_section_wrapper row default green ">
        <div class="container large">
            <div class="col_content col-md-5 left green angle_match" style="height: 792.412px;">
                <div class="angle default" style="right: -139.721px;"></div>
                <div class="inner default">
                    <div class="inner">
                        <h2 class="wow animate__animated animate__fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <header id="international-compliance-policies">Data Privacy Commitment</header>
                        </h2>
                        <div class="body_wrap wow animate__animated animate__fadeIn" data-wow-duration="0.5s" data-wow-delay="0.2s">
                            <p  style="font-size: 16px;">We hold the privacy and protection of our clients' data in the highest regard. To uphold this commitment, we adhere to the standards set by the General Data Protection Regulation (GDPR) and proudly carry the certification of being a GDPR compliant company. Our stringent policies for data security and confidentiality align with ISO 27001-2013 standards, showcasing our dedication to maintaining the highest Quality Measures for Information Security.</p>
                        </div>
                        <!-- end footer_message -->
                    </div>
                    <!-- end inner -->
                </div>
                <!-- end inner -->
            </div>
            <!-- end col_content -->
        </div>
        <!-- end container -->
        <div class="container-fluid angle_image_wrap">
            <div class="col_image col-md-7 col-md-push-5 angle_match " style="height: 792.412px;">
                <div data-bg="https://cloncdrlva.cloudimg.io/emapta.com/wp-content/uploads/2020/07/OSB-Noc-Room3-2-scaled-e1599205799292.jpg" class="background_image no-quote rocket-lazyload entered lazyloaded" style="background-position: center center; background-image: url(&quot;https://cloncdrlva.cloudimg.io/emapta.com/wp-content/uploads/2020/07/OSB-Noc-Room3-2-scaled-e1599205799292.jpg&quot;);" data-ll-status="loaded">
                </div>
                <!-- end background_image -->
            </div>
            <!-- end col_image  -->
        </div>
    </div>
</section> --}}

<section class="bg-light-gray wow animate__fadeIn it-data-section" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-ph-sec height-100px">
                        <h3 class="alt-font font-weight-600 d-block text-extra-dark-gray">Physical Security Measures</h3>
                        <div>
                            <ol class="ol-number">
                                <li>Our premises are under 100% surveillance with closed-circuit cameras.</li>
                                <li>Controlled entry into production areas is managed through an access control system.</li>
                                <li>Server room access is restricted to authorized IT personnel.</li>
                                <li>Workstations are devoid of CD R/W drives, and USB ports are disabled as part of our "No External Device" rule.</li>
                                <li>Document storage areas are safeguarded for complete protection.</li>
                                <li>Mobile phones are not allowed within the work zone, maintaining a mobile-free environment.</li>
                            </ol>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                        
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-ph-sec">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-conf-meas height-100px">
                        <h3 class="alt-font font-weight-600 d-block text-extra-dark-gray">Confidentiality Measures</h3>
                        <div>
                            <ol class="ol-number">                               
                                <li>Employees adhere to stringent non-disclosure and non-compete agreements as part of our privacy policy.</li>
                                <li>A detailed "Data Protection Policy" aligns with GDPR principles, treating all client data as confidential.</li>
                                <li>Our "Data Breach Policy" ensures zero data breach, prohibiting disclosure to third parties without client consent.</li>
                                <li>The "Data Retention and Destruction Policy" mandates the destruction of all data, electronic or in printouts, once the work is completed.</li>
                            </ol>
                            <br>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-conf-meas">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-it-sec height-100px">
                        <h3 class="alt-font font-weight-600 d-block text-extra-dark-gray">IT Security Protocols</h3>
                        <div>
                            <ol class="ol-number">
                                <li>Workstations are equipped with up-to-date anti-virus software, conducting daily updates and scheduled scans.</li>
                                <li>Anti-malware software performs quick scans twice a day on all computers.</li>
                                <li>Default Windows firewall software secures access to the company's network.</li>
                                <li>Password protection is mandatory, with regular password changes every 30 days.</li>
                                <li>Access to client information is highly restricted, with authorized users having selective access.</li>
                                <li>Account management policies include deactivation after the end of an affiliation, with regular reviews of access requirements.</li>
                                <li>Session controls on workstations automatically lock the workstation after 5 minutes of inactivity, requiring re-authentication to unlock.</li>
                                <li>Multiple backup operations are scheduled, including Previous Version, Differential, and Full Backups to prevent data loss.</li>
                                <li>Restrictions on personal email account access and controlled internet site usage.</li>
                                <li>We embrace a paperless environment for eco-friendliness and enhanced data security.</li>
                                <li>IP authentication restricts outsider access to confidential information within the office.</li>
                            </ol>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-it-sec">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
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