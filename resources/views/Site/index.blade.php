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

    <section class="feature-area pb-90px">
        <div class="container">
            <div class="row feature-content-wrap">
                @foreach($categories as $category)
                <div class="{{$category->col_style}} responsive-column-half">
                    <div class="info-box">
                        <div class="info-overlay"></div>
                        <div class="icon-element mx-auto shadow-sm">
                            <i class="{{$category->icon}}" style="color: #389ec5"></i>
                        </div>
                        <a href="{{route($category->route)}}"><h3 class="info__title">{{$category->title}}</h3></a>
                        <p class="info__text">{{$category->long_title}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

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
                    <div class="col-lg-4 responsive-column-half">
                        <div class="category-item">
                            <img class="cat__img lazy" src="images/img-loading.png" data-src="images/Heidari-1.jpg" alt="تصویر دسته">
                            <div class="category-content">
                                <div class="category-inner">
                                    <h3 class="cat__title"><a href={{route('careers')}}>فاطمیه</a></h3>
                                    <p class="cat__meta">9 دوره</p>
                                    <a href="{{route('careers')}}" class="btn theme-btn theme-btn-sm theme-btn-white">مشاهده <i class="la la-arrow-left icon ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 responsive-column-half">
                        <div class="category-item">
                            <img class="cat__img lazy" src="images/img-loading.png" data-src="images/Heidari-7.jpg" alt="تصویر دسته">
                            <div class="category-content">
                                <div class="category-inner">
                                    <h3 class="cat__title"><a href="{{route('careers')}}">محرم</a></h3>
                                    <p class="cat__meta">7 دوره</p>
                                    <a href="{{route('careers')}}" class="btn theme-btn theme-btn-sm theme-btn-white">مشاهده <i class="la la-arrow-left icon ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 responsive-column-half">
                        <div class="category-item">
                            <img class="cat__img lazy" src="images/img-loading.png" data-src="images/Heidari-8.jpg" alt="تصویر دسته">
                            <div class="category-content">
                                <div class="category-inner">
                                    <h3 class="cat__title"><a href="{{route('careers')}}">نیمه شعبان</a></h3>
                                    <p class="cat__meta">8 دوره</p>
                                    <a href="{{route('careers')}}" class="btn theme-btn theme-btn-sm theme-btn-white">مشاهده <i class="la la-arrow-left icon ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 responsive-column-half">
                        <div class="category-item">
                            <img class="cat__img lazy" src="images/img-loading.png" data-src="images/Heidari-9.jpg" alt="تصویر دسته">
                            <div class="category-content">
                                <div class="category-inner">
                                    <h3 class="cat__title"><a href="{{route('careers')}}">شهادت ها</a></h3>
                                    <p class="cat__meta">6 دوره</p>
                                    <a href="{{route('careers')}}" class="btn theme-btn theme-btn-sm theme-btn-white">مشاهده <i class="la la-arrow-left icon ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 responsive-column-half">
                        <div class="category-item">
                            <img class="cat__img lazy" src="images/img-loading.png" data-src="images/Heidari-10.jpg" alt="تصویر دسته">
                            <div class="category-content">
                                <div class="category-inner">
                                    <h3 class="cat__title"><a href="{{route('careers')}}">ولادت ها</a></h3>
                                    <p class="cat__meta">7 دوره</p>
                                    <a href="{{route('careers')}}" class="btn theme-btn theme-btn-sm theme-btn-white">مشاهده <i class="la la-arrow-left icon ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 responsive-column-half">
                        <div class="category-item">
                            <img class="cat__img lazy" src="images/img-loading.png" data-src="images/Heidari-11.jpg" alt="تصویر دسته">
                            <div class="category-content">
                                <div class="category-inner">
                                    <h3 class="cat__title"><a href="{{route('careers')}}">حاج قاسم</a></h3>
                                    <p class="cat__meta">8 دوره</p>
                                    <a href="{{route('careers')}}" class="btn theme-btn theme-btn-sm theme-btn-white">مشاهده <i class="la la-arrow-left icon ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="course-area p-120px">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="section__title">کتاب های آموزشی استاد محمد باقر حیدری کاشانی</h2>
                <span class="section-divider"></span>
            </div>
            <ul class="nav nav-tabs generic-tab justify-content-center pb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="true">مهندسی شخصیت </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="design-tab" data-toggle="tab" href="#design" role="tab" aria-controls="design" aria-selected="false">معادله ی اجتماع قلوب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="development-tab" data-toggle="tab" href="#development" role="tab" aria-controls="development" aria-selected="false">مهدی یاوری</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="drawing-tab" data-toggle="tab" href="#drawing" role="tab" aria-controls="drawing" aria-selected="false">مهدی باوری</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="marketing" aria-selected="false">تربیت مهدوی</a>
                </li>
            </ul>
        </div>
        <div class="card-content-wrapper bg-gray pt-50px pb-120px">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                        <div class="row">
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img8.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge">دوره ممتاز</div>
                                            <div class="course-badge blue">-39٪</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره خانواده 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img9.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge red">ویژه</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره خانواده 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img10.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره خانواده 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img11.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره خانواده 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img12.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge green">رایگان</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره خانواده 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_1">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img12.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge sky-blue">بالاترین امتیاز</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره خانواده 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="design" role="tabpanel" aria-labelledby="design-tab">
                        <div class="row">
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img11.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره پدرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img12.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge green">رایگان</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره پدرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img13.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge sky-blue">بالاترین امتیاز</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره پدرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img8.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge">دوره ممتاز</div>
                                            <div class="course-badge blue">-39٪</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره پدرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img9.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge red">ویژه</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره پدرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_2">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img10.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره پدرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="development" role="tabpanel" aria-labelledby="development-tab">
                        <div class="row">
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img8.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge">دوره ممتاز</div>
                                            <div class="course-badge blue">-39٪</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره مادرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img9.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge red">ویژه</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره مادرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img10.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره مادرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img11.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره مادرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img12.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge green">رایگان</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره مادرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_3">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img13.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge sky-blue">بالاترین امتیاز</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره مادرانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="drawing" role="tabpanel" aria-labelledby="drawing-tab">
                        <div class="row">
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img11.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره کودکانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img12.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge green">رایگان</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره کودکانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img13.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge sky-blue">بالاترین امتیاز</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره کودکانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img8.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge">دوره ممتاز</div>
                                            <div class="course-badge blue">-39٪</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره کودکانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img9.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge red">ویژه</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره کودکانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_4">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img10.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">مبتدی</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره کودکانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
                        <div class="row">
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img8.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge">دوره ممتاز</div>
                                            <div class="course-badge blue">-39٪</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره دخترانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img9.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge red">ویژه</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره دخترانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img10.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره دخترانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img11.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره دخترانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img12.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge green">رایگان</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره دخترانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 responsive-column-half">
                                <div class="card card-item card-preview" data-tooltip-content="#tooltip_content_5">
                                    <div class="card-image">
                                        <a href="{{route('coursedetail')}}" class="d-block">
                                            <img class="card-img-top lazy" src="images/img-loading.png" data-src="images/img13.jpg" alt="درپوش تصویر کارت">
                                        </a>
                                        <div class="course-badge-labels">
                                            <div class="course-badge sky-blue">بالاترین امتیاز</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="ribbon ribbon-blue-bg fs-14 mb-3">همه مراحل</h6>
                                        <h5 class="card-title"><a href="{{route('coursedetail')}}">دوره دخترانه 1</a></h5>
                                        <p class="card-text"><a href="teacher-detail.html">استاد محمدباقر حیدری کاشانی</a></p>
                                        <div class="rating-wrap d-flex align-items-center py-2">
                                            <div class="review-stars">
                                                <span class="rating-number">4.4</span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star"></span>
                                                <span class="la la-star-o"></span>
                                            </div>
                                            <span class="rating-total pl-1">(20230)</span>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <p class="card-price text-black font-weight-bold">999 تومان<span class="before-price font-weight-medium">1000 تومان</span></p>
                                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-btn-box mt-4 text-center">
                    <a href="course-grid.html" class="btn theme-btn">همه دوره ها را مرور کنید <i class="la la-arrow-left icon ml-1"></i></a>
                </div>
            </div>
        </div>
    </section>

{{--    <section class="funfact-area text-center overflow-hidden pt-20px pb-80px dot-bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-3 responsive-column-half">--}}
{{--                    <div class="counter-item">--}}
{{--                        <div class="counter__icon icon-element mb-3 shadow-sm">--}}
{{--                            <svg class="svg-icon-color-1" width="40" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m499.5 422h-10v-304.92c0-20.678-16.822-37.5-37.5-37.5h-108.332v-27.962c0-28.462-23.156-51.618-51.618-51.618h-72.1c-28.462 0-51.618 23.156-51.618 51.618v27.962h-108.332c-20.678 0-37.5 16.822-37.5 37.5v304.92h-10c-6.893 0-12.5 5.607-12.5 12.5v34.549c0 23.683 19.268 42.951 42.951 42.951h426.098c23.683 0 42.951-19.268 42.951-42.951v-34.549c0-6.893-5.607-12.5-12.5-12.5zm-155.832-307.112h2.347c6.299 0 11.423 5.124 11.423 11.423 0 6.298-5.124 11.422-11.423 11.422h-2.347zm0 37.844h2.347c15.203.011 27.366-12.987 26.36-28.152h72.125v249.151h-18.64v-41.301c0-14.129-4.877-27.975-13.732-38.988-8.856-11.014-21.335-18.751-35.139-21.786l-67.199-14.761c-4.975-1.086-8.438-5.551-8.44-10.494v-12.896c25.347-15.384 42.318-43.248 42.318-75.002zm-144.678 120.228 6.441-1.415c6.113-1.344 11.335-4.877 14.948-9.642l24.143 17.74-15.434 15.434zm29.701 38.208-3.889 62.563h-123.662v-41.301c0-22 15.599-41.398 37.09-46.124l41.257-9.062 43.142 31.702c1.838 1.349 3.941 2.081 6.062 2.222zm57.691-64.029-30.382 22.325-30.382-22.325c.031-.624.058-5.717.033-6.388 9.461 3.502 19.686 5.419 30.35 5.419s20.888-1.917 30.35-5.419c-.013.671-.005 5.765.031 6.388zm-42.032 53.89 11.65-11.65 11.599 11.599 4.258 72.753h-32.027zm23.129-21.385 24.143-17.74c3.613 4.765 8.835 8.298 14.948 9.642l6.44 1.415-30.098 22.118zm21.894 29.3 43.14-31.701 41.256 9.062c21.492 4.726 37.091 24.124 37.091 46.124v41.302h-123.976l-3.662-62.561c2.151-.126 4.287-.857 6.151-2.226zm-106.041-194.309c10.817-.592 21.509-2.153 31.874-4.66 4.026-.974 6.501-5.027 5.527-9.054-.975-4.026-5.026-6.503-9.054-5.526-9.216 2.229-18.722 3.628-28.348 4.202v-47.979c.001-20.191 16.428-36.618 36.619-36.618h72.1c20.191 0 36.618 16.427 36.618 36.618v45.1c-6.201-2.706-12.011-6.201-17.336-10.485-7.358-5.922-13.503-13.088-18.26-21.298-1.673-2.89-4.521-4.86-7.814-5.407-3.288-.544-6.619.398-9.132 2.589-10.05 8.761-21.15 16.144-33.04 21.971-3.719 1.822-5.257 6.315-3.434 10.035 1.821 3.718 6.313 5.258 10.035 3.434 11.728-5.747 22.683-12.825 32.811-21.178 5.302 8.187 11.822 15.419 19.43 21.54 8.063 6.488 17.038 11.5 26.74 14.939v45.645c0 40.069-32.599 72.668-72.668 72.668s-72.668-32.599-72.668-72.668zm27.318 118.869v12.896c-.006 4.93-3.494 9.415-8.439 10.494l-67.201 14.761c-13.803 3.035-26.281 10.772-35.138 21.786-8.855 11.014-13.732 24.859-13.732 38.988v41.302h-18.64v-249.151h72.125c-1.022 15.115 11.132 28.186 26.36 28.152h2.347v5.77c0 31.754 16.971 59.619 42.318 75.002zm-56.087-107.193c0-6.299 5.124-11.423 11.423-11.423h2.347v22.845h-2.347c-6.299-.001-11.423-5.125-11.423-11.422zm342.437 342.738c0 15.412-12.539 27.951-27.951 27.951h-426.098c-15.412 0-27.951-12.539-27.951-27.951v-32.049h190.545v12.5c0 9.649 7.851 17.5 17.5 17.5h65.91c9.649 0 17.5-7.851 17.5-17.5v-12.5h72.043c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-340.998v-304.92c0-12.406 10.094-22.5 22.5-22.5h108.332v5.308h-2.347c-8.226 0-15.584 3.78-20.434 9.692h-81.551c-6.341 0-11.5 5.159-11.5 11.5v260.151c0 4.143 3.357 7.5 7.5 7.5h392c4.143 0 7.5-3.357 7.5-7.5v-260.151c0-6.341-5.159-11.5-11.5-11.5h-81.551c-4.85-5.913-12.208-9.692-20.434-9.692h-2.347v-5.308h108.332c12.406 0 22.5 10.094 22.5 22.5v304.92h-61.002c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h83.502zm-276.455-19.549v-12.5h70.91v12.5c0 1.379-1.121 2.5-2.5 2.5h-65.91c-1.379 0-2.5-1.121-2.5-2.5zm16.377-243.596c5.712 3.132 12.166 4.823 18.662 4.892 8.306.087 15.383-2.637 19.495-4.893 3.632-1.992 4.96-6.551 2.968-10.183s-6.549-4.961-10.183-2.968c-2.545 1.396-6.654 3.045-11.863 3.045-5.146 0-9.343-1.661-11.866-3.046-3.633-1.994-8.191-.661-10.183 2.97-1.991 3.633-.662 8.191 2.97 10.183zm-19.602-52.241c4.143 0 7.5-3.357 7.5-7.5v-15.472c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v15.472c0 4.143 3.358 7.5 7.5 7.5zm77.36 0c4.143 0 7.5-3.357 7.5-7.5v-15.472c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v15.472c0 4.143 3.357 7.5 7.5 7.5z"></path></g></svg>--}}
{{--                        </div>--}}
{{--                        <h4 class="counter__title counter text-color-2">235</h4>--}}
{{--                        <p class="counter__meta">فایل های تصویری</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 responsive-column-half">--}}
{{--                    <div class="counter-item">--}}
{{--                        <div class="counter__icon icon-element mb-3 shadow-sm">--}}
{{--                            <svg class="svg-icon-color-2" width="42" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 480.1 480.1" xml:space="preserve">--}}
{{--                        <g>--}}
{{--                            <g>--}}
{{--                                <path d="M240.135,0.05C144.085,0.036,57.277,57.289,19.472,145.586l-2.992,0.992l1.16,3.48--}}
{{--                                    c-49.776,122.766,9.393,262.639,132.159,312.415c28.673,11.626,59.324,17.594,90.265,17.577--}}
{{--                                    c132.548,0.02,240.016-107.416,240.036-239.964S372.684,0.069,240.135,0.05z M428.388,361.054l-12.324-12.316V320.05--}}
{{--                                    c0.014-1.238-0.26-2.462-0.8-3.576l-31.2-62.312V224.05c0-2.674-1.335-5.172-3.56-6.656l-24-16--}}
{{--                                    c-1.881-1.256-4.206-1.657-6.4-1.104l-29.392,7.344l-49.368-21.184l-6.792-47.584l18.824-18.816h40.408l13.6,20.44--}}
{{--                                    c1.228,1.838,3.163,3.087,5.344,3.448l48,8c1.286,0.216,2.604,0.111,3.84-0.304l44.208-14.736--}}
{{--                                    C475.855,208.053,471.889,293.634,428.388,361.054z M395.392,78.882l-13.008,8.672l-36.264-7.256l-23.528-7.832--}}
{{--                                    c-1.44-0.489-2.99-0.551-4.464-0.176l-29.744,7.432l-13.04-4.344l9.664-19.328h27.056c1.241,0.001,2.465-0.286,3.576-0.84--}}
{{--                                    l27.68-13.84C362.382,51.32,379.918,63.952,395.392,78.882z M152.44,33.914l19.2,12.8c0.944,0.628,2.01,1.048,3.128,1.232--}}
{{--                                    l38.768,6.464l-3.784,11.32l-20.2,6.744c-1.809,0.602-3.344,1.83-4.328,3.464l-22.976,38.288l-36.904,22.144l-54.4,7.768--}}
{{--                                    c-3.943,0.557-6.875,3.93-6.88,7.912v24c0,2.122,0.844,4.156,2.344,5.656l13.656,13.656v13.744l-33.28-22.192l-12.072-36.216--}}
{{--                                    C57.68,98.218,99.777,56.458,152.44,33.914z M129.664,296.21l-36.16-7.24l-13.44-26.808v-18.8l29.808-29.808l11.032,22.072--}}
{{--                                    c1.355,2.712,4.128,4.425,7.16,4.424h51.472l21.672,36.12c1.446,2.407,4.048,3.879,6.856,3.88h22.24l-5.6,28.056l-30.288,30.288--}}
{{--                                    c-1.503,1.499-2.349,3.533-2.352,5.656v20l-28.8,21.6c-2.014,1.511-3.2,3.882-3.2,6.4v28.896l-9.952-3.296l-14.048-35.136V304.05--}}
{{--                                    C136.065,300.248,133.389,296.97,129.664,296.21z M105.616,419.191C30.187,362.602-1.712,264.826,25.832,174.642l6.648,19.936--}}
{{--                                    c0.56,1.687,1.666,3.14,3.144,4.128l39.88,26.584l-9.096,9.104c-1.5,1.5-2.344,3.534-2.344,5.656v24--}}
{{--                                    c-0.001,1.241,0.286,2.465,0.84,3.576l16,32c1.108,2.21,3.175,3.784,5.6,4.264l33.6,6.712v73.448--}}
{{--                                    c-0.001,1.016,0.192,2.024,0.568,2.968l16,40c0.876,2.185,2.67,3.874,4.904,4.616l24,8c0.802,0.272,1.642,0.412,2.488,0.416--}}
{{--                                    c4.418,0,8-3.582,8-8v-36l28.8-21.6c2.014-1.511,3.2-3.882,3.2-6.4v-20.688l29.656-29.656c1.115-1.117,1.875-2.54,2.184-4.088--}}
{{--                                    l8-40c0.866-4.333-1.944-8.547-6.277-9.413c-0.515-0.103-1.038-0.155-1.563-0.155h-27.472l-21.672-36.12--}}
{{--                                    c-1.446-2.407-4.048-3.879-6.856-3.88h-51.056l-13.744-27.576c-1.151-2.302-3.339-3.91-5.88-4.32--}}
{{--                                    c-2.54-0.439-5.133,0.399-6.936,2.24l-10.384,10.344V192.05c0-2.122-0.844-4.156-2.344-5.656l-13.656-13.656v-13.752l49.136-7.016--}}
{{--                                    c1.055-0.153,2.07-0.515,2.984-1.064l40-24c1.122-0.674,2.062-1.614,2.736-2.736l22.48-37.464l21.192-7.072--}}
{{--                                    c2.393-0.785,4.271-2.662,5.056-5.056l8-24c1.386-4.195-0.891-8.72-5.086-10.106c-0.387-0.128-0.784-0.226-1.186-0.294--}}
{{--                                    l-46.304-7.72l-8.136-5.424c50.343-16.386,104.869-14.358,153.856,5.72l-14.616,7.296h-30.112c-3.047-0.017-5.838,1.699-7.2,4.424--}}
{{--                                    l-16,32c-1.971,3.954-0.364,8.758,3.59,10.729c0.337,0.168,0.685,0.312,1.042,0.431l24,8c1.44,0.489,2.99,0.551,4.464,0.176--}}
{{--                                    l29.744-7.432l21.792,7.256c0.312,0.112,0.633,0.198,0.96,0.256l40,8c2.08,0.424,4.244-0.002,6.008-1.184l18.208-12.144--}}
{{--                                    c8.961,9.981,17.014,20.741,24.064,32.152l-39.36,13.12l-42.616-7.104l-14.08-21.12c-1.476-2.213-3.956-3.547-6.616-3.56h-48--}}
{{--                                    c-2.122,0-4.156,0.844-5.656,2.344l-24,24c-1.782,1.781-2.621,4.298-2.264,6.792l8,56c0.403,2.769,2.223,5.126,4.8,6.216l56,24--}}
{{--                                    c1.604,0.695,3.394,0.838,5.088,0.408l28.568-7.144l17.464,11.664v27.72c-0.014,1.238,0.26,2.462,0.8,3.576l31.2,62.312v30.112--}}
{{--                                    c0,2.122,0.844,4.156,2.344,5.656l16.736,16.744C344.921,473.383,204.549,493.415,105.616,419.191z"></path>--}}
{{--                            </g>--}}
{{--                        </g>--}}
{{--                    </svg>--}}
{{--                        </div>--}}
{{--                        <h4 class="counter__title counter text-color-3">54,252</h4>--}}
{{--                        <p class="counter__meta">بازدید کنندگاه</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 responsive-column-half">--}}
{{--                    <div class="counter-item">--}}
{{--                        <div class="counter__icon icon-element mb-3 shadow-sm">--}}
{{--                            <svg class="svg-icon-color-3" width="42" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 490.667 490.667" xml:space="preserve">--}}
{{--                                    <g>--}}
{{--                                        <g>--}}
{{--                                            <path d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160--}}
{{--                                                C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160--}}
{{--                                                c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z"></path>--}}
{{--                                        </g>--}}
{{--                                    </g>--}}
{{--                                <g>--}}
{{--                                    <g>--}}
{{--                                        <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224--}}
{{--                                                S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32--}}
{{--                                                C426.667,241.643,412.309,256,394.667,256z"></path>--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                    <g>--}}
{{--                                        <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333--}}
{{--                                                S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32--}}
{{--                                                C129.515,241.643,115.157,256,97.515,256z"></path>--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                    <g>--}}
{{--                                        <path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667--}}
{{--                                                c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667--}}
{{--                                                c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z"></path>--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                    <g>--}}
{{--                                        <path d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656--}}
{{--                                                c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667--}}
{{--                                                c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z"></path>--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                                <g>--}}
{{--                                    <g>--}}
{{--                                        <path d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96--}}
{{--                                                c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320--}}
{{--                                                c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z"></path>--}}
{{--                                    </g>--}}
{{--                                </g>--}}
{{--                    </svg>--}}
{{--                        </div>--}}
{{--                        <h4 class="counter__title counter text-color-4">23,220</h4>--}}
{{--                        <p class="counter__meta">اعضاء</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 responsive-column-half">--}}
{{--                    <div class="counter-item">--}}
{{--                        <div class="counter__icon icon-element mb-3 shadow-sm">--}}
{{--                            <svg class="svg-icon-color-4" width="40" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m181.022 142.59-8.659 3.138c-13.364 4.846-23.334 16.536-26.021 30.517l-2.938 15.396c-1.466 7.626.53 15.436 5.479 21.425 4.951 5.995 12.251 9.433 20.025 9.433h75.057c7.714 0 14.977-3.393 19.927-9.309 4.946-5.911 7.004-13.65 5.646-21.233l-2.74-15.315c-2.539-14.201-12.542-26.081-26.108-31.004l-9.18-3.327v-13.53c0-.38-.037-.75-.092-1.115 6.697-6.818 10.533-16.115 10.533-25.627v-20.159c0-19.678-16.01-35.687-35.689-35.687s-35.692 16.009-35.692 35.687v20.787c0 9.778 4.032 18.705 10.515 25.188-.038.304-.063.611-.063.925zm71.008 36.692 2.74 15.317c.574 3.201-.295 6.468-2.384 8.964-2.092 2.5-5.162 3.935-8.423 3.935h-75.057c-3.285 0-6.369-1.452-8.461-3.985-2.088-2.528-2.931-5.823-2.311-9.05l2.938-15.396c1.693-8.812 7.979-16.183 16.4-19.236l5.672-2.055c.142.146.285.293.439.428 6.463 5.651 14.57 8.477 22.682 8.476 8.102 0 16.207-2.82 22.671-8.46.233-.203.447-.422.651-.65l5.983 2.169c8.554 3.102 14.86 10.59 16.46 19.543zm-66.46-97.402c0-11.406 9.281-20.687 20.689-20.687 9.628 0 17.718 6.62 20.015 15.54-.964.471-1.953.916-2.966 1.321-9.222 3.692-16.671 3.202-18.8 1.71-3.392-2.378-8.068-1.558-10.447 1.834-2.378 3.392-1.557 8.068 1.834 10.447 3.663 2.569 8.635 3.853 14.309 3.853 5.155 0 10.89-1.071 16.745-3.19v9.329c0 5.733-2.371 11.347-6.506 15.402-1.914 1.878-4.107 3.333-6.462 4.337-.165.063-.327.131-.486.205-2.419.957-5.003 1.438-7.644 1.369-11.184-.215-20.281-9.494-20.281-20.684zm19.993 56.469c.229.004.456.006.685.006 3.519 0 6.967-.529 10.261-1.544v11.999c-6.251 3.854-14.242 3.852-20.485-.006v-11.971c3.034.919 6.231 1.452 9.539 1.516z"></path><path d="m88.264 350.904h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m88.264 391.345h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m88.264 431.784h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m88.264 472.225h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m80.764 262.524c0 4.143 3.357 7.5 7.5 7.5h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.358-7.5 7.5z"></path><path d="m88.264 310.464h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m60.569 350.932c4.158 0 7.529-3.37 7.529-7.528 0-4.157-3.371-7.528-7.529-7.528s-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 270.052c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 310.492c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 391.372c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 431.813c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528c0 4.157 3.371 7.528 7.528 7.528z"></path><path d="m60.569 472.253c4.158 0 7.529-3.37 7.529-7.528 0-4.157-3.371-7.528-7.529-7.528s-7.528 3.37-7.528 7.528c0 4.157 3.371 7.528 7.528 7.528z"></path><path d="m485.63 118.121c-3.026-3.83-5.886-7.449-7.269-10.783-1.492-3.599-2.08-8.354-2.702-13.39-1.091-8.822-2.327-18.821-9.305-25.798s-16.978-8.213-25.8-9.304c-5.037-.622-9.794-1.21-13.393-2.702-3.335-1.383-6.953-4.241-10.784-7.268-5.271-4.165-11.068-8.738-17.922-10.813v-2.269c.001-19.736-16.058-35.794-35.797-35.794h-312.444c-19.739 0-35.798 16.058-35.798 35.795v28.949c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-28.949c0-11.467 9.33-20.795 20.798-20.795h312.444c11.468 0 20.798 9.328 20.798 20.795v2.27c-6.852 2.076-12.647 6.647-17.918 10.812-3.831 3.026-7.449 5.885-10.783 7.268-3.599 1.491-8.356 2.079-13.393 2.702-8.822 1.09-18.821 2.326-25.8 9.303-6.979 6.978-8.215 16.977-9.306 25.799-.622 5.035-1.21 9.791-2.702 13.39-1.383 3.334-4.242 6.953-7.269 10.783-5.604 7.091-11.954 15.128-11.954 25.417s6.351 18.326 11.954 25.417c3.026 3.83 5.886 7.449 7.269 10.783 1.492 3.599 2.08 8.354 2.702 13.391 1.091 8.821 2.327 18.82 9.305 25.797 6.978 6.978 16.978 8.213 25.8 9.304 2.63.325 5.179.644 7.532 1.084v113.367c0 4.443 2.48 8.411 6.473 10.355 3.992 1.947 8.645 1.453 12.146-1.288l15.943-12.483v136.94c0 11.467-9.33 20.795-20.798 20.795h-312.443c-11.468 0-20.798-9.328-20.798-20.795v-378.435c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v378.434c0 19.737 16.059 35.795 35.798 35.795h312.444c19.739 0 35.798-16.058 35.798-35.795v-136.94l15.943 12.482c2.081 1.63 4.571 2.466 7.089 2.466 1.716 0 3.444-.389 5.064-1.178 3.994-1.944 6.476-5.912 6.476-10.354v-83.697c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v76.555l-19.937-15.609c-2.015-1.595-4.549-2.474-7.136-2.474s-5.121.879-7.104 2.448l-19.959 15.627v-98.625c.544.426 1.091.857 1.645 1.294 7.092 5.604 15.13 11.953 25.42 11.953 10.289 0 18.327-6.35 25.419-11.952 3.831-3.026 7.45-5.886 10.784-7.269 3.599-1.491 8.356-2.079 13.393-2.702 8.822-1.09 18.821-2.326 25.801-9.303 6.977-6.978 8.213-16.977 9.304-25.798.623-5.036 1.211-9.792 2.703-13.391 1.383-3.334 4.242-6.953 7.269-10.783 5.604-7.091 11.954-15.128 11.954-25.417s-6.351-18.326-11.954-25.417zm-11.769 41.534c-3.528 4.465-7.176 9.081-9.355 14.337-2.273 5.48-3.016 11.487-3.734 17.296-.871 7.046-1.693 13.701-5.023 17.031-3.331 3.33-9.987 4.152-17.034 5.023-5.81.718-11.816 1.46-17.298 3.733-5.256 2.179-9.872 5.826-14.337 9.354-5.679 4.485-11.042 8.723-16.121 8.723s-10.442-4.237-16.121-8.723c-4.465-3.527-9.081-7.175-14.337-9.354-.362-.15-1.618-.628-1.889-.712-4.957-1.724-10.26-2.385-15.41-3.021-7.047-.871-13.703-1.694-17.034-5.024-3.329-3.329-4.152-9.984-5.023-17.029-.718-5.81-1.46-11.815-3.733-17.297-2.18-5.256-5.827-9.872-9.355-14.337-4.485-5.678-8.723-11.04-8.723-16.117s4.237-10.439 8.723-16.117c3.528-4.465 7.176-9.081 9.355-14.337 2.273-5.48 3.016-11.487 3.733-17.296.871-7.046 1.694-13.701 5.024-17.031 3.331-3.33 9.987-4.152 17.034-5.023 5.81-.718 11.816-1.46 17.298-3.733 5.256-2.179 9.872-5.826 14.337-9.354 5.667-4.477 11.021-8.705 16.091-8.721.009 0 .019.001.028.001.01 0 .02-.001.03-.001 5.071.015 10.425 4.244 16.093 8.721 4.465 3.527 9.081 7.175 14.337 9.354 5.481 2.273 11.489 3.016 17.299 3.733 7.047.871 13.703 1.694 17.033 5.024s4.153 9.984 5.024 17.03c.718 5.809 1.46 11.815 3.733 17.296 2.18 5.256 5.827 9.872 9.355 14.337 4.485 5.678 8.723 11.04 8.723 16.117s-4.237 10.44-8.723 16.117z"></path><path d="m439.109 119.704-25.522-7.221-14.757-22.04c-1.763-2.632-4.705-4.202-7.872-4.202s-6.11 1.571-7.872 4.202l-14.757 22.04-25.524 7.222c-3.048.863-5.452 3.178-6.43 6.19s-.392 6.297 1.566 8.783l16.403 20.843-1.018 26.497c-.123 3.166 1.333 6.168 3.896 8.031 1.645 1.195 3.594 1.813 5.565 1.813 1.102 0 2.21-.193 3.274-.585l24.895-9.158 24.893 9.157c2.973 1.096 6.276.636 8.839-1.225s4.021-4.862 3.899-8.029l-1.018-26.502 16.404-20.843c1.958-2.489 2.543-5.772 1.564-8.784-.975-3.012-3.379-5.326-6.428-6.189zm-24.587 28.143c-1.386 1.764-2.103 3.97-2.018 6.219l.778 20.284-19.053-7.009c-2.111-.777-4.436-.776-6.543-.001l-19.055 7.01.779-20.291c.084-2.241-.634-4.447-2.023-6.217l-12.554-15.952 19.539-5.527c2.161-.613 4.04-1.979 5.289-3.845l11.295-16.87 11.294 16.868c1.25 1.867 3.129 3.233 5.294 3.848l19.535 5.526z"></path></g></svg>--}}
{{--                        </div>--}}
{{--                        <h4 class="counter__title counter text-color-5">20</h4>--}}
{{--                        <p class="counter__meta">گواهی نامه ها</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <section class="cat-area pt-80px pb-80px bg-gray position-relative">--}}
{{--        <span class="ring-shape ring-shape-1"></span>--}}
{{--        <span class="ring-shape ring-shape-2"></span>--}}
{{--        <span class="ring-shape ring-shape-3"></span>--}}
{{--        <span class="ring-shape ring-shape-4"></span>--}}
{{--        <span class="ring-shape ring-shape-5"></span>--}}
{{--        <span class="ring-shape ring-shape-6"></span>--}}
{{--        <span class="ring-shape ring-shape-7"></span>--}}
{{--        <div class="container">--}}
{{--            <div class="cta-content-wrap text-center">--}}
{{--                <div class="section-heading">--}}
{{--                    <h2 class="section__title fs-45 lh-55">برای دریافت مشاوره با ما در ارتباط باشید</h2>--}}
{{--                </div>--}}
{{--                <div class="cat-btn-box mt-28px">--}}
{{--                    <a href="#" class="btn theme-btn">تماس با ما <i class="la la-arrow-left icon ml-1"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    <!--<section class="testimonial-area section-padding">-->
    <!--    <div class="container">-->
    <!--        <div class="section-heading text-center">-->
    <!--            <h5 class="ribbon ribbon-lg mb-2">گواهینامه ها</h5>-->
    <!--            <h2 class="section__title">بازخورد دانشجو</h2>-->
    <!--            <span class="section-divider"></span>-->
    <!--        </div>&lt;!&ndash; end section-heading &ndash;&gt;-->
    <!--    </div>&lt;!&ndash; end container &ndash;&gt;-->
    <!--    <div class="container-fluid">-->
    <!--        <div class="testimonial-carousel owl-action-styled">-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-body">-->
    <!--                    <div class="media media-card align-items-center pb-3">-->
    <!--                        <div class="media-img avatar-md">-->
    <!--                            <img src="images/small-avatar-1.jpg" alt="آواتار گواهی" class="rounded-full">-->
    <!--                        </div>-->
    <!--                        <div class="media-body">-->
    <!--                            <h5>کوین مارتین</h5>-->
    <!--                            <div class="d-flex align-items-center pt-1">-->
    <!--                                <span class="lh-18 pr-2">دانشجو</span>-->
    <!--                                <div class="review-stars">-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; end media &ndash;&gt;-->
    <!--                    <p class="card-text">-->
    <!--                        من و فرزندانم عاشق ادوکا هستیم! دوره ها فوق العاده هستند و مربیان بسیار سرگرم کننده و آگاه هستند. فقط کاش زودتر پیداش میکردیم-->
    <!--                    </p>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-body">-->
    <!--                    <div class="media media-card align-items-center pb-3">-->
    <!--                        <div class="media-img avatar-md">-->
    <!--                            <img src="images/small-avatar-2.jpg" alt="آواتار گواهی" class="rounded-full">-->
    <!--                        </div>-->
    <!--                        <div class="media-body">-->
    <!--                            <h5>الیور بدوز</h5>-->
    <!--                            <div class="d-flex align-items-center pt-1">-->
    <!--                                <span class="lh-18 pr-2">دانشجو</span>-->
    <!--                                <div class="review-stars">-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; end media &ndash;&gt;-->
    <!--                    <p class="card-text">-->
    <!--                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است-->
    <!--                    </p>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-body">-->
    <!--                    <div class="media media-card align-items-center pb-3">-->
    <!--                        <div class="media-img avatar-md">-->
    <!--                            <img src="images/small-avatar-3.jpg" alt="آواتار گواهی" class="rounded-full">-->
    <!--                        </div>-->
    <!--                        <div class="media-body">-->
    <!--                            <h5>جکوب هالاک</h5>-->
    <!--                            <div class="d-flex align-items-center pt-1">-->
    <!--                                <span class="lh-18 pr-2">دانشجو</span>-->
    <!--                                <div class="review-stars">-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; end media &ndash;&gt;-->
    <!--                    <p class="card-text">-->
    <!--                        من واقعاً این سایت را به همه دوستانم و هر کسی که مایل به یادگیری مهارت های واقعی است توصیه می کنم. این پلتفرم به شما این امکان را می دهد که در زمان مناسب از متخصصان بیاموزید.-->
    <!--                    </p>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-body">-->
    <!--                    <div class="media media-card align-items-center pb-3">-->
    <!--                        <div class="media-img avatar-md">-->
    <!--                            <img src="images/small-avatar-4.jpg" alt="آواتار گواهی" class="rounded-full">-->
    <!--                        </div>-->
    <!--                        <div class="media-body">-->
    <!--                            <h5>لوبیک دوبل</h5>-->
    <!--                            <div class="d-flex align-items-center pt-1">-->
    <!--                                <span class="lh-18 pr-2">دانشجو</span>-->
    <!--                                <div class="review-stars">-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; end media &ndash;&gt;-->
    <!--                    <p class="card-text">-->
    <!--                        متشکرم ادوکا! شما اشتیاق من برای یادگیری و رویای من برای تبدیل شدن به یک توسعه دهنده وب را تجدید کردید.-->
    <!--                    </p>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-body">-->
    <!--                    <div class="media media-card align-items-center pb-3">-->
    <!--                        <div class="media-img avatar-md">-->
    <!--                            <img src="images/small-avatar-5.jpg" alt="آواتار گواهی" class="rounded-full">-->
    <!--                        </div>-->
    <!--                        <div class="media-body">-->
    <!--                            <h5>دنیل وارد</h5>-->
    <!--                            <div class="d-flex align-items-center pt-1">-->
    <!--                                <span class="lh-18 pr-2">دانشجو</span>-->
    <!--                                <div class="review-stars">-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; end media &ndash;&gt;-->
    <!--                    <p class="card-text">-->
    <!--                        زمانی با این سایت آشنا شدم که بودجه ای برای پرداخت هزینه تحصیل در دانشگاه نداشتم. این سایت به معنای واقعی کلمه نجات دهنده ای بوده است زیرا اکنون می توانم از طریق کار آزاد با استفاده از مهارت هایی که از اینجا آموختم درآمد کسب کنم.-->
    <!--                    </p>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-body">-->
    <!--                    <div class="media media-card align-items-center pb-3">-->
    <!--                        <div class="media-img avatar-md">-->
    <!--                            <img src="images/small-avatar-1.jpg" alt="آواتار گواهی" class="rounded-full">-->
    <!--                        </div>-->
    <!--                        <div class="media-body">-->
    <!--                            <h5>کوین مارتین</h5>-->
    <!--                            <div class="d-flex align-items-center pt-1">-->
    <!--                                <span class="lh-18 pr-2">دانشجو</span>-->
    <!--                                <div class="review-stars">-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; end media &ndash;&gt;-->
    <!--                    <p class="card-text">-->
    <!--                        من و فرزندانم عاشق ادوکا هستیم! دوره ها فوق العاده هستند و مربیان بسیار سرگرم کننده و آگاه هستند. فقط کاش زودتر پیداش میکردیم-->
    <!--                    </p>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-body">-->
    <!--                    <div class="media media-card align-items-center pb-3">-->
    <!--                        <div class="media-img avatar-md">-->
    <!--                            <img src="images/small-avatar-2.jpg" alt="آواتار گواهی" class="rounded-full">-->
    <!--                        </div>-->
    <!--                        <div class="media-body">-->
    <!--                            <h5>الیور بدوز</h5>-->
    <!--                            <div class="d-flex align-items-center pt-1">-->
    <!--                                <span class="lh-18 pr-2">دانشجو</span>-->
    <!--                                <div class="review-stars">-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; end media &ndash;&gt;-->
    <!--                    <p class="card-text">-->
    <!--                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است-->
    <!--                    </p>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-body">-->
    <!--                    <div class="media media-card align-items-center pb-3">-->
    <!--                        <div class="media-img avatar-md">-->
    <!--                            <img src="images/small-avatar-3.jpg" alt="آواتار گواهی" class="rounded-full">-->
    <!--                        </div>-->
    <!--                        <div class="media-body">-->
    <!--                            <h5>جکوب هالاک</h5>-->
    <!--                            <div class="d-flex align-items-center pt-1">-->
    <!--                                <span class="lh-18 pr-2">دانشجو</span>-->
    <!--                                <div class="review-stars">-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; end media &ndash;&gt;-->
    <!--                    <p class="card-text">-->
    <!--                        من واقعاً این سایت را به همه دوستانم و هر کسی که مایل به یادگیری مهارت های واقعی است توصیه می کنم. این پلتفرم به شما این امکان را می دهد که در زمان مناسب از متخصصان بیاموزید.-->
    <!--                    </p>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-body">-->
    <!--                    <div class="media media-card align-items-center pb-3">-->
    <!--                        <div class="media-img avatar-md">-->
    <!--                            <img src="images/small-avatar-4.jpg" alt="آواتار گواهی" class="rounded-full">-->
    <!--                        </div>-->
    <!--                        <div class="media-body">-->
    <!--                            <h5>لوبیک دوبل</h5>-->
    <!--                            <div class="d-flex align-items-center pt-1">-->
    <!--                                <span class="lh-18 pr-2">دانشجو</span>-->
    <!--                                <div class="review-stars">-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; end media &ndash;&gt;-->
    <!--                    <p class="card-text">-->
    <!--                        متشکرم ادوکا! شما اشتیاق من برای یادگیری و رویای من برای تبدیل شدن به یک توسعه دهنده وب را تجدید کردید.-->
    <!--                    </p>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-body">-->
    <!--                    <div class="media media-card align-items-center pb-3">-->
    <!--                        <div class="media-img avatar-md">-->
    <!--                            <img src="images/small-avatar-5.jpg" alt="آواتار گواهی" class="rounded-full">-->
    <!--                        </div>-->
    <!--                        <div class="media-body">-->
    <!--                            <h5>دنیل وارد</h5>-->
    <!--                            <div class="d-flex align-items-center pt-1">-->
    <!--                                <span class="lh-18 pr-2">دانشجو</span>-->
    <!--                                <div class="review-stars">-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                    <span class="la la-star"></span>-->
    <!--                                </div>-->
    <!--                            </div>-->
    <!--                        </div>-->
    <!--                    </div>&lt;!&ndash; end media &ndash;&gt;-->
    <!--                    <p class="card-text">-->
    <!--                        زمانی با این سایت آشنا شدم که بودجه ای برای پرداخت هزینه تحصیل در دانشگاه نداشتم. این سایت به معنای واقعی کلمه نجات دهنده ای بوده است زیرا اکنون می توانم از طریق کار آزاد با استفاده از مهارت هایی که از اینجا آموختم درآمد کسب کنم.-->
    <!--                    </p>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--        </div>&lt;!&ndash; end testimonial-carousel &ndash;&gt;-->
    <!--    </div>&lt;!&ndash; container-fluid &ndash;&gt;-->
    <!--</section>&lt;!&ndash; end testimonial-area &ndash;&gt;-->
    <!--================================
            END TESTIMONIAL AREA
    =================================-->

{{--    <div class="section-block"></div>--}}

{{--    <section class="about-area section--padding overflow-hidden">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="about-content pb-5">--}}
{{--                        <div class="section-heading">--}}
{{--                            <h5 class="ribbon ribbon-lg mb-2">درباره ما</h5>--}}
{{--                            <h2 class="section__title">مزایای یادگیری با ما</h2>--}}
{{--                            <span class="section-divider"></span>--}}
{{--                            <p class="section__desc">--}}
{{--                                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="row pt-4 pb-3">--}}
{{--                            <div class="col-lg-4 responsive-column-half">--}}
{{--                                <div class="info-icon-box mb-3">--}}
{{--                                    <div class="icon-element icon-element-md shadow-sm">--}}
{{--                                        <svg class="svg-icon-color-1" width="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m181.022 142.59-8.659 3.138c-13.364 4.846-23.334 16.536-26.021 30.517l-2.938 15.396c-1.466 7.626.53 15.436 5.479 21.425 4.951 5.995 12.251 9.433 20.025 9.433h75.057c7.714 0 14.977-3.393 19.927-9.309 4.946-5.911 7.004-13.65 5.646-21.233l-2.74-15.315c-2.539-14.201-12.542-26.081-26.108-31.004l-9.18-3.327v-13.53c0-.38-.037-.75-.092-1.115 6.697-6.818 10.533-16.115 10.533-25.627v-20.159c0-19.678-16.01-35.687-35.689-35.687s-35.692 16.009-35.692 35.687v20.787c0 9.778 4.032 18.705 10.515 25.188-.038.304-.063.611-.063.925zm71.008 36.692 2.74 15.317c.574 3.201-.295 6.468-2.384 8.964-2.092 2.5-5.162 3.935-8.423 3.935h-75.057c-3.285 0-6.369-1.452-8.461-3.985-2.088-2.528-2.931-5.823-2.311-9.05l2.938-15.396c1.693-8.812 7.979-16.183 16.4-19.236l5.672-2.055c.142.146.285.293.439.428 6.463 5.651 14.57 8.477 22.682 8.476 8.102 0 16.207-2.82 22.671-8.46.233-.203.447-.422.651-.65l5.983 2.169c8.554 3.102 14.86 10.59 16.46 19.543zm-66.46-97.402c0-11.406 9.281-20.687 20.689-20.687 9.628 0 17.718 6.62 20.015 15.54-.964.471-1.953.916-2.966 1.321-9.222 3.692-16.671 3.202-18.8 1.71-3.392-2.378-8.068-1.558-10.447 1.834-2.378 3.392-1.557 8.068 1.834 10.447 3.663 2.569 8.635 3.853 14.309 3.853 5.155 0 10.89-1.071 16.745-3.19v9.329c0 5.733-2.371 11.347-6.506 15.402-1.914 1.878-4.107 3.333-6.462 4.337-.165.063-.327.131-.486.205-2.419.957-5.003 1.438-7.644 1.369-11.184-.215-20.281-9.494-20.281-20.684zm19.993 56.469c.229.004.456.006.685.006 3.519 0 6.967-.529 10.261-1.544v11.999c-6.251 3.854-14.242 3.852-20.485-.006v-11.971c3.034.919 6.231 1.452 9.539 1.516z"></path><path d="m88.264 350.904h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m88.264 391.345h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m88.264 431.784h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m88.264 472.225h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m80.764 262.524c0 4.143 3.357 7.5 7.5 7.5h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.358-7.5 7.5z"></path><path d="m88.264 310.464h233.57c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-233.57c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5z"></path><path d="m60.569 350.932c4.158 0 7.529-3.37 7.529-7.528 0-4.157-3.371-7.528-7.529-7.528s-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 270.052c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 310.492c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 391.372c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528 3.371 7.528 7.528 7.528z"></path><path d="m60.569 431.813c4.158 0 7.529-3.37 7.529-7.528s-3.371-7.528-7.529-7.528-7.528 3.37-7.528 7.528c0 4.157 3.371 7.528 7.528 7.528z"></path><path d="m60.569 472.253c4.158 0 7.529-3.37 7.529-7.528 0-4.157-3.371-7.528-7.529-7.528s-7.528 3.37-7.528 7.528c0 4.157 3.371 7.528 7.528 7.528z"></path><path d="m485.63 118.121c-3.026-3.83-5.886-7.449-7.269-10.783-1.492-3.599-2.08-8.354-2.702-13.39-1.091-8.822-2.327-18.821-9.305-25.798s-16.978-8.213-25.8-9.304c-5.037-.622-9.794-1.21-13.393-2.702-3.335-1.383-6.953-4.241-10.784-7.268-5.271-4.165-11.068-8.738-17.922-10.813v-2.269c.001-19.736-16.058-35.794-35.797-35.794h-312.444c-19.739 0-35.798 16.058-35.798 35.795v28.949c0 4.143 3.357 7.5 7.5 7.5s7.5-3.357 7.5-7.5v-28.949c0-11.467 9.33-20.795 20.798-20.795h312.444c11.468 0 20.798 9.328 20.798 20.795v2.27c-6.852 2.076-12.647 6.647-17.918 10.812-3.831 3.026-7.449 5.885-10.783 7.268-3.599 1.491-8.356 2.079-13.393 2.702-8.822 1.09-18.821 2.326-25.8 9.303-6.979 6.978-8.215 16.977-9.306 25.799-.622 5.035-1.21 9.791-2.702 13.39-1.383 3.334-4.242 6.953-7.269 10.783-5.604 7.091-11.954 15.128-11.954 25.417s6.351 18.326 11.954 25.417c3.026 3.83 5.886 7.449 7.269 10.783 1.492 3.599 2.08 8.354 2.702 13.391 1.091 8.821 2.327 18.82 9.305 25.797 6.978 6.978 16.978 8.213 25.8 9.304 2.63.325 5.179.644 7.532 1.084v113.367c0 4.443 2.48 8.411 6.473 10.355 3.992 1.947 8.645 1.453 12.146-1.288l15.943-12.483v136.94c0 11.467-9.33 20.795-20.798 20.795h-312.443c-11.468 0-20.798-9.328-20.798-20.795v-378.435c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v378.434c0 19.737 16.059 35.795 35.798 35.795h312.444c19.739 0 35.798-16.058 35.798-35.795v-136.94l15.943 12.482c2.081 1.63 4.571 2.466 7.089 2.466 1.716 0 3.444-.389 5.064-1.178 3.994-1.944 6.476-5.912 6.476-10.354v-83.697c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v76.555l-19.937-15.609c-2.015-1.595-4.549-2.474-7.136-2.474s-5.121.879-7.104 2.448l-19.959 15.627v-98.625c.544.426 1.091.857 1.645 1.294 7.092 5.604 15.13 11.953 25.42 11.953 10.289 0 18.327-6.35 25.419-11.952 3.831-3.026 7.45-5.886 10.784-7.269 3.599-1.491 8.356-2.079 13.393-2.702 8.822-1.09 18.821-2.326 25.801-9.303 6.977-6.978 8.213-16.977 9.304-25.798.623-5.036 1.211-9.792 2.703-13.391 1.383-3.334 4.242-6.953 7.269-10.783 5.604-7.091 11.954-15.128 11.954-25.417s-6.351-18.326-11.954-25.417zm-11.769 41.534c-3.528 4.465-7.176 9.081-9.355 14.337-2.273 5.48-3.016 11.487-3.734 17.296-.871 7.046-1.693 13.701-5.023 17.031-3.331 3.33-9.987 4.152-17.034 5.023-5.81.718-11.816 1.46-17.298 3.733-5.256 2.179-9.872 5.826-14.337 9.354-5.679 4.485-11.042 8.723-16.121 8.723s-10.442-4.237-16.121-8.723c-4.465-3.527-9.081-7.175-14.337-9.354-.362-.15-1.618-.628-1.889-.712-4.957-1.724-10.26-2.385-15.41-3.021-7.047-.871-13.703-1.694-17.034-5.024-3.329-3.329-4.152-9.984-5.023-17.029-.718-5.81-1.46-11.815-3.733-17.297-2.18-5.256-5.827-9.872-9.355-14.337-4.485-5.678-8.723-11.04-8.723-16.117s4.237-10.439 8.723-16.117c3.528-4.465 7.176-9.081 9.355-14.337 2.273-5.48 3.016-11.487 3.733-17.296.871-7.046 1.694-13.701 5.024-17.031 3.331-3.33 9.987-4.152 17.034-5.023 5.81-.718 11.816-1.46 17.298-3.733 5.256-2.179 9.872-5.826 14.337-9.354 5.667-4.477 11.021-8.705 16.091-8.721.009 0 .019.001.028.001.01 0 .02-.001.03-.001 5.071.015 10.425 4.244 16.093 8.721 4.465 3.527 9.081 7.175 14.337 9.354 5.481 2.273 11.489 3.016 17.299 3.733 7.047.871 13.703 1.694 17.033 5.024s4.153 9.984 5.024 17.03c.718 5.809 1.46 11.815 3.733 17.296 2.18 5.256 5.827 9.872 9.355 14.337 4.485 5.678 8.723 11.04 8.723 16.117s-4.237 10.44-8.723 16.117z"></path><path d="m439.109 119.704-25.522-7.221-14.757-22.04c-1.763-2.632-4.705-4.202-7.872-4.202s-6.11 1.571-7.872 4.202l-14.757 22.04-25.524 7.222c-3.048.863-5.452 3.178-6.43 6.19s-.392 6.297 1.566 8.783l16.403 20.843-1.018 26.497c-.123 3.166 1.333 6.168 3.896 8.031 1.645 1.195 3.594 1.813 5.565 1.813 1.102 0 2.21-.193 3.274-.585l24.895-9.158 24.893 9.157c2.973 1.096 6.276.636 8.839-1.225s4.021-4.862 3.899-8.029l-1.018-26.502 16.404-20.843c1.958-2.489 2.543-5.772 1.564-8.784-.975-3.012-3.379-5.326-6.428-6.189zm-24.587 28.143c-1.386 1.764-2.103 3.97-2.018 6.219l.778 20.284-19.053-7.009c-2.111-.777-4.436-.776-6.543-.001l-19.055 7.01.779-20.291c.084-2.241-.634-4.447-2.023-6.217l-12.554-15.952 19.539-5.527c2.161-.613 4.04-1.979 5.289-3.845l11.295-16.87 11.294 16.868c1.25 1.867 3.129 3.233 5.294 3.848l19.535 5.526z"></path></g></svg>--}}
{{--                                    </div>--}}
{{--                                    <h4 class="fs-20 font-weight-semi-bold pt-3">130000 دوره</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4 responsive-column-half">--}}
{{--                                <div class="info-icon-box mb-3">--}}
{{--                                    <div class="icon-element icon-element-md shadow-sm">--}}
{{--                                        <svg class="svg-icon-color-2" width="32" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><path d="m499.5 422h-10v-304.92c0-20.678-16.822-37.5-37.5-37.5h-108.332v-27.962c0-28.462-23.156-51.618-51.618-51.618h-72.1c-28.462 0-51.618 23.156-51.618 51.618v27.962h-108.332c-20.678 0-37.5 16.822-37.5 37.5v304.92h-10c-6.893 0-12.5 5.607-12.5 12.5v34.549c0 23.683 19.268 42.951 42.951 42.951h426.098c23.683 0 42.951-19.268 42.951-42.951v-34.549c0-6.893-5.607-12.5-12.5-12.5zm-155.832-307.112h2.347c6.299 0 11.423 5.124 11.423 11.423 0 6.298-5.124 11.422-11.423 11.422h-2.347zm0 37.844h2.347c15.203.011 27.366-12.987 26.36-28.152h72.125v249.151h-18.64v-41.301c0-14.129-4.877-27.975-13.732-38.988-8.856-11.014-21.335-18.751-35.139-21.786l-67.199-14.761c-4.975-1.086-8.438-5.551-8.44-10.494v-12.896c25.347-15.384 42.318-43.248 42.318-75.002zm-144.678 120.228 6.441-1.415c6.113-1.344 11.335-4.877 14.948-9.642l24.143 17.74-15.434 15.434zm29.701 38.208-3.889 62.563h-123.662v-41.301c0-22 15.599-41.398 37.09-46.124l41.257-9.062 43.142 31.702c1.838 1.349 3.941 2.081 6.062 2.222zm57.691-64.029-30.382 22.325-30.382-22.325c.031-.624.058-5.717.033-6.388 9.461 3.502 19.686 5.419 30.35 5.419s20.888-1.917 30.35-5.419c-.013.671-.005 5.765.031 6.388zm-42.032 53.89 11.65-11.65 11.599 11.599 4.258 72.753h-32.027zm23.129-21.385 24.143-17.74c3.613 4.765 8.835 8.298 14.948 9.642l6.44 1.415-30.098 22.118zm21.894 29.3 43.14-31.701 41.256 9.062c21.492 4.726 37.091 24.124 37.091 46.124v41.302h-123.976l-3.662-62.561c2.151-.126 4.287-.857 6.151-2.226zm-106.041-194.309c10.817-.592 21.509-2.153 31.874-4.66 4.026-.974 6.501-5.027 5.527-9.054-.975-4.026-5.026-6.503-9.054-5.526-9.216 2.229-18.722 3.628-28.348 4.202v-47.979c.001-20.191 16.428-36.618 36.619-36.618h72.1c20.191 0 36.618 16.427 36.618 36.618v45.1c-6.201-2.706-12.011-6.201-17.336-10.485-7.358-5.922-13.503-13.088-18.26-21.298-1.673-2.89-4.521-4.86-7.814-5.407-3.288-.544-6.619.398-9.132 2.589-10.05 8.761-21.15 16.144-33.04 21.971-3.719 1.822-5.257 6.315-3.434 10.035 1.821 3.718 6.313 5.258 10.035 3.434 11.728-5.747 22.683-12.825 32.811-21.178 5.302 8.187 11.822 15.419 19.43 21.54 8.063 6.488 17.038 11.5 26.74 14.939v45.645c0 40.069-32.599 72.668-72.668 72.668s-72.668-32.599-72.668-72.668zm27.318 118.869v12.896c-.006 4.93-3.494 9.415-8.439 10.494l-67.201 14.761c-13.803 3.035-26.281 10.772-35.138 21.786-8.855 11.014-13.732 24.859-13.732 38.988v41.302h-18.64v-249.151h72.125c-1.022 15.115 11.132 28.186 26.36 28.152h2.347v5.77c0 31.754 16.971 59.619 42.318 75.002zm-56.087-107.193c0-6.299 5.124-11.423 11.423-11.423h2.347v22.845h-2.347c-6.299-.001-11.423-5.125-11.423-11.422zm342.437 342.738c0 15.412-12.539 27.951-27.951 27.951h-426.098c-15.412 0-27.951-12.539-27.951-27.951v-32.049h190.545v12.5c0 9.649 7.851 17.5 17.5 17.5h65.91c9.649 0 17.5-7.851 17.5-17.5v-12.5h72.043c4.143 0 7.5-3.357 7.5-7.5s-3.357-7.5-7.5-7.5h-340.998v-304.92c0-12.406 10.094-22.5 22.5-22.5h108.332v5.308h-2.347c-8.226 0-15.584 3.78-20.434 9.692h-81.551c-6.341 0-11.5 5.159-11.5 11.5v260.151c0 4.143 3.357 7.5 7.5 7.5h392c4.143 0 7.5-3.357 7.5-7.5v-260.151c0-6.341-5.159-11.5-11.5-11.5h-81.551c-4.85-5.913-12.208-9.692-20.434-9.692h-2.347v-5.308h108.332c12.406 0 22.5 10.094 22.5 22.5v304.92h-61.002c-4.143 0-7.5 3.357-7.5 7.5s3.357 7.5 7.5 7.5h83.502zm-276.455-19.549v-12.5h70.91v12.5c0 1.379-1.121 2.5-2.5 2.5h-65.91c-1.379 0-2.5-1.121-2.5-2.5zm16.377-243.596c5.712 3.132 12.166 4.823 18.662 4.892 8.306.087 15.383-2.637 19.495-4.893 3.632-1.992 4.96-6.551 2.968-10.183s-6.549-4.961-10.183-2.968c-2.545 1.396-6.654 3.045-11.863 3.045-5.146 0-9.343-1.661-11.866-3.046-3.633-1.994-8.191-.661-10.183 2.97-1.991 3.633-.662 8.191 2.97 10.183zm-19.602-52.241c4.143 0 7.5-3.357 7.5-7.5v-15.472c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v15.472c0 4.143 3.358 7.5 7.5 7.5zm77.36 0c4.143 0 7.5-3.357 7.5-7.5v-15.472c0-4.143-3.357-7.5-7.5-7.5s-7.5 3.357-7.5 7.5v15.472c0 4.143 3.357 7.5 7.5 7.5z"></path></g></svg>--}}
{{--                                    </div>--}}
{{--                                    <h4 class="fs-20 font-weight-semi-bold pt-3">یادگیری زنده</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-4 responsive-column-half">--}}
{{--                                <div class="info-icon-box mb-3">--}}
{{--                                    <div class="icon-element icon-element-md shadow-sm">--}}
{{--                                        <svg class="svg-icon-color-3" width="32" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 490.667 490.667" xml:space="preserve">--}}
{{--                                    <g>--}}
{{--                                        <g>--}}
{{--                                            <path d="M245.333,85.333c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,201.173,320,160--}}
{{--                                                C320,118.827,286.507,85.333,245.333,85.333z M245.333,213.333C215.936,213.333,192,189.397,192,160--}}
{{--                                                c0-29.397,23.936-53.333,53.333-53.333s53.333,23.936,53.333,53.333S274.731,213.333,245.333,213.333z"></path>--}}
{{--                                        </g>--}}
{{--                                    </g>--}}
{{--                                            <g>--}}
{{--                                                <g>--}}
{{--                                                    <path d="M394.667,170.667c-29.397,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333S448,253.397,448,224--}}
{{--                                                S424.064,170.667,394.667,170.667z M394.667,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32s32,14.357,32,32--}}
{{--                                                C426.667,241.643,412.309,256,394.667,256z"></path>--}}
{{--                                                </g>--}}
{{--                                            </g>--}}
{{--                                            <g>--}}
{{--                                                <g>--}}
{{--                                                    <path d="M97.515,170.667c-29.419,0-53.333,23.936-53.333,53.333s23.936,53.333,53.333,53.333s53.333-23.936,53.333-53.333--}}
{{--                                                S126.933,170.667,97.515,170.667z M97.515,256c-17.643,0-32-14.357-32-32c0-17.643,14.357-32,32-32c17.643,0,32,14.357,32,32--}}
{{--                                                C129.515,241.643,115.157,256,97.515,256z"></path>--}}
{{--                                                </g>--}}
{{--                                            </g>--}}
{{--                                            <g>--}}
{{--                                                <g>--}}
{{--                                                    <path d="M245.333,256c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,400.555,128,394.667--}}
{{--                                                c0-64.704,52.629-117.333,117.333-117.333s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667--}}
{{--                                                c5.888,0,10.667-4.779,10.667-10.667C384,318.208,321.792,256,245.333,256z"></path>--}}
{{--                                                </g>--}}
{{--                                            </g>--}}
{{--                                            <g>--}}
{{--                                                <g>--}}
{{--                                                    <path d="M394.667,298.667c-17.557,0-34.752,4.8-49.728,13.867c-5.013,3.072-6.635,9.621-3.584,14.656--}}
{{--                                                c3.093,5.035,9.621,6.635,14.656,3.584C367.637,323.712,380.992,320,394.667,320c41.173,0,74.667,33.493,74.667,74.667--}}
{{--                                                c0,5.888,4.779,10.667,10.667,10.667c5.888,0,10.667-4.779,10.667-10.667C490.667,341.739,447.595,298.667,394.667,298.667z"></path>--}}
{{--                                                </g>--}}
{{--                                            </g>--}}
{{--                                            <g>--}}
{{--                                                <g>--}}
{{--                                                    <path d="M145.707,312.512c-14.955-9.045-32.149-13.845-49.707-13.845c-52.928,0-96,43.072-96,96--}}
{{--                                                c0,5.888,4.779,10.667,10.667,10.667s10.667-4.779,10.667-10.667C21.333,353.493,54.827,320,96,320--}}
{{--                                                c13.675,0,27.029,3.712,38.635,10.752c5.013,3.051,11.584,1.451,14.656-3.584C152.363,322.133,150.741,315.584,145.707,312.512z"></path>--}}
{{--                                                </g>--}}
{{--                                            </g>--}}
{{--                                    </svg>--}}
{{--                                    </div>--}}
{{--                                    <h4 class="fs-20 font-weight-semi-bold pt-3">اساتید خبره</h4>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="btn-box">--}}
{{--                            <a href="{{route('about')}}" class="btn theme-btn">بیشتر بدانید <i class="la la-arrow-left icon ml-1"></i></a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 ml-auto">--}}
{{--                    <div class="generic-img-box">--}}
{{--                        <img src="images/img-loading.png" data-src="images/img13.jpg" alt="درباره تصویر" class="img__item img__item-1 lazy">--}}
{{--                        <img src="images/img-loading.png" data-src="images/img14.jpg" alt="درباره تصویر" class="img__item img__item-2 lazy">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

{{--    <div class="section-block"></div>--}}

    <!--======================================
            START REGISTER AREA
    ======================================-->
    <!--<section class="register-area section-padding dot-bg overflow-hidden">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-5">-->
    <!--                <div class="card card-item">-->
    <!--                    <div class="card-body">-->
    <!--                        <h3 class="fs-24 font-weight-semi-bold pb-2">دوره های رایگان دریافت کنید</h3>-->
    <!--                        <div class="divider"><span></span></div>-->
    <!--                        <form method="post">-->
    <!--                            <div class="input-box">-->
    <!--                                <label class="label-text">نام</label>-->
    <!--                                <div class="form-group">-->
    <!--                                    <input class="form-control form&#45;&#45;control" type="text" name="name" placeholder="اسم شما">-->
    <!--                                    <span class="la la-user input-icon"></span>-->
    <!--                                </div>-->
    <!--                            </div>&lt;!&ndash; end input-box &ndash;&gt;-->
    <!--                            <div class="input-box">-->
    <!--                                <label class="label-text">پست الکترونیک</label>-->
    <!--                                <div class="form-group">-->
    <!--                                    <input class="form-control form&#45;&#45;control" type="email" name="email" placeholder="آدرس ایمیل">-->
    <!--                                    <span class="la la-envelope input-icon"></span>-->
    <!--                                </div>-->
    <!--                            </div>&lt;!&ndash; end input-box &ndash;&gt;-->
    <!--                            <div class="input-box">-->
    <!--                                <label class="label-text">شماره تلفن</label>-->
    <!--                                <div class="form-group">-->
    <!--                                    <input class="form-control form&#45;&#45;control" type="text" name="phone" placeholder="شماره تلفن">-->
    <!--                                    <span class="la la-phone input-icon"></span>-->
    <!--                                </div>-->
    <!--                            </div>&lt;!&ndash; end input-box &ndash;&gt;-->
    <!--                            <div class="input-box">-->
    <!--                                <label class="label-text">موضوع</label>-->
    <!--                                <div class="form-group">-->
    <!--                                    <input class="form-control form&#45;&#45;control" type="text" name="subject" placeholder="موضوع">-->
    <!--                                    <span class="la la-book input-icon"></span>-->
    <!--                                </div>-->
    <!--                            </div>&lt;!&ndash; end input-box &ndash;&gt;-->
    <!--                            <div class="btn-box pt-2">-->
    <!--                                <button class="btn theme-btn" type="submit">اکنون درخواست دهید <i class="la la-arrow-left icon ml-1"></i></button>-->
    <!--                            </div>&lt;!&ndash; end btn-box &ndash;&gt;-->
    <!--                        </form>-->
    <!--                    </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--                </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end col-lg-5 &ndash;&gt;-->
    <!--            <div class="col-lg-6 ml-auto">-->
    <!--                <div class="register-content">-->
    <!--                    <div class="section-heading">-->
    <!--                        <h5 class="ribbon ribbon-lg mb-2">ثبت نام</h5>-->
    <!--                        <h2 class="section__title">با مسیرهای یادگیری پیش بروید. تیز بمان</h2>-->
    <!--                        <span class="section-divider"></span>-->
    <!--                        <p class="section__desc">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد</p>-->
    <!--                    </div>&lt;!&ndash; end section-heading &ndash;&gt;-->
    <!--                    <div class="btn-box pt-35px">-->
    <!--                        <a href="sign-up.html" class="btn theme-btn"><i class="la la-user mr-1"></i>شروع کنید</a>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end register-content &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end col-lg-6 &ndash;&gt;-->
    <!--        </div>&lt;!&ndash; end row &ndash;&gt;-->
    <!--    </div>&lt;!&ndash; end container &ndash;&gt;-->
    <!--</section>-->
    <!-- end register-area -->
    <!--======================================
            END REGISTER AREA
    ======================================-->

{{--    <div class="section-block"></div>--}}

    <!-- ================================
           START CLIENT-LOGO AREA
    ================================= -->
    <!--<section class="client-logo-area section-padding position-relative overflow-hidden text-center">-->
    <!--    <span class="stroke-shape stroke-shape-1"></span>-->
    <!--    <span class="stroke-shape stroke-shape-2"></span>-->
    <!--    <span class="stroke-shape stroke-shape-3"></span>-->
    <!--    <span class="stroke-shape stroke-shape-4"></span>-->
    <!--    <span class="stroke-shape stroke-shape-5"></span>-->
    <!--    <span class="stroke-shape stroke-shape-6"></span>-->
    <!--    <div class="container">-->
    <!--        <div class="section-heading">-->
    <!--            <h2 class="section__title">حامیان<a href="for-business.html" class="text-color hover-underline">ادوکا برای کسب و کار</a>-->
    <!--                <br> را برای ساخت انتخاب می کنند</h2>-->
    <!--            <span class="section-divider"></span>-->
    <!--        </div>&lt;!&ndash; end section-heading &ndash;&gt;-->
    <!--        <div class="client-logo-carousel pt-4">-->
    <!--            <a href="#" class="client-logo-item"><img src="images/sponsor-img.png" alt="تصویر نام تجاری"></a>-->
    <!--            <a href="#" class="client-logo-item"><img src="images/sponsor-img2.png" alt="تصویر نام تجاری"></a>-->
    <!--            <a href="#" class="client-logo-item"><img src="images/sponsor-img3.png" alt="تصویر نام تجاری"></a>-->
    <!--            <a href="#" class="client-logo-item"><img src="images/sponsor-img4.png" alt="تصویر نام تجاری"></a>-->
    <!--            <a href="#" class="client-logo-item"><img src="images/sponsor-img5.png" alt="تصویر نام تجاری"></a>-->
    <!--        </div>&lt;!&ndash; end client-logo-carousel &ndash;&gt;-->
    <!--    </div>&lt;!&ndash; end container &ndash;&gt;-->
    <!--</section>&lt;!&ndash; end client-logo-area &ndash;&gt;-->
    <!-- ================================
           START CLIENT-LOGO AREA
    ================================= -->

    <!-- ================================
           START BLOG AREA
    ================================= -->
    <!--<section class="blog-area section&#45;&#45;padding bg-gray overflow-hidden">-->
    <!--    <div class="container">-->
    <!--        <div class="section-heading text-center">-->
    <!--            <h5 class="ribbon ribbon-lg mb-2">فیدهای خبری</h5>-->
    <!--            <h2 class="section__title">اخبار اخیر</h2>-->
    <!--            <span class="section-divider"></span>-->
    <!--        </div>&lt;!&ndash; end section-heading &ndash;&gt;-->
    <!--        <div class="blog-post-carousel owl-action-styled half-shape mt-30px">-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-image">-->
    <!--                    <a href="blog-single.html" class="d-block">-->
    <!--                        <img class="card-img-top" src="images/img8.jpg" alt="درپوش تصویر کارت">-->
    <!--                    </a>-->
    <!--                    <div class="course-badge-labels">-->
    <!--                        <div class="course-badge">24 آذر 1400</div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-image &ndash;&gt;-->
    <!--                <div class="card-body">-->
    <!--                    <h5 class="card-title"><a href="blog-single.html">لورم ایپسوم متن ساختگی از صنعت چاپ</a></h5>-->
    <!--                    <ul class="generic-list-item generic-list-item-bullet generic-list-item&#45;&#45;bullet d-flex align-items-center flex-wrap fs-14 pt-2">-->
    <!--                        <li class="d-flex align-items-center"> توسط <a href="#">جان دئو</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">4 نظر</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">130 لایک</a></li>-->
    <!--                    </ul>-->
    <!--                    <div class="d-flex justify-content-between align-items-center pt-3">-->
    <!--                        <a href="blog-single.html" class="btn theme-btn theme-btn-sm theme-btn-white">ادامه مطلب <i class="la la-arrow-left icon ml-1"></i></a>-->
    <!--                        <div class="share-wrap">-->
    <!--                            <ul class="social-icons social-icons-styled">-->
    <!--                                <li class="mr-0"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>-->
    <!--                            </ul>-->
    <!--                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer share-toggle" title="تغییر وضعیت برای گسترش نمادهای اجتماعی"><i class="la la-share-alt"></i></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-image">-->
    <!--                    <a href="blog-single.html" class="d-block">-->
    <!--                        <img class="card-img-top" src="images/img9.jpg" alt="درپوش تصویر کارت">-->
    <!--                    </a>-->
    <!--                    <div class="course-badge-labels">-->
    <!--                        <div class="course-badge">24 آذر 1400</div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-image &ndash;&gt;-->
    <!--                <div class="card-body">-->
    <!--                    <h5 class="card-title"><a href="blog-single.html">لورم ایپسوم متن ساختگی از صنعت چاپ</a></h5>-->
    <!--                    <ul class="generic-list-item generic-list-item-bullet generic-list-item&#45;&#45;bullet d-flex align-items-center flex-wrap fs-14 pt-2">-->
    <!--                        <li class="d-flex align-items-center"> توسط  <a href="#">جان دئو</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">4 نظر</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">130 لایک</a></li>-->
    <!--                    </ul>-->
    <!--                    <div class="d-flex justify-content-between align-items-center pt-3">-->
    <!--                        <a href="blog-single.html" class="btn theme-btn theme-btn-sm theme-btn-white">ادامه مطلب <i class="la la-arrow-left icon ml-1"></i></a>-->
    <!--                        <div class="share-wrap">-->
    <!--                            <ul class="social-icons social-icons-styled">-->
    <!--                                <li class="mr-0"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>-->
    <!--                            </ul>-->
    <!--                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer share-toggle" title="تغییر وضعیت برای گسترش نمادهای اجتماعی"><i class="la la-share-alt"></i></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-image">-->
    <!--                    <a href="blog-single.html" class="d-block">-->
    <!--                        <img class="card-img-top" src="images/img10.jpg" alt="درپوش تصویر کارت">-->
    <!--                    </a>-->
    <!--                    <div class="course-badge-labels">-->
    <!--                        <div class="course-badge">24 آذر 1400</div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-image &ndash;&gt;-->
    <!--                <div class="card-body">-->
    <!--                    <h5 class="card-title"><a href="blog-single.html">لورم ایپسوم متن ساختگی از صنعت چاپ</a></h5>-->
    <!--                    <ul class="generic-list-item generic-list-item-bullet generic-list-item&#45;&#45;bullet d-flex align-items-center flex-wrap fs-14 pt-2">-->
    <!--                        <li class="d-flex align-items-center"> توسط  <a href="#">جان دئو</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">4 نظر</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">130 لایک</a></li>-->
    <!--                    </ul>-->
    <!--                    <div class="d-flex justify-content-between align-items-center pt-3">-->
    <!--                        <a href="blog-single.html" class="btn theme-btn theme-btn-sm theme-btn-white">ادامه مطلب <i class="la la-arrow-left icon ml-1"></i></a>-->
    <!--                        <div class="share-wrap">-->
    <!--                            <ul class="social-icons social-icons-styled">-->
    <!--                                <li class="mr-0"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>-->
    <!--                            </ul>-->
    <!--                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer share-toggle" title="تغییر وضعیت برای گسترش نمادهای اجتماعی"><i class="la la-share-alt"></i></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-image">-->
    <!--                    <a href="blog-single.html" class="d-block">-->
    <!--                        <img class="card-img-top" src="images/img11.jpg" alt="درپوش تصویر کارت">-->
    <!--                    </a>-->
    <!--                    <div class="course-badge-labels">-->
    <!--                        <div class="course-badge">24 آذر 1400</div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-image &ndash;&gt;-->
    <!--                <div class="card-body">-->
    <!--                    <h5 class="card-title"><a href="blog-single.html">لورم ایپسوم متن ساختگی از صنعت چاپ</a></h5>-->
    <!--                    <ul class="generic-list-item generic-list-item-bullet generic-list-item&#45;&#45;bullet d-flex align-items-center flex-wrap fs-14 pt-2">-->
    <!--                        <li class="d-flex align-items-center"> توسط  <a href="#">جان دئو</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">4 نظر</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">130 لایک</a></li>-->
    <!--                    </ul>-->
    <!--                    <div class="d-flex justify-content-between align-items-center pt-3">-->
    <!--                        <a href="blog-single.html" class="btn theme-btn theme-btn-sm theme-btn-white">ادامه مطلب <i class="la la-arrow-left icon ml-1"></i></a>-->
    <!--                        <div class="share-wrap">-->
    <!--                            <ul class="social-icons social-icons-styled">-->
    <!--                                <li class="mr-0"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>-->
    <!--                            </ul>-->
    <!--                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer share-toggle" title="تغییر وضعیت برای گسترش نمادهای اجتماعی"><i class="la la-share-alt"></i></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-image">-->
    <!--                    <a href="blog-single.html" class="d-block">-->
    <!--                        <img class="card-img-top" src="images/img12.jpg" alt="درپوش تصویر کارت">-->
    <!--                    </a>-->
    <!--                    <div class="course-badge-labels">-->
    <!--                        <div class="course-badge">24 آذر 1400</div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-image &ndash;&gt;-->
    <!--                <div class="card-body">-->
    <!--                    <h5 class="card-title"><a href="blog-single.html">لورم ایپسوم متن ساختگی از صنعت چاپ</a></h5>-->
    <!--                    <ul class="generic-list-item generic-list-item-bullet generic-list-item&#45;&#45;bullet d-flex align-items-center flex-wrap fs-14 pt-2">-->
    <!--                        <li class="d-flex align-items-center"> توسط  <a href="#">جان دئو</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">4 نظر</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">130 لایک</a></li>-->
    <!--                    </ul>-->
    <!--                    <div class="d-flex justify-content-between align-items-center pt-3">-->
    <!--                        <a href="blog-single.html" class="btn theme-btn theme-btn-sm theme-btn-white">ادامه مطلب <i class="la la-arrow-left icon ml-1"></i></a>-->
    <!--                        <div class="share-wrap">-->
    <!--                            <ul class="social-icons social-icons-styled">-->
    <!--                                <li class="mr-0"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>-->
    <!--                            </ul>-->
    <!--                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer share-toggle" title="تغییر وضعیت برای گسترش نمادهای اجتماعی"><i class="la la-share-alt"></i></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            <div class="card card-item">-->
    <!--                <div class="card-image">-->
    <!--                    <a href="blog-single.html" class="d-block">-->
    <!--                        <img class="card-img-top" src="images/img13.jpg" alt="درپوش تصویر کارت">-->
    <!--                    </a>-->
    <!--                    <div class="course-badge-labels">-->
    <!--                        <div class="course-badge">24 آذر 1400</div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-image &ndash;&gt;-->
    <!--                <div class="card-body">-->
    <!--                    <h5 class="card-title"><a href="blog-single.html">لورم ایپسوم متن ساختگی از صنعت چاپ</a></h5>-->
    <!--                    <ul class="generic-list-item generic-list-item-bullet generic-list-item&#45;&#45;bullet d-flex align-items-center flex-wrap fs-14 pt-2">-->
    <!--                        <li class="d-flex align-items-center"> توسط  <a href="#">جان دئو</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">4 نظر</a></li>-->
    <!--                        <li class="d-flex align-items-center"><a href="#">130 لایک</a></li>-->
    <!--                    </ul>-->
    <!--                    <div class="d-flex justify-content-between align-items-center pt-3">-->
    <!--                        <a href="blog-single.html" class="btn theme-btn theme-btn-sm theme-btn-white">ادامه مطلب <i class="la la-arrow-left icon ml-1"></i></a>-->
    <!--                        <div class="share-wrap">-->
    <!--                            <ul class="social-icons social-icons-styled">-->
    <!--                                <li class="mr-0"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>-->
    <!--                                <li class="mr-0"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>-->
    <!--                            </ul>-->
    <!--                            <div class="icon-element icon-element-sm shadow-sm cursor-pointer share-toggle" title="تغییر وضعیت برای گسترش نمادهای اجتماعی"><i class="la la-share-alt"></i></div>-->
    <!--                        </div>-->
    <!--                    </div>-->
    <!--                </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--        </div>&lt;!&ndash; end blog-post-carousel &ndash;&gt;-->
    <!--    </div>&lt;!&ndash; end container &ndash;&gt;-->
    <!--</section>&lt;!&ndash; end blog-area &ndash;&gt;-->
    <!-- ================================
           START BLOG AREA
    ================================= -->

    <!--======================================
            START GET STARTED AREA
    ======================================-->
    <!--<section class="get-started-area pt-30px pb-90px position-relative">-->
    <!--    <span class="ring-shape ring-shape-1"></span>-->
    <!--    <span class="ring-shape ring-shape-2"></span>-->
    <!--    <span class="ring-shape ring-shape-3"></span>-->
    <!--    <span class="ring-shape ring-shape-4"></span>-->
    <!--    <span class="ring-shape ring-shape-5"></span>-->
    <!--    <span class="ring-shape ring-shape-6"></span>-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-lg-4 responsive-column-half">-->
    <!--                <div class="card card-item hover-s text-center">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="images/img-loading.png" data-src="images/small-img-2.jpg" alt="تصویر کارت" class="img-fluid rounded-full lazy">-->
    <!--                        <h5 class="card-title pt-4 pb-2">مربی شوید</h5>-->
    <!--                        <p class="card-text">آنچه را که دوست دارید آموزش دهید. ادوکا ابزارهایی را برای ایجاد دوره در اختیار شما قرار می دهد.</p>-->
    <!--                        <div class="btn-box mt-20px">-->
    <!--                            <a href="become-a-teacher.html" class="btn theme-btn theme-btn-sm theme-btn-white lh-30"><i class="la la-user mr-1"></i>شروع به تدریس کنید</a>-->
    <!--                        </div>&lt;!&ndash; end btn-box &ndash;&gt;-->
    <!--                    </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--                </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end col-lg-4 &ndash;&gt;-->
    <!--            <div class="col-lg-4 responsive-column-half">-->
    <!--                <div class="card card-item hover-s text-center">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="images/img-loading.png" data-src="images/small-img-3.jpg" alt="تصویر کارت" class="img-fluid rounded-full lazy">-->
    <!--                        <h5 class="card-title pt-4 pb-2">یادگیرنده شوید</h5>-->
    <!--                        <p class="card-text">آنچه را که دوست داری بیاموز! زندگی خود را از طریق آموزش متحول کنید</p>-->
    <!--                        <div class="btn-box mt-20px">-->
    <!--                            <a href="{{route('login')}}" class="btn theme-btn theme-btn-sm theme-btn-white lh-30"><i class="la la-file-text-o mr-1"></i>شروع به یادگیری</a>-->
    <!--                        </div>&lt;!&ndash; end btn-box &ndash;&gt;-->
    <!--                    </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--                </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end col-lg-4 &ndash;&gt;-->
    <!--            <div class="col-lg-4 responsive-column-half">-->
    <!--                <div class="card card-item hover-s text-center">-->
    <!--                    <div class="card-body">-->
    <!--                        <img src="images/img-loading.png" data-src="images/small-img-4.jpg" alt="تصویر کارت" class="img-fluid rounded-full lazy">-->
    <!--                        <h5 class="card-title pt-4 pb-2">ادوکا برای تجارت</h5>-->
    <!--                        <p class="card-text">دسترسی نامحدود به بیش از 5000 دوره برتر ادوکا برای تیم خود داشته باشید</p>-->
    <!--                        <div class="btn-box mt-20px">-->
    <!--                            <a href="for-business.html" class="btn theme-btn theme-btn-sm theme-btn-white lh-30"><i class="la la-briefcase mr-1"></i>کسب و کار ادوکا را دریافت کنید</a>-->
    <!--                        </div>&lt;!&ndash; end btn-box &ndash;&gt;-->
    <!--                    </div>&lt;!&ndash; end card-body &ndash;&gt;-->
    <!--                </div>&lt;!&ndash; end card &ndash;&gt;-->
    <!--            </div>&lt;!&ndash; end col-lg-4 &ndash;&gt;-->
    <!--        </div>&lt;!&ndash; end row &ndash;&gt;-->
    <!--    </div>&lt;!&ndash; end container &ndash;&gt;-->
    <!--</section>&lt;!&ndash; end get-started-area &ndash;&gt;-->
    <!-- ================================
           START GET STARTED AREA
    ================================= -->

    <!--======================================
            START SUBSCRIBER AREA
    ======================================-->
{{--    <section class="subscriber-area pt-60px pb-60px bg-gray position-relative overflow-hidden">--}}
{{--        <span class="stroke-shape stroke-shape-1"></span>--}}
{{--        <span class="stroke-shape stroke-shape-2"></span>--}}
{{--        <span class="stroke-shape stroke-shape-3"></span>--}}
{{--        <span class="stroke-shape stroke-shape-4"></span>--}}
{{--        <span class="stroke-shape stroke-shape-5"></span>--}}
{{--        <span class="stroke-shape stroke-shape-6"></span>--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="section-heading py-4">--}}
{{--                        <h2 class="section__title mb-1">جهت ایجاد اشتراک در خبرنامه</h2>--}}
{{--                        <p class="section__desc">ارسال کتاب ها و مقالات و خبرها جهت ارتباط مستمر</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5 ml-auto">--}}
{{--                    <form method="post" class="subscriber-form">--}}
{{--                        <div class="input-group">--}}
{{--                            <input type="email" name="email" class="form-control form--control pl-3" placeholder="آدرس ایمیل را وارد کن">--}}
{{--                            <div class="input-group-append">--}}
{{--                                <button class="btn theme-btn" type="button">ایجاد اشتراک <i class="la la-arrow-left icon ml-1"></i></button>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p class="fs-14 mt-1">--}}
{{--                            <i class="la la-lock mr-1"></i>اطلاعات شما نزد ما محفوظ می ماند! لغو اشتراک در هر زمان--}}
{{--                        </p>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection
