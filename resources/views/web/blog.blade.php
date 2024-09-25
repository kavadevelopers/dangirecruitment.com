@extends('web.layouts.main')

@section('content')



<section class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap" style="padding-top:130px; background-image: url({{ url('themes/web/images/bg-blog.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h2>Blog</h2>
        </div>
    </div>
</section>

<section class="section-50 section-md-90 section-md-bottom-100 custom-home-blogs">
    <div class="container text-center">
        <h3>Latest News</h3>
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