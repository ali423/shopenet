@extends("dashboard.main")

@section('dashboard-content')
    <div class="dashboard_contents col-md-12">
        <div class="container">
            <form action="{{route('user.update',$user)}}"  method="post" class="setting_form">
                @csrf
                @method('PATCH')
                <div class="row">
                    <div class="col-md-12">
                        <div class="information_module">
                            <a class="toggle_title">
                                <h4>ویرایش اطلاعات</h4>
                            </a>

                            <div class="information__set toggle_module">
                                <div class="information_wrapper form--fields">
                                    <div class="form-group">
                                        <label for="fname">نام نام خانوادگی</label>
                                        <input type="text" id="name" name="name" class="text_field" placeholder="نام نام خانوادگی" value="{{$user->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile">موبایل</label>
                                        <input type="text" id="mobile" name="mobile" class="text_field" placeholder="موبایل" value="{{$user->mobile}}" readonly>
                                    </div>
                                </div>
                                <!-- end /.information_wrapper -->
                            </div>
                            <!-- end /.information__set -->
                        </div>
                        <!-- end /.information_module -->
                        <div class="dashboard_setting_btn">
                     <button type="submit" class="btn btn--round btn--md">ویرایش </button>
                        </div>
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </form>
        </div>
        <!-- end /.container -->
    </div>
@endsection

