@extends('web.layouts.main')

@section('content')


<section class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap" style="background-image: url({{ url('themes/web/images/blog-grid-2-570x253.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h2>{{ $_title }}</h2>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 novi-background">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            <div class="col-md-6 col-xl-6 text-secondary">
                <img src="{{ url('themes/images/other-cuns.jpg') }}" />
            </div>
            <div class="col-md-6 col-xl-6 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <br>
                    <h4 class="text-secondary">Empower Your Business with Comprehensive Consultancy Services</h4>
                    <p>We pride ourselves on being your one-stop solution for a spectrum of business consultancy services. From obtaining essential licenses such as FSSAI and Shop &amp; Establishment to ensuring compliance with labor laws, we seamlessly navigate the complex regulatory landscape for you. Our dedicated team also excels in facilitating trademark registration, MSME registration, RERA registration, GeM registration, ISO certification, and expert consultancy for import and export. With a commitment to simplifying bureaucratic processes, we enable your business to focus on growth while we take care of the essential legal and regulatory aspects.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light-gray wow animate__fadeIn it-data-section" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="inset-md-left-50">
                    <h4 class="text-center">Key Services We Offer</h4>
                </div>
            </div>
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        {{-- <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Certified Expert Accountant Course</h6> --}}
                        <div style="margin-left: 20px;">
                            <ol class="ol-number">
                                <li><strong>FSSAI License : </strong> Ensure the legality and safety of your food-related business with our streamlined FSSAI licensing services.</li>
                                <li><strong>Labour Law Compliance : </strong> Navigate the intricate web of labor laws effortlessly with our expert guidance, ensuring a harmonious and compliant work environment.</li>
                                <li><strong>Trademark Services : </strong> Safeguard your brand identity with our comprehensive trademark registration services, securing your intellectual property.</li>
                                <li><strong>MSME Registration : </strong> Unlock the benefits of being a Micro, Small, or Medium Enterprise with our hassle-free MSME registration assistance.</li>
                                <li><strong>RERA Registration : </strong> Comply with real estate regulations seamlessly through our RERA registration services, instilling trust in your property ventures.</li>
                                <li><strong>GeM Registration : </strong> Gain access to government procurement opportunities with our efficient GeM registration consultancy, simplifying the process.</li>
                                <li><strong>ISO Certification Consultancy : </strong> Elevate your business standards with ISO certification, a mark of quality and excellence, achieved through our expert guidance.</li>
                                <li><strong>Shop &amp; Establishment Registration : </strong> Ensure compliance with local regulations effortlessly with our assistance in obtaining Shop &amp; Establishment registration.</li>
                                <li><strong>Import-Export Consultancy : </strong> Navigate the complexities of international trade with our expert consultancy services, facilitating smooth import and export operations.</li>
                            </ol>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
            <div class="col-md-12 col-xl-12 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <h5 class="text-center" style="margin-bottom: 50px; margin-top: 50px;"><i>Choose Dangi Consultancy as your trusted partner for consultancy services, and let us be the driving force behind your business&#39;s legal and regulatory success.</i></h5>
                </div>
            </div>
        </div>
    </div>
</section>


@stop