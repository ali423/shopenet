@extends("layouts.main")

@section('content')

    @include('layouts.errors')

    <!--================================
        START DASHBOARD AREA
=================================-->
    <section class="dashboard-area dir-rtl">
        <div class="dashboard_menu_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="dashboard_menu">
                            <li class="active">
                                <a href="{{route('dashboard')}}">
                                    <span class="lnr lnr-home"></span>داشبورد </a>
                            </li>
                            <li>
                                <a href="{{route('factor.index')}}">
                                    <span class="lnr lnr-list"></span>فاکتور ها
                                     
                                </a>
                            </li>
                            <li>
                                <a href="{{url('profile')}}">
                                    <span class="lnr lnr-user"></span>پروفایل</a>
                            </li>
                            <li>
                                <a href="{{ route('user.logout') }}">
                                    <span class="lnr lnr-exit"></span>خروج</a>
                            </li>
                        </ul>
                        <!-- end /.dashboard_menu -->
                    </div>
                    <!-- end /.col-md-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->

        <div class="dashboard_contents dir-rtl">
            <div class="container">

                <!-- end /.row -->

                <div class="row">
                   @yield('dashboard-content')
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.dashboard_menu_area -->
    </section>
    <!--================================
            END DASHBOARD AREA
    =================================-->

@endsection

