@extends("dashboard.main")

@section('dashboard-content')

    @include('layouts.errors')


        <div class="col-md-12">
            <div class="invoice">
                <div class="invoice__head">
                    <div class="invoice_logo">
                        <p>
                            <span>تاریخ صورت حساب </span>{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($factor->created_at))}}</p>
                        <p>
                            <span>به نام </span>{{$factor->user->name}}</p>
                    </div>

                    <div class="info">
                        <h4>جزئیات صورت حساب </h4>
                        <p>شماره فاکتور: {{$factor->number}}</p>
                        <p class="status">
                        <div class="product__price_download">
                            @if($factor->status=='paid')
                            <div class="item_price v_middle">
                                <span>وضعیت پرداخت:</span>
                                <span>موفق</span>
                            </div>
                            @elseif($factor->status=='failed')
                            <div class="item_price v_middle">
                                <span>وضعیت پرداخت:</span>
                                <span>ناموفق</span>
                            </div>
                            @elseif($factor->status=='rejected')
                            <div class="item_price v_middle">
                                <span>وضعیت پرداخت:</span>
                                <span>ردشده</span>
                            </div>
                            @elseif($factor->status=='awaiting_payment')
                            <div class="item_price v_middle">
                                <span>وضعیت پرداخت:</span>
                                <span>درانتظارپرداخت</span>
                            </div>
                            @endif
                        </div>
                      </p>
                    </div>


                <div class="invoice__detail">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>پلن</th>
                                <th>قالب </th>
                                <th>مبلغ </th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                @php
                                    $obj=new \App\Http\Controllers\Controller();
                                      $plan=$obj->getPlanData($factor->plan);
                                @endphp
                                <td class="author">{{$plan['name']}}</td>
                                <td class="detail">
                                    <a href="/template/{{$factor->template->id}}">{{$factor->template->title}} </a>
                                </td>
                                <td> {{$factor->amount}} تومان </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="pricing_info">
                        <p class="bold">مجموع :  {{$factor->amount}} تومان </p>
                    </div>
                    @if($factor->status=='awaiting_payment')
                    <form action="{{ route('factor.pay',$factor) }}" class="setting_form" method="POST" >
                        @csrf
                        <div class="col-md-12 ltr">
                            <button type="submit" class="btn btn--round btn--default ">پرداخت</button>
                        </div>
                    </form>
                    @endif
                </div>
                <!-- end /.invoice_detail -->
                </div>
            </div>
            <!-- end /.invoice -->


        </div>
        <!-- end /.row -->

@endsection

