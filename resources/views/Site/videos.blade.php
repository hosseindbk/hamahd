@extends('master')
@section('main')

    <section class="breadcrumb-area py-5 bg-white pattern-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <div class="media media-card align-items-center pb-4">
                    <div class="media-body">
                        <h2 class="section__title fs-30">آرشیو ویدئوهای </h2>
                        <p class="lh-30">استاد محمد باقر حیدری کاشانی</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="my-courses-area pt-30px pb-90px bg-gray">
        <div class="container">
            <div class="my-course-content-wrap">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="all-course" role="tabpanel" aria-labelledby="all-course-tab">
                        <div class="my-course-body">
                            <div class="my-course-filter-wrap d-flex align-items-center pt-2">
                                <div class="my-course-filter-item my-course-sort-by-content">
                                    <span class="fs-14 font-weight-semi-bold">مرتب سازی بر اساس</span>
                                    <div class="select-container w-100 pt-2">
                                        <select class="select-container-select">
                                            <option value="0" selected="">مشاهده اخیر</option>
                                            <option value="1">ثبت نام اخیر</option>
                                            <option value="2">عنوان: الف تا ی</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="my-course-filter-item my-course-filter-by-content">
                                    <span class="fs-14 font-weight-semi-bold">محدود شده توسط</span>
                                    <div class="my-course-filter-by-content-inner d-flex align-items-center pt-2">
                                        <div class="select-container">
                                            <select class="select-container-select">
                                                <option value="0" selected="">دسته بندی ها</option>
                                                <option value="1">موارد دلخواه</option>

                                            </select>
                                        </div>
                                        <div class="select-container">
                                            <select class="select-container-select">
                                                <option value="0" selected="">پیش رفتن</option>
                                                <option value="1">شروع نشده است</option>
                                                <option value="2">در حال پیش رفت</option>
                                                <option value="3">تکمیل شد</option>
                                            </select>
                                        </div>
                                        <div class="select-container">
                                            <select class="select-container-select">
                                                <option selected="">همه مربی</option>
                                                <option value="1">تیم مربی آدوکا</option>
                                                <option value="1">عاطف جابری</option>
                                            </select>
                                        </div>
                                        <div class="reset-btn-box">
                                            <button class="btn text-gray" type="button">ریست</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="my-course-filter-item my-course-search-content">
                                    <span class="fs-14 font-weight-semi-bold">جستجو کردن</span>
                                    <form method="post" class="pt-2">
                                        <div class="input-group mb-0">
                                            <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="جستجوی دوره ها" />
                                            <div class="input-group-append">
                                                <button class="btn theme-btn shadow-none"><i class="la la-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                            <div class="my-course-cards pt-40px">
                                <div class="row">
                                    @foreach($videos as $video)
                                    <div class="col-lg-4 responsive-column-half">
                                        <div class="card card-item">
                                            <div class="card-image">
                                                <a href="javascript:void(0)" data-toggle="modal" data-target="#previewModal{{$video->id}}">
                                                    <img class="card-img-top lazy" src="{{asset($video->cover)}}" data-src="{{asset($video->cover)}}" alt="{{$video->title}}" />
                                                    <div class="play-button">
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="-307.4 338.8 91.8 91.8" xml:space="preserve">
                                                                <style type="text/css">.st0 {opacity: 0.6;fill: #000000;border-radius: 100px;}  .st1 {fill: #ffffff;}</style>
                                                            <g>
                                                                <circle class="st0" cx="-261.5" cy="384.7" r="45.9"></circle>
                                                                <path class="st1" d="M-272.9,363.2l35.8,20.7c0.7,0.4,0.7,1.3,0,1.7l-35.8,20.7c-0.7,0.4-1.5-0.1-1.5-0.9V364C-274.4,363.3-273.5,362.8-272.9,363.2z"></path>
                                                            </g>
                                                            </svg>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="#">{{$video->title}}</a></h5>
                                                <p class="card-text lh-22 pt-2"><a href="#">استاد محمد باقر حیدری کاشانی </a></p>
                                                <div class="my-course-progress-bar-wrap d-flex flex-wrap align-items-center mt-3 position-relative">
                                                    <p class="skillbar-title">کامل:</p>
                                                    <div class="skillbar-box">
                                                        <div class="skillbar skillbar-skillbar-2" data-percent="70%">
                                                            <div class="skillbar-bar skillbar--bar-2 bg-1"></div>
                                                        </div>
                                                    </div>
                                                    <div class="skill-bar-percent">70%</div>
                                                </div>
                                                <div class="rating-wrap d-flex align-items-center justify-content-between pt-3">
                                                    <div class="review-stars">
                                                        <span class="la la-star"></span>
                                                        <span class="la la-star"></span>
                                                        <span class="la la-star"></span>
                                                        <span class="la la-star"></span>
                                                        <span class="la la-star-o"></span>
                                                    </div>
                                                    <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent" data-toggle="modal" data-target="#ratingModal">رتبه بندی بگذارید</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        <div class="modal fade" id="previewModal{{$video->id}}" tabindex="-1" role="dialog" aria-labelledby="previewModalTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header border-bottom-gray">
                                                        <div class="pr-2">
                                                            <h5 class="modal-title fs-19 font-weight-semi-bold lh-24" id="previewModalTitle">{{$video->title}}</h5>
                                                        </div>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <video controls preload="metadata" poster="{{asset($video->cover)}}" id="player" style="width: 100%">
                                                                        <source src="{{asset($video->file_link)}}" type="video/mp4" />
                                                                        <track label="farsi" kind="subtitles" srclang="fa" src="{{asset('videos/subtitle/farsi.vtt')}}" default>
                                                                        <track label="English" kind="subtitles" srclang="en" src="{{asset('videos/subtitle/english.vtt')}}">
                                                                        {{--<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4" type="video/mp4" />--}}
                                                                        {{--<source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4" type="video/mp4" />--}}
                                                                    </video>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
{{--                                <div class="text-center pt-3">--}}
{{--                                    <nav aria-label="مثال ناوبری صفحه" class="pagination-box">--}}
{{--                                        <ul class="pagination justify-content-center">--}}
{{--                                            <li class="page-item">--}}
{{--                                                <a class="page-link" href="#" aria-label="قبلی">--}}
{{--                                                    <span aria-hidden="true"><i class="la la-arrow-right"></i></span>--}}
{{--                                                    <span class="sr-only">قبلی</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                                            <li class="page-item">--}}
{{--                                                <a class="page-link" href="#" aria-label="بعد">--}}
{{--                                                    <span aria-hidden="true"><i class="la la-arrow-left"></i></span>--}}
{{--                                                    <span class="sr-only">بعد</span>--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </nav>--}}
{{--                                    <p class="fs-14 pt-2">نمایش 1-6 از 56 نتیجه</p>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
