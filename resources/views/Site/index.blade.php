@extends('master')
@section('main')

    <section class="hero-area">
        <div class="hero-slider owl-action-styled">
            @foreach($slides as $slide)
            <div class="hero-slider-item" style="background-image: url({{str_replace("\ ", '/', asset($slide->file_link))}})">
                <div class="container">
                    <div class="hero-content">
                        <div class="section-heading">
                            <h2 class="section__title text-white fs-65 lh-80 pb-3">{{$slide->title}}</h2>
                            <p class="section__desc text-white pb-4">{{$slide->title2}}</p>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

{{--    <section class="feature-area pb-90px">--}}
{{--        <div class="container">--}}
{{--            <div class="row feature-content-wrap">--}}
{{--                @foreach($categories as $category)--}}
{{--                <div class="{{$category->col_style}} responsive-column-half">--}}
{{--                    <a href="{{route($category->route)}}" class="text-secondary">--}}
{{--                        <div class="info-box">--}}
{{--                            <div class="info-overlay"></div>--}}
{{--                            <div class="icon-element mx-auto shadow-sm">--}}
{{--                                <i class="{{$category->icon}}" style="color: #389ec5"></i>--}}
{{--                            </div>--}}
{{--                            <h3 class="info__title">{{$category->title}}</h3>--}}
{{--                            <p class="info__text">{{$category->long_title}}</p>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <section class="category-area pb-90px">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="category-content-wrap">
                        <div class="section-heading">
                            <h2 class="section__title">برنامه ها</h2>
                            <span class="section-divider"></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="category-btn-box text-left">
                        <a href="{{route('categories')}}" class="btn theme-btn">تمام برنامه ها <i class="la la-arrow-left icon ml-1"></i></a>
                    </div>
                </div>
            </div>
            <div class="category-wrapper mt-30px">
                <div class="row">
                    @foreach($programs as $program)
                    <div class="col-lg-4 responsive-column-half">
                        <div class="category-item">
                            <img class="cat__img lazy" src="{{asset($program->file_link)}}" data-src="{{asset($program->file_link)}}" alt="{{$program->title}}">
                            <div class="category-content">
                                <div class="category-inner">
                                    <h3 class="cat__title"><a href={{route('careers')}}>{{$program->title}}</a></h3>
                                    <p class="cat__meta"></p>
                                    <a href="{{route('careers')}}" class="btn theme-btn theme-btn-sm theme-btn-white">مشاهده <i class="la la-arrow-left icon ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="course-area pb-90px bg-gray">
        <div class="course-wrapper">
            <div class="container">
                <div class="section-heading">
                    <div class="col-lg-9">
                        <h5 class="ribbon ribbon-lg mb-2"></h5>
                        <h2 class="section__title">ویدئوهای منتخب</h2>
                        <span class="section-divider"></span>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                <div class="course-carousel owl-action-styled owl--action-styled mt-30px">
                    @foreach($videos as $video)
                    <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                        <div class="card-image">
                            <a href="{{url('آرشیو-ویدئو/'.$video->slug)}}" class="d-block">
                                <img class="card-img-top" src="{{asset($video->cover)}}" alt="{{$video->title}}">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{url('آرشیو-ویدئو/'.$video->slug)}}">{{$video->title}}</a></h5>
                            <p class="card-text"><a href="#">استاد محمدباقر حیدری کاشانی</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <span class="rating-total pl-1">(125)</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="course-area pb-90px">
        <div class="course-wrapper">
            <div class="container">
                <div class="section-heading">
                    <div class="col-lg-9">
                        <h5 class="ribbon ribbon-lg mb-2"></h5>
                        <h2 class="section__title">صوت منتخب</h2>
                        <span class="section-divider"></span>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                <div class="course-carousel owl-action-styled owl--action-styled mt-30px">
                    @foreach($musics as $music)
                    <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                        <div class="card-image">
                            <a href="{{url('آرشیو-صوتی/'.$music->slug)}}" class="d-block">
                                <img class="card-img-top" src="{{asset($music->cover)}}" alt="{{$music->title}}">
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="{{url('آرشیو-صوتی/'.$music->slug)}}">{{$music->title}}</a></h5>
                            <p class="card-text"><a href="#">استاد محمدباقر حیدری کاشانی</a></p>
                            <div class="rating-wrap d-flex align-items-center py-2">
                                <div class="review-stars">
                                    <span class="rating-number">4.4</span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star"></span>
                                    <span class="la la-star-o"></span>
                                </div>
                                <span class="rating-total pl-1">(125)</span>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="course-area pb-90px bg-gray">
        <div class="course-wrapper">
            <div class="container">
                <div class="section-heading">
                    <div class="col-lg-9">
                        <h5 class="ribbon ribbon-lg mb-2"></h5>
                        <h2 class="section__title">تصاویر منتخب</h2>
                        <span class="section-divider"></span>
                    </div>
                    <div class="col-lg-3"></div>
                </div>
                <div class="course-carousel owl-action-styled owl--action-styled mt-30px">
                    @foreach($pics as $pic)
                        <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                            <div class="card-image">
                                <a href="{{url('آرشیو-تصویر/'.$pic->slug)}}" class="d-block">
                                    <img class="card-img-top" src="{{asset($pic->file_link)}}" alt="{{$pic->title}}">
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="{{url('آرشیو-تصویر/'.$pic->slug)}}">{{$pic->title}}</a></h5>
                                <p class="card-text"><a href="#">استاد محمدباقر حیدری کاشانی</a></p>
                                <div class="rating-wrap d-flex align-items-center py-2">
                                    <div class="review-stars">
                                        <span class="rating-number">4.4</span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star"></span>
                                        <span class="la la-star-o"></span>
                                    </div>
                                    <span class="rating-total pl-1">(125)</span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

@endsection
