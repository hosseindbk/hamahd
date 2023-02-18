@extends('Admin.admin')
@section('title')
    <title> ویرایش منو داشبورد </title>
    <link href="{{asset('admin/assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
{{--    <link href="{{asset('admin/assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>--}}
{{--    <link href="{{asset('admin/assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('main')
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">مدیریت  منو داشبورد</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/panel')}}">صفحه اصلی</a></li>
                            <li class="breadcrumb-item"><a href="{{url('admin/cars')}}"> مدیریت   منو داشبورد</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ویرایش  منو داشبورد</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">
                <div class="row row-sm">
                    <div class="col-lg-12 col-md-12">
                        <div class="card custom-card">
                            <div class="card-body" style="background-color: #0000000a;border-radius: 10px 10px 0px 0px;">
                                <div class="row">
                                    <div class="col"><a href="{{url()->current()}}" class="btn btn-link btn-xs">ویرایش اطلاعات منو داشبورد</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                @foreach($menus as $menu)
                                    <form action="{{route('menudashboards.update', $menu->id)}}" method="POST">
                                        <div class="row row-sm">
                                            {{csrf_field()}}
                                            {{ method_field('PATCH') }}
{{--                                            <input type="hidden" name="menu_id" id="menu_id" data-required="1" value="{{$menu->id}}" class="form-control" />--}}
                                            <div class="col-md-12">
                                                {{--@include('error')--}}
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <p class="mg-b-10">عنوان  منو داشبورد</p>
                                                    <input type="text" name="title" id="title" data-required="1" value="{{$menu->title}}" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <p class="mg-b-10">ادرس  منو داشبورد</p>
                                                    <input type="text" name="slug" id="slug" data-required="1" value="{{$menu->slug}}" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <p class="mg-b-10">ایکون  منو داشبورد</p>
                                                    <input type="text" name="icon" id="icon" data-required="1" value="{{$menu->icon}}" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <p class="mg-b-10">نمایش/عدم نمایش</p>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="4" {{$menu->status == '4' ? 'selected' : ''}}>نمایش</option>
                                                        <option value="0" {{$menu->status == '0' ? 'selected' : ''}}>عدم نمایش</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 mg-b-10 text-center">
                                                <div class="form-group">
                                                    <button type="button" id="submit" class="btn btn-info  btn-lg m-r-20">ذخیره اطلاعات</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('end')
    <script src="{{asset('admin/assets/plugins/select2/js/select2.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/select2.js')}}"></script>{{--    <script src="{{asset('admin/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/js/form-elements.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/fileuploads/js/fileupload.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/fileuploads/js/file-upload.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>--}}
{{--    <script src="{{asset('admin/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>--}}
    <script>
        jQuery(document).ready(function(){
            jQuery('#submit').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                jQuery.ajax({
                    url: "{{ route('menudashboards.update' , $menu->id) }}",
                    method: 'PATCH',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        // menu_id     : jQuery('#menu_id').val(),
                        title       : jQuery('#title').val(),
                        slug        : jQuery('#slug').val(),
                        icon        : jQuery('#icon').val(),
                        status      : jQuery('#status').val()
                    },
                    success: function (data) {
                        swal(data.subject, data.message, data.flag);
                    },
                    error: function (data) {
                        swal(data.subject, data.message, data.flag);
                    }
                });
            });
        });
    </script>
@endsection

