@extends('web.layouts.main')

@section('content')


<section class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap" style="background-image: url({{ url('themes/web/images/bg-image-8.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h2>{{ $_title }}</h2>
        </div>
    </div>
</section>

<section class="bg-light-gray wow animate__fadeIn it-data-section" style="visibility: visible; animation-name: fadeIn;">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-12 text-center margin-5-rem-bottom sm-margin-3-rem-bottom">
                <p>When engaging in services such as accounting, bookkeeping, payroll, or taxation, businesses often share sensitive data with their service providers. At Dangi Global, we prioritize the meticulous handling of such data, ensuring absolute security and confidentiality.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-12 col-md-12" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Data Privacy Commitment</h6>
                        <p>We hold the privacy and protection of our clients' data in the highest regard. To uphold this commitment, we adhere to the standards set by the General Data Protection Regulation (GDPR) and proudly carry the certification of being a GDPR compliant company. Our stringent policies for data security and confidentiality align with ISO 27001-2013 standards, showcasing our dedication to maintaining the highest Quality Measures for Information Security.</p>
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
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Physical Security Measures</h6>
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
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-md-9 md-margin-30px-bottom xs-margin-15px-bottom wow animate__fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">Confidentiality Measures</h6>
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
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12 col-md-12" style="visibility: visible; animation-name: fadeIn;">
                <div class="feature-box text-start box-shadow-large box-shadow-double-large-hover bg-white padding-4-rem-all lg-padding-3-rem-all md-padding-4-half-rem-all">
                    <div class="feature-box-content">
                        <h6 class="alt-font font-weight-600 d-block text-extra-dark-gray">IT Security Protocols</h6>
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
                    <div class="feature-box-overlay bg-white"></div>
                </div>
            </div>
        </div>
    </div>
</section>

@stop