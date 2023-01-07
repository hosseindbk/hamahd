<!DOCTYPE html>
<html lang="fa">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="حسین دیوان بیگی">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>وب سایت فرهنگی تربیتی خانواده</title>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" sizes="16x16" href="images/favicon.png">

    <!-- inject:css -->
    <link rel="stylesheet" href="{{'css/bootstrap.min.css'}}">
    <link rel="stylesheet" href="{{'css/line-awesome.css'}}">
    <link rel="stylesheet" href="{{'css/owl.carousel.min.css'}}">
    <link rel="stylesheet" href="{{'css/owl.theme.default.min.css'}}">
    <link rel="stylesheet" href="{{'css/bootstrap-select.min.css'}}">
    <link rel="stylesheet" href="{{'css/fancybox.css'}}">
    <link rel="stylesheet" href="{{'css/tooltipster.bundle.css'}}">
    <link rel="stylesheet" href="{{'css/style.css'}}">
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
<header class="header-menu-area">
    <div class="header-menu-content pr-30px pl-30px bg-white shadow-sm">
        <div class="container-fluid">
            <div class="main-menu-content">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="index.html" class="logo"><img src="images/logo.png" alt="لوگو" /></a>
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
                            <div class="menu-category">
                                <ul>
                                    <li>
                                        <a href="#">دسته بندی ها <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="cat-dropdown-menu">
                                            <li>
                                                <a href="{{route('course')}}">آموزش های کودکانه <i class="la la-angle-left"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('course-detail')}}">آموزش 1</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 2</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 3</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 4</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 5</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 6</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 7</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{route('course')}}">آموزش مادرانه <i class="la la-angle-left"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('course-detail')}}">آموزش 1</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 2</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 3</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 4</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 5</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 6</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 7</a></li>

                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{route('course')}}">آموزش پدرانه <i class="la la-angle-left"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('course-detail')}}">آموزش 1</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 2</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 3</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 4</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 5</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 6</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 7</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{route('course')}}">آموزش همسرانه <i class="la la-angle-left"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('course-detail')}}">آموزش 1</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 2</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 3</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 4</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 5</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 6</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 7</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{route('course')}}">آموزش خانواده <i class="la la-angle-left"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('course-detail')}}">آموزش 1</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 2</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 3</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 4</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 5</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 6</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 7</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{route('course')}}">آموزش دخترانه <i class="la la-angle-left"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('course-detail')}}">آموزش 1</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 2</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 3</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 4</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 5</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 6</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 7</a></li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a href="{{route('course')}}">آموزش پسرانه <i class="la la-angle-left"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="{{route('course-detail')}}">آموزش 1</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 2</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 3</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 4</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 5</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 6</a></li>
                                                    <li><a href="{{route('course-detail')}}">آموزش 7</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <form method="post">
                                <div class="form-group mb-0">
                                    <input class="form-control form--control pl-3" type="text" name="search" placeholder="موضوع خود را جستجو کنید">
                                    <span class="la la-search search-icon"></span>
                                </div>
                            </form>
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{route('/')}}">صفحه اصلی </a>

                                    </li>
                                    <li>
                                        <a href="#">دوره های آموزشی <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">

                                            <li><a href="{{route('course-main')}}">حضوری<span class="ribbon ribbon-blue-bg">جدید</span></a></li>
                                            <li><a href="{{route('course-main')}}">آنلاین<span class="ribbon ribbon-blue-bg">جدید</span></a></li>
                                            <li><a href="{{route('course-main')}}">آفلاین<span class="ribbon ribbon-blue-bg">جدید</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">فروشگاه خانواده <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="#">محصولات 1</a></li>
                                            <li><a href="#">محصولات 2</a></li>
                                            <li><a href="#">محصولات 3</a></li>
                                            <li><a href="#">محصولات 4</a></li>
                                            <li><a href="#">محصولات 5</a></li>
                                            <li><a href="#">محصولات 6</a></li>
                                            <li><a href="#">محصولات 7</a></li>
                                        </ul>
                                    </li>
                                    <li class="mega-menu-has">
                                        <a href="#">مدیا <i class="la la-angle-down fs-12"></i></a>
                                        <div class="dropdown-menu-item mega-menu">
                                            <ul class="row no-gutters">
                                                <li class="col-lg-3">
                                                    <a href="#">کتاب </a>
                                                    <a href="#"> کتاب 1 </a>
                                                    <a href="#"> کتاب 2 </a>
                                                    <a href="#"> کتاب 3 </a>
                                                    <a href="#"> کتاب 4 </a>
                                                    <a href="#"> کتاب 5 </a>
                                                    <a href="#"> کتاب 6 </a>
                                                    <a href="#"> کتاب 7 <span class="ribbon">محبوب ترین</span></a>

                                                </li>
                                                <li class="col-lg-3">
                                                    <a href="#">صوت </a>
                                                    <a href="#"> صوت 1 </a>
                                                    <a href="#"> صوت 2 </a>
                                                    <a href="#"> صوت 3 </a>
                                                    <a href="#"> صوت 4 </a>
                                                    <a href="#"> صوت 5 </a>
                                                    <a href="#"> صوت 6 </a>
                                                    <a href="#"> صوت 7 <span class="ribbon">محبوب ترین</span></a>
                                                </li>
                                                <li class="col-lg-3">
                                                    <a href="#">کلیپ </a>
                                                    <a href="#"> کلیپ 1 </a>
                                                    <a href="#"> کلیپ 2 </a>
                                                    <a href="#"> کلیپ 3 </a>
                                                    <a href="#"> کلیپ 4 </a>
                                                    <a href="#"> کلیپ 5 </a>
                                                    <a href="#"> کلیپ 6 </a>
                                                    <a href="#"> کلیپ 7 <span class="ribbon">محبوب ترین</span></a>
                                                </li>
                                                <li class="col-lg-3">
                                                    <div class="menu-banner position-relative h-100">
                                                        <div class="overlay rounded-rounded opacity-4"></div>
                                                        <div class="menu-banner-content p-4 position-absolute bottom-0 right-0">
                                                            <h4 class="fs-20 font-weight-bold pb-3 text-white">30 روز مسیر رایگان برای کاربران جدید</h4>
                                                            <a href="{{route('register')}}" class="btn theme-btn theme-btn-sm theme-btn-white">شروع به یادگیری <i class="la la-arrow-left icon ml-1"></i></a>
                                                        </div>
                                                        <img src="images/menu-banner-img.jpg" alt="تصویر بنر منو" class="w-100 h-100 rounded-rounded">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>

                            </nav>
                            <div class="nav-left-button d-flex align-items-center">
                                <div class="user-action-wrap d-flex align-items-center">
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
                                                            <img src="images/small-img.jpg" alt="تصویر سبد خرید">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="course-details.html">دوره جامع خانواده 1</a></h5>
                                                            <span class="d-block lh-18 py-1">استان محمد محمدی</span>
                                                            <p class="text-black font-weight-semi-bold lh-18">999 تومان <span class="before-price fs-14">1000 تومان</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media media-card">
                                                        <a href="shopping-cart.html" class="media-img">
                                                            <img src="images/small-img.jpg" alt="تصویر سبد خرید">
                                                        </a>
                                                        <div class="media-body">
                                                            <h5><a href="course-details.html">دوره جامع خانواده 1</a></h5>
                                                            <span class="d-block lh-18 py-1">استان محمد محمدی</span>
                                                            <p class="text-black font-weight-semi-bold lh-18">999 تومان <span class="before-price fs-14">1000 تومان</span></p>
                                                        </div>
                                                    </li>
                                                    <li class="media media-card">
                                                        <div class="media-body fs-16">
                                                            <p class="text-black font-weight-semi-bold lh-18">مجموع: <span class="cart-total">1800 تومان </span> <span class="before-price fs-14">2000 تومان</span></p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="shopping-cart.html" class="btn theme-btn w-100">ادامه فرایند خرید <i class="la la-arrow-left icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
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
                                                            <a href="dashboard.html" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-1 mr-3 text-white">
                                                                    <i class="la la-bolt"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>اطلاعات شما به روز شد!</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">1 ساعت پیش</span>
                                                                </div>
                                                            </a>
                                                            <a href="dashboard.html" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-2 mr-3 text-white">
                                                                    <i class="la la-lock"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>رمز عبور را عوض کردی</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">1 ماه پیش</span>
                                                                </div>
                                                            </a>
                                                            <a href="dashboard.html" class="media media-card align-items-center">
                                                                <div class="icon-element icon-element-sm flex-shrink-0 bg-3 mr-3 text-white">
                                                                    <i class="la la-user"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5>حساب شما با موفقیت ایجاد شد</h5>
                                                                    <span class="d-block lh-18 pt-1 text-gray fs-13">3 سال پیش</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </li>
                                                    <li class="menu-heading-block">
                                                        <a href="dashboard.html" class="btn theme-btn w-100">نمایش همه اعلان ها <i class="la la-arrow-left icon ml-1"></i></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="shop-cart user-profile-cart">
                                        <ul>
                                            <li>
                                                <div class="shop-cart-btn">
                                                    <div class="avatar-xs">
                                                        <img class="rounded-full img-fluid" src="images/small-avatar-1.jpg" alt="تصویر آواتار" />
                                                    </div>
                                                    <span class="dot-status bg-1"></span>
                                                </div>
                                                <ul class="cart-dropdown-menu after-none p-0 notification-dropdown-menu">
                                                    <li class="menu-heading-block d-flex align-items-center">
                                                        <a href="teacher-detail.html" class="avatar-sm flex-shrink-0 d-block">
                                                            <img class="rounded-full img-fluid" src="images/small-avatar-1.jpg" alt="تصویر آواتار" />
                                                        </a>
                                                        <div class="ml-2">
                                                            <h4><a href="teacher-detail.html" class="text-black">محمد حسین دیوان بیگی</a></h4>
                                                            <span class="d-block fs-14 lh-20">info@yahoo.com</span>
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
                                                                <a href="my-courses.html"> <i class="la la-file-video-o mr-1"></i> دوره های من </a>
                                                            </li>
                                                            <li>
                                                                <a href="shopping-cart.html"> <i class="la la-shopping-basket mr-1"></i> سبد خرید من </a>
                                                            </li>
                                                            <li>
                                                                <a href="my-courses.html"> <i class="la la-heart-o mr-1"></i> لیست علاقه مندی های من </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="dashboard.html">
                                                                    <i class="la la-bell mr-1"></i>اعلان&zwnj;ها
                                                                    <span class="badge bg-info text-white ml-2 p-1">9+</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="dashboard-message.html">
                                                                    <i class="la la-envelope mr-1"></i>پیام های
                                                                    <span class="badge bg-info text-white ml-2 p-1">12+</span>
                                                                </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="dashboard-settings.html"> <i class="la la-gear mr-1"></i> تنظیمات </a>
                                                            </li>
                                                            <li>
                                                                <a href="dashboard-purchase-history.html"> <i class="la la-history mr-1"></i> سابقه خرید </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="student-detail.html"> <i class="la la-user mr-1"></i> پروفایل عمومی </a>
                                                            </li>
                                                            <li>
                                                                <a href="dashboard-settings.html"> <i class="la la-edit mr-1"></i> ویرایش نمایه </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
                                                            <li>
                                                                <a href="#"> <i class="la la-question mr-1"></i> کمک </a>
                                                            </li>
                                                            <li>
                                                                <a href="index.html"> <i class="la la-power-off mr-1"></i> خروج </a>
                                                            </li>
                                                            <li><div class="section-block"></div></li>
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
            <li><a href="dashboard.html">اطلاعیه</a></li>
            <li><a href="dashboard-message.html">پیام ها</a></li>
            <li><a href="my-courses.html">لیست علاقه مندیها</a></li>
            <li><a href="shopping-cart.html">سبد خرید من</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">حساب</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="dashboard-settings.html">تنظیمات حساب</a></li>
            <li><a href="dashboard-purchase-history.html">سابقه خرید</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">مشخصات</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="student-detail.html">پروفایل عمومی</a></li>
            <li><a href="dashboard-settings.html">ویرایش نمایه</a></li>
            <li><a href="index.html">خروج</a></li>
        </ul>
        <h4 class="off-canvas-menu-heading pt-20px">بیشتر از ما</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1">
            <li><a href="for-business.html">ما برای تجارت</a></li>
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

    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="right" title="بستن منو">
            <i class="la la-times"></i>
        </div>

        <h4 class="off-canvas-menu-heading pt-90px">فرا گرفتن</h4>
        <ul class="generic-list-item off-canvas-menu-list pt-1 pb-2 border-bottom border-bottom-gray">
            <li><a href="my-courses.html">یادگیری من</a></li>
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
                <a href="course-grid.html">فناوری اطلاعات</a>
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

        </div>
    </div>
    <div class="body-overlay"></div>
</header>

@yield('main')

<section class="footer-area pt-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 responsive-column-half">
                <div class="footer-item">
                    <a href="{{route('/')}}">
                        <img src="images/logo.png" alt="لوگوی پاورقی" class="footer__logo">
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
                <h5 class="card-title pb-1"><a href="course-details.html">دوره خانواده 1</a></h5>
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
                <h5 class="card-title pb-1"><a href="course-details.html">دوره خانواده 1</a></h5>
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
                <h5 class="card-title pb-1"><a href="course-details.html">دوره خانواده 1</a></h5>
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
                <h5 class="card-title pb-1"><a href="course-details.html">دوره خانواده 1</a></h5>
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
                <h5 class="card-title pb-1"><a href="course-details.html">دوره خانواده 1</a></h5>
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
<script src="{{'js/jquery-3.4.1.min.js'}}"></script>
<script src="{{'js/bootstrap.bundle.min.js'}}"></script>
<script src="{{'js/bootstrap-select.min.js'}}"></script>
<script src="{{'js/owl.carousel.min.js'}}"></script>
<script src="{{'js/isotope.js'}}"></script>
<script src="{{'js/waypoint.min.js'}}"></script>
<script src="{{'js/jquery.counterup.min.js'}}"></script>
<script src="{{'js/fancybox.js'}}"></script>
<script src="{{'js/datedropper.min.js'}}"></script>
<script src="{{'js/emojionearea.min.js'}}"></script>
<script src="{{'js/tooltipster.bundle.min.js'}}"></script>
<script src="{{'js/jquery.lazy.min.js'}}"></script>
<script src="{{'js/main.js'}}"></script>
</body>
</html>
