@extends("admin.layouts.main")

@section('page_styles')
    <link rel="stylesheet" href="{{ asset("css/bootstrap-datepicker.min.css") }}">
    <link href="{{ asset("/assets/libs/dropify/dropify.min.css") }}" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="{{ asset("css/default-assets/jquery.tagsinput.min.css") }}">
@endsection

@section('content')
    <!-- Main Content Area -->
    @include('admin.layouts.errors')
    <!-- Main Content Area -->

    <div class="main-content">
        <div class="col-xl-12 box-margin height-card">
            <div class="card card-body">
                <h4 class="card-title">وییرایش کاربر</h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form method="post" action="{{route('discount.update',$discount)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="title" class="col-form-label">عنوان کد</label>
                                    <input type="text" name="title" class="form-control" id="title"
                                           placeholder="عنوان " value="{{$discount->title}}" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="percent" class="col-form-label">درصد</label>
                                    <input type="number" name="percent" class="form-control" id="percent"
                                           placeholder="درصد " min="1" max="100" required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="code" class="col-form-label">کد</label>
                                    <input type="text" name="code" class="form-control" value="{{$discount->code}}" id="code" placeholder="کد"
                                           required>
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="number" class="col-form-label">تعداد</label>
                                    <input type="number" name="number" value="{{$discount->number}}" class="form-control" id="number"
                                           placeholder="تعداد">
                                </div>
                            </div>
                            <div class="col-12 box-margin height-card">
                                <div class="form-group col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <h6 class="card-title mb-1">پلن ها</h6>
                                            <div>
                                                <input name="plan" id="tags"
                                                       value="{{$discount->plan}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <div class="form-group mb-3">
                                        <label>تاریخ انتقضا</label>
                                        <input type="text" name="expired_at" value="{{$discount->expired_at}}" autocomplete="off"  class="form-control usage" >
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">ویرایش</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')


    <!-- dropify js -->
    <script src="{{ asset("/js/bootstrap-datepicker.min.js") }}"></script>

    <script src="{{asset("/assets/libs/dropify/dropify.min.js")}}"></script>

    <!-- form-upload init -->
    <script src="{{asset("/assets/js/pages/form-fileupload.init.js")}}"></script>
    <script src="{{asset("https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js")}}"></script>
    <script src="{{asset("js/default-assets/jquey.tagsinput.min.js")}}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                language: {
                    // The UI will be English.
                    ui: 'fa',

                    // But the content will be edited in Arabic.
                    content: 'fa'
                }
            })
            .then(editor => {
                window.editor = editor;
            })
            .catch(err => {
                console.error(err.stack);
            });
    </script>
    <script>
        $(function () {
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
