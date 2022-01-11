@extends("layouts.main")

@section('content')


    <!--================================
        START DASHBOARD AREA
=================================-->
    <section class="cart_area section--padding2 bgcolor dir-rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product_archive added_to__cart">
                        <div class="title_area">
                            <div class="row">
                                <div class="col-md-5">
                                    <h4>جزئیات سفارش</h4>
                                </div>
                                <div class="col-md-3">
                                    <h4 class="add_info">طرح انتخاب شده </h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>قیمت </h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>حذف</h4>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="single_product clearfix">
                                    <div class="col-lg-5 col-md-7 v_middle">
                                        <div class="product__description">
                                            <img src="{{ asset(str_replace('public','storage',$template->icon))}}"
                                                 width="150 px" alt="Purchase image">
                                            <div class="short_desc">
                                                <a href="/template/{{$template->id}}">
                                                    <h4>{{$template->title}}
                                                        @if(isset($service))
                                                            (تمدید سرویس)
                                                        @endif
                                                    </h4>
                                                </a>
                                                <p>{{$template->description}}</p>
                                            </div>
                                        </div>
                                        <!-- end /.product__description -->
                                    </div>
                                    <!-- end /.col-md-5 -->

                                    <div class="col-lg-3 col-md-2 v_middle">
                                        <div class="product__additional_info">
                                            <ul>
                                                <li>
                                                    {{$plan['name']}}
                                                    @if(isset($service))
                                                        (تمدید سرویس)
                                                    @endif
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end /.product__additional_info -->
                                    </div>
                                    <!-- end /.col-md-3 -->

                                    <div class="col-lg-4 col-md-3 v_middle">
                                        <div class="product__price_download">
                                            <div class="item_price v_middle">
                                                <span> تومان{{number_format($plan['amount'])}}</span>
                                            </div>
                                            <div class="item_action v_middle">
                                                <a href="{{route('order.delete')}}" class="remove_from_cart">
                                                    <span class="lnr lnr-trash"></span>
                                                </a>
                                            </div>
                                            <!-- end /.item_action -->
                                        </div>
                                        <!-- end /.product__price_download -->
                                    </div>
                                    <!-- end /.col-md-4 -->
                                </div>
                                <!-- end /.single_product -->
                            </div>

                        </div>
                        <!-- end /.row -->

                        <div class="row">
                            <div class="col-md-6 offset-md-6">
                                <div class="cart_calculation">
                                    <div class="cart--total">
                                        <p>
                                            <span>مجموع</span> تومان{{number_format($plan['amount'])}} </p>
                                    </div>
                                    <form action="{{ route('order.confirm.store') }}" method="POST">
                                        @csrf
                                        <input type="text" class="d-none" name="confirm" value="1" readonly>
                                        @if(isset($service))
                                        <input type="text" class="d-none" name="extension" value="1" readonly>
                                        @else
                                            <input type="text" class="d-none" name="extension" value="0" readonly>
                                        @endif
                                        <button type="submit" class="btn btn--round btn--md checkout_link">ادامه به
                                            پرداخت
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <!-- end .col-md-12 -->
                        </div>
                        <!-- end .row -->
                    </div>
                    <!-- end /.product_archive2 -->
                </div>
                <!-- end .col-md-12 -->
            </div>
            <!-- end .row -->

        </div>
        <!-- end .container -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->

    <!--================================
        START FOOTER AREA
    =================================-->


@endsection

