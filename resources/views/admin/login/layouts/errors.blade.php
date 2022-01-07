<ul id="error" class="list-unstyled fixed-top">
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
