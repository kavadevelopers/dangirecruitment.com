@extends('web.layouts.main')

@section('content')


<section class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap" style="padding-top:130px;  background-image: url({{ url('themes/web/images/bg-image-4.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h2>Contact us</h2>
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

@stop