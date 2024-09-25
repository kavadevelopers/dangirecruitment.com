@extends('web.layouts.main')

@section('content')


<section class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap" style="background-image: url({{ url('themes/web/images/careers-2-1171x519.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h2>{{ $_title }}</h2>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 novi-background">
    <div class="container">
        <div class="row row-40 justify-content-lg-between">
            {{-- <div class="col-md-12 col-lg-12 col-xl-12">
                <div class="inset-md-left-50">
                    <h4 class="text-center">Finance</h4>
                </div>
            </div> --}}
            <div class="col-md-6 col-xl-6 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <br>
                    <h4 class="text-secondary">Get started with a business structure that fits your needs.</h4>
                    <p>Embarking on your entrepreneurial journey begins with setting up your business. This crucial step turns your dream into a legal reality. In India, various business structures offer distinct features, each catering to different business activities. So, the initial step involves planning and discussing your business needs with our experts. Together, we&#39;ll pinpoint the right business structure for you. The popular options in India include Proprietorship and Partnership firms, along with corporate entities like Private Limited Company, OPC, and Limited Liability Partnership. Each of these structures serves different business requirements, ensuring you find the perfect fit for your venture.</p>
                </div>
            </div>
            <div class="col-md-6 col-xl-6 text-secondary">
                <img src="{{ url('themes/images/cun-business.jpg') }}" />
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Private Limited Company</h6>
                        <p>A Private Limited Company is a separate legal entity with limited liability for its shareholders. It requires a minimum of two directors and can have up to 200 shareholders. The ownership is in the form of shares, and shares cannot be publicly traded. Private Limited Companies often enjoy more credibility and separate legal status, making them a preferred choice for businesses looking to scale.</p>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Limited Liability Partnership (LLP)</h6>
                        <p>An LLP combines the flexibility of a partnership with the benefits of limited liability. It is a separate legal entity where partners&#39; liability is limited to their contribution. Unlike traditional partnerships, an LLP&#39;s existence isn&#39;t affected by changes in partners. It&#39;s a popular choice for professional services and small to medium-sized businesses.</p>
                        <br>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">One Person Company (OPC)</h6>
                        <p>An OPC is a company with a single shareholder as its sole director. This structure allows solo entrepreneurs to enjoy the benefits of a company without the need for additional shareholders. While it offers limited liability, it may convert into a Private Limited Company as the business grows.</p>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                    
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Partnership Firm</h6>
                        <p>A Partnership Firm is a business structure where two or more individuals manage and operate a business in accordance with the terms and objectives set out in a Partnership Deed. It is a popular form of business structure for businesses that require multiple individuals&#39; skills and capital.</p>
                        
                        <br>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-3 col-md-9"></div>
            <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Sole Proprietorship</h6>
                        <p>A Sole Proprietorship is the simplest form of business structure, where a single individual owns and operates the business. The owner has unlimited liability, and there&#39;s no legal distinction between the business and the owner. While it offers complete control, it also carries personal responsibility for all debts and liabilities.</p>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
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
                    <h4 class="text-center">Special Business Formations</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Indian Subsidiary</h6>
                        <p>Commencing operations through an Indian Subsidiary stands out as the most straightforward and convenient avenue for foreign companies venturing into business in India. The Government of India permits 100% Foreign Direct Investment (FDI) in a multitude of industries, particularly when established as a company. This regulatory openness is a key factor that attracts foreign individuals and entities, leading them to opt for the private company structure to establish their business foothold.</p>
                        <p>The Indian Subsidiary structure holds additional advantages as it adheres to a centralized system governed by the Companies Act of 2013. By retaining the majority or entirety of shares, the prerequisites are streamlined to having just one resident director and a physical presence in India. Despite the simplified setup and operational ease, these companies must diligently navigate the relevant legal provisions.</p>
                        <p>The Indian subsidiary, often referred to as a foreign company in India, operates as a strategic and popular choice for global entities seeking a robust and compliant entry point into the vibrant Indian market.</p>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Section 8 Company</h6>
                        <p>A Section 8 Company in India is a type of nonprofit organization that is formed for promoting charitable objectives such as art, science, commerce, education, religion, charity, or any other useful social purpose. The term &quot;Section 8&quot; refers to Section 8 of the Companies Act, which governs such companies. Section 8 companies are not for profit and any income or profits earned are utilized for promoting the company&#39;s objectives rather than distributing it among the members.</p>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                    
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Producer Company</h6>
                        <p>A Producer Company is a special type of company formed by farmers or producers, primarily engaged in the production, harvesting, procurement, grading, pooling, handling, marketing, selling, or export of primary produce (agricultural produce, cattle, poultry, etc.). The primary aim is to improve the standard of living and economic prosperity of the members involved in agricultural activities. This type of company is governed by the Companies Act in India.</p>
                        
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop