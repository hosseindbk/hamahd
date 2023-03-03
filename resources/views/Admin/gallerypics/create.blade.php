@extends('Admin.admin')
@section('title')
    <title> ایجاد گالری تصاویر </title>
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
                        <h2 class="main-content-title tx-24 mg-b-5">مدیریت گالری تصاویر</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('admin/panel')}}">صفحه اصلی</a></li>
                            <li class="breadcrumb-item"><a href="{{url('admin/slides')}}">مدیریت گالری تصاویر</a></li>
                            <li class="breadcrumb-item active" aria-current="page">ایجاد گالری تصاویر</li>
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
                                    <div class="col"><a href="{{url()->current()}}" class="btn btn-link btn-xs">ورود اطلاعات گالری تصاویر</a></div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('gallerypicmanage.store')}}" method="POST" enctype="multipart/form-data" id="form">
                                    {{csrf_field()}}
                                </form>
                                <div class="mg-t-10">
                                    <input id="demo" type="file" name="files" accept=".jpg, .png, image/jpeg, image/png," multiple="">
                                </div>
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
    <script src="{{asset('admin/assets/plugins/ckeditor/ckeditor.js')}}"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>
    {{--    <script>--}}
    {{--        jQuery(document).ready(function(){--}}
    {{--            jQuery('#submit').click(function(e){--}}
    {{--                e.preventDefault();--}}
    {{--                $.ajaxSetup({--}}
    {{--                    headers: {--}}
    {{--                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
    {{--                    }--}}
    {{--                });--}}
    {{--                swal({--}}
    {{--                        title: "Are you sure to delete this  of ?",--}}
    {{--                        text: "Delete Confirmation?",--}}
    {{--                        type: "warning",--}}
    {{--                        showCancelButton: false,--}}
    {{--                        confirmButtonColor: "#DD6B55",--}}
    {{--                        confirmButtonText: "Delete",--}}
    {{--                        closeOnConfirm: false--}}
    {{--                    },--}}
    {{--                    jQuery.ajax({--}}
    {{--                        url: "{{ route('slides.store') }}",--}}
    {{--                        method: 'POST',--}}
    {{--                        data: {--}}
    {{--                            "_token": "{{ csrf_token() }}",--}}
    {{--                            title       : jQuery('#title').val(),--}}
    {{--                            file_link   : jQuery('#file_link').val()--}}
    {{--                        },--}}
    {{--                        success: function (data) {--}}
    {{--                            if(data.success == true){--}}
    {{--                                swal(data.subject, data.message, data.flag);--}}
    {{--                                $('#form')[0].reset();--}}
    {{--                            } else {--}}
    {{--                                swal(data.subject, data.message, data.flag);--}}
    {{--                            }--}}
    {{--                        },--}}
    {{--                    }));--}}
    {{--            });--}}
    {{--        });--}}
    {{--    </script>--}}
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        (function($) {
            //fancyfileuplod
            $('#demo').FancyFileUpload({
                params : {
                    "_token": "{{ csrf_token() }}",
                    action : 'fileuploader',
                },
                maxfilesize : 10000000
            });
        })(jQuery);

    </script>
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
