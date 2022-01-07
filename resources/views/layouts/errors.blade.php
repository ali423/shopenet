<ul id="error" class="list-unstyled">
    @foreach($errors->all() as $error)
        <li>
            <div class="myAlert-top alert alert-danger alert-dismissible fade show" role="alert">
                {{$error}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </li>
    @endforeach
</ul>

@if(Session::get('successful')!=null)

<ul id="error" class="list-unstyled fixed-top ">

        <li>
            <div class="myAlert-top alert alert-success alert-dismissible fade show" role="alert">
                {{Session::pull('successful')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </li>

</ul>
@endif
{{--    <div class="container">--}}
{{--        <div class="row" id="error">--}}
{{--            <div class="col-md-8 offset-md-2">--}}
{{--                <div class="shortcode_modules">--}}
{{--                    <div class="modules__title">--}}
{{--                    </div>--}}
{{--                    @if(Session::get('successful')!=null)--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            <span class="alert_icon lnr lnr-checkmark-circle"></span>--}}
{{--                            <strong>انجام شد </strong> {{Session::pull('successful')}}--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                <span class="lnr lnr-cross" aria-hidden="true"></span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    @foreach($errors->all() as $error)--}}
{{--                        <div class="alert alert-danger" role="alert">--}}
{{--                            <span class="alert_icon lnr lnr-warning"></span>--}}
{{--                            <strong>خطا</strong>{{$error}}--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                <span class="lnr lnr-cross" aria-hidden="true"></span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <!-- end .col-md-6 -->--}}
{{--        </div>--}}
{{--        <!-- end .row -->--}}
{{--    </div>--}}
