@extends("layouts.main")

@section('content')

    <section class="section--padding2 bgcolor dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="shortcode_modules">
                        <div class="modules__title">
                            <h3>درخواست قالب جدید</h3>
                        </div>
                        <div class="modules__content">
                            <div class="row text-center">
                                <div class="col-md-12">
                                    <form class="form" action="{{route('order.template')}}" method="POST">
                                        @csrf
                                        <div class="row col-md-12 rtl">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="name">نام نام خانوادگی </label>
                                                    <div class="input_with_icon">
                                                        <input id="name" name="name" type="text" class=""
                                                               placeholder="نام نام خانوادگی" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="email">ایمیل(اختیاری)</label>
                                                    <div class="input_with_icon">
                                                        <input id="email" name="email" type="email" class=""
                                                               placeholder="test@test.com">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="mobile">شماره موبایل</label>
                                                    <div class="input_with_icon">
                                                        <input id="mobile" name="mobile" type="text" class=""
                                                               placeholder="**** *** **09" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row col-md-12">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="market">حوزه فعالیت</label>
                                                        <div class="input_with_icon">
                                                            <input id="market" name="market" type="text" class=""
                                                                   placeholder="حوزه فعالیت" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="title">عنوان قالب درخواستی</label>
                                                        <div class="input_with_icon">
                                                            <input id="title" name="title" type="text" class=""
                                                                   placeholder="عنوان" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="sample">آدرس صفحه ی مشابه (اختیاری)</label>
                                                        <div class="input_with_icon">
                                                            <input id="sample" name="sample" type="text" class=""
                                                                   placeholder="www.shopenet.ir">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row col-md-12">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description">جزئیات</label>
                                                        <textarea id="description" name="description"
                                                                  required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-lg btn-success" type="submit">ثبت درخواست</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end .col-md-6 -->
            </div>
            <!-- end .row -->
        </div>
        <!-- end .container -->
    </section>

@endsection


