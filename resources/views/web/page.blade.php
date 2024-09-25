@extends('web.layouts.main')

@section('content')

<section class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap" style="background-image: url({{ url('themes/web/images/bg-image-11.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h2>{{ $page->title }}</h2>
        </div>
    </div>
</section>

<section class="section section-60 section-md-75 section-xl-90">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-12 col-xl-12">
                <article class="post post-single">
                    <div class="post-body">
                        {!! $page->body !!}
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>



@stop