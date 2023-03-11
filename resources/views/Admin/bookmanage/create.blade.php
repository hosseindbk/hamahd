@extends('Admin.admin')
@section('title')
    <title> ایجاد کتاب و نوشتار </title>
    <link href="{{asset('admin/assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/ion-rangeslider/css/ion.rangeSlider.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('admin/assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/css-rtl/colors/default.css')}}" rel="stylesheet">
@endsection
@section('main')
    <div class="main-content side-content pt-0">
        <div class="container-fluid">
            <div class="inner-body">
                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">مدیریت کتاب و نوشتار</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/panel')}}">صفحه اصلی</a></li>
                            <li class="breadcrumb-item"><a href="{{url('admin/bookmanage')}}">مدیریت کتاب و نوشتار</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ایجاد کتاب و نوشتار</li>
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
                                    <div class="col"><a href="{{url()->current()}}" class="btn btn-link btn-xs">ورود اطلاعات کتاب و نوشتار</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('bookmanage.store')}}" method="POST" enctype="multipart/form-data" id="form">
                                    <div class="row row-sm">
                                        @csrf
                                        <div class="col-md-12">
                                            {{--@include('error')--}}
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="mg-b-10">عنوان فایل </p>
                                                <input type="text" name="title" id="title" placeholder="عنوان فایل را وارد کنید" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <div class="form-group">
                                                    <p class="mg-b-10">فایل کتاب یا مقاله</p>
                                                    <input type="file" name="file_link" id="file_link" class="form-control" data-height="200">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="mg-b-10">تصویر کاور</p>
                                                <input type="file" name="cover" id="cover" class="dropify" data-height="200">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="mg-b-10">توضیحات</p>
                                                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 mg-b-10 text-center">
                                            <div class="form-group">
                                                <button type="button" id="submit" class="btn btn-info  btn-lg m-r-20">ذخیره اطلاعات</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                {{--                                <div class="mg-t-10">--}}
                                {{--                                    <input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png," multiple="">--}}
                                {{--                                </div>--}}
                            </div>
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
    <script src="{{asset('admin/assets/js/select2.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min-rtl.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap-daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('admin/assets/js/advanced-form-elements.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fileuploads/js/file-upload.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
    {{--    <script src="{{asset('admin/assets/plugins/ckeditor/ckeditor.js')}}"></script>--}}
    {{--    <script>--}}
    {{--        ClassicEditor--}}
    {{--            .create( document.querySelector( '#editor' ) )--}}
    {{--            .catch( error => {--}}
    {{--                console.error( error );--}}
    {{--            } );--}}
    {{--    </script>--}}
    {{--    <script>--}}
    {{--        $('#submit').on('click', function() {--}}
    {{--            var file_data = $('#file_link').prop('files')[0];--}}
    {{--            var form_data = new FormData();--}}
    {{--            form_data.append('file', file_data);--}}
    {{--            $.ajaxSetup({--}}
    {{--                headers: {--}}
    {{--                    'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
    {{--                }--}}
    {{--            });--}}
    {{--            swal({--}}
    {{--                    title: "Are you sure to delete this  of ?",--}}
    {{--                    text: "Delete Confirmation?",--}}
    {{--                    type: "warning",--}}
    {{--                    showCancelButton: false,--}}
    {{--                    confirmButtonColor: "#DD6B55",--}}
    {{--                    confirmButtonText: "Delete",--}}
    {{--                    closeOnConfirm: false--}}
    {{--                },--}}
    {{--                $.ajax({--}}
    {{--                    url: "{{ route('slides.store') }}",--}}
    {{--                    dataType: 'text',  // <-- what to expect back from the PHP script, if anything--}}
    {{--                    cache: false,--}}
    {{--                    contentType: false,--}}
    {{--                    processData: false,--}}
    {{--                    data: {--}}
    {{--                        "_token": "{{ csrf_token() }}",--}}
    {{--                        title       : jQuery('#title').val(),--}}
    {{--                        file_link   : jQuery('#file_link').prop('files')[0]--}}
    {{--                    },--}}
    {{--                    type: 'post',--}}
    {{--                    success: function (data) {--}}
    {{--                        if(data.success == true){--}}
    {{--                            swal(data.subject, data.message, data.flag);--}}
    {{--                            $('#form')[0].reset();--}}
    {{--                        } else {--}}
    {{--                            swal(data.subject, data.message, data.flag);--}}
    {{--                        }--}}
    {{--                    },--}}
    {{--                }));--}}
    {{--        });--}}
    {{--    </script>--}}
    <script>
        jQuery(document).ready(function(){
            jQuery('#submit').click(function(e){
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    },
                    contentType : false,
                    processData : false,
                });
                let    _token      = jQuery('input[name="_token"]').val();
                let    title       = jQuery('#title').val();
                let    description = jQuery('#description').val();
                let    cover       = jQuery('#cover')[0].files[0];
                let    file_link   = jQuery('#file_link')[0].files[0];

                let formData = new FormData();
                formData.append('title'      , title);
                formData.append('description', description);
                formData.append('file_link'  , file_link);
                formData.append('cover'      , cover);
                formData.append('_token'     , _token);

                swal({
                        title: "Are you sure to delete this  of ?",
                        text: "Delete Confirmation?",
                        type: "warning",
                        showCancelButton: false,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Delete",
                        closeOnConfirm: false
                    },
                    jQuery.ajax({
                        url: "{{ route('bookmanage.store') }}",
                        method: 'POST',
                        data: formData,

                        success: function (data) {
                            if(data.success == true){
                                swal(data.subject, data.message, data.flag);
                                $('#form')[0].reset();
                            } else {
                                swal(data.subject, data.message, data.flag);
                            }
                        },
                    }));
            });
        });
    </script>
    {{--    <script>--}}
    {{--        $.ajaxSetup({--}}
    {{--            headers: {--}}
    {{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
    {{--            }--}}
    {{--        });--}}
    {{--        (function($) {--}}
    {{--            //fancyfileuplod--}}
    {{--            $('#demo').FancyFileUpload({--}}
    {{--                params : {--}}
    {{--                    "_token": "{{ csrf_token() }}",--}}
    {{--                    'path' : 'images/slides/',--}}
    {{--                    action : 'fileuploader',--}}
    {{--                },--}}
    {{--                maxfilesize : 10000000--}}
    {{--            });--}}
    {{--        })(jQuery);--}}

    {{--    </script>--}}
    {{--    <script>--}}
    {{--        $(function(){--}}
    {{--            $('#type').change(function(){--}}
    {{--                $("#type_id option").remove();--}}
    {{--                var id = $('#type').val();--}}

    {{--                $.ajax({--}}
    {{--                    url : '{{ route( 'slidetype' ) }}',--}}
    {{--                    data: {--}}
    {{--                        "_token": "{{ csrf_token() }}",--}}
    {{--                        "id": id--}}
    {{--                    },--}}
    {{--                    type: 'post',--}}
    {{--                    dataType: 'json',--}}
    {{--                    success: function( result )--}}
    {{--                    {--}}
    {{--                        $.each( result, function(k, v) {--}}
    {{--                            $('#type_id').append($('<option>', {value:k, text:v}));--}}
    {{--                        });--}}
    {{--                    },--}}
    {{--                    error: function()--}}
    {{--                    {--}}
    {{--                        //handle errors--}}
    {{--                        alert('error...');--}}
    {{--                    }--}}
    {{--                });--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}

@endsection
