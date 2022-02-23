@extends("admin.layouts.main")

@section('page_styles')
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
                        <form method="post" action="{{route('admin.template.update',$template)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="title" class="col-form-label">عنوان قالب</label>
                                    <input type="text" name="title" value="{{$template->title}}" class="form-control"
                                           id="title" placeholder="عنوان قالب" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="sort" class="col-form-label">ترتیب نمایش</label>
                                    <input type="number" name="sort" class="form-control" value="{{$template->sort}}"
                                           id="sort" placeholder="ترتیب نمایش" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="color" class="col-form-label">slug</label>
                                    <input type="text" name="slug" class="form-control" value="{{$template->slug}}"
                                           id="slug" placeholder="slug" required>
                                </div>
                            </div>

                            <div class="form-group mb-20">
                                <label for="exampleTextarea">توضیحات خلاصه</label>
                                <textarea class="form-control rounded-0 form-control-md" name="description"
                                          id="exampleTextarea" rows="3" maxlength="150" minlength="100"
                                          required>{{$template->description}}</textarea>
                            </div>

                            <div class="form-group mb-20">
                                <label for="editor">توضیحات جامع</label>
                                <textarea class="form-control required" name="about"
                                          id="editor">{{$template->about}}</textarea>
                            </div>
                            <div class="col-12 box-margin height-card">
                                <div class="card">
                                    <div class="card-body">
                                        <h6 class="card-title mb-1">کلمات کلیدی</h6>
                                        <div>
                                            <input name="key_words" id="tags" value="{{$key_words}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                @foreach($template->templateOptions as $option)
                                    @if($option->type == 'default')
                                        <div id="inputFormRow">
                                            <div class="input-group mb-3">
                                                <input type="text" name="options_default[]" value="{{$option->title}}"
                                                       class="form-control m-input"
                                                       placeholder="امکانات قالب را وارد کنید" autocomplete="off">
                                                <div class="input-group-append">
                                                    <button id="removeRow" type="button" class="btn btn-danger">حذف
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                                <div id="newRow"></div>
                                <button id="addRow" type="button" class="btn btn-info">اضافه کردن امکانات</button>
                            </div>

                            <div class="col-lg-12">
                                @foreach($template->templateOptions as $option)
                                    @if($option->type == 'professional')
                                <div id="inputFormRow_2">
                                    <div class="input-group mb-3">
                                        <input type="text" name="options_professional[]" value="{{$option->title}}" class="form-control m-input"
                                               placeholder="امکانات سفارشی قالب را وارد کنید" autocomplete="off">
                                        <div class="input-group-append">
                                            <button id="removeRow_2" type="button" class="btn btn-danger">حذف</button>
                                        </div>
                                    </div>
                                </div>
                                    @endif
                                @endforeach
                                <div id="newRow_2"></div>
                                <button id="addRow_2" type="button" class="btn btn-info">اضافه کردن امکانت سفارشی
                                </button>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="icon" class="col-form-label">آیکن قالب</label>
                                    <input type="file" class="dropify" name="icon" id="icon" data-default-file="{{ asset(str_replace('public','storage',$template->icon))}}" data-height="300"
                                           />
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="img" class="col-form-label">پیش نمایش قالب</label>
                                    <input type="file" class="dropify" name="img" data-default-file="{{ asset(str_replace('public','storage',$template->img))}}"  id="img" data-height="300"
                                           />
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">ارسال</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('page_scripts')


    <!-- dropify js -->
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
