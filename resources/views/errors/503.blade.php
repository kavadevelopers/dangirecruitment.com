<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>We are on maintenance | {{ CommonHelper::getsetting('app_name') }}</title>
    @include('common.head')
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CLato:300,300italic,400,400italic,700,900%7CPlayfair+Display:700italic,900">
    <link rel="stylesheet" href="{{ url('themes/web/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ url('themes/web/css/fonts.css') }}">
    <link rel="stylesheet" href="{{ url('themes/web/css/style.css') }}">
  </head>
  <body>
    <div class="preloader">
      <div>
        <a class="brand brand-md" href="{{ url('home') }}">
            <img src="{{ url('themes/logos/logo-invert.png') }}" alt="" style="height:auto !important;"/>
        </a>
        <div class="page-loader-body">
          <div id="spinningSquaresG">
            <div class="spinningSquaresG" id="spinningSquaresG_1"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_2"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_3"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_4"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_5"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_6"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_7"></div>
            <div class="spinningSquaresG" id="spinningSquaresG_8"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <section class="section section-single novi-background bg-gray-darker novi-background" style="background-image: url({{ url('themes/web/images/bg-404.jpg') }});">
        <div class="section-single-inner">
          <header class="section-single-header">
            <div class="divider-spectrum"></div>
            <div class="container"><a class="brand brand-md" href="{{ url('home') }}"><img src="{{ url('themes/logos/logo-invert.png') }}" alt="" style="height:auto !important;"/></a></div>
          </header>
          <div class="section-single-main">
            <div class="container">
              <div class="row justify-content-md-center">
                <div class="col-md-9 col-lg-8">
                  <h5>Service is temporary unavailable</h5>
                  <div class="text-extra-large-bordered">
                    <p>503</p>
                  </div>
                  <p>Sorry, we're offline right now to make our site even better.</p>
                  <div class="group-xl"><a class="btn btn-primary" href="{{ url('home') }}">Back to home</a><a class="btn btn-white-outline" href="{{ url('contact-us') }}">Contact us</a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="section-single-footer">
            <div class="container">
                <p class="rights small"><span>{{ CommonHelper::getsetting('app_name') }}</span><span>&nbsp;&#169;&nbsp;</span><span class="copyright-year"></span><span>All Rights Reserved</span><br class="d-md-none"> - Powered By <a class="link-primary" href="http://www.kavadevelopers.com" target="_blank">Kava Developers</a></p>
            </div>
            <div class="divider-spectrum"></div>
          </div>
        </div>
      </section>
    </div>
    <div class="snackbars" id="form-output-global"></div>
    <script src="{{ url('themes/web/js/core.min.js') }}"></script>
    <script src="{{ url('themes/web/js/script.js') }}"></script>
  </body>
</html>