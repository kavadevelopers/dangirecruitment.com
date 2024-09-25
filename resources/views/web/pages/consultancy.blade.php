@extends('web.layouts.main')

@section('content')

<section class="swiper-container swiper-slider swiper-variant-1 bg-black" data-loop="false" data-autoplay="4000" data-simulate-touch="true">
    <div class="swiper-wrapper text-center">
        <div class="swiper-slide" data-slide-bg="{{ url('themes/images/consultancy-slider.jpg') }}">
            <div class="swiper-slide-caption">
                <div class="container">
                    <div class="row justify-content-md-center">
                        <div class="col-md-11 col-lg-10 col-xl-9">
                            <h2 class="slider-header" data-caption-animate="fadeInUp" data-caption-delay="0s">MOST TRUSTED CONSULTANCY COMPANY</h2>
                            <h3 data-caption-animate="fadeInUp" data-caption-delay="0s">ALL BUSINESS SERVICES AT ONE PLACE</h3>
                            <p class="text-bigger slider-text text-center" data-caption-animate="fadeInUp" data-caption-delay="100">HIGH QUALITY SERVICES BY HIGHLY QUALIFIED PROFESSIONALS</p>
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

{{-- <section class="container-fluid bg-light-gray left-right" style="padding: 150px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <h2 class="text-center">MOST TRUSTED CONSULTANCY COMPANY</h2>
                <h5 class="text-center" style="color:#5a5a5a;">ALL BUSINESS SERVICES AT ONE PLACE</h5>
                <h5 class="text-center" style="margin-top: 0; color:#5a5a5a;">HIGH QUALITY SERVICES BY HIGHLY QUALIFIED PROFESSIONALS</h5>
            </div>
        </div>
    </div>
</section> --}}

<section class="child-nav">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav gap-2">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle active" href="#sub-tax" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Business Set Up
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#sub-business-setup">Get Started</a></li>
                                <li><a class="dropdown-item" href="#business-formations">Special Business Formations</a></li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item rounded">
                            <a class="nav-link active" aria-current="page" href="#sub-business-setup"><i class="bi bi-house-fill me-2"></i>Business Set Up</a>
                        </li> --}}
                        {{-- <li class="nav-item rounded">
                            <a class="nav-link" aria-current="page" href="#sub-tax"><i class="bi bi-house-fill me-2"></i>Tax</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#sub-tax" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Tax
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#sub-tax">GST REGISTRATION & COMPLIANCES</a></li>
                                <li><a class="dropdown-item" href="#income-tax">Income Tax</a></li>
                                <li><a class="dropdown-item" href="#tds-tax">TDS</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#sub-finance" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Finance
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#sub-finance">Finance Solutions</a></li>
                                <li><a class="dropdown-item" href="#subsidy-solutions">Subsidy Solutions</a></li>
                            </ul>
                        </li>
                        {{-- <li class="nav-item rounded">
                            <a class="nav-link" aria-current="page" href="#sub-finance"><i class="bi bi-house-fill me-2"></i>Finance</a>
                        </li> --}}
                        {{-- <li class="nav-item rounded">
                            <a class="nav-link" aria-current="page" href="#sub-virtual-cfo"><i class="bi bi-house-fill me-2"></i>Virtual CFO</a>
                        </li> --}}
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#sub-virtual-cfo" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Virtual CFO
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#sub-virtual-cfo">Virtual CFO Services</a></li>
                                <li><a class="dropdown-item" href="#virtual-accountant">Virtual Accountant</a></li>
                                <li><a class="dropdown-item" href="#fulltime-accountant">Full-Time Accountant</a></li>
                            </ul>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" aria-current="page" href="#sub-other-services"><i class="bi bi-house-fill me-2"></i>Other Services</a>
                        </li>
                        <li class="nav-item rounded">
                            <a class="nav-link" aria-current="page" href="#sub-about"><i class="bi bi-house-fill me-2"></i>About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-yellow"  id="sub-business-setup">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <p class="top-small-title color-blue">BUSINESS SET UP</p>
                    <h3 class="text-center" style="margin-bottom: 0;">Get started with a business structure that fits your needs.</h3>
                </div>
            </div>
        </div>  
        <div class="row" style="margin: 0;">  
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <p>Embarking on your entrepreneurial journey begins with setting up your business. This crucial step turns your dream into a legal reality. In India, various business structures offer distinct features, each catering to different business activities. So, the initial step involves planning and discussing your business needs with our experts. Together, we'll pinpoint the right business structure for you. The popular options in India include Proprietorship and Partnership firms, along with corporate entities like Private Limited Company, OPC, and Limited Liability Partnership. Each of these structures serves different business requirements, ensuring you find the perfect fit for your venture.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Private Limited Company
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>A Private Limited Company is a separate legal entity with limited liability for its shareholders.</p>
                        <p>It requires a minimum of two directors and can have up to 200 shareholders. </p>
                        <p>The ownership is in the form of shares, and shares cannot be publicly traded. Private Limited Companies often enjoy more credibility and separate legal status, making them a preferred choice for businesses looking to scale.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Limited Liability Partnership (LLP)
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>An LLP combines the flexibility of a partnership with the benefits of limited liability.</p>
                        <p>It is a separate legal entity where partners' liability is limited to their contribution. </p>
                        <p>Unlike traditional partnerships, an LLP's existence isn't affected by changes in partners. It's a popular choice for professional services and small to medium-sized businesses.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            One Person Company (OPC)
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>An OPC is a company with a single shareholder as its sole director. </p>
                        <p>This structure allows solo entrepreneurs to enjoy the benefits of a company without the need for additional shareholders. </p>
                        <p>While it offers limited liability, it may convert into a Private Limited Company as the business grows.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Partnership Firm
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>A Partnership Firm is a business structure where two or more individuals manage and operate a business in accordance with the terms and objectives set out in a Partnership Deed. </p>
                        <p>It is a popular form of business structure for businesses that require multiple individuals' skills and capital.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Sole Proprietorship
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>A Sole Proprietorship is the simplest form of business structure, where a single individual owns and operates the business. </p>
                        <p>The owner has unlimited liability, and there's no legal distinction between the business and the owner. </p>
                        <p>While it offers complete control, it also carries personal responsibility for all debts and liabilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-greenlight" id="business-formations">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <h3 class="text-center">Special Business Formations</h3>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-primary"></i>
                        </div>
                        <h5 class="txt color-primary">
                            Indian Subsidiary
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Commencing operations through an Indian Subsidiary stands out as the most straightforward and convenient avenue for foreign companies venturing into business in India. </p>
                        <p>The Government of India permits 100% Foreign Direct Investment (FDI) in a multitude of industries, particularly when established as a company. </p>
                        <p>This regulatory openness is a key factor that attracts foreign individuals and entities, leading them to opt for the private company structure to establish their business foothold.</p>
                        <p>The Indian Subsidiary structure holds additional advantages as it adheres to a centralized system governed by the Companies Act of 2013. </p>
                        <p>By retaining the majority or entirety of shares, the prerequisites are streamlined to having just one resident director and a physical presence in India. Despite the simplified setup and operational ease, these companies must diligently navigate the relevant legal provisions.</p>
                        <p>The Indian subsidiary, often referred to as a foreign company in India, operates as a strategic and popular choice for global entities seeking a robust and compliant entry point into the vibrant Indian market.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-primary"></i>
                        </div>
                        <h5 class="txt color-primary">
                            Section 8 Company
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>A Section 8 Company in India is a type of nonprofit organization that is formed for promoting charitable objectives such as art, science, commerce, education, religion, charity, or any other useful social purpose. </p>
                        <p>The term "Section 8" refers to Section 8 of the Companies Act, which governs such companies.</p>
                        <p>Section 8 companies are not for profit and any income or profits earned are utilized for promoting the company's objectives rather than distributing it among the members.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-primary"></i>
                        </div>
                        <h5 class="txt color-primary">
                            Producer Company
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>A Producer Company is a special type of company formed by farmers or producers, primarily engaged in the production, harvesting, procurement, grading, pooling, handling, marketing, selling, or export of primary produce (agricultural produce, cattle, poultry, etc.). </p>
                        <p>The primary aim is to improve the standard of living and economic prosperity of the members involved in agricultural activities. </p>
                        <p>This type of company is governed by the Companies Act in India.</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>

<section class="bg-light-gray wow animate__fadeIn it-data-section" style="visibility: visible; animation-name: fadeIn;" id="sub-tax">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <p class="top-small-title color-blue">TAX</p>
                    <h3 class="text-center">GST REGISTRATION & COMPLIANCES</h3>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-ph-sec height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">GST Registration</h5>
                        <div>
                            <p>GST (Goods and Services Tax) registration is a fundamental process for businesses operating in India. It is mandatory for entities with a turnover more than Rs. 20 Lakhs annually for Service Industry and Rs. 40 Lakhs annually other than Service Industry to register under GST. </p>
                            <p>The registration process involves providing key business details, including PAN, Aadhar, and business-related information. </p>
                            <p>Once registered, businesses obtain a unique GST identification number, enabling them to collect and remit GST on sales.</p>
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
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">GST Return Filing</h5>
                        <div>
                            <p>GST return filing is a periodic requirement for businesses registered under GST. </p>
                            <p>It involves reporting the details of sales, purchases, and tax paid to the government. Businesses must file various GST returns, such as GSTR-1 for outward supplies, GSTR-3B for summarizing monthly transactions, and GSTR-9 for the annual return. </p>
                            <p>Timely and accurate filing is crucial to avoid penalties and maintain compliance. The GST return filing process aims to create a transparent and accountable tax environment, facilitating the seamless flow of information between taxpayers and tax authorities.</p>
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
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">Annual Return, LUT Filing, GST Refund</h5>
                        <div>
                            <p>The annual return (GSTR-9) is a comprehensive summary of a business's transactions throughout the financial year. It provides a consolidated view of sales, purchases, and input tax credit. </p>
                            <p>Businesses engaged in exports often file a Letter of Undertaking (LUT) to avail themselves of the exemption from paying Integrated GST on exports. </p>
                            <p>Additionally, businesses can claim GST refunds for taxes paid on inputs. This process involves submitting refund applications, and if approved, businesses receive the refunded amount.</p>
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

<section class="bg-blue wow animate__fadeIn it-data-section" id="income-tax" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <h3 class="text-center">Income Tax</h3>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-income-tax-indi height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">Income Tax Return Filing for Individuals</h5>
                        <div>
                            <p>Filing income tax returns is an essential process for individuals in India, covering various sources of income. </p>
                            <p>For salaried individuals, the process involves reporting their salary income, along with details of tax-saving investments and deductions. </p>
                            <p>Business owners need to disclose their business income, expenses, and profits. Individuals with capital gains, resulting from the sale of assets like property or investments, must report these gains. </p>
                            <p>Furthermore, income from house property, such as rental income, is also included in the tax return. Other income sources, like interest and dividends, are reported as well.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                        
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-income-tax-indi">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-capital-gain-house height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">Capital Gain, House Property, and Other Income</h5>
                        <div>
                            <p>Capital gains, arising from the sale of assets, are categorized as short-term or long-term and are taxed accordingly. </p>
                            <p>For house property income, individuals need to report rental income and details of home loans. Various deductions are available to reduce the taxable income, including those related to home loan interest. </p>
                            <p>Income from other sources, like interest earned on savings, fixed deposits, or dividends from investments, is also disclosed. It's crucial to report all income sources accurately to ensure compliance with tax regulations.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-capital-gain-house">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-tax-filling-for-business height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">Tax Filing for Businesses</h5>
                        <div>
                            <p>Businesses, whether sole proprietorships, partnerships, or companies, need to file income tax returns reflecting their business income, expenses, and profits. For sole proprietors and partnerships, business income is often linked with the personal income of the owners. </p>
                            <p>Companies report their profits after deducting business expenses. Deductions related to business expenses, investments, and incentives are considered to arrive at the taxable income. </p>
                            <p>Timely and accurate filing of income tax returns is vital for individuals and businesses to fulfill their tax obligations and avoid penalties. Consulting with tax professionals can help navigate the complexities and maximize available deductions, ensuring a smooth tax filing process.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-tax-filling-for-business">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-yellow" id="tds-tax">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <p class="top-small-title color-blue">TDS</p>
                    <h3 class="text-center" style="margin-bottom: 0;">TDS Filing and Compliance</h3>
                </div>
            </div>
        </div>  
        <div class="row" style="margin: 0;">  
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <p>TDS, or Tax Deducted at Source, is a mechanism implemented by the Indian government to collect taxes at the time of certain payments. It applies to various transactions such as salary, interest, rent, and professional fees. </p>
                        <p>The entity making the payment deducts a certain percentage as TDS before releasing the amount to the recipient. </p>
                        <p>TDS filing involves submitting details of these deductions to the government. This process ensures that taxes are collected in a systematic manner throughout the year, preventing the accumulation of a large tax liability at the end.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            TDS Compliance Process
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>TDS compliance involves adhering to specific rules and regulations set by the Income Tax Department. Deductors, the entities deducting TDS, must obtain a Tax Deduction and Collection Account Number (TAN). </p>
                        <p>They are required to deduct TDS at the prescribed rates and deposit it to the government within the stipulated time. Deductees, the recipients of these payments, can claim credit for the TDS deducted while filing their income tax returns. </p>
                        <p>Timely and accurate filing of TDS returns, which includes details of TDS deductions made during a specific period, is crucial for compliance. Non- compliance may result in penalties, making it essential for both deductors and deductees to fulfill their TDS obligations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            TDS Filing Process Simplified
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>The TDS filing process involves quarterly and annual returns. Quarterly TDS returns, such as Form 24Q for salary payments and Form 26Q for other payments, need to be filed by the deductor. </p>
                        <p>These forms contain details of TDS deducted and deposited during the quarter. Additionally, an annual return in Form 26AS consolidates the TDS details for the entire financial year. </p>
                        <p>Through a simplified online process, deductors can ensure compliance by accurately reporting TDS details, allowing for a smoother flow of information between businesses and the tax department.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-light-gray wow animate__fadeIn it-data-section" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <h3 class="text-center">COMPANIES ACT COMPLIANCES</h3>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-act-and-roc-filing height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">Companies Act and ROC Form Filling</h5>
                        <div>
                            <p>Under the Companies Act, businesses in India are required to comply with various regulations to ensure transparency and legal adherence. </p>
                            <p>ROC (Registrar of Companies) is the regulatory authority overseeing these compliance aspects. One crucial aspect is the filing of various ROC forms, which serve as a means to report important information about the company's structure, operations, and financial health. </p>
                            <p>These forms are essential for maintaining updated records and ensuring that the company operates within the legal framework.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                        
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-act-and-roc-filing">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-types-of-roc-filing height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">Types of ROC Forms and Their Purposes</h5>
                        <div>
                            <p>There are several ROC forms, each serving a specific purpose. For instance, Form MGT-7 is filed annually for submitting the company's annual return, including details of shareholders and directors.</p>
                            <p>Form AOC-4 is filed for the financial statements and accounts, offering insights into the company's financial position. </p>
                            <p>Changes in the company's structure, such as the appointment or resignation of directors, are reported through forms like DIR-12. </p>
                            <p>These filings contribute to the ROC's comprehensive database, enabling authorities and stakeholders to monitor and regulate business activities effectively.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-types-of-roc-filing">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-imp-roc-filing height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">Importance of Timely and Accurate ROC Filings</h5>
                        <div>
                            <p>Timely and accurate filing of ROC forms is crucial for several reasons. It ensures that the government has up-to-date information about the company, fostering transparency and accountability. </p>
                            <p>Non-compliance or delays in filing can result in penalties and legal consequences. Therefore, companies need to stay informed about filing deadlines, changes in regulations, and the specific requirements for each form. </p>
                            <p>Seeking professional assistance or utilizing technology solutions can simplify the compliance process, helping companies meet their legal obligations efficiently. Overall, ROC form filing is an integral part of corporate governance, promoting trust and integrity in the business environment.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-imp-roc-filing">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-greenlight" id="sub-finance">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <p class="top-small-title color-blue">Finance</p>
                    <h3 class="text-center" style="margin-bottom: 0;">Finance Solutions for Your Needs</h3>
                </div>
            </div>
        </div>  
        <div class="row" style="margin: 0;">  
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <p>At Dangi Consultancy, we understand that financial needs vary, and one size does not fit all. That's why we offer a comprehensive range of financial consultancy services tailored to meet your specific requirements. </p>
                        <p>Whether you're embarking on a new project, buying a home, expanding your business, or seeking a mortgage, our expertise ensures that you receive the best financial solutions from top lenders.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-primary"></i>
                        </div>
                        <h5 class="txt color-primary">
                            Project Finance
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Embarking on a new project requires robust financial backing, and our project finance solutions are designed to meet this need. </p>
                        <p>We work closely with leading financial institutions to secure funding for your ventures. From assessing project feasibility to structuring financial deals, we guide you through every step to ensure your project's success. </p>
                        <p>Our goal is to secure favorable terms, including minimum interest rates and maximum loan amounts, empowering you to turn your vision into reality.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-primary"></i>
                        </div>
                        <h5 class="txt color-primary">
                            Mortgage Loans
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>We collaborate with top lenders to offer mortgage solutions that suit your budget and preferences.</p>
                        <p>Whether you're a first-time homebuyer or looking to refinance, we navigate the complexities of the mortgage landscape to secure the best deals for you. </p>
                        <p>Our consultancy ensures that you benefit from competitive interest rates and flexible repayment options.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-primary"></i>
                        </div>
                        <h5 class="txt color-primary">
                            Home Loans
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Securing a home loan is a significant step in achieving homeownership, and we streamline the process for you. </p>
                        <p>Our home loan services cover everything from assessing your eligibility to helping you choose the right lender. </p>
                        <p>We prioritize securing the most favorable terms, including low-interest rates and higher loan amounts, making homeownership a smooth and financially viable journey.</p>
                        <div class="data_certification_value" style="margin-top: 20px;">
                            <div class="data-certification">
                                <ul class="list-unstyled p-0 m-0">
                                    <li>At Dangi Consultancy, we take pride in being your trusted financial partner, providing consultancy services that prioritize your financial goals. </li>
                                    <li>Our commitment is to secure the best loan options from top lenders, ensuring that you benefit from minimum interest rates and maximum loan amounts tailored to your specific needs.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-primary"></i>
                        </div>
                        <h5 class="txt color-primary">
                            Business Loans
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Fueling business growth often requires additional capital, and our business loan services are designed to cater to this need. </p>
                        <p>We assist entrepreneurs in accessing the right financing options to expand their operations, invest in technology, or meet working capital requirements. </p>
                        <p>Our consultancy ensures that you obtain business loans with minimum interest rates, favorable repayment terms, and maximum loan amounts, supporting your business's financial health.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="bg-yellow wow animate__fadeIn it-data-section" style="visibility: visible; animation-name: fadeIn;" id="subsidy-solutions">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <h3 class="text-center">Unlocking Opportunities with Subsidy Solutions</h3>
                </div>
            </div>
        </div>
        <div class="row" style="margin: 0;">  
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <p>At Dangi Consultancy, we recognize the transformative power of subsidies in fostering business growth and economic development. Our consultancy services are dedicated to guiding businesses through the complex landscape of subsidies available in India. </p>
                        <p>Whether you're seeking capital subsidy, interest subsidy, or exploring initiatives like PMEGP (Prime Minister's Employment Generation Programme), we are your trusted partner in navigating the subsidy ecosystem.</p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-capital-subsidy height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">Capital Subsidy</h5>
                        <div>
                            <p>Capital subsidy acts as a catalyst for businesses, facilitating investment in capital assets. </p>
                            <p>Our consultancy team specializes in identifying and securing capital subsidies offered by both state and central governments. </p>
                            <p>We guide businesses through the application process, ensuring that they leverage these subsidies to optimize their capital expenditure, enhance competitiveness, and drive sustainable growth.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                        
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-capital-subsidy">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-interest-subsidy height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">Interest Subsidy</h5>
                        <div>
                            <p>Interest subsidy is a key financial tool that can significantly reduce the cost of borrowing for businesses. </p>
                            <p>At Dangi Consultancy, we understand the importance of accessing favorable interest rates to fuel your business operations. </p>
                            <p>Our consultancy services include comprehensive assistance in identifying and securing interest subsidies, empowering businesses to manage their finances efficiently and expand their footprint.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-interest-subsidy">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-pmegp-subsidy height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">PMEGP Subsidy</h5>
                        <div>
                            <p>The Prime Minister's Employment Generation Programme (PMEGP) is a flagship initiative aimed at promoting entrepreneurship and employment generation. </p>
                            <p>Our consultancy experts specialize in guiding aspiring entrepreneurs and existing businesses through the PMEGP subsidy framework. </p>
                            <p>From project identification to subsidy application, we ensure that businesses capitalize on this program to realize their entrepreneurial dreams.</p>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-pmegp-subsidy">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content readmore-container-state-central-subsidy height-100px">
                        <h5 class="alt-font font-weight-600 d-block text-extra-dark-gray">State and Central Government Subsidies</h5>
                        <div>
                            <p>Navigating the diverse landscape of state and central government subsidies requires expertise, and that's where Dangi Consultancy steps in. </p>
                            <p>We provide businesses with insights into the array of subsidies available, covering sectors from agriculture to manufacturing. </p>
                            <p>Our consultancy services facilitate a seamless application process, ensuring businesses tap into subsidies that align with their objectives and contribute to their overall success.</p>
                            <div class="data_certification_value">
                                <div class="data-certification">
                                    <ul class="list-unstyled p-0 m-0">
                                        <li>We at Dangi Consultancy take pride in being your dedicated partner in subsidy solutions. Our consultancy services are designed to simplify the complexities of subsidy programs, ensuring that businesses access the best solutions for their needs. </li>
                                        <li>Whether its capital subsidy, interest subsidy, or specific programs like PMEGP, we are committed to unlocking opportunities and driving the growth of businesses across India.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="h-1px bg-medium-gray margin-25px-bottom w-100"></div>
                    </div>
                    <div>
                        <a href="#" class="readmore" data-class="readmore-container-state-central-subsidy">Read more</a>
                    </div>
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-light-gray" id="sub-virtual-cfo">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <p class="top-small-title color-blue">Virtual CFO</p>
                    <h3 class="text-center" style="margin-bottom: 0;">Empowering Your Business with Virtual CFO Services</h3>
                </div>
            </div>
        </div>  
        <div class="row" style="margin: 0;">  
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <p>At Dangi Consultancy, our Virtual CFO services are tailored to elevate your business financial management to new heights. </p>
                        <p>Imagine having the expertise of a Chief Financial Officer without the traditional costs associated with a full-time executive. </p>
                        <p>Our seasoned financial professionals collaborate closely with your team, offering strategic financial insights, budgetary expertise, and comprehensive planning to drive your business towards sustainable success.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Cost-Effective Expertise
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Access the skills and insights of a seasoned CFO without the hefty salary and benefits costs associated with an in-house executive.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Strategic Financial Planning
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Our Virtual CFOs work hand-in-hand with your team to develop strategic financial plans, ensuring your business is well-positioned for growth and profitability.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Cash Flow Management
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Effectively manage your cash flow with our expertise, optimizing financial resources to meet short-term and long-term business goals.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Budgetary Control
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Gain meticulous control over your budgets, with our Virtual CFOs providing ongoing analysis and adjustments to keep your business on a financially sound trajectory.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Financial Reporting
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Receive clear and insightful financial reports tailored to your business needs, enabling you to make informed decisions and track key performance indicators.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Risk Mitigation
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Identify and mitigate financial risks with proactive strategies, ensuring your business is resilient in the face of economic uncertainties.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-12 col-lg-3 col-xl-3">
            </div>
            <div class="col-md-6 col-sm-12 col-lg-6 col-xl-6">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Business Growth Strategies
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Collaborate with our Virtual CFOs to devise growth strategies, explore new opportunities, and navigate financial challenges to drive your business forward.</p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="data_certification_value" style="margin-top: 20px;">
                    <div class="data-certification">
                        <ul class="list-unstyled p-0 m-0">
                            <li>Our Virtual CFO services go beyond numbers; they are a strategic investment in the financial health and future success of your business. </li>
                            <li>Experience the advantage of having a seasoned CFO in your corner, providing expertise, insights, and a roadmap to financial excellence.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-blue" id="virtual-accountant">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <p class="top-small-title color-blue">Virtual Accountant</p>
                    <h3 class="text-center" style="margin-bottom: 0;">Transform Your Business with Our Virtual Accountant Services</h3>
                </div>
            </div>
        </div>  
        <div class="row" style="margin: 0;">  
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <p>At Dangi Consultancy, we redefine the traditional accounting experience by offering cutting-edge virtual accountant services tailored to meet the dynamic needs of modern businesses. </p>
                        <p>Our virtual accountants bring expertise and efficiency directly to your fingertips, providing a seamless and cost-effective solution for businesses of all sizes. </p>
                        <p>With a focus on real-time collaboration and data-driven insights, our virtual accountant services empower you to navigate the complexities of finance with ease.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Remote Accessibility
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Enjoy the flexibility of accessing your financial data from anywhere at any time. Our virtual accountant services leverage cloud-based technologies, ensuring secure and convenient access to critical financial information.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Cost Savings
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>By opting for virtual accountant services, you eliminate the need for physical office space and in-house staff, resulting in significant cost savings. Redirect resources towards strategic business initiatives without compromising on financial management.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Scalability
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Our virtual accountant services scale seamlessly with your business growth. Whether you're a startup or an established enterprise, our flexible solutions adapt to your evolving financial needs.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-12 col-lg-2 col-xl-2">
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Real-Time Collaboration
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Foster efficient communication and collaboration with our virtual accountants. Benefit from instant updates, streamlined communication channels, and collaborative tools that enhance the overall financial management experience.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Expert Guidance
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Our team of experienced virtual accountants provides expert guidance, offering valuable insights to optimize financial strategies, improve efficiency, and drive business success.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="data_certification_value" style="margin-top: 20px;">
                    <div class="data-certification">
                        <ul class="list-unstyled p-0 m-0">
                            <li>Choose Dangi Consultancy for unparalleled virtual accountant services that bridge the gap between traditional accounting and the demands of the digital age, ensuring your business stays ahead in a competitive landscape.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-pink" id="fulltime-accountant">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <p class="top-small-title color-blue">Full-Time Accountant</p>
                    <h3 class="text-center" style="margin-bottom: 0;">Empower Your Business with Dedicated Full-Time Accountant Services</h3>
                </div>
            </div>
        </div>  
        <div class="row" style="margin: 0;">  
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <p>At Dangi Consultancy, we understand that the heart of a successful business lies in robust financial management. </p>
                        <p>Our full-time accountant services offer more than just number crunching; they provide a dedicated partner in your business journey. </p>
                        <p>By availing our comprehensive services, you gain access to a seasoned team of full-time accountants committed to ensuring the financial health and prosperity of your enterprise.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Dedicated Expertise
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Enjoy the undivided attention of a full-time accountant devoted exclusively to your business, providing personalized solutions tailored to your financial needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Timely and Accurate Reporting
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Our full-time accountants are committed to delivering accurate and timely financial reports, enabling you to make informed decisions with confidence.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Strategic Financial Planning
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Leverage the strategic insights of our full-time accountants to develop sound financial strategies, optimize resources, and drive sustainable growth.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-12 col-lg-2 col-xl-2">
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Comprehensive Financial Management
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>From day-to-day bookkeeping to complex financial analysis, our full-time accountant services cover a spectrum of financial management needs, ensuring no aspect of your finances is overlooked.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Cost-Efficiency
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Instead of bearing the overhead costs of an in-house accounting team, our full-time accountant services offer a cost-effective alternative, allowing you to allocate resources more efficiently.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="data_certification_value" style="margin-top: 20px;">
                    <div class="data-certification">
                        <ul class="list-unstyled p-0 m-0">
                            <li>Choose Dangi Consultancy as your trusted partner for full-time accountant services, and experience the difference that dedicated financial expertise can make in propelling your business forward.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section section-66 section-md-90 section-xl-bottom-120 bg-blue" id="sub-other-services">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="inset-md-right-15 inset-xl-right-0 mix-title">
                    <p class="top-small-title color-blue">OTHER SERVICES</p>
                    <h3 class="text-center" style="margin-bottom: 0;">Empower Your Business with Comprehensive Consultancy Services</h3>
                </div>
            </div>
        </div>  
        <div class="row" style="margin: 0;">  
            <div class="col-md-12 col-sm-12 col-lg-12 col-xl-12">
                <div class="data_certification_value_and_call_link">
                    <div class="data_certification_value">
                        <p>We pride ourselves on being your one-stop solution for a spectrum of business consultancy services. From obtaining essential licenses such as FSSAI and Shop & Establishment to ensuring compliance with labor laws, we seamlessly navigate the complex regulatory landscape for you. </p>
                        <p>Our dedicated team also excels in facilitating trademark registration, MSME registration, RERA registration, GeM registration, ISO certification, and expert consultancy for import and export. </p>
                        <p>With a commitment to simplifying bureaucratic processes, we enable your business to focus on growth while we take care of the essential legal and regulatory aspects.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            FSSAI License
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Ensure the legality and safety of your food-related business with our streamlined FSSAI licensing services.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Labour Law Compliance
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Navigate the intricate web of labor laws effortlessly with our expert guidance, ensuring a harmonious and compliant work environment.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Trademark Services
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Safeguard your brand identity with our comprehensive trademark registration services, securing your intellectual property.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            MSME Registration
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Unlock the benefits of being a Micro, Small, or Medium Enterprise with our hassle-free MSME registration assistance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            RERA Registration
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Comply with real estate regulations seamlessly through our RERA registration services, instilling trust in your property ventures.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            GeM Registration
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Gain access to government procurement opportunities with our efficient GeM registration consultancy, simplifying the process.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            ISO Certification Consultancy
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Elevate your business standards with ISO certification, a mark of quality and excellence, achieved through our expert guidance.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Shop & Establishment Registration
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Ensure compliance with local regulations effortlessly with our assistance in obtaining Shop & Establishment registration.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-lg-4 col-xl-4 height-fill">
                <div class="ccard-block-bg">
                    <div class="heading-with-icon">
                        <div class="icon">
                            <i class="fa fa-check-circle bg-asset"></i>
                        </div>
                        <h5 class="txt color-asset">
                            Import-Export Consultancy
                        </h5>
                    </div>
                    <div class="ccard-body">
                        <p>Navigate the complexities of international trade with our expert consultancy services, facilitating smooth import and export operations.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <div class="data_certification_value" style="margin-top: 20px;">
                    <div class="data-certification">
                        <ul class="list-unstyled p-0 m-0">
                            <li>Choose Dangi Consultancy as your trusted partner for consultancy services, and let us be the driving force behind your business's legal and regulatory success.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-66 section-md-90 section-xl-bottom-120 bg-whisperapprox" id="sub-about">
    <div class="container">
        <h3>About Us</h3>
        <div class="row row-40 justify-content-xl-between align-items-center">
            <div class="col-md-6 col-xl-5 text-secondary">
                <div class="inset-md-right-15 inset-xl-right-0">
                    <p>Dangi Consultancy is operating with Vision to provide Value Added Expert Services and Developing One Stop Solution for all type of Financial, Tax & Business Consultancy Services.</p>
                    <p>
                        We are a team of highly qualified professionals (CA, CS) providing high quality services with an aim to establish a Personal and Long Term Relationship with each Client and our Quality Services can be attributed to the Personalized Proactive Approach, Response to Client’s Needs, Comprehensive capabilities, and Regular Internal Reviews. 
                    </p>
                    <p>We are committed to Excellence in Professional Service, fully attuned to the Evolving Needs of our every sector’s clients.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="progress-linear-group">
                    <!--Linear progress bar-->
                    <div class="progress-linear progress-linear-primary animated">
                        <div class="progress-linear-header">
                            <p class="progress-linear-title">HONESTY</p>
                            {{-- <span class="progress-linear-counter"></span> --}}
                        </div>
                        <div class="progress-linear-body">
                            <div class="progress-linear-bar" style="width: 100%;"></div>
                        </div>
                    </div>
                    <!--Linear progress bar-->
                    <div class="progress-linear progress-linear-khaki animated">
                        <div class="progress-linear-header">
                            <p class="progress-linear-title">INTEGRITY</p>
                            {{-- <span class="progress-linear-counter">54</span> --}}
                        </div>
                        <div class="progress-linear-body">
                            <div class="progress-linear-bar" style="width: 100%;"></div>
                        </div>
                    </div>
                    <!--Linear progress bar-->
                    <div class="progress-linear progress-linear-navy animated">
                        <div class="progress-linear-header">
                            <p class="progress-linear-title">TRANSPARENCY</p>
                            {{-- <span class="progress-linear-counter">87</span> --}}
                        </div>
                        <div class="progress-linear-body">
                            <div class="progress-linear-bar" style="width: 100%;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-50 section-md-90">
    <div class="container text-center">
        <h3>WHY CHOOSE US</h3>
        <div class="row row-40">
            <div class="col-md-3 col-lg-3 height-fill wow fadeInUp" data-wow-delay="0s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-primary icon-lg-bigger fa fa-star"></span></div>
                        <div class="box-header">
                            <h5><a href="#">HIGH QUALITY SERVICES</a></h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                </article>
            </div>
            <div class="col-md-3 col-lg-3 height-fill wow fadeInUp" data-wow-delay=".1s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-primary icon-lg-bigger fa fa-briefcase"></span></div>
                        <div class="box-header">
                            <h5><a href="#">CA, CS ASSISTED</a></h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                </article>
            </div>
            <div class="col-md-3 col-lg-3 height-fill wow fadeInUp" data-wow-delay=".2s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-primary icon-lg-bigger fa fa-rupee"></span></div>
                        <div class="box-header">
                            <h5><a href="#">REASONABLE FEES</a></h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                </article>
            </div>
            <div class="col-md-3 col-lg-3 height-fill wow fadeInUp" data-wow-delay=".2s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-primary icon-lg-bigger fa fa-thumbs-up"></span></div>
                        <div class="box-header">
                            <h5><a href="#">GUARANTEED SATISFACTION</a></h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                </article>
            </div>
        </div>
        <div class="row row-40 justify-content-center">
            <div class="col-md-3 col-lg-3 height-fill wow fadeInUp" data-wow-delay="0s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-primary icon-lg-bigger fa fa-check-circle"></span></div>
                        <div class="box-header">
                            <h5><a href="#">TRUSTED, RELIABLE & TRANSPERANT</a></h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                </article>
            </div>
            <div class="col-md-3 col-lg-3 height-fill wow fadeInUp" data-wow-delay=".1s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-primary icon-lg-bigger fa fa-database"></span></div>
                        <div class="box-header">
                            <h5><a href="#">NO HIDDEN FEE</a></h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                </article>
            </div>
            <div class="col-md-3 col-lg-3 height-fill wow fadeInUp" data-wow-delay=".2s">
                <article class="icon-box">
                    <div class="box-top">
                        <div class="box-icon"><span class="icon icon-primary icon-lg-bigger fa fa-shield"></span></div>
                        <div class="box-header">
                            <h5><a href="#">CLIENT DATA CONFIDENTIALITY</a></h5>
                        </div>
                    </div>
                    <div class="divider"></div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="section-60 section-md-100 bg-gray-dark bg-image" style="background-image: url(themes/images/bg-image-6.jpg);">
    <div class="container">
        <div class="row row-40">
            <div class="col-sm-6 col-md-3">
                <div class="box-counter box-counter-inverse box-counter-white">
                    <figure><img src="themes/images/icon-01.png" width="53" height="50" alt=""></figure>
                    <div class="text-large counter animated-first">2000+</div>
                    <h5 class="box-header text-white">Happy Clients</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter box-counter-inverse box-counter-white">
                    <figure><img src="themes/images/icon-02.png" width="41" height="43" alt=""></figure>
                    <div class="text-large counter animated-first">110+</div>
                    <h5 class="box-header">Types of Services</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter box-counter-inverse box-counter-white">
                    <figure><img src="themes/images/icon-03.png" width="52" height="53" alt=""></figure>
                    <div class="text-large counter animated-first">15+</div>
                    <h5 class="box-header">Years of Experience</h5>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="box-counter box-counter-inverse box-counter-white">
                    <figure><img src="themes/images/icon-04.png" width="55" height="46" alt=""></figure>
                    <div class="text-large counter animated-first">30+</div>
                    <h5 class="box-header">Experts</h5>
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