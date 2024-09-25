@extends('web.layouts.main')

@section('content')
<section class="section section-30 section-xxl-40 section-xxl-66 section-xxl-bottom-90 novi-background bg-gray-dark page-title-wrap" style="background-image: url({{ url('themes/web/images/bg-blog.jpg') }});">
    <div class="container">
        <div class="page-title">
            <h2></h2>
        </div>
    </div>
</section>
<section class="section section-60 section-md-75 section-xl-90">
    <div class="container">
        <div class="row row-50">
            <div class="col-lg-2 col-xl-2">
            </div>
                <div class="col-lg-8 col-xl-8">
                <article class="post post-single">
                    <div class="post-image">
                        <figure>
                            <img src="{{ CommonHelper::getBlogBanner($item->banner) }}" alt="" width="870" height="412"/>
                        </figure>
                    </div>
                    <div class="post-header">
                        <h4>{{ $item->title }}</h4>
                    </div>
                    <div class="post-meta">
                        <ul class="list-bordered-horizontal">
                            <li>
                                <dl class="list-terms-inline">
                                    <dt>Date</dt>
                                    <dd>
                                        <time datetime="2022-01-22">{{ CommonHelper::dateFormat($item->created_at,'d M Y') }}</time>
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-inline">
                                    <dt>Posted by</dt>
                                    <dd>{{ $item->posted_by }}</dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="list-terms-inline">
                                    <dt>Category</dt>
                                    <dd>{{ $item->category }}</dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="divider-fullwidth bg-gray-light"></div>
                    <div class="post-body">
                        {!! $item->body !!}
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>



@stop