@extends('login.layouts.main')


@section('content')
    @include('layouts.errors')
    <div class="main-content- h-100vh">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-md-12 col-lg-12">
<di id="verification">

<div class="container">
    <div class="text-center d-none d-sm-block">
        <h2 class="p-3">exonyx</h2>
    </div>
    <div class="verification-card">
        <div class="row">
            <div class="col-md-6 border-left">
                <form action="/verificationStore" class="needs-validation" novalidate method="post">
                    @csrf
                    <header class="text-center pt-2">
                        <span>کد پیامک شده را وارد نمایید</span>
                    </header>
                    <div class="form-input-group">
                        <label for="">کد تایید</label>
                        <input class="text-center form-control" name="token" type="text" maxlength="4"
                               onkeypress='return event.charCode >= 48 && event.charCode <= 57'
                               class="form-control text-left m-auto" placeholder="_ _ _ _" pattern="[0-9]{4}"
                               required/>
                    </div>

                    <button type="submit" class="btn-submit py-2">فعال سازی</button>
                </form>
            </div>
            <div class="col-md-6">
                <header class="text-center pt-2">
                    <span>ارسال مجدد کد فعال سازی</span>
                </header>
                <li>در صورتی که کد فعال سازی را تا یک دقیقه دیگر دریافت نکردید روی ارسال مجدد کد فعال سازی کلیک
                    کنید.
                </li>
                <div class="progress blue">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                    <span class="progress-right">
                            <span class="progress-bar"></span>
                        </span>
                    <div class="progress-value">60</div>
                </div>
                <form action="/resend" method="post">
                    @csrf
                    <div class="form-input-group">
                        <input class="d-none" readonly name="mobile" value="{{$mobile}}">
                    </div>
                    <button type="submit" class="resend">ارسال مجدد کد فعال سازی</button>
                </form>
                {{--                <a href="/resend" class="resend">ارسال مجدد کد فعال سازی</a>--}}
            </div>
        </div>
    </div>
</div>

            </div>
        </div>
    </div>
    </div>




@endsection



