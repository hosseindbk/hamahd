@extends('admin')
@section('main')
                    <div class="dashboard-heading mb-5">
                        <h3 class="fs-22 font-weight-semi-bold">تنظیمات</h3>
                    </div>
                    <ul class="nav nav-tabs generic-tab pb-30px" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="edit-profile-tab" data-toggle="tab" href="#edit-profile" role="tab" aria-controls="edit-profile" aria-selected="false">
                                مشخصات
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="true">
                                کلمه عبور
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="change-email-tab" data-toggle="tab" href="#change-email" role="tab" aria-controls="change-email" aria-selected="false">
                                تغییر ایمیل
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="withdraw-tab" data-toggle="tab" href="#withdraw" role="tab" aria-controls="withdraw" aria-selected="false">
                                تسویه حساب
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="account-tab" data-toggle="tab" href="#account" role="tab" aria-controls="account" aria-selected="false">
                                حساب
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="edit-profile" role="tabpanel" aria-labelledby="edit-profile-tab">
                            <div class="setting-body">
                                <h3 class="fs-17 font-weight-semi-bold pb-4">ویرایش نمایه</h3>
                                <div class="media media-card align-items-center">
                                    <div class="media-img media-img-lg mr-4 bg-gray">
                                        <img class="mr-3" src="images/team11.jpg" alt="تصویر آواتار" />
                                    </div>
                                    <div class="media-body">
                                        <div class="file-upload-wrap file-upload-wrap-2">
                                            <input type="file" name="files[]" class="multi file-upload-input with-preview" multiple="" />
                                            <span class="file-upload-text"><i class="la la-photo mr-2"></i>یک عکس آپلود کنید</span>
                                        </div>
                                        <!-- file-upload-wrap -->
                                        <p class="fs-14">حداکثر اندازه فایل 5 مگابایت، حداقل ابعاد: 200x200 و فایل های مناسب jpg و png.</p>
                                    </div>
                                </div>
                                <!-- end media -->
                                <form method="post" class="row pt-40px">
                                    <div class="input-box col-lg-6">
                                        <label class="label-text">نام </label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" value="حسین" />
                                            <span class="la la-user input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-6">
                                        <label class="label-text">نام خانوادگی</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" value="دیوان بیگی" />
                                            <span class="la la-user input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-6">
                                        <label class="label-text">نام کاربری</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" value="hosseindbk" />
                                            <span class="la la-user input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-6">
                                        <label class="label-text">آدرس ایمیل</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="email" name="email" value="info@gmail.com" />
                                            <span class="la la-envelope input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-12">
                                        <label class="label-text">شماره تلفن</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" value="09123456789" />
                                            <span class="la la-phone input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-12">
                                        <label class="label-text">بیوگرافی</label>
                                        <div class="form-group">
                                            <textarea class="form-control form--control user-text-editor pl-3" name="message">
لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است
                                            </textarea>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-12 py-2">
                                        <button class="btn theme-btn">ذخیره تغییرات</button>
                                    </div>
                                    <!-- end input-box -->
                                </form>
                            </div>
                            <!-- end setting-body -->
                        </div>
                        <!-- end tab-pane -->
                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
                            <div class="setting-body">
                                <h3 class="fs-17 font-weight-semi-bold pb-4">رمز عبور را تغییر دهید</h3>
                                <form method="post" class="row">
                                    <div class="input-box col-lg-4">
                                        <label class="label-text">رمز عبور قدیمی</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" placeholder="رمز عبور قدیمی" />
                                            <span class="la la-lock input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-4">
                                        <label class="label-text">رمز عبور جدید</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" placeholder="رمز عبور جدید" />
                                            <span class="la la-lock input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-4">
                                        <label class="label-text">رمز عبور جدید را تأیید کنید</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" placeholder="رمز عبور جدید را تأیید کنید" />
                                            <span class="la la-lock input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-12 py-2">
                                        <button class="btn theme-btn">رمز عبور را تغییر دهید</button>
                                    </div>
                                    <!-- end input-box -->
                                </form>
                                <form method="post" class="pt-5 mt-5 border-top border-top-gray">
                                    <h3 class="fs-17 font-weight-semi-bold pb-1">رمز عبور را فراموش کرده و سپس رمز عبور را بازیابی کنید</h3>
                                    <p class="pb-4">
                                        ایمیل اکانت خود را برای بازنشانی رمز عبور وارد کنید. سپس پیوندی به ایمیل برای بازنشانی رمز عبور دریافت خواهید کرد. اگر مشکلی در مورد بازنشانی رمز عبور دارید
                                        <a href="contact.html" class="text-color">با ما تماس بگیرید</a>
                                    </p>
                                    <div class="input-box">
                                        <label class="label-text">آدرس ایمیل</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="email" name="email" placeholder="آدرس ایمیل را وارد کن" />
                                            <span class="la la-envelope input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box py-2">
                                        <button class="btn theme-btn">بازیابی رمز عبور</button>
                                    </div>
                                    <!-- end input-box -->
                                </form>
                            </div>
                            <!-- end setting-body -->
                        </div>
                        <!-- end tab-pane -->
                        <div class="tab-pane fade" id="change-email" role="tabpanel" aria-labelledby="change-email-tab">
                            <div class="setting-body">
                                <h3 class="fs-17 font-weight-semi-bold pb-4">تغییر ایمیل</h3>
                                <form method="post" class="row">
                                    <div class="input-box col-lg-4">
                                        <label class="label-text">ایمیل قدیمی</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" placeholder="ایمیل قدیمی" />
                                            <span class="la la-envelope input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-4">
                                        <label class="label-text">ایمیل جدید</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" placeholder="ایمیل جدید" />
                                            <span class="la la-envelope input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-4">
                                        <label class="label-text">ایمیل جدید را تایید کنید</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" placeholder="ایمیل جدید را تایید کنید" />
                                            <span class="la la-envelope input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-12 py-2">
                                        <button class="btn theme-btn">تغییر ایمیل</button>
                                    </div>
                                    <!-- end input-box -->
                                </form>
                            </div>
                            <!-- end setting-body -->
                        </div>
                        <!-- end tab-pane -->
                        <div class="tab-pane fade" id="withdraw" role="tabpanel" aria-labelledby="withdraw-tab">
                            <div class="setting-body">
                                <h3 class="fs-17 font-weight-semi-bold pb-4">یک روش برداشت را انتخاب کنید</h3>
                                <form method="post" class="row mb-40px">
                                    <div class="col-lg-2 responsive-column-half">
                                        <div class="custom-control custom-radio mb-3 pl-0">
                                            <input type="radio" class="custom-control-input" id="bankTransfer" name="radio-stacked" required="" />
                                            <label class="custom-control-label custom--control-label custom--control-label-boxed" for="bankTransfer">
                                                <span class="font-weight-semi-bold text-black d-block"></span>
                                                <span class="font-weight-semi-bold text-black d-block">کارت </span><span class="d-block fs-14 lh-18">حداق 50 تومان</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- end col-lg-2 -->
                                    <div class="col-lg-2 responsive-column-half">
                                        <div class="custom-control custom-radio mb-3 pl-0">
                                            <input type="radio" class="custom-control-input" id="eCheck" name="radio-stacked" required="" />
                                            <label class="custom-control-label custom--control-label custom--control-label-boxed" for="eCheck">
                                                <span class="font-weight-semi-bold text-black d-block"></span>
                                                <span class="font-weight-semi-bold text-black d-block">چک </span><span class="d-block fs-14 lh-18">حداقل 50 تومان</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- end col-lg-2 -->
                                    <div class="col-lg-2 responsive-column-half">
                                        <div class="custom-control custom-radio mb-3 pl-0">
                                            <input type="radio" class="custom-control-input" id="payoneer" name="radio-stacked" required="" />
                                            <label class="custom-control-label custom--control-label custom--control-label-boxed" for="payoneer">
                                                <span class="font-weight-semi-bold text-black d-block">پایونیر </span>
                                                <span class="d-block fs-14 lh-18">حدقل 50 تومان</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- end col-lg-2 -->
                                    <div class="col-lg-2 responsive-column-half">
                                        <div class="custom-control custom-radio mb-3 pl-0">
                                            <input type="radio" class="custom-control-input" id="PayPal" name="radio-stacked" required="" />
                                            <label class="custom-control-label custom--control-label custom--control-label-boxed" for="PayPal">
                                                <span class="font-weight-semi-bold text-black d-block">پی بال </span>
                                                <span class="d-block fs-14 lh-18">حدقل 50 تومان</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- end col-lg-2 -->
                                    <div class="col-lg-2 responsive-column-half">
                                        <div class="custom-control custom-radio mb-3 pl-0">
                                            <input type="radio" class="custom-control-input" id="skrill" name="radio-stacked" required="" />
                                            <label class="custom-control-label custom--control-label custom--control-label-boxed" for="skrill">
                                                <span class="font-weight-semi-bold text-black d-block"></span>
                                                <span class="font-weight-semi-bold text-black d-block">اسکریل </span><span class="d-block fs-14 lh-18">حدقل 50 تومان</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- end col-lg-2 -->
                                    <div class="col-lg-2 responsive-column-half">
                                        <div class="custom-control custom-radio mb-3 pl-0">
                                            <input type="radio" class="custom-control-input" id="stripe" name="radio-stacked" required="" />
                                            <label class="custom-control-label custom--control-label custom--control-label-boxed" for="stripe">
                                                <span class="font-weight-semi-bold text-black d-block">استرایپ </span>
                                                <span class="d-block fs-14 lh-18">حدقل 50 تومان</span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- end col-lg-2 -->
                                </form>
                                <form method="post" class="row">
                                    <h3 class="fs-17 font-weight-semi-bold pb-4 col-lg-12">اطلاعات حساب</h3>
                                    <div class="input-box col-lg-4">
                                        <label class="label-text">نام کاربری</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" value="حسین دیوان بیگی" />
                                            <span class="la la-user input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-4">
                                        <label class="label-text">شماره حساب</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" value="3275476222500" />
                                            <span class="la la-pencil input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-4">
                                        <label class="label-text">نام بانک</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" value="نام بانک" />
                                            <span class="la la-bank input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-6">
                                        <label class="label-text">لورم ایپسوم</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" value="3030" />
                                            <span class="la la-pencil input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-6">
                                        <label class="label-text">لورم ایپسوم</label>
                                        <div class="form-group">
                                            <input class="form-control form--control" type="text" name="text" value="لورم ایپسوم" />
                                            <span class="la la-pencil input-icon"></span>
                                        </div>
                                    </div>
                                    <!-- end input-box -->
                                    <div class="input-box col-lg-12 py-2">
                                        <button class="btn theme-btn">ذخیره حساب برداشت</button>
                                    </div>
                                    <!-- end input-box -->
                                </form>
                            </div>
                            <!-- end setting-body -->
                        </div>
                        <!-- end tab-pane -->
                        <div class="tab-pane fade" id="account" role="tabpanel" aria-labelledby="account-tab">
                            <div class="setting-body">
                                <h3 class="fs-17 font-weight-semi-bold pb-4">حساب من</h3>
                                <form method="post" class="mb-40px">
                                    <div class="custom-control-wrap d-flex flex-wrap align-items-center">
                                        <div class="custom-control custom-radio pl-0 flex-shrink-0 mr-3 mb-2">
                                            <input type="radio" class="custom-control-input" id="deactivateAccount" name="radio-stacked" required="" />
                                            <label class="custom-control-label custom--control-label custom--control-label-boxed" for="deactivateAccount">
                                                <span class="font-weight-semi-bold text-black">غیرفعال کردن اکانت</span>
                                            </label>
                                        </div>
                                        <button class="btn theme-btn mb-2">از کار انداختن</button>
                                    </div>
                                    <!-- end custom-control-wrap -->
                                </form>
                                <div class="section-block"></div>
                                <div class="danger-zone pt-40px">
                                    <h4 class="fs-17 font-weight-semi-bold text-danger">حذف اکانت برای همیشه</h4>
                                    <p class="pt-1 pb-4"><span class="text-warning">هشدار:</span> هنگامی که حساب خود را حذف می کنید، دیگر راه برگشتی وجود ندارد. لطفا مطمئن باشید</p>
                                    <button class="btn theme-btn" data-toggle="modal" data-target="#deleteModal">اکانت من رو پاک کن</button>
                                </div>
                            </div>
                            <!-- end setting-body -->
                        </div>
                        <!-- end tab-pane -->
                    </div>
                    <!-- end tab-content -->
@endsection
