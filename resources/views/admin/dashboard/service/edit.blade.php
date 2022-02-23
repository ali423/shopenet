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
                <h4 class="card-title">وییرایش سرویس</h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form method="post" action="{{route('admin.service.update',$service)}}"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">id کاربر</label>
                                    <input type="text" value="{{$service->user->id}}" class="form-control"
                                           readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">نام کاربر</label>
                                    <input type="text" class="form-control" value="{{$service->user->name}}"
                                           readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label class="col-form-label">موبایل کاربر</label>
                                    <input type="text" class="form-control" value="{{$service->user->mobile}}"
                                           readonly>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">شماره فاکتو</label>
                                    <input type="text" value="{{$service->factor->number}}" class="form-control"
                                           readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">تاریخ ایجاد</label>
                                    <input type="text" class="form-control"
                                           value="{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($service->factor->created_at))}}"
                                           readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">تاریخ پرداخت</label>
                                    <input type="text" class="form-control"
                                           value="{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($service->factor->updated_at))}}"
                                           readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">مبلغ</label>
                                    <input type="text" class="form-control"
                                           value=" ریال {{number_format($service->factor->amount)}}"
                                           readonly>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">پلن انتخابی</label>
                                    <input type="text" value="{{$service->template->title}}" class="form-control"
                                           readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">سرویس انتخابی</label>
                                    <input type="text" class="form-control" value="{{$service->plan}}"
                                           readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">تاریخ انقضا</label>
                                    <input type="text" class="form-control"
                                           value="{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($service->expire_date))}}"
                                           readonly>
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">وضعیت</label>
                                    <select type="text" name="status" class="form-control">
                                        @foreach($status as $key=>$value)
                                            <option value="{{$key}}"
                                                    @if($key == $service->status )
                                                    selected
                                                @endif
                                            >{{$value}}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">دامین</label>
                                    <input type="text" name="domain" value="{{$service->domain}}" class="form-control"
                                           >
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">صفحه ورود</label>
                                    <input type="text" name="login_page" class="form-control" value="{{$service->login_page}}"
                                           >
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">نام کاربری</label>
                                    <input type="text" name="admin_username" class="form-control" value="{{$service->admin_username}}"
                                           >
                                </div>
                                <div class="form-group col-md-3">
                                    <label class="col-form-label">کلمه عبور</label>
                                    <input type="text" class="form-control" name="admin_password" value="{{$service->admin_password}}"
                                           >
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
