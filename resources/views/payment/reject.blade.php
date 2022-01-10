@extends("layouts.main")

@section('page_styles')
    <style>
        section {
            text-align: center;
            padding: 40px 0;
            background: #EBF0F5;
        }
        h1 {
            color: red;
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
            color: red;
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
                <i class="material-icons">X</i>
            </div>
            <h1>پرداخت ناموفق</h1>
            <p>در صورت کسر وجه از حساب شما ، وجه کسر شده تا حدکثر 72 ساعت عودت خواهد شد <br> در غیر این صورت با پشتیبانی شاپی نت تماس بگیرید </p>
            <br>
            <h3>شماره تراکنش : {{ $idpay_track_id }}</h3>
        </div>
    </section>
    <!--================================
        END PRICING AREA
    =================================-->


@endsection

@section('page_scripts')


@endsection
