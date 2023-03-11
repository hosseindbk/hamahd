@extends('master')
@section('main')
    <section class="breadcrumb-area py-5 bg-white pattern-bg">
        <div class="container">
            <div class="breadcrumb-content">
                <div class="media media-card align-items-center pb-4">
                    <div class="media-body">
                        <h2 class="section__title fs-30">آرشیو تصاویر </h2>
                        <p class="lh-30">استاد محمد باقر حیدری کاشانی</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery-area section--padding bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading text-center">
                        <h2 class="section__title">تصاویر استاد محمد باقر حیدری کاشانی</h2>
                    </div>
                    <!-- end section-heading -->
                    <ul class="portfolio-filter pt-40px pb-40px">
                        <li data-filter="*" class="active">همه</li>
                        <li data-filter=".web-design">طراحی وب سایت</li>
                        <li data-filter=".photography">عکاسی</li>
                        <li data-filter=".management">مدیریت</li>
                        <li data-filter=".advertising">تبلیغات</li>
                    </ul>
                </div>
                <!-- end col-lg-12 -->
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="generic-portfolio-list row">
                        @foreach($pics as $pic)
                        <div class="generic-portfolio-item col-lg-4 all">
                            <div class="generic-portfolio-content">
                                <a class="portfolio-link" href="{{asset($pic->file_link)}}" data-fancybox="gallery" data-caption="Image {{$pic->id}}">
                                    <img src="{{asset($pic->file_link)}}" alt="{{$pic->title}}" />
                                    <div class="icon-element icon-element-md">
                                        <i class="la la-plus"></i>
                                    </div>
                                </a>
                            </div>
                            <!-- end generic-portfolio-content -->
                        </div>
                    @endforeach
                        <!-- end generic-portfolio-item -->
{{--                        <div class="generic-portfolio-item col-lg-4 advertising web-design">--}}
{{--                            <div class="generic-portfolio-content">--}}
{{--                                <a class="portfolio-link" href="images/img22.jpg" data-fancybox="gallery" data-caption="Image 5">--}}
{{--                                    <img src="images/img22.jpg" alt="نمونه کارها-تصویر" />--}}
{{--                                    <div class="icon-element icon-element-md">--}}
{{--                                        <i class="la la-plus"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
                            <!-- end generic-portfolio-content -->
{{--                        </div>--}}
                        <!-- end generic-portfolio-item -->
{{--                        <div class="generic-portfolio-item col-lg-4 photography management">--}}
{{--                            <div class="generic-portfolio-content">--}}
{{--                                <a class="portfolio-link" href="images/img22.jpg" data-fancybox="gallery" data-caption="Image 6">--}}
{{--                                    <img src="images/img22.jpg" alt="نمونه کارها-تصویر" />--}}
{{--                                    <div class="icon-element icon-element-md">--}}
{{--                                        <i class="la la-plus"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- end generic-portfolio-content -->--}}
{{--                        </div>--}}
                        <!-- end generic-portfolio-item -->
{{--                        <div class="generic-portfolio-item col-lg-4 development web-design">--}}
{{--                            <div class="generic-portfolio-content">--}}
{{--                                <a class="portfolio-link" href="images/img22.jpg" data-fancybox="gallery" data-caption="Image 7">--}}
{{--                                    <img src="images/img22.jpg" alt="نمونه کارها-تصویر" />--}}
{{--                                    <div class="icon-element icon-element-md">--}}
{{--                                        <i class="la la-plus"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- end generic-portfolio-content -->--}}
{{--                        </div>--}}
{{--                        <!-- end generic-portfolio-item -->--}}
{{--                        <div class="generic-portfolio-item col-lg-4 management photography advertising">--}}
{{--                            <div class="generic-portfolio-content">--}}
{{--                                <a class="portfolio-link" href="images/img22.jpg" data-fancybox="gallery" data-caption="Image 8">--}}
{{--                                    <img src="images/img22.jpg" alt="نمونه کارها-تصویر" />--}}
{{--                                    <div class="icon-element icon-element-md">--}}
{{--                                        <i class="la la-plus"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- end generic-portfolio-content -->--}}
{{--                        </div>--}}
{{--                        <!-- end generic-portfolio-item -->--}}
{{--                        <div class="generic-portfolio-item col-lg-4 photography web-design">--}}
{{--                            <div class="generic-portfolio-content">--}}
{{--                                <a class="portfolio-link" href="images/img22.jpg" data-fancybox="gallery" data-caption="Image 9">--}}
{{--                                    <img src="images/img22.jpg" alt="نمونه کارها-تصویر" />--}}
{{--                                    <div class="icon-element icon-element-md">--}}
{{--                                        <i class="la la-plus"></i>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            <!-- end generic-portfolio-content -->--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
