@extends("layouts.main")

@section('content')


    <!--================================
            START 404 AREA
    =================================-->
    <section class="four_o_four_area section--padding2 dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <img src="{{asset('images/new/404.png')}}" alt="404 page">
                    <div class="not_found">
                        <h3> صفحه یافت نشد
                             
                        </h3>
                        <a href="{{route('home')}}" class="btn btn--round btn--default">بازگشت به خانه</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
            END 404 AREA
    =================================-->




@endsection


