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
                                <h6 class="card-title mb-0">دسته بندی ها </h6>
                                <button type="button" id="add" class="btn btn-primary waves-effect waves-light float-right mb-3" data-toggle="modal" data-animation="bounce" data-target=".bs-example-modal-lg">+ افزودن قالب جدید</button>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>عنوان</th>
                                        <th>حذف</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->title}}</td>
                                            <td>
                                                <div class="row">
                                                    <form method="post" action="{{route('template-category.destroy',$category)}}" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit"  class="fa fa-trash btn-without-outline font-30"></button>
                                                    </form>
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
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-modal="false">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0 font-16" id="myLargeModalLabel">افزودن </h5><button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route('template-category.store')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="title" class="col-form-label">عنوان </label>
                                        <input type="text" name="title" class="form-control" id="title" placeholder="عنوان قالب" required>
                                    </div>

                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">ایجاد</button>
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
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
