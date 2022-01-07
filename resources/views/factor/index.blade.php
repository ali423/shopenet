@extends("dashboard.main")

@section('dashboard-content')

        <div class="col-md-12">
            <div class="statement_table table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>تاریخ </th>
                        <th>کد سفارش </th>
                        <th>پلن</th>
                        <th>قالب </th>
                        <th>وضعیت پرداخت</th>
                        <th>مبلغ</th>
                        <th>جزییات</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($factors as $factor)
                    <tr>
                        <td>{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($factor->created_at))}}</td>
                        <td>{{$factor->number}}</td>
                        @php
                            $obj=new \App\Http\Controllers\Controller();
                              $plan=$obj->getPlanData($factor->plan);
                        @endphp
                        <td class="author">{{$plan['name']}}</td>
                        <td class="detail">
                            <a href="/template/{{$factor->template->id}}">{{$factor->template->title}} </a>
                        </td>
                        <td class="type">
                            @if($factor->status=='paid')
                                <span class="sale">موفق</span>
                            @elseif($factor->status=='failed')
                                <span class="withdrawal">ناموفق</span>
                            @elseif($factor->status=='rejected')
                                    <span class="withdrawal">ردشده</span>
                            @elseif($factor->status=='awaiting_payment')
                                <span class="credited">در انتضار پرداخت</span>
                            @endif
                        </td>
                        <td>{{number_format($factor->amount)}} تومان </td>
                        <td class="action">
                            <a href="{{route('factor.show',$factor)}}">نمایش </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


@endsection

