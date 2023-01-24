<!DOCTYPE html>
<html lang="fa">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="حسین دیوان بیگی" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>داشبورد مدیریت </title>

{{--    <link rel="preconnect" href="https://fonts.gstatic.com/" />--}}
{{--    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet" />--}}

    <link rel="icon" sizes="16x16" href="images/favicon.png" />

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/line-awesome.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/fancybox.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />
</head>
<body>

<div class="preloader">
    <div class="loader">
        <svg class="spinner" viewBox="0 0 50 50">
            <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
        </svg>
    </div>
</div>
<header class="header-menu-area">
    <div class="header-menu-content dashboard-menu-content pr-30px pl-30px bg-white shadow-sm">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="logo-box logo--box">
                            <a href="{{route('dashboard')}}" class="logo"><img src="{{asset('images/logo.png')}}" style="width: 30%" alt="لوگو" /></a>
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
                        <!-- end logo-box -->
                        <div class="menu-wrapper">
                            <form method="post" class="mr-auto ml-0">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control form--control-gray pl-3" type="text" name="search" placeholder="هر چیزی را جستجو کنید" />
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                            <div class="nav-left-button d-flex align-items-center">
                                <div class="user-action-wrap d-flex align-items-center">

                                    <div class="shop-cart course-cart pr-3 mr-3 border-left border-left-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn d-flex align-items-center fs-16">
                                                    دوره های من
                                                    <span class="la la-angle-down fs-13 ml-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none">
                                                    <li class="media media-card">
                                                        <a href="lesson-details.html" class="media-img">
                                                            <img class="mr-3" src="{{asset('images/small-img-3.jpg')}}" alt="تصویر کوچک دوره" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="lesson-details.html">دوره جامع خانواده 1</a></h5>
                                                            <div class="skillbar-box pt-3">
                                                                <div class="skillbar skillbar-skillbar" data-percent="36%">
                                                                    <div class="skillbar-bar skillbar--bar bg-1"></div>
                                                                </div>
                                                                <!-- End Skill Bar -->
                                                            </div>
                                                            <!-- End skillbar-box -->
                                                        </div>
                                                    </li>
                                                    <li class="media media-card">
                                                        <a href="lesson-details.html" class="media-img">
                                                            <img class="mr-3" src="{{asset('images/small-img-4.jpg')}}" alt="تصویر کوچک دوره" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="lesson-details.html">دوره جامع خانواده 1</a></h5>
                                                            <div class="skillbar-box pt-3">
                                                                <div class="skillbar skillbar-skillbar" data-percent="77%">
                                                                    <div class="skillbar-bar skillbar--bar bg-1"></div>
                                                                </div>
                                                                <!-- End Skill Bar -->
                                                            </div>
                                                            <!-- End skillbar-box -->
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('dashboard-courses')}}" class="btn theme-btn w-100">به دوره من رسید <i class="la la-arrow-left icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end course-cart -->
                                    <div class="shop-cart pr-3 mr-3 border-left border-left-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn d-flex align-items-center">
                                                    <i class="la la-shopping-cart fs-22"></i>
                                                    <span class="dot-status bg-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none">
                                                    <li class="media media-card">
                                                        <a href="shopping-cart.html" class="media-img">
                                                            <img class="mr-3" src="{{asset('images/small-img.jpg')}}" alt="تصویر سبد خرید" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="shopping-cart.html">دوره جامع خانواده 1</a></h5>
                                                            <span class="d-block lh-18 py-1">کامران احمد</span>
                                                            <p class="text-black font-weight-semi-bold lh-18">999 تومان <span class="before-price fs-14">1000 تومان</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media media-card">
                                                        <a href="shopping-cart.html" class="media-img">
                                                            <img class="mr-3" src="{{asset('images/small-img.jpg')}}" alt="تصویر سبد خرید" />
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="shopping-cart.html">دوره جامع خانواده 1</a></h5>
                                                            <span class="d-block lh-18 py-1">کامران احمد</span>
                                                            <p class="text-black font-weight-semi-bold lh-18">999 تومان <span class="before-price fs-14">1000 تومان</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media media-card">
                                                        <div class="media-body fs-16">
                                                            <p class="text-black font-weight-semi-bold lh-18">مجموع: <span class="cart-total">999 تومان </span> <span class="before-price fs-14">1000 تومان</span></p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="shopping-cart.html" class="btn theme-btn w-100">ادامه فرایند خرید <i class="la la-arrow-left icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end shop-cart -->
                                    <div class="shop-cart wishlist-cart pr-3 mr-3 border-left border-left-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn">
                                                    <i class="la la-heart-o"></i>
                                                    <span class="dot-status bg-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none">
                                                    <li>
                                                        <div class="media media-card">
                                                            <a href="course-details.html" class="media-img">
                                                                <img class="mr-3" src="{{asset('images/small-img.jpg')}}" alt="تصویر سبد خرید" />
                                                            </a>
                                                            <div class="media-body">
                                                                <h5><a href="course-details.html">دوره جامع خانواده 1</a></h5>
                                                                <span class="d-block lh-18 py-1">کامران احمد</span>
                                                                <p class="text-black font-weight-semi-bold lh-18">999 تومان <span class="before-price fs-14">1000 تومان</span></p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3">به سبد خرید اضافه کنید <i class="la la-arrow-left icon ml-1"></i></a>
                                                    </li>
                                                    <li>
                                                        <div class="media media-card">
                                                            <a href="course-details.html" class="media-img">
                                                                <img class="mr-3" src="{{asset('images/small-img.jpg')}}" alt="تصویر سبد خرید" />
                                                            </a>
                                                            <div class="media-body">
                                                                <h5><a href="course-details.html">دوره جامع خانواده 1</a></h5>
                                                                <span class="d-block lh-18 py-1">کامران احمد</span>
                                                                <p class="text-black font-weight-semi-bold lh-18">999 تومان <span class="before-price fs-14">1000 تومان</span></p>
                                                            </div>
                                                        </div>
                                                        <a href="#" class="btn theme-btn theme-btn-sm theme-btn-transparent lh-28 w-100 mt-3">به سبد خرید اضافه کنید <i class="la la-arrow-left icon ml-1"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="{{route('dashboard-courses')}}" class="btn theme-btn w-100">مشاهده لیست علاقه مندی ها <i class="la la-arrow-left icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end shop-cart -->
                                    <div class="shop-cart notification-cart pr-3 mr-3 border-left border-left-gray">
                                        <ul>
                                            <li>
                                                <p class="shop-cart-btn">
                                                    <i class="la la-bell"></i>
                                                    <span class="dot-status bg-1"></span>
                                                </p>
                                                <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li class="menu-heading-block d-flex align-items-center justify-content-between">
                                                        <h4>اطلاعیه</h4>
                                                        <span class="ribbon fs-14">18</span>
                                                    </li>
                                                    <li>
                                                        <div class="notification-body">
                                                            <a href="{{route('dashboard')}}" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-1 mr-3 text-white">
                                                                    <i class="la la-bolt"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>رزومه شما به روز شد!</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">1 ساعت پیش</span>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('dashboard')}}" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-2 mr-3 text-white">
                                                                    <i class="la la-lock"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>رمز عبور را عوض کردی</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">12 خرداد 1400</span>
                                                                </div>
                                                            </a>
                                                            <a href="{{route('dashboard')}}" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-3 mr-3 text-white">
                                                                    <i class="la la-user"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>حساب شما با موفقیت ایجاد شد</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">12 خرداد 1400</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="menu-heading-block">
                                                        <a href="{{route('dashboard')}}" class="btn theme-btn w-100">نمایش همه اعلان ها <i class="la la-arrow-left icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end shop-cart -->
                                    <div class="shop-cart user-profile-cart">
                                        <ul>
                                            <li>
                                                <div class="shop-cart-btn">
                                                    <div class="avatar-xs">
                                                        <img class="rounded-full img-fluid" src="{{asset('images/small-avatar-1.jpg')}}" alt="تصویر آواتار" />
                                                    </div>
                                                    <span class="dot-status bg-1"></span>
                                                </div>
                                                <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li class="menu-heading-block d-flex align-items-center">
                                                        <a href="teacher-detail.html" class="avatar-sm flex-shrink-0 d-block">
                                                            <img class="rounded-full img-fluid" src="{{asset('images/small-avatar-1.jpg')}}" alt="تصویر آواتار" />
                                                        </a>
                                                        <div class="ml-2">
                                                            <h4><a href="teacher-detail.html" class="text-black">حسین دیوان بیگی</a></h4>
                                                            <span class="d-block fs-14 lh-20">info@example.com</span>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="theme-picker d-flex align-items-center justify-content-center lh-40">
                                                            <button class="theme-picker-btn dark-mode-btn w-100 font-weight-semi-bold justify-content-center" title="حالت تاریک">
                                                                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                                                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                                                                </svg>
                                                                حالت تاریک
                                                            </button>
                                                            <button class="theme-picker-btn light-mode-btn w-100 font-weight-semi-bold justify-content-center" title="حالت نور">
                                                                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
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
                                                                حالت نور
                                                            </button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <ul class="generic-list-item">
                                                            <li>
                                                                <a href="{{route('dashboard-courses')}}"> <i class="la la-file-video-o mr-1"></i> دوره های من </a>
                                                            </li>
                                                            <li>
                                                                <a href="shopping-cart.html"> <i class="la la-shopping-basket mr-1"></i> سبد خرید من </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('dashboard-courses')}}"> <i class="la la-heart-o mr-1"></i> لیست علاقه مندی های من </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="{{route('dashboard')}}">
                                                                    <i class="la la-bell mr-1"></i>اعلان&zwnj;ها
                                                                    <span class="badge bg-info text-white ml-2 p-1">9+</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('dashboard-message')}}">
                                                                    <i class="la la-envelope mr-1"></i>پیام های
                                                                    <span class="badge bg-info text-white ml-2 p-1">12+</span>
                                                                </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="{{route('dashboard-settings')}}"> <i class="la la-gear mr-1"></i> تنظیمات </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('dashboard-purchase')}}"> <i class="la la-history mr-1"></i> سابقه خرید </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="student-detail.html"> <i class="la la-user mr-1"></i> پروفایل عمومی </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('dashboard-settings')}}"> <i class="la la-edit mr-1"></i> ویرایش نمایه </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="#"> <i class="la la-question mr-1"></i> کمک </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('logout')}}"> <i class="la la-power-off mr-1"></i> خروج </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
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
        <h4 class="off-canvas-menu-heading pt-90px">هشدارها</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="{{route('dashboard')}}">اطلاعیه</a></li>
            <li><a href="{{route('dashboard-message')}}">پیام ها</a></li>
            <li><a href="{{route('dashboard-courses')}}">لیست علاقه مندیها</a></li>
            <li><a href="shopping-cart.html">سبد خرید من</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">حساب</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="{{route('dashboard-settings')}}">تنظیمات حساب</a></li>
            <li><a href="{{route('dashboard-purchase')}}">سابقه خرید</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">مشخصات</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="student-detail.html">پروفایل عمومی</a></li>
            <li><a href="{{route('dashboard-settings')}}">ویرایش نمایه</a></li>
            <li><a href="{{route('logout')}}">خروج</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">بیشتر از Aduca</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1">
            <li><a href="for-business.html">آدوکا برای تجارت</a></li>
            <li><a href="#">برنامه را دریافت کنید</a></li>
            <li><a href="invite.html">دوستان را دعوت کنید</a></li>
            <li><a href="contact.html">کمک</a></li>
        </ul>
        <div class="theme-picker d-flex align-items-center justify-content-center mt-4 px-3">
            <button class="theme-picker-btn dark-mode-btn btn theme-btn-sm theme-btn-white w-100 font-weight-semi-bold justify-content-center" title="حالت تاریک">
                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
                حالت تاریک
            </button>
            <button class="theme-picker-btn light-mode-btn btn theme-btn-sm theme-btn-white w-100 font-weight-semi-bold justify-content-center" title="حالت نور">
                <svg class="mr-1" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
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
                حالت نور
            </button>
        </div>
    </div>
    <!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="right" title="بستن منو">
            <i class="la la-times"></i>
        </div>
        <!-- end off-canvas-menu-close -->
        <h4 class="off-canvas-menu-heading pt-90px">فرا گرفتن</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="{{route('dashboard-courses')}}">یادگیری من</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">دسته بندی ها</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1">
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
    </div>
    <!-- end off-canvas-menu -->
    <div class="mobile-search-form">
        <div class="d-flex align-items-center">
            <form method="post" class="flex-grow-1 mr-3">
                <div class="form-group mb-0">
                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="هر چیزی را جستجو کنید" />
                    <span class="la la-search search-icon"></span>
                </div>
            </form>
            <div class="search-bar-close icon-element icon-element-sm shadow-sm">
                <i class="la la-times"></i>
            </div>
            <!-- end off-canvas-menu-close -->
        </div>
    </div>
    <!-- end mobile-search-form -->
    <div class="body-overlay"></div>
</header>
<section class="dashboard-area">
    <div class="off-canvas-menu dashboard-off-canvas-menu off--canvas-menu custom-scrollbar-styled pt-20px">
        <div class="off-canvas-menu-close dashboard-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="right" title="بستن منو">
            <i class="la la-times"></i>
        </div>

        <div class="logo-box px-4">
            <a href="{{route('dashboard')}}" class="logo"><img src="{{asset('images/logo.png')}}" style="width: 30%" alt="لوگو" /></a>
        </div>
        <ul class="generic-list-item off-canvas-menu-list off--canvas-menu-list pt-35px">
            @foreach($menupanels as $menupanel)
                <li class= {{ Request::segment(1)  == $menupanel->title ?  "page-active" : '' }}>
                    <a href="{{route($menupanel->slug)}}">
                        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                            <path d="M0 0h24v24H0V0z" fill="none"></path>
                            <path d="{{$menupanel->icon}}"></path>
                        </svg>
                        {{$menupanel->title}}
                    </a>
                </li>
            @endforeach
            <li  class={{ Request::segment(1)  == 'profile' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-profile')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M12 5.9c1.16 0 2.1.94 2.1 2.1s-.94 2.1-2.1 2.1S9.9 9.16 9.9 8s.94-2.1 2.1-2.1m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v3h16v-3c0-2.66-5.33-4-8-4z"
                        ></path>
                    </svg>
                    پروفایل من
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'courses' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-courses')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"></path>
                    </svg>
                    دوره های من
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'quiz' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-quiz')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="18px" viewBox="0 0 24 24" width="18px">
                        <g><rect fill="none" height="24" width="24"></rect></g>
                        <g><path d="M11,21h-1l1-7H7.5c-0.88,0-0.33-0.75-0.31-0.78C8.48,10.94,10.42,7.54,13.01,3h1l-1,7h3.51c0.4,0,0.62,0.19,0.4,0.66 C12.97,17.55,11,21,11,21z"></path></g>
                    </svg>
                    نتیجه دوره ها
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'bookmark' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-bookmark')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M17 3H7c-1.1 0-2 .9-2 2v16l7-3 7 3V5c0-1.1-.9-2-2-2zm0 15l-5-2.18L7 18V5h10v13z"></path>
                    </svg>
                    نشان شده ها
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'enrolled' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-enrolled')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M12 3L1 9l4 2.18v6L12 21l7-3.82v-6l2-1.09V17h2V9L12 3zm6.82 6L12 12.72 5.18 9 12 5.28 18.82 9zM17 15.99l-5 2.73-5-2.73v-3.72L12 15l5-2.73v3.72z"></path>
                    </svg>
                    دوره های ثبت نام شده
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'message' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-message')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"
                        ></path>
                    </svg>
                    پیام <span class="badge badge-info p-1 ml-2">2</span>
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'reviews' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-reviews')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M22 9.24l-7.19-.62L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27 18.18 21l-1.63-7.03L22 9.24zM12 15.4l-3.76 2.27 1-4.28-3.32-2.88 4.38-.38L12 6.1l1.71 4.04 4.38.38-3.32 2.88 1 4.28L12 15.4z"
                        ></path>
                    </svg>
                    بررسی ها
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'earnings' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-earnings')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"
                        ></path>
                    </svg>
                    درآمد
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'withdraw' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-withdraw')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M21 7.28V5c0-1.1-.9-2-2-2H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-2.28c.59-.35 1-.98 1-1.72V9c0-.74-.41-1.37-1-1.72zM20 9v6h-7V9h7zM5 19V5h14v2h-6c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h6v2H5z"
                        ></path>
                        <circle cx="16" cy="12" r="1.5"></circle>
                    </svg>
                    تسویه حساب
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'purchase' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-purchase')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M15.55 13c.75 0 1.41-.41 1.75-1.03l3.58-6.49c.37-.66-.11-1.48-.87-1.48H5.21l-.94-2H1v2h2l3.6 7.59-1.35 2.44C4.52 15.37 5.48 17 7 17h12v-2H7l1.1-2h7.45zM6.16 6h12.15l-2.76 5H8.53L6.16 6zM7 18c-1.1 0-1.99.9-1.99 2S5.9 22 7 22s2-.9 2-2-.9-2-2-2zm10 0c-1.1 0-1.99.9-1.99 2s.89 2 1.99 2 2-.9 2-2-.9-2-2-2z"
                        ></path>
                    </svg>
                    سابقه خرید
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'submitcourse' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-submitcourse')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"></path>
                    </svg>
                    ارسال دوره
                </a>
            </li>
            <li  class={{ Request::segment(1)  == 'settings' ?  "page-active" : '' }}>
                <a href="{{route('dashboard-settings')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M19.43 12.98c.04-.32.07-.64.07-.98 0-.34-.03-.66-.07-.98l2.11-1.65c.19-.15.24-.42.12-.64l-2-3.46c-.09-.16-.26-.25-.44-.25-.06 0-.12.01-.17.03l-2.49 1c-.52-.4-1.08-.73-1.69-.98l-.38-2.65C14.46 2.18 14.25 2 14 2h-4c-.25 0-.46.18-.49.42l-.38 2.65c-.61.25-1.17.59-1.69.98l-2.49-1c-.06-.02-.12-.03-.18-.03-.17 0-.34.09-.43.25l-2 3.46c-.13.22-.07.49.12.64l2.11 1.65c-.04.32-.07.65-.07.98 0 .33.03.66.07.98l-2.11 1.65c-.19.15-.24.42-.12.64l2 3.46c.09.16.26.25.44.25.06 0 .12-.01.17-.03l2.49-1c.52.4 1.08.73 1.69.98l.38 2.65c.03.24.24.42.49.42h4c.25 0 .46-.18.49-.42l.38-2.65c.61-.25 1.17-.59 1.69-.98l2.49 1c.06.02.12.03.18.03.17 0 .34-.09.43-.25l2-3.46c.12-.22.07-.49-.12-.64l-2.11-1.65zm-1.98-1.71c.04.31.05.52.05.73 0 .21-.02.43-.05.73l-.14 1.13.89.7 1.08.84-.7 1.21-1.27-.51-1.04-.42-.9.68c-.43.32-.84.56-1.25.73l-1.06.43-.16 1.13-.2 1.35h-1.4l-.19-1.35-.16-1.13-1.06-.43c-.43-.18-.83-.41-1.23-.71l-.91-.7-1.06.43-1.27.51-.7-1.21 1.08-.84.89-.7-.14-1.13c-.03-.31-.05-.54-.05-.74s.02-.43.05-.73l.14-1.13-.89-.7-1.08-.84.7-1.21 1.27.51 1.04.42.9-.68c.43-.32.84-.56 1.25-.73l1.06-.43.16-1.13.2-1.35h1.39l.19 1.35.16 1.13 1.06.43c.43.18.83.41 1.23.71l.91.7 1.06-.43 1.27-.51.7 1.21-1.07.85-.89.7.14 1.13zM12 8c-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4zm0 6c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z"
                        ></path>
                    </svg>
                    تنظیمات
                </a>
            </li>
            <li>
                <a href="{{route('dashboard')}}">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path
                            d="M13 3h-2v10h2V3zm4.83 2.17l-1.42 1.42C17.99 7.86 19 9.81 19 12c0 3.87-3.13 7-7 7s-7-3.13-7-7c0-2.19 1.01-4.14 2.58-5.42L6.17 5.17C4.23 6.82 3 9.26 3 12c0 4.97 4.03 9 9 9s9-4.03 9-9c0-2.74-1.23-5.18-3.17-6.83z"
                        ></path>
                    </svg>
                    خروج
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" data-toggle="modal" data-target="#deleteModal">
                    <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" height="18px" viewBox="0 0 24 24" width="18px">
                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                        <path d="M16 9v10H8V9h8m-1.5-6h-5l-1 1H5v2h14V4h-3.5l-1-1zM18 7H6v12c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7z"></path>
                    </svg>
                    حذف حساب کاربری
                </a>
            </li>
        </ul>
    </div>
    <!-- end off-canvas-menu -->
    <div class="dashboard-content-wrap">
        <div class="dashboard-menu-toggler btn theme-btn theme-btn-sm lh-28 theme-btn-transparent mb-4 ml-3"><i class="la la-bars mr-1"></i> منو</div>
        <div class="container-fluid">
            <div class="breadcrumb-content d-flex flex-wrap align-items-center justify-content-between mb-5">
                <div class="media media-card align-items-center">
                    <div class="media-img media--img media-img-md rounded-full">
                        <img class="rounded-full" src="{{asset('images/small-avatar-1.jpg')}}" alt="تصویر کوچک دانش آموز" />
                    </div>
                    <div class="media-body">
                        <h4 class="section__title fs-30">سلام،حسین دیوان بیگی</h4>
                        <div class="rating-wrap d-flex align-items-center pt-2">

                            <span class="rating-total pl-1">شما 11 دوره ثبت نام کرده اید</span>
                        </div>

                    </div>

                </div>

{{--                <div class="file-upload-wrap file-upload-wrap-2 file--upload-wrap">--}}
{{--                    <input type="file" name="files[]" class="multi file-upload-input" />--}}
{{--                    <span class="file-upload-text"><i class="la la-upload mr-2"></i>آپلود دوره</span>--}}
{{--                </div>--}}

            </div>

            <div class="section-block mb-5"></div>

@yield('main')
            <div class="row align-items-center dashboard-copyright-content pb-4">
                <div class="col-lg-6">
                    <p class="copy-desc">© 1401 گروه بستا. کلیه حقوق محفوظ است.</p>
                </div>
                <div class="col-lg-6">
                    <ul class="generic-list-item d-flex flex-wrap align-items-center fs-14 justify-content-end">
                        <li class="mr-3"><a href="terms-and-conditions.html">شرایط و ضوابط</a></li>
                        <li><a href="privacy-policy.html">سیاست حفظ حریم خصوصی</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="scroll-top">
    <i class="la la-arrow-up" title="برو بالا"></i>
</div>

<div class="modal fade modal-container" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
                <span class="la la-exclamation-circle fs-60 text-warning"></span>
                <h4 class="modal-title fs-19 font-weight-semi-bold pt-2 pb-1" id="deleteModalTitle">حساب شما برای همیشه حذف خواهد شد!</h4>
                <p>آیا مطمئن هستید که می خواهید اکانت خود را حذف کنید؟</p>
                <div class="btn-box pt-4">
                    <button type="button" class="btn font-weight-medium mr-3" data-dismiss="modal">لغو کنید</button>
                    <button type="submit" class="btn theme-btn theme-btn-sm lh-30">باشه حذف کن</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/isotope.js')}}"></script>
<script src="{{asset('js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/fancybox.js')}}"></script>
<script src="{{asset('js/chart.js')}}"></script>
<script src="{{asset('js/doughnut-chart.js')}}"></script>
<script src="{{asset('js/bar-chart.js')}}"></script>
<script src="{{asset('js/line-chart.js')}}"></script>
<script src="{{asset('js/datedropper.min.js')}}"></script>
<script src="{{asset('js/emojionearea.min.js')}}"></script>
<script src="{{asset('js/animated-skills.js')}}"></script>
<script src="{{asset('js/jquery.MultiFile.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>
</html>
