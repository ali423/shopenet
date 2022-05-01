@if(!isset($own_id) || $own_id!=$template->id)
<div class="col-lg-4 col-md-6">
    <!-- start .single-product -->
    <div class="product product--card ">
        <div class="product__thumbnail">
            <img src="{{ asset(str_replace('public','storage',$template->icon))}}"
                 alt="Product Image" class="template-thumbnail">
            <div class="prod_btn">
                <a href="/template/{{$template->id}}" class="transparent btn--sm btn--round">اطلاعات
                    بیشتر</a>
                <a href="/preview/{{$template->slug}}" class="transparent btn--sm btn--round">پیش نمایش</a>
            </div>
            <!-- end /.prod_btn -->
        </div>
        <!-- end /.product__thumbnail -->

        <div class="product-desc">
            <a href="/template/{{$template->id}}" class="product_title">
                <h4>{{$template->title}}</h4>
            </a>
            <p>{{$template->description}}</p>
        </div>

    </div>
    <!-- end /.single-product -->
</div>
@endif
