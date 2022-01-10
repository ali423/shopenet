@extends("layouts.main")

@section('page_styles')
    <style>
        section {
            text-align: center;
            padding: 40px 0;
            background: #EBF0F5;
        }
        h1 {
            color: #88B04B;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
        }
        h3 {
            color: black;
            font-size: 20px;
            margin-bottom: 10px;
        }
        p {
            color: #404F5E;
            font-size:20px;
            margin: 0;
        }
        i {
            color: #9ABC66;
            font-size: 100px;
            line-height: 200px;
            margin-left:-15px;
        }
        .card {
            background: white;
            padding: 60px;
            border-radius: 4px;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
        }
    </style>
@endsection

@section('content')



    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area dir-rtl">
                <div class="card">
                    <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
                        <i class="checkmark">✓</i>
                    </div>
                    <h1>سفارش شما ثبت شد</h1>
                    <p>وب سایت شما در حال آماده سازی است. <br/> همکاران ما برای تکمیل مراحل با شما تماس میگیرند. </p>
                    <br>
                    <h3>شماره سفارش : {{ $factor_number }}</h3>
                </div>
    </section>
    <!--================================
        END PRICING AREA
    =================================-->


@endsection

@section('page_scripts')


@endsection
