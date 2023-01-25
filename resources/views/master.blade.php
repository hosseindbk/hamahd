<!DOCTYPE html>
<html lang="fa">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="حسین دیوان بیگی">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>هم عهد | وبسایت رسمی استاد محمد باقر حیدری کاشانی</title>

    <!-- Google fonts -->
{{--    <link rel="preconnect" href="https://fonts.gstatic.com/">--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">--}}

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('site/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/line-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/bootstrap-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/fancybox.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/tooltipster.bundle.css')}}">
    <link rel="stylesheet" href="{{asset('site/css/style.css')}}">
    <!-- end inject -->
</head>
<body>

<!-- start cssload-loader -->
<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<!-- end cssload-loader -->

<!--======================================
        START HEADER AREA
    ======================================-->
<header class="header-menu-area bg-white">
    <div class="header-top pr-150px pl-150px border-bottom border-bottom-gray py-1">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header-widget">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="d-flex align-items-center pr-3 mr-3 border-left border-left-gray"><i class="la la-phone mr-1"></i><a href="tel:00123456789">021-23456789</a></li>
                            <li class="d-flex align-items-center"><i class="la la-envelope-o mr-1"></i><a href="mailto:contact@aduca.com"> info@khanevade.ir</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="header-widget d-flex flex-wrap align-items-center justify-content-end">
                        <div class="theme-picker d-flex align-items-center">
                            <button class="theme-picker-btn dark-mode-btn" title="حالت تاریک">
                                <svg id="moon" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                </svg>
                            </button>
                            <button class="theme-picker-btn light-mode-btn" title="حالت نور">
                                <svg id="sun" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="5"></circle>
                                    <line x1="12" y1="1" x2="12" y2="3"></line>
                                    <line x1="12" y1="21" x2="12" y2="23"></line>
                                    <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                                    <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                                    <line x1="1" y1="12" x2="3" y2="12"></line>
                                    <line x1="21" y1="12" x2="23" y2="12"></line>
                                    <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                                    <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
                                </svg>
                            </button>
                        </div>
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 border-right border-right-gray pl-3 ml-3">
                            <li class="d-flex align-items-center pr-3 mr-3 border-left border-left-gray"><i class="la la-sign-in mr-1"></i><a href="{{route('login')}}">ورود</a></li>
                            <li class="d-flex align-items-center"><i class="la la-user mr-1"></i><a href="{{route('register')}}"> ثبت نام</a></li>
                        </ul>
                    </div><!-- end header-widget -->
                </div><!-- end col-lg-6 -->
            </div>
        </div>
    </div><!-- end header-top -->
    <div class="header-menu-content pr-150px pl-150px bg-white">
        <div class="container-fluid">
            <div class="main-menu-content">
                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="{{route('/')}}" class="logo"><img src="images/logo.png" alt="لوگو" style="width: 30%"></a>
                            <div class="user-btn-action">
                                <div class="search-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="جستجو کردن">
                                    <i class="la la-search"></i>
                                </div>
                                <div class="off-canvas-menu-toggle cat-menu-toggle icon-element icon-element-sm shadow-sm mr-2" data-toggle="tooltip" data-placement="top" title="منوی دسته بندی">
                                    <i class="la la-th-large"></i>
                                </div>
                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="top" title="منوی اصلی">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <nav class="main-menu">
                                <ul>
                                    @foreach($menus as $menu)
                                        @if($menu->submenu == 0)

                                            <li>
                                                <a href="{{url($menu->slug)}}">{{$menu->title}}</a>
                                            </li>

                                        @else
                                            <li>
                                                <a href="#">{{$menu->title}}<i class="la la-angle-down fs-12"></i></a>
                                                <ul class="dropdown-menu-item">
                                                    @foreach($submenus as $submenu)
                                                        @if($menu->id == $submenu->menu_id)
                                                            <li><a href="{{url($submenu->slug)}}">{{$submenu->title}}</a></li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="right" title="بستن منو">
            <i class="la la-times"></i>
        </div>
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="#">صفحه اصلی</a>
                <ul class="sub-menu">
                    <li><a href="{{route('/')}}">صفحه اصلی یک</a></li>
                    <li><a href="home-2.html">صفحه اصلی دو</a></li>
                    <li><a href="home-3.html">صفحه اصلی سه</a></li>
                    <li><a href="home-4.html">صفحه اصلی چهار</a></li>
                </ul>
            </li>
            <li>
                <a href="#">دوره های آموزشی</a>
                <ul class="sub-menu">
                    <li><a href="course-grid.html">دوره طرح گرید</a></li>
                    <li><a href="course-list.html">دوره طرح لیست</a></li>
                    <li><a href="course-grid-right-sidebar.html">دوره سایدبار راست گرید</a></li>
                    <li><a href="course-grid-left-sidebar.html">دوره سایدبار چپ گرید</a></li>
                    <li><a href="course-list-right-sidebar.html">دوره سایدبار راست لیست <span class="ribbon ribbon-blue-bg">جدید</span></a></li>
                    <li><a href="course-list-left-sidebar.html">دوره سایدبار چپ لیست <span class="ribbon ribbon-blue-bg">جدید</span></a></li>
                    <li><a href="coursedetails.html">جزئیات دوره</a></li>
                    <li><a href="lesson-details.html">جزئیات درس</a></li>
                    <li><a href="my-courses.html">دوره های من</a></li>
                </ul>
            </li>
            <li>
                <a href="#">دانشجو</a>
                <ul class="sub-menu">
                    <li><a href="student-detail.html">جزئیات دانشجو</a></li>
                    <li><a href="student-quiz.html">صفحه آزمون</a></li>
                    <li><a href="student-quiz-results.html">نتایج آزمون</a></li>
                    <li><a href="student-quiz-result-details.html">جزئیات آزمون</a></li>
                    <li><a href="student-quiz-result-details-2.html">جزئیات آزمون 2</a></li>
                    <li><a href="student-path.html">جزئیات مسیر</a></li>
                    <li><a href="student-path-assessment.html">ارزیابی مهارت</a></li>
                    <li><a href="student-path-assessment-result.html">نتیجه مهارت</a></li>
                </ul>
            </li>
            <li>
                <a href="#">صفحات</a>
                <ul class="sub-menu">
                    <li><a href="dashboard.html">داشبورد <span class="ribbon">داغ</span></a></li>
                    <li><a href="about.html">در باره</a></li>
                    <li><a href="teachers.html">معلمان</a></li>
                    <li><a href="teacher-detail.html">جزئیات معلم</a></li>
                    <li><a href="careers.html">مشاغل</a></li>
                    <li><a href="career-details.html">جزئیات شغلی</a></li>
                    <li><a href="categories.html">دسته بندی ها</a></li>
                    <li><a href="terms-and-conditions.html">شرایط و ضوابط</a></li>
                    <li><a href="privacy-policy.html">سیاست حفظ حریم خصوصی</a></li>
                    <li><a href="for-business.html">برای کسب و کار</a></li>
                    <li><a href="become-a-teacher.html">مربی شود</a></li>
                    <li><a href="faq.html">سوالات متداول</a></li>
                    <li><a href="admission.html">پذیرش</a></li>
                    <li><a href="gallery.html">گالری</a></li>
                    <li><a href="pricing-table.html">جداول قیمت گذاری</a></li>
                    <li><a href="contact.html">مخاطب</a></li>
                    <li><a href="{{route('register')}}">ثبت نام</a></li>
                    <li><a href="{{route('login')}}">وارد شدن</a></li>
                    <li><a href="recover.html">بازیابی</a></li>
                    <li><a href="{{route('shoppingcart')}}">سبد خرید</a></li>
                    <li><a href="checkout.html">وارسی</a></li>
                    <li><a href="error.html">صفحه 404</a></li>
                </ul>
            </li>
            <li>
                <a href="#">وبلاگ</a>
                <ul class="sub-menu">
                    <li><a href="blog-full-width.html">وبلاگ با عرض کامل </a></li>
                    <li><a href="blog-no-sidebar.html">وبلاگ بدون سایدبار</a></li>
                    <li><a href="blog-right-sidebar.html">وبلاگ سایدبار راست</a></li>
                    <li><a href="blog-left-sidebar.html">وبلاگ سایدبار چپ</a></li>
                    <li><a href="blog-single.html">جزئیات وبلاگ</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="right" title="بستن منو">
            <i class="la la-times"></i>
        </div>
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="course-grid.html">توسعه</a>
                <ul class="sub-menu">
                    <li><a href="#">همه توسعه</a></li>
                    <li><a href="#">توسعه وب</a></li>
                    <li><a href="#">برنامه های موبایل</a></li>
                    <li><a href="#">توسعه بازی</a></li>
                    <li><a href="#">پایگاه های داده</a></li>
                    <li><a href="#">زبانهای برنامه نویسی</a></li>
                    <li><a href="#">تست نرم افزار</a></li>
                    <li><a href="#">مهندسی نرم افزار</a></li>
                    <li><a href="#">تجارت الکترونیک</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">کسب و کار</a>
                <ul class="sub-menu">
                    <li><a href="#">همه کسب و کار</a></li>
                    <li><a href="#">دارایی، مالیه، سرمایه گذاری</a></li>
                    <li><a href="#">کارآفرینی</a></li>
                    <li><a href="#">استراتژی</a></li>
                    <li><a href="#">مشاور املاک</a></li>
                    <li><a href="#">مشاغل خانگی</a></li>
                    <li><a href="#">ارتباطات</a></li>
                    <li><a href="#">صنعت</a></li>
                    <li><a href="#">دیگر</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">فناوری اطلاعات و نرم افزار</a>
                <ul class="sub-menu">
                    <li><a href="#">تمام IT و نرم افزار</a></li>
                    <li><a href="#">گواهی IT</a></li>
                    <li><a href="#">سخت افزار</a></li>
                    <li><a href="#">امنیت شبکه</a></li>
                    <li><a href="#">سیستم های عامل</a></li>
                    <li><a href="#">دیگر</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">حسابداری مالی</a>
                <ul class="sub-menu">
                    <li><a href="#"> کلیه امور مالی و حسابداری</a></li>
                    <li><a href="#">حسابداری و حسابداری</a></li>
                    <li><a href="#">ارزهای دیجیتال و بلاک چین</a></li>
                    <li><a href="#">اقتصاد</a></li>
                    <li><a href="#">سرمایه گذاری و تجارت</a></li>
                    <li><a href="#">سایر امور مالی و اقتصادی</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">طرح</a>
                <ul class="sub-menu">
                    <li><a href="#">تمام طراحی</a></li>
                    <li><a href="#">طراحی گرافیک</a></li>
                    <li><a href="#">طراحی وب سایت</a></li>
                    <li><a href="#">ابزار طراحی</a></li>
                    <li><a href="#">سه بعدی و انیمیشن</a></li>
                    <li><a href="#">تجربه ی کاربر</a></li>
                    <li><a href="#">دیگر</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">توسعه شخصی</a>
                <ul class="sub-menu">
                    <li><a href="#">تمام توسعه شخصی</a></li>
                    <li><a href="#">تحول شخصی</a></li>
                    <li><a href="#">بهره وری</a></li>
                    <li><a href="#">رهبری</a></li>
                    <li><a href="#">امور مالی شخصی</a></li>
                    <li><a href="#">توسعه شغلی</a></li>
                    <li><a href="#">والدین و روابط</a></li>
                    <li><a href="#">خوشبختی</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">بازار یابی</a>
                <ul class="sub-menu">
                    <li><a href="#">تمام بازاریابی</a></li>
                    <li><a href="#">بازاریابی دیجیتال</a></li>
                    <li><a href="#">بهینه سازی موتور جستجو</a></li>
                    <li><a href="#">بازاریابی از طریق رسانه های اجتماعی</a></li>
                    <li><a href="#">نام تجاری</a></li>
                    <li><a href="#">بازاریابی ویدئویی و موبایلی</a></li>
                    <li><a href="#">بازاریابی وابسته</a></li>
                    <li><a href="#">هک رشد</a></li>
                    <li><a href="#">دیگر</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">سلامتی و تناسب اندام</a>
                <ul class="sub-menu">
                    <li><a href="#">همه سلامتی و تناسب اندام</a></li>
                    <li><a href="#">تناسب اندام</a></li>
                    <li><a href="#">ورزش ها</a></li>
                    <li><a href="#">رژیم گرفتن</a></li>
                    <li><a href="#">دفاع شخصی</a></li>
                    <li><a href="#">مراقبه</a></li>
                    <li><a href="#">سلامت روان</a></li>
                    <li><a href="#">یوگا</a></li>
                    <li><a href="#">رقص</a></li>
                    <li><a href="#">دیگر</a></li>
                </ul>
            </li>
            <li>
                <a href="course-grid.html">عکاسی</a>
                <ul class="sub-menu">
                    <li><a href="#">تمام عکاسی</a></li>
                    <li><a href="#">عکاسی دیجیتال</a></li>
                    <li><a href="#">اصول عکاسی</a></li>
                    <li><a href="#">عکاسی تجاری</a></li>
                    <li><a href="#">طراحی ویدئو</a></li>
                    <li><a href="#">ابزار عکاسی</a></li>
                    <li><a href="#">دیگر</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="هر چیزی را جستجو کنید">
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div>
        </div>
    </div>
    <div class="body-overlay"></div>
</header>

@yield('main')


<!-- ================================
         END FOOTER AREA
================================= -->
<section class="footer-area pt-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <a href="{{route('/')}}">
                        <img src="images/logo.png" alt="لوگوی پاورقی" class="footer__logo" style="width: 30%">
                    </a>
                    <ul class="generic-list-item pt-4">
                        <li><a href="tel:+1631237884">021-23456789</a></li>
                        <li><a href="mailto:support@wbsite.com">info@khanevade.ir</a></li>
                        <li>تهران - خیابان الوند - پلاک 12 واحد 36</li>
                    </ul>
                    <h3 class="fs-20 font-weight-semi-bold pt-4 pb-2">شبکه های اجتماعی</h3>
                    <ul class="social-icons social-icons-styled">
                        <li class="mr-1"><a href="#" class="facebook-bg"><i class="la la-facebook"></i></a></li>
                        <li class="mr-1"><a href="#" class="twitter-bg"><i class="la la-twitter"></i></a></li>
                        <li class="mr-1"><a href="#" class="instagram-bg"><i class="la la-instagram"></i></a></li>
                        <li class="mr-1"><a href="#" class="linkedin-bg"><i class="la la-linkedin"></i></a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">شرکت</h3>
                    <span class="section-divider section--divider"></span>
                    <ul class="generic-list-item">
                        <li><a href="#">فروشگاه خانواده</a></li>
                        <li><a href="#">سوالات متداول</a></li>
                        <li><a href="#">تماس با ما</a></li>
                        <li><a href="#">درباره ما</a></li>
                        <li><a href="#">پشتیبانی</a></li>
                        <li><a href="#">مقالات</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">دوره های آموزشی</h3>
                    <span class="section-divider section--divider"></span>
                    <ul class="generic-list-item">
                        <li><a href="#">خانواده</a></li>
                        <li><a href="#">مادرانه</a></li>
                        <li><a href="#">پدرانه</a></li>
                        <li><a href="#">همسرانه</a></li>
                        <li><a href="#">دخترانه</a></li>
                        <li><a href="#">پسرانه</a></li>
                    </ul>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <h3 class="fs-20 font-weight-semi-bold">دانلود برنامه</h3>
                    <span class="section-divider section--divider"></span>
                    <div class="mobile-app">
                        <p class="pb-3 lh-24">برنامه موبایل ما را دانلود کنید و در حال حرکت یاد بگیرید.</p>
                        <a href="#" class="d-block mb-2 hover-s"><img src="images/appstore.png" alt="فروشگاه اپلیکیشن" class="img-fluid"></a>
                        <a href="#" class="d-block hover-s"><img src="images/googleplay.png" alt="گوگل پلی استور" class="img-fluid"></a>
                    </div>
                </div><!-- end footer-item -->
            </div><!-- end col-lg-3 -->
        </div>
    </div><!-- end container -->
    <div class="section-block"></div>
    <div class="copyright-content py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <p class="copy-desc">© 1401 بستا. کلیه حقوق محفوظ است. </p>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6">
                    <div class="d-flex flex-wrap align-items-center justify-content-end">
                        <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14">
                            <li class="mr-3"><a href="terms-and-conditions.html">شرایط و ضوابط</a></li>
                            <li class="mr-3"><a href="privacy-policy.html">سیاست حفظ حریم خصوصی</a></li>
                        </ul>
                        <div class="select-container select-container-sm">
                            <select class="select-container-select">
                                <option value="1">فارسی</option>
                                <option value="2">آلمانی</option>
                                <option value="3">اسپانیا</option>
                                <option value="4">فرانسه</option>
                                <option value="5">باهاسا اندونزی</option>
                                <option value="6">بنگلا</option>
                                <option value="7">日本語</option>
                                <option value="8">한국어</option>
                                <option value="9">هلند</option>
                                <option value="10">پولسکی</option>
                                <option value="11">پرتغالی ها</option>
                                <option value="12">رومانا</option>
                                <option value="13">Русский</option>
                                <option value="14">ภาษาไทย</option>
                                <option value="15">ترکچه</option>
                                <option value="16">中文 (简体)</option>
                                <option value="17">中文 (繁體)</option>
                                <option value="17">هندی</option>
                            </select>
                        </div>
                    </div>
                </div><!-- end col-lg-6 -->
            </div>
        </div><!-- end container -->
    </div><!-- end copyright-content -->
</section><!-- end footer-area -->
<!-- ================================
          END FOOTER AREA
================================= -->

<!-- start scroll top -->
<div id="scroll-top">
    <i class="la la-arrow-up" title="برو بالا"></i>
</div>
<!-- end scroll top -->

<div class="tooltip_templates">
    <div id="tooltip_content_1">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">نوشته <a href="teacher-detail.html">استاد حیدری کاشانی</a></p>
                <h5 class="card-title pb-1"><a href="coursedetails.html">دوره خانواده 1</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">دوره پرفروش</h6>
                    <p class="text-success fs-14 font-weight-medium"><span class="font-weight-bold pl-1">آذر 1401</span> به روز <span class="font-weight-bold pl-1">شد</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 دقیقه در کل</li>
                    <li>همه مراحل</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">مهارت زندگی در خانواده و اعضای خانواده شما </p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> مهارت نه گفتن</li>
                    <li><i class="la la-check mr-1 text-black"></i>  مهارت محبت کردن</li>
                    <li><i class="la la-check mr-1 text-black"></i> مهارت دوست داشتن</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> به سبد خرید اضافه کنید</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_2">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">نوشته <a href="teacher-detail.html">استاد حیدری کاشانی</a></p>
                <h5 class="card-title pb-1"><a href="coursedetails.html">دوره خانواده 1</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">دوره پرفروش</h6>
                    <p class="text-success fs-14 font-weight-medium"><span class="font-weight-bold pl-1">آذر 1400</span> به روز <span class="font-weight-bold pl-1">شد</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 ساعت در کل</li>
                    <li>همه مراحل</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">مهارت زندگی در خانواده و اعضای خانواده شما </p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> مهارت نه گفتن</li>
                    <li><i class="la la-check mr-1 text-black"></i>  مهارت محبت کردن</li>
                    <li><i class="la la-check mr-1 text-black"></i> مهارت دوست داشتن</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> به سبد خرید اضافه کنید</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_3">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">نوشته <a href="teacher-detail.html">استاد حیدری کاشانی</a></p>
                <h5 class="card-title pb-1"><a href="coursedetails.html">دوره خانواده 1</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">دوره پرفروش</h6>
                    <p class="text-success fs-14 font-weight-medium"><span class="font-weight-bold pl-1">آذر 1400</span> به روز <span class="font-weight-bold pl-1">شد</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 ساعت در کل</li>
                    <li>همه مراحل</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">مهارت زندگی در خانواده و اعضای خانواده شما </p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> مهارت نه گفتن</li>
                    <li><i class="la la-check mr-1 text-black"></i>  مهارت محبت کردن</li>
                    <li><i class="la la-check mr-1 text-black"></i> مهارت دوست داشتن</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> به سبد خرید اضافه کنید</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_4">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">نوشته <a href="teacher-detail.html">استاد حیدری کاشانی</a></p>
                <h5 class="card-title pb-1"><a href="coursedetails.html">دوره خانواده 1</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">دوره پرفروش</h6>
                    <p class="text-success fs-14 font-weight-medium"><span class="font-weight-bold pl-1">آذر 1400</span> به روز <span class="font-weight-bold pl-1">شد</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 ساعت در کل</li>
                    <li>همه مراحل</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">مهارت زندگی در خانواده و اعضای خانواده شما </p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> مهارت نه گفتن</li>
                    <li><i class="la la-check mr-1 text-black"></i>  مهارت محبت کردن</li>
                    <li><i class="la la-check mr-1 text-black"></i> مهارت دوست داشتن</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> به سبد خرید اضافه کنید</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->
<div class="tooltip_templates">
    <div id="tooltip_content_5">
        <div class="card card-item">
            <div class="card-body">
                <p class="card-text pb-2">نوشته <a href="teacher-detail.html">استاد حیدری کاشانی</a></p>
                <h5 class="card-title pb-1"><a href="coursedetails.html">دوره خانواده 1</a></h5>
                <div class="d-flex align-items-center pb-1">
                    <h6 class="ribbon fs-14 mr-2">دوره پرفروش</h6>
                    <p class="text-success fs-14 font-weight-medium"><span class="font-weight-bold pl-1">آذر 1400</span> به روز <span class="font-weight-bold pl-1">شد</span></p>
                </div>
                <ul class="generic-list-item generic-list-item-bullet generic-list-item--bullet d-flex align-items-center fs-14">
                    <li>23 ساعت در کل</li>
                    <li>همه مراحل</li>
                </ul>
                <p class="card-text pt-1 fs-14 lh-22">مهارت زندگی در خانواده و اعضای خانواده شما </p>
                <ul class="generic-list-item fs-14 py-3">
                    <li><i class="la la-check mr-1 text-black"></i> مهارت نه گفتن</li>
                    <li><i class="la la-check mr-1 text-black"></i>  مهارت محبت کردن</li>
                    <li><i class="la la-check mr-1 text-black"></i> مهارت دوست داشتن</li>
                </ul>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="#" class="btn theme-btn flex-grow-1 mr-3"><i class="la la-shopping-cart mr-1 fs-18"></i> به سبد خرید اضافه کنید</a>
                    <div class="icon-element icon-element-sm shadow-sm cursor-pointer" title="به لیست علاقه مندی ها اضافه کنید"><i class="la la-heart-o"></i></div>
                </div>
            </div>
        </div><!-- end card -->
    </div>
</div><!-- end tooltip_templates -->


<!-- template js files -->
<script src="{{asset('site/js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('site/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('site/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('site/js/isotope.js')}}"></script>
<script src="{{asset('site/js/waypoint.min.js')}}"></script>
<script src="{{asset('site/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('site/js/fancybox.js')}}"></script>
<script src="{{asset('site/js/datedropper.min.js')}}"></script>
<script src="{{asset('site/js/emojionearea.min.js')}}"></script>
<script src="{{asset('site/js/tooltipster.bundle.min.js')}}"></script>
<script src="{{asset('site/js/jquery.lazy.min.js')}}"></script>
<script src="{{asset('site/js/main.js')}}"></script>
</body>
</html>
