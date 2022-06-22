@extends('frontend.master')
@section('title')
{{$product->title}}
@endsection
@section('content')
<div class="breadcrumb-wrapper">
    <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
        <a href="{{route('FrontendView')}}" title="Back to the frontpage">Home</a>
        <span aria-hidden="true">&rsaquo;</span>
        <span>Products Detail Page</span>
    </nav>
    <h1 class="section-header__title">Products Detail Page</h1>
</div>
<div class="wrapper">
    <div class="grid--rev">
        <div class="grid__item">
            <div itemscope="" itemtype="http://schema.org/Product">
                <div class="product-single">
                    <div class="grid__item large--one-half text-center">
                        <div class="product-single__photos" id="ProductPhoto">
                            @foreach ($product->Gallery->take(1) as $gallery)
                                
                            <img src="{{asset('product_image/'.$gallery->product_image)}}" alt="{{$product->title}}" id="ProductPhotoImg" data-image-id="7500291971">
                            @endforeach
                        </div>
                        <ul class="product-single__thumbnails grid-uniform" id="ProductThumbs">
                            @foreach ($product->Gallery as $gallery)
                            <li class="thumb__element">
                                <a href="{{asset('product_image/'.$gallery->product_image)}}" class="product-single__thumbnail">
                                    <img src="{{asset('product_image/'.$gallery->product_image)}}" alt="{{$product->title}}" >
                                </a>
                            </li>
                            @endforeach
									
                        </ul>
                    </div>
                    <div class="grid__item large--one-half">
                        <div class="product-info-left grid__item five-eighths">
                            <h1 itemprop="name">{{$product->title}}</h1>
                            <div class="rating-star">
                                <span class="spr-badge" id="spr_badge_3008529923" data-rating="0.0">
                                <span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
                                <span class="spr-badge-caption">
                                No reviews </span>
                                </span>
                            </div>
                            <div class="product-description" itemprop="description">
                                <h4>Product Summary</h4>
                                {{$product->product_summary}}
                            </div>
                            <div class="product-vendor">
                                Category: <b>{{$product->Category->title}}</b>
                            </div>
                            <div class="product-vendor">
                                Brand: <b><img src="{{asset('brand_img/'.$product->Brand->thumbnail)}}" alt="{{$product->Brand->title}}"> </b>
                            </div>
                            <div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                                <meta itemprop="priceCurrency" content="USD">
                                <link itemprop="availability" href="http://schema.org/InStock">
                                <div class="product-action ">
                                    <form action="" method="POST"  id="AddToCartForm" class="form-vertical">
                                        @csrf
                                     @if ($product->sale_price != '')
                                     <span class="visually-hidden">Regular price</span>
                                     <span id="ProductPrice" class="" itemprop="price"><span class="money" data-currency-usd="$89.00 USD" data-currency="USD">${{$product->sale_price}} USD</span></span>
                                     
                                     @else
                                     <span class="visually-hidden">Regular price</span>
                                     <span id="ProductPrice" class="" itemprop="price"><span class="money" data-currency-usd="$89.00 USD" data-currency="USD">${{$product->regular_price}} USD</span></span>
                                         
                                     @endif
                                        <div class="qty_select">
                                            <label for="Quantity" class="quantity-selector">Quantity</label>
                                            <div class="js-qty">
                                                <button type="button" class="js-qty__adjust js-qty__adjust--minus icon-fallback-text" data-id="" data-qty="0">
                                                <span class="icon icon-minus" aria-hidden="true"></span>
                                                <span class="fallback-text">−</span>
                                                </button>
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <input type="hidden" name="brand_id" value="{{$product->brand_id}}">
                                                <input type="text" class="js-qty__num" value="1" min="1" data-id="" aria-label="quantity" pattern="[0-9]*" name="quantity" id="Quantity">
                                                <button type="button" class="js-qty__adjust js-qty__adjust--plus icon-fallback-text" data-id="" data-qty="11">
                                                <span class="icon icon-plus" aria-hidden="true"></span>
                                                <span class="fallback-text">+</span>
                                                </button>
                                            </div>
                                        </div>
                                        <button type="submit"  id="AddToCart" class="btn">
                                        <span id="AddToCartText">Buy Now</span>
                                        </button>
                                    </form>
                                    <div class="add-to-wishlist">
                                        <span class="non-user" data-toggle="tooltip" data-placement="right" title="To use the Wish-list, you must Login or Register"><a href="https://demo.tadathemes.com/account/login"><i class="fa fa-heart"></i>Add to Wishlist</a></span>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-social">
                                <div class="social-sharing">
                                    <a target="_blank" href="#" class="share-facebook">
                                    <span class="icon icon-facebook" aria-hidden="true"></span>
                                    <span class="share-title">Share</span>
                                    <span class="share-count">0</span>
                                    </a>
                                    <a target="_blank" href="#" class="share-twitter">
                                    <span class="icon icon-twitter" aria-hidden="true"></span>
                                    <span class="share-title">Tweet</span>
                                    <span class="share-count">0</span>
                                    </a>
                                    <a target="_blank" href="#" class="share-pinterest">
                                    <span class="icon icon-pinterest" aria-hidden="true"></span>
                                    <span class="share-title">Pin it</span>
                                    <span class="share-count">0</span>
                                    </a>
                                    <a target="_blank" href="#" class="share-fancy">
                                    <span class="icon icon-fancy" aria-hidden="true"></span>
                                    <span class="share-title">Fancy</span>
                                    </a>
                                    <a target="_blank" href="#" class="share-google">
                                    <!-- Cannot get Google+ share count with JS yet -->
                                    <span class="icon icon-google" aria-hidden="true"></span>
                                    <span class="share-count">+1</span>
                                    </a>
                                    <a target="_blank" href="#" class="share-email">
                                    <i class="fa fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="grid__item product-info-right three-eighths">
                            <div class="product-extrainfo">
                                <ul>
                                    <li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-shield fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">guarantee<span class="sub">Quality checked</span></span></li>
                                    <li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-truck fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">Free Shipping<span class="sub">Free on all products</span></span></li>
                                    <li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-gift fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">Special gift cards<span class="sub">Special gift cards</span></span></li>
                                    <li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-reply fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">Free return<span class="sub"> Within 7 days</span></span></li>
                                    <li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-tty fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">Consultancy<span class="sub">Lifetime 24/7/356</span></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="next-prev-button">
                        </div>
                    </div>
                </div>
                <div class="product-information">
                    <div id="tabs-information">
                        <ul class="nav nav-tabs tabs-left sideways">
                            <li class="description"><a href="#desc" data-toggle="tab" class="active">Description</a></li>
                        </ul>
                        <div class="tab-panel active" id="desc">
                            <p>
                                {{$product->product_description}}   
                            </p>
                        </div>
                      
                    </div>
                    <script>
            $('#tabs-information').easytabs({animationSpeed: 'fast', updateHash: false});
          </script>
          @if ($similar_product->count() != 0)
              
          <div id="product-additional-information">
              <div class="related-products">
                  <h1 class="feature-title"><span>You may also like</span></h1>
                  <ul class="related-products-items grid-uniform">
                      @forelse ($similar_product as $product)
                          
                      <li class="realted-element">
                        <div class="grid__item">
                            <div class="grid__item_wrapper">
                                <div class="grid__image product-image">
                                    <a href="{{route('ProductView',$product->slug)}}">
                                        <img lazy='loading' src="{{asset('thumbnail_img/'.$product->thumbnail_img)}}" alt="Demo Product Sample">
                                    </a>
                                    <div class="quickview">
                                        <div class="product-ajax-cart hidden-xs hidden-sm">
                                            <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                <a href="#quick-shop-modal{{$product->id}}" class="btn quick_shop">
                                                    <i class="fa fa-eye" title="Quick View"></i>																
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="rating-star">
                                    <span class="spr-badge" id="spr_badge_3008529987" data-rating="0.0">
                                        <span class="spr-starrating spr-badge-starrating">
                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                            <i class="spr-icon spr-icon-star-empty" style=""></i>
                                        </span>
                                        <span class="spr-badge-caption">No reviews </span>
                                    </span>
                                </div>
                                <p class="h6 product-title">
                                    <a href="{{route('ProductView',$product->slug)}}">{{$product->title}}</a>
                                </p>
                                <p class="product-price">
                                    @if ($product->sale_price != '')
                                        
                                    <strong>On Sale</strong>
                                    <span class="money" data-currency-usd="$19.99">${{$product->sale_price}}</span>
                                    @else
                                    <strong>On Sale</strong>
                                    <span class="money" data-currency-usd="$19.99">${{$product->regular_price}}</span>
                                    @endif
                                    @if ($product->sale_price != '')
                                    <span class="visually-hidden">Regular price</span>
                                    <s><span class="money" data-currency-usd="$24.99">${{$product->regular_price}}</span></s>
                                    @endif
                                </p>
                                <ul class="action-button">
                                    <li class="add-to-cart-form">						
                                            <div class="effect-ajax-cart">
                                                <input type="hidden" name="quantity" value="1">
                                                <a href="{{route('ProductView',$product->slug)}}" class="btn btn-1 add-to-cart" title="Buy Now">Buy Now</a>
                                            
                                            </div>
                                    </li>
                                    <li class="wishlist">
                                        <a class="wish-list btn" href="wish-list.html"><i class="fa fa-heart" title="Wishlist"></i></a>
                                    </li>
                                    <li class="email">
                                        <a target="_blank" class="btn email-to-friend" href="#"><i class="fa fa-envelope" title="Email to friend"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div> 
                        
<div id="quick-shop-modal{{$product->id}}" class="modal quick-shop" style="display:none;">
<div class="modal-dialog fadeIn">
<div class="modal-content">
    <div class="modal-body">
        <div class="quick-shop-modal-bg">
        </div>
        <div class="grid__item one-half qs-product-image">
            <div id="quick-shop-image" class="product-image-wrapper">
                <div id="featuted-image" class="main-image featured">
                    @forelse ($product->Gallery->take(1) as $gallery)
                        
                    <img class="img-zoom img-responsive image-fly" src="{{asset('product_image/'.$gallery->product_image)}}" data-zoom-image="assets/images/demo1_qs_480x480.jpg" alt="">
                    @empty
                        
                    @endforelse
                </div>
                <div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini">
                    <div class="qs-vertical-slider product-single__thumbnails">
                        @forelse ($product->Gallery as $gallery)
                        
                    <a class="image-thumb  {{($loop->index == 1) ? 'active' : ''}} thumb__element"><img src="{{asset('product_image/'.$gallery->product_image)}}" alt="" /></a>
                    @empty
                        
                    @endforelse
                    </div>
                </div>
                <div class="vertical-slider product-single__thumbnails" style="opacity: 0;">
                </div>
            </div>
        </div>
        <div class="grid__item one-half qs-product-information">
            <div id="quick-shop-container">
                <h3 id="quick-shop-title"><a href="product.html">{{$product->title}}</a></h3>
                <div class="rating-star">
                    <span class="shopify-product-reviews-badge" data-id="3008529923"></span>
                </div>
                <div class="description">
                    <div id="quick-shop-description" class="text-left">
                        <p>
                       {{$product->product_summary}} </p>
                    </div>
                </div>
                <form action="#" method="POST" class="variants" id="ModalCartAdd{{$product->id}}">
                    @csrf
                    <div id="quick-shop-price-container" class="detail-price">
                        @if ($product->sale_price != '')

                        <span class="price"><span style="font-size: 20px" class="money">${{$product->sale_price}}</span></span>
                        @else
                        <span class="price"><span style="font-size: 20px"  class="money">${{$product->regular_price}}</span></span>
                        @endif
                    </div>
                    <div class="quantity-wrapper clearfix " style="margin-top: 10px">
                        <label class="wrapper-title">Quantity</label>
                        <div class="wrapper">
                            <span class="qty-down" title="Decrease" data-src="#qs-quantity">
                            <i class="fa fa-minus"></i>
                            </span>
                            <input type="hidden" name="product_id" value="{{$product->id}}">
                            <input type="hidden"  name="brand_id" value="{{$product->brand_id}}">
                            <input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
                            <span class="qty-up" title="Increase" data-src="#qs-quantity">
                            <i class="fa fa-plus"></i>
                            </span>
                        </div>
                    </div>
                    <div class="others-bottom mt-4" style="margin-top: 10px">
                        <button class="btn btn-1 small add-to-cart" type="submit">Add To Cart</button>
                        {{-- <input id="AddToCart" class="btn btn-1 small add-to-cart" type="submit" name="add" value="Buy Now"> --}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
                      </li>
                      <script>
                        jQuery(document).ready(function($) {
        $("#ModalCartAdd{{$product->id}}").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var actionUrl = form.attr('action');

    $.ajax({
    type: "POST",
    url: "{{route('CartPost')}}",
    data: form.serialize(), // serializes the form's elements.
    success: function(data)
    {
        Command: toastr["success"](data.done)
    }
});

});
    });
                      </script>
                      @empty
                          
                      @endforelse
                  </ul>
              </div>
          </div>
          @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<link href="{{asset('frontend/assets/css/social-buttons.scss.css')}}" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">


@endsection
@section('script_js')
<script src="{{asset('frontend/assets/js/jquery.easytabs.min.js')}}" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- 

<script>
       jQuery(document).ready(function($) {
        $("#AddToCartForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var actionUrl = form.attr('action');

    $.ajax({
    type: "POST",
    url: "{{route('CartPost')}}",
    data: form.serialize(), // serializes the form's elements.
    success: function(data)
    {
        Command: toastr["success"](data.done)
    }
});

});
    
</script> --}}
<script>
    jQuery(document).ready(function($) {
        $("#AddToCartForm").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var form = $(this);
    var actionUrl = form.attr('action');

    $.ajax({
    type: "POST",
    url: "{{route('CartPost')}}",
    data: form.serialize(), // serializes the form's elements.
    success: function(data)
    {
        Command: toastr["success"](data.done)
    }
});

});
    });
    </script>
@endsection

