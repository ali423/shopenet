@extends("layouts.main")

@section('page_styles')
    <link rel="stylesheet" href="{{ asset("css/verification.css") }}">
@endsection

@section('content')

    <section class="login_area section--padding2 dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="cardify login text-center">
                        <form id="sign-up" class="d-md-block needs-validation"
                              action="{{route('user.verification.store')}}" novalidate
                              method="post">
                            @csrf
                            <div class="login--header">
                                <h3>فعال سازی حساب کاربری</h3>
                                <p>لطفا کد تایید پیامک شده به موبایل خود را وارد کنید</p>
                            </div>
                            <div class="login--form text-center">
                                <label for="code">کد تایید</label>
                                <div class="input-group">
                                    <input type="text" id="code" name="code" maxlength="4"
                                           onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                                           class="form-control text-left m-auto" placeholder="_ _ _ _"
                                           pattern="[0-9]{4}"
                                           required/>
                                    <div class="input-group-append">
                                                <span class="input-group-text"><i
                                                        class="lnr lnr-code"></i></span>
                                    </div>
                                    <div class="invalid-feedback">
                                        <i class="fas fa-exclamation-circle"> شماره موبایل نامعتبر است.</i>
                                    </div>
                                    <div class="form-input-group d-none">
                                        <input name="mobile" value="{{$mobile}}">
                                    </div>
                                </div>
                                <br>
                                <button class="btn btn--md btn--round text-center" type="submit">ورود</button>
                            </div>
                        </form>
                        <div class="my-2" id="app"></div>
                        <form action="{{route('re-send')}}" method="post">
                            @csrf
                            <div class="form-input-group d-none" >
                                <input name="mobile" value="{{$mobile}}">
                            </div>
                            <button class="btn btn-lg btn--round btn-danger text-center mt-2 invisible" id="re-send"  type="submit">ارسال مجدد کد</button>
                        </form>
                    </div>
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
    <script src="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js")}}"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
    <script src="{{asset("js/login.js")}}"></script>
    <script src="{{asset("js/verification.js")}}"></script>
{{--    <script>--}}
{{--        $('#re-send').attr("disabled", "disabled");--}}
{{--        setTimeout('enableButton()', 60000);--}}
{{--        function enableButton(){--}}
{{--            $('#re-send').removeAttr('disabled');--}}
{{--        }--}}
{{--    </script>--}}
    <script>
        setTimeout('enableButton()', 60000);
        function enableButton(){
            $('#app').addClass('d-none');
            $('#re-send').removeClass('invisible');
        }
    </script>
@endsection
