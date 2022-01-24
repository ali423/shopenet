@extends("dashboard.main")

@section('dashboard-content')




    <div class="col-md-12">
        <div class="invoice">
            <div class="invoice__head">
                <div class="invoice_logo">
                    <p>
                        <span>تاریخ صورت حساب </span>{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($factor->created_at))}}
                    </p>
                    <p>
                        <span>به نام </span>{{$factor->user->name}}</p>
                    @if(isset($factor->extension_service_id))
                        <span>تمدید سرویس</span>
                    @endif
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
                        @elseif($factor->status=='canceled')
                            <div class="item_price v_middle">
                                <span>وضعیت پرداخت:</span>
                                <span>انصراف</span>
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
                                <th>قالب</th>
                                <th>مبلغ</th>
                            </tr>
                            </thead>


                            <tbody>
                            <tr>
                                @php
                                    $obj=new \App\Http\Controllers\Controller();
                                      $plan=$obj->getPlanData($factor->plan);
                                @endphp
                                <td class="author">{{$plan['name']}}
                                    @if(isset($factor->extension_service_id))
                                        (تمدید)
                                    @endif
                                </td>
                                <td class="detail">
                                    <a href="/template/{{$factor->template->id}}">{{$factor->template->title}}
                                        @if(isset($factor->extension_service_id))
                                            (تمدید)
                                        @endif
                                    </a>
                                </td>
                                <td> {{$factor->amount}} تومان</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="pricing_info">
{{--                        <p>تخفیف : 0 تومان </p>--}}
{{--                        <p class="bold">مجموع : 30 تومان</p>--}}
                        <p class="bold">مجموع : {{$factor->amount}} تومان </p>
                        @if($factor->status=='awaiting_payment')
                            <form action="{{ route('factor.pay',$factor) }}" class="setting_form d-inline" method="POST">
                                @csrf
                            <div class="col-lg-8">
                                <div class="cardify faq_module">
                            <div class="faqs">
                                <div class="panel-group accordion" role="tablist" id="accordion">
                            <div class="panel accordion__single text-center" id="panel-one">
                                <div class="single_acco_title">
                                    <h4>
                                        <a data-toggle="collapse" href="#collapse1" class="collapsed" aria-expanded="false" data-target="#collapse1" aria-controls="collapse1">
                                            <span>کد تخفیف دارید ؟</span>
                                            <i class="lnr lnr-chevron-down indicator"></i>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse" aria-labelledby="panel-one" data-parent="#accordion">
                                    <br>
                                    <div class="row col-md-12 ltr">
                                        <div class="col-md-6">
                                            <input class="relative-field" id="discount" name="discount" type="text" placeholder="کد تخفیف ">
                                        </div>
                                        <div class="col-md-6">
                                       <a href="#" id="discount_btn" onclick="return false;" class="btn btn--icon btn-sm btn--round btn-info ">
                                                ثبت کد
                                            </a>
                                        </div>
                                    </div>
                                    <label id="discount_res"></label>
                                </div>
                            </div>
                                </div>
                            </div>

                    </div>
                        <button type="submit" class="btn btn--round btn--default ">پرداخت</button>
                    </form>
                    <form action="{{ route('factor.cancel',$factor) }}" class="setting_form d-inline" method="POST">
                        @csrf
                        <button type="submit" class="btn btn--round btn-danger p-3 px-4">انصراف</button>
                    </form>
                    @else
                </div>
                @endif
            </div>
            <!-- end /.invoice_detail -->
        </div>
    </div>
    <!-- end /.invoice -->


    </div>
    <!-- end /.row -->

@endsection

@section('page_scripts')
    <script>
        var total_share = 0;
        $('#discount_btn').on('click', function () {
            var token = $("input[name='_token']").val();
            var discount =  $('#discount').val();
            $.ajax({
                url: "/check-discount",
                type: "POST",
                dataType: "json",
                data: {
                    "_token": token,
                    "discount": discount,
                },
                success: function (result) {
                    if (result['success'] == false){
                        $('#discount_res').html(result['message']).removeClass('text-success').addClass('text-danger')
                    }else {
                        $('#discount_res').html(result['message']).removeClass('text-danger').addClass('text-success')
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            })
        })
    </script>
@endsection
