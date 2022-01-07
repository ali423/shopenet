@extends("layouts.main")

@section('content')

    @include('layouts.errors')



    <section class="login_area section--padding2 dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">

                    <form id="sign-up" class="d-md-block needs-validation" action="{{route('user.login.name')}}" novalidate
                          method="post">
                        @csrf
                        <div class="cardify login">
                            <div class="login--header">
                                <h3>ورود به حساب کاربری</h3>
                                <p>نام و نام خانوادگی خود را وارد کنید</p>
                            </div>
                            <div class="login--form text-center">
                                <label for="mobile">نام و نام خانوادگی</label>
                                <div class="input-group">
                                    <input type="text" id="name" name="name" class="form-control text-right m-auto" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="lnr lnr-user"></i></span>
                                    </div>
                                </div>
                                <div class="form-input-group d-none">
                                    <input name="token" value="{{$token}}">
                                </div>
                                <br>
                                <button class="btn btn--md btn--round text-center" type="submit">ورود</button>
                            </div>
                            <!-- end .login--form -->
                        </div>
                        <!-- end .cardify -->
                    </form>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->


@endsection
@section('page_scripts')

    <script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js")}}"></script>
    <script src="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js")}}" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="{{asset("js/login.js")}}"></script>

@endsection

