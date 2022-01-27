@extends("dashboard.main")

@section('dashboard-content')
<div class="col">
    <div class="dashboard_contents">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar clearfix filter-bar2">
                        <br>
                        @if(!isset($service) || $service== null)
                        <div class="dashboard__title pull-right">
                            <h3>شما در حال حاضر سرویس ثبت شده ندارید</h3>
                            <br>
                        </div>
                        @else
                        <div class="dashboard__title pull-right">
                            <h3>سرویس شما</h3>
                            @if($service->status=='activating')
                            <p>(وضعیت: <span>درحال آماده سازی</span>)</p>
                            @elseif($service->status=='active')
                            <p>(وضعیت: <span>فعال</span>)</p>
                            @elseif($service->status=='inactive')
                            <p>(وضعیت: <span>غیرفعال</span>)</p>
                            @elseif($service->status=='expired')
                            <p>(وضعیت: <span>منقضی شده</span>)</p>
                            @endif
                            <br>
                        </div>
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="dash-sub filter-bar clearfix filter-bar2 p-4">
                        <h4 class="text-white">قالب</h4>
                        <br>
                        <div class="row">
                            <div class="col-lg-2">
                                <img src="{{ asset(str_replace('public','storage',$service->template->icon))}}" width="150 px" alt="Purchase image">
                            </div>
                            <div class="col-lg-10">
                                <h4 class="text-white">{{$service->template->title}}</h4>
                                <p class="text-white">{{$service->template->description}}</p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class=" dash-sub1  filter-bar clearfix filter-bar2 p-4">
                        <div class="row">
                            <div class="col">
                                <h4 class="text-white">مشخصات</h4>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <ul>
                                            <li>
                                                <p class="text-white"><span>تاریخ سر رسید: </span>{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', strtotime($service->expire_date))}}</p>
                                            </li>
                                            <li>
                                                @if($service->login_page == null)
                                                    <p class="text-white"><span>صفحه مدیریت:</span>  <span> درحال ثبت</span></p>
                                                @else
                                                    <p class="text-white"><span>صفحه مدیریت:</span> <a href="{{$service->login_page}}" class="text-white">ورود</a></p>
                                                @endif
                                            </li>
                                            <li>
                                                @php
                                                    $obj=new \App\Http\Controllers\Controller();
                                                    $plan=$obj->getPlanData($service->plan);
                                                @endphp
                                                <p class="text-white"><span>پلن :</span>{{$plan['name']}}</p>
                                            </li>
                                            <li>
                                                @if($service->domain == null)
                                                <p class="text-white"><span>دامنه:</span>  <span> درحال ثبت</span></p>
                                                @else
                                                <p class="text-white"><span>دامنه:</span> <a href="https://{{$service->domain}}/" class="text-white">{{$service->domain}}</a></p>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <div class="col-md-6">
                    <div class="dash-sub2  filter-bar clearfix filter-bar2 p-4">
                        <div class="row">
                            <div class="col">
                                <h4 class="text-white">صفحه مدیریت</h4>
                                <br>
                                <div class="row" style="height: 150px">
                                    <div class="col-4">
                                        @if($service->login_page == null)
                                            <a href="" class="dash-enter-disabled">درحال ثبت</a>
                                        @else
                                            <a href="{{$service->login_page}}" class="dash-enter shadow"><span></span><span></span><span></span><span></span>ورود </a>
                                        @endif
                                    </div>
                                    <div class="col-6">
                                        <div class="h-100 d-flex justify-content-center align-items-center">
                                            <div>
                                                @if(isset($service->admin_username) && isset($service->admin_password))
                                                <h6 class="text-white mb-2">نام کاربری: <span>{{$service->admin_username}}</span></h6>
                                                <h6 class="text-white mb-2">کلمه عبور: <span>{{$service->admin_password}}</span></h6>
                                                @endif
                                                <h6 class="text-white mb-2">مدت زمان اعتبار: <span>{{$days=\Carbon\Carbon::parse($service->expire_date)->diffInDays(\Carbon\Carbon::now())}} روز </span></h6>
                                                @if($days >= 14)
                                                <a href="{{ route('service.extension',$service) }}" class="text-white" ><u> &#x3e; تمدید سرویس</u></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            @endif
            <!-- end /.product_archive2 -->
        </div>
        <!-- end /.container -->
    </div>
</div>
@endsection

