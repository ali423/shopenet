@extends("admin.layouts.main")

@section('page_styles')
    <link href="{{ asset("/assets/libs/dropify/dropify.min.css") }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset("css/default-assets/jquery.tagsinput.min.css") }}">
@endsection


@section('content')
    <!-- Main Content Area -->

    @include('admin.layouts.errors')
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-30">
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between align-items-center mb-20">
                                <h6 class="card-title mb-0">سفارشات</h6>
                                <button type="button" id="add" class="btn btn-primary waves-effect waves-light float-right mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">+ افزودن قالب جدید</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>نام کاربر</th>
                                        <th>موبایل</th>
                                        <th>قالب انتخابی </th>
                                        <th>پلن انتخابی</th>
                                        <th>تاریخ ثبت</th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $service)
                                        <tr>
                                            <td>{{$service->id}}</td>
                                            <td>{{$service->user->name}}</td>
                                            <td>{{$service->user->mobile}}</td>
                                            <td>{{$service->template->title}}</td>
                                            <td>{{$service->plan}}</td>
                                            <td>{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($service->created_at))}}</td>
                                            <td>
                                                <div class="row">
                                                    <a href="{{route('admin.service.edit',$service)}}" class="mr-2"><i class="fa fa-edit text-info font-30"></i></a>
                                                    {{--                                            <a href="#"><i class="fa fa-trash text-danger font-18"></i></a>--}}
                                                </div>

                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
        @section('page_scripts')

            @if(isset($_GET['q']))

                @if($_GET['q']=='add')

                    <script>
                        jQuery(function(){
                            jQuery('#add').click();
                        });
                    </script>
    @endif

    @endif

                <!-- dropify js -->
                <script src="{{asset("/assets/libs/dropify/dropify.min.js")}}"></script>

                <!-- form-upload init -->
                <script src="{{asset("/assets/js/pages/form-fileupload.init.js")}}"></script>
                <script src="{{asset("https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js")}}"></script>
                <script src="{{asset("js/default-assets/jquey.tagsinput.min.js")}}"></script>

                <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ), {
                            language: {
                                // The UI will be English.
                                ui: 'fa',

                                // But the content will be edited in Arabic.
                                content: 'fa'
                            }
                        } )
                        .then( editor => {
                            window.editor = editor;
                        } )
                        .catch( err => {
                            console.error( err.stack );
                        } );
                </script>
                <script>
                    $(function() {
                        'use strict';

                        $('#tags').tagsInput({
                            'width': '100%',
                            'height': '85%',
                            'interactive': true,
                            'defaultText': 'اضافه کردن',
                            'removeWithBackspace': true,
                            'minChars': 0,
                            'maxChars': 20,
                            'placeholderColor': '#555'
                        });
                    });
                </script>
                <script type="text/javascript">
                    // add row
                    $("#addRow").click(function () {
                        var html = '';
                        html += '<div id="inputFormRow">';
                        html += '<div class="input-group mb-3">';
                        html += '<input type="text" name="options_default[]" class="form-control m-input" placeholder="امکانات قالب را وارد کنید" autocomplete="off">';
                        html += '<div class="input-group-append">';
                        html += '<button id="removeRow" type="button" class="btn btn-danger">حذف</button>';
                        html += '</div>';
                        html += '</div>';

                        $('#newRow').append(html);
                    });

                    // remove row
                    $(document).on('click', '#removeRow', function () {
                        $(this).closest('#inputFormRow').remove();
                    });
                </script>
                <script type="text/javascript">
                    // add row
                    $("#addRow_2").click(function () {
                        var html = '';
                        html += '<div id="inputFormRow_2">';
                        html += '<div class="input-group mb-3">';
                        html += '<input type="text" name="options_professional[]" class="form-control m-input" placeholder="امکانات سفارشی قالب را وارد کنید" autocomplete="off">';
                        html += '<div class="input-group-append">';
                        html += '<button id="removeRow_2" type="button" class="btn btn-danger">حذف</button>';
                        html += '</div>';
                        html += '</div>';

                        $('#newRow_2').append(html);
                    });

                    // remove row
                    $(document).on('click', '#removeRow_2', function () {
                        $(this).closest('#inputFormRow_2').remove();
                    });
                </script>

@endsection
