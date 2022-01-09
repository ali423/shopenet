@extends("dashboard.main")

@section('dashboard-content')
    <div class="dashboard_contents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar clearfix filter-bar2">
                        <br>
                        @if(count($services) == 0)
                            <div class="col-md-12 text-center">
                                        <h2>شما در حال حاظر سرویس ثبت شده ندارید</h2>
                            </div>
                        @else
                        <div class="dashboard__title pull-right">
                            <h3>سرویس های شما </h3>
                            <br>

                        </div>

                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="product_archive">
                <div class="title_area">
                    <div class="row">

                        <div class="col-md-5">
                            <h4>قالب  </h4>
                        </div>
                        <div class="col-md-3">
                            <h4 class="add_info">مشخصات</h4>
                        </div>
                        <div class="col-md-2">
                            <h4>وضعیت </h4>
                        </div>
                        <div class="col-md-2">
                            <h4>صفحه مدیریت </h4>
                        </div>
                    </div>
                </div>

                <div class="row">
                    @foreach($services as $service)
                    <div class="col-md-12">
                        <div class="single_product clearfix">
                            <div class="row">
                                <div class="col-lg-5 col-md-5">
                                    <div class="product__description">
                                        <img src="{{ asset(str_replace('public','storage',$service->template->icon))}}" width="150 px" alt="Purchase image">
                                        <div class="short_desc">
                                            <h4>{{$service->template->title}}</h4>
                                            <p>{{$service->template->description}}</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.col-md-5 -->

                                <div class="col-lg-3 col-md-3 col-6 xs-fullwidth">
                                    <div class="product__additional_info">
                                        <ul>
                                            <li>
                                                <p>
                                                    <span>تاریخ سر رسید: </span>{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($service->expire_date))}}</p>
                                            </li>
                                            <li class="license">
                                                @if($service->login_page == null)
                                                    <span>صفحه مدیریت:</span>  <span> درحال ثبت</span>
                                                @else
                                                    <p>
                                                        <span>صفحه مدیریت:</span> <a href="{{$service->login_page}}">ورود</a></p>
                                                @endif
                                            </li>
                                            <li>
                                                @php
                                                    $obj=new \App\Http\Controllers\Controller();
                                                      $plan=$obj->getPlanData($service->plan);
                                                @endphp
                                                <p>
                                                    <span>پلن :</span>{{$plan['name']}}</p>
                                            </li>
                                            <li>
                                                @if($service->domain == null)
                                                    <span>دامنه:</span>  <span> درحال ثبت</span>
                                                @else
                                                        <span>دامنه:</span> <a href="https://{{$service->domain}}/">{{$service->domain}}</a>
                                                @endif

                                            </li>
                                        </ul>
                                    </div>
                                    <!-- end /.product__additional_info -->
                                </div>
                                <!-- end /.col-md-3 -->

                                <div class="col-lg-4 col-md-4 col-6 xs-fullwidth">
                                    <div class="product__price_download">
                                        @if($service->status=='activating')
                                            <div class="item_price v_middle">
                                                <span>درحال آماده سازی</span>
                                            </div>
                                        @elseif($service->status=='active')
                                            <div class="item_price v_middle">
                                                <span>فعال</span>
                                            </div>
                                        @elseif($service->status=='inactive')
                                            <div class="item_price v_middle">
                                                <span>غیر فعال</span>
                                            </div>
                                        @elseif($service->status=='expired')
                                            <div class="item_price v_middle">
                                                <span>منقضی شده </span>
                                            </div>
                                        @endif

                                        <div class="item_action v_middle">
                                            @if($service->login_page == null)
                                                <a  class="btn btn--md btn--round disabled">ورود </a>
                                            @else
                                                <p>
                                                <a href="{{$service->login_page}}" class="btn btn--md btn--round">ورود </a>
                                            @endif

                                        </div>
                                        <!-- end /.item_action -->
                                    </div>
                                    <!-- end /.product__price_download -->
                                </div>
                                <!-- end /.col-md-4 -->
                            </div>
                        </div>
                        <!-- end /.single_product -->
                    </div>
                    @endforeach
                    @endif
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.product_archive2 -->
        </div>
        <!-- end /.container -->
    </div>
@endsection

