@extends('frontend.master')
@section('title')
Home 
@endsection
@section('content')
<div class="wrapper">
    <div id="top-home-blocks" class="grid--full grid--table">
        <div class="grid__item one-quarter shop-by-collections medium-down--hide">
            <div class="sidebar-collections">
                <div class="sdcollections-title sb-title">
                    <i class="fa fa-list"></i>
                    <span>All Collections</span>
                </div>
                <div class="sdcollections-content">
                    <ul class="sdcollections-list">
                        @foreach ($categories as $item)
                            
                        <li class="sdc-element vetical-menu1 site-nav--has-dropdown" aria-haspopup="true">
                            <a href="collection.html" class="site-nav__link">
                                <div class="element-main">
                                    <div class="collection-icon">
                                        <img src="{{asset('frontend/assets/images/book.png')}}" alt="collection icon">
                                    </div>
                                    <div class="collection-area have-icons">
                                        <div class="collection-name">
                                             {{$item->title}} ({{$item->product_count}})
                                        </div>
                                    </div>
                                </div>
                                @if ($item->sub_category_count != 0)
                                    
                                <span class="icon icon-arrow-right" aria-hidden="true"></span>
                                @endif
                            </a>
                            @if ($item->sub_category_count != 0)
                            
                            <ul class="site-nav__dropdown vetical__dropdown vetical__dropdown1">
                                <li class="nav-links nav-links01 grid__item large--one-half">
                                    <ul>
                                        <li class="list-title">Usefull links</li>
                                        @foreach ($item->SubCategory as $sub)
                                            
                                        <li class="list-unstyled nav-sub-mega">
                                        <a href="collection.html">{{$sub->title}}</a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="grid__item large--one-half">
                                    <ul>
                                        <li class="list-title">New Arrivals</li>
                                        <li class="list-product">
                                        <div class="list-product-image">
                                            <a href="product.html"><img src="{{asset('frontend/assets/images/demo1_210x210.png')}}" alt="Example Book"></a>
                                        </div>
                                        <div class="list-product-name">
                                            Example Book
                                        </div>
                                        <div class="list-product-link">
                                            <a href="product.html">More Detail</a>
                                        </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            @endif
                        </li>
                        @endforeach
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="grid__item small--one-whole medium--one-whole three-quarters main-slideshow">
            <div class="main_slideshow_wrapper">
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img src="{{asset('frontend/assets/images/demo1_885x450.jpg')}}" alt="" />
                        </li>
                        <li>
                            <img src="{{asset('frontend/assets/images/demo2_885x450.jpg')}}" alt="" />
                        </li>
                        <li>
                            <img src="{{asset('frontend/assets/images/demo3_885x450.jpg')}}" alt="" />
                        </li>
                        <li>
                            <img src="{{asset('frontend/assets/images/demo4_885x450.jpg')}}" alt="" />
                        </li>
                        <li>
                            <img src="{{asset('frontend/assets/images/demo5_885x450.jpg')}}" alt="" />
                        </li>
                        <li>
                            <img src="{{asset('frontend/assets/images/demo6_885x450.jpg')}}" alt="" />
                        </li>
                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        <li>
                            <div>
                                <img src="{{asset('frontend/assets/images/demo1_50x50.jpg')}}" alt="">
                                <span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Opening celebration 7th store</a></span>
                                <span class="cr-desc">Sale up to 70% from Nov 1, 2015 to Nov 7, 2015</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="{{asset('frontend/assets/images/demo2_50x50.jpg')}}" alt="">
                                <span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Beautiful woman 2015</a></span>
                                <span class="cr-desc">high-end products cosmetics &amp; mackup</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="{{asset('frontend/assets/images/demo3_50x50.jpg')}}" alt="">
                                <span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Sony Xperia Z5</a></span>
                                <span class="cr-desc">buy now only today sale 60% for all colour</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="assets/images/demo4_50x50.jpg" alt="">
                                <span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">New Lego collection</a></span>
                                <span class="cr-desc">best seller 2015</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="assets/images/demo5_50x50.jpg" alt="">
                                <span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Christmas 2015</a></span>
                                <span class="cr-desc">Merry Christmas</span>
                            </div>
                        </li>
                        <li>
                            <div>
                                <img src="{{asset('frontend/assets/images/demo6_50x50.jpg')}}" alt="">
                                <span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Happy New Year</a></span>
                                <span class="cr-desc">Happy New Year</span>
                            </div>
                        </li>
                </div>
            </div>
        </div>
    </div>
    
    <div id="beauty-health-blocks" class="beauty-health-wrapper grid--full grid--table grid-block-full">
        <div class="beauty-health-inner">
            <div class="bh-top home-block-title">
                <div class="collection-name">
                    <img class="collection-icon" src="{{asset('frontend/assets/images/beauty-health.png')}}" alt=""><a href="collection.html">Beauty &amp; Health</a>
                </div>
                <div class="collection-tags">
                    <ul class="bh-tags">
                        <li class=""><a href="collection.html">Makeup</a></li>
                        <li class=""><a href="collection.html">Body Care</a></li>
                        <li class=""><a href="collection.html">Skin Care</a></li>
                        <li class=""><a href="collection.html">Hair Care</a></li>
                        <li class=""><a href="collection.html">Perfumes</a></li>
                        <li class="link-to"><a href="collection.html">See all</a></li>
                    </ul>
                </div>
            </div>
            <div class="bh-btm">
                <div class="grid__item three-quarters bh-left small--one-whole medium--one-whole">
                    <div class="home-slideshow-block bh-slideshow">
                        <div class="home-gallery-slider">
                            <div><a href="collection.html"><img src="{{asset('frontend/assets/images/demo1_slide1_880x285.jpg')}}" alt=""></a></div>
                            <div><a href="collection.html"><img src="{{asset('frontend/assets/images/demo1_slide2_880x285.jpg')}}" alt=""></a></div>
                            <div><a href="collection.html"><img src="{{asset('frontend/assets/images/demo1_slide3_880x285.jpg')}}" alt=""></a></div>    
                        </div>
                    </div>
                    <div class="home-products-block bh-products">
                        <div class="home-products-block-title">
                            <span>Latest PRoduct</span>
                        </div>
                        <div class="home-products-block-content">
                            <div class="home-products-slider">
                                @forelse ($Product as $product)
                                    
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
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
  </script>>
                                @empty
                                    
                                @endforelse
                            </div>	
                        </div>											           
                    </div>
                </div>
                <div class="grid__item one-quarter bh-right small--one-whole medium--one-whole">
                    <div class="brands-area">
                        <ul class="brands-elements">
                            @forelse ($Brands as $brand)
                                
                            <li class="">
                                <a href="collection.html"><img src="{{asset('brand_img/'.$brand->thumbnail)}}" alt=""></a>
                            </li>
                            @empty
                                
                            @endforelse
                           
                        </ul>
                    </div>
                    <div class="banner-area">
                        <a href="collection.html"><img src="{{asset('frontend/assets/images/demo1_banner1_185x345.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="smartphones-blocks" class="smartphones-wrapper grid--full grid--table grid-block-full">
        <div class="smartphones-inner">
            <div class="bh-top home-block-title">
                <div class="collection-name">
                    <img class="collection-icon" src="assets/images/smartphones.png" alt="">
                    <a href="collection.html">Smartphones &amp; Cell Phones</a>
                </div>
                <div class="collection-tags">
                    <ul class="bh-tags">          
                        <li class=""><a href="collection.html">iOS</a></li>          
                        <li class=""><a href="collection.html">Android</a></li>          
                        <li class=""><a href="collection.html">Windows Phone</a></li>          
                        <li class=""><a href="collection.html">BlackBerry</a></li>          
                        <li class=""><a href="collection.html">Firefox OS</a></li>          
                        <li class="link-to"><a href="collection.html">See All</a></li>          
                    </ul>
                </div>
            </div>
            <div class="bh-btm">
                <div class="grid__item three-quarters bh-left small--one-whole medium--one-whole">
                    <div class="home-slideshow-block bh-slideshow">
                        <div class="home-gallery-slider">
                            <div><a href="collection.html"><img src="assets/images/demo1_slide4_880x285.jpg" alt=""></a></div>
                            <div><a href="collection.html"><img src="assets/images/demo1_slide5_880x285.jpg" alt=""></a></div>
                            <div><a href="collection.html"><img src="assets/images/demo1_slide6_880x285.jpg" alt=""></a></div>    
                        </div>
                    </div>
                    <div class="home-products-block bh-products">
                        <div class="home-products-block-title">
                            <span>Spotlight</span>
                        </div>
                        <div class="home-products-block-content">
                            <div class="home-products-slider">
                                <div class="grid__item">
                                    <div class="grid__item_wrapper">
                                        <div class="grid__image product-image">
                                            <a href="product.html">
                                                <img src="assets/images/demo1_product6_208x208.jpg" alt="Demo Product Sample">
                                            </a>
                                            <div class="quickview">
                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                    <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                        <a href="#quick-shop-modal" class="btn quick_shop">
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
                                            <a href="product.html">Demo Product Sample</a>
                                        </p>
                                        <p class="product-price">
                                            <strong>On Sale</strong>
                                            <span class="money" data-currency-usd="$19.99">$19.99</span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                        </p>
                                        <ul class="action-button">
                                            <li class="add-to-cart-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                                <div class="grid__item">
                                    <div class="grid__item_wrapper">
                                        <div class="grid__image product-image">
                                            <a href="product.html">
                                                <img src="assets/images/demo1_product7_208x208.jpg" alt="Demo Product Sample">
                                            </a>
                                            <div class="quickview">
                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                    <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                        <a href="#quick-shop-modal" class="btn quick_shop">
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
                                            <a href="product.html">Demo Product Sample</a>
                                        </p>
                                        <p class="product-price">
                                            <strong>On Sale</strong>
                                            <span class="money" data-currency-usd="$19.99">$19.99</span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                        </p>
                                        <ul class="action-button">
                                            <li class="add-to-cart-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                                <div class="grid__item">
                                    <div class="grid__item_wrapper">
                                        <div class="grid__image product-image">
                                            <a href="product.html">
                                                <img src="assets/images/demo1_product8_208x208.jpg" alt="Demo Product Sample">
                                            </a>
                                            <div class="quickview">
                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                    <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                        <a href="#quick-shop-modal" class="btn quick_shop">
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
                                            <a href="product.html">Demo Product Sample</a>
                                        </p>
                                        <p class="product-price">
                                            <strong>On Sale</strong>
                                            <span class="money" data-currency-usd="$19.99">$19.99</span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                        </p>
                                        <ul class="action-button">
                                            <li class="add-to-cart-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                                <div class="grid__item">
                                    <div class="grid__item_wrapper">
                                        <div class="grid__image product-image">
                                            <a href="product.html">
                                                <img src="assets/images/demo1_product9_208x208.jpg" alt="Demo Product Sample">
                                            </a>
                                            <div class="quickview">
                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                    <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                        <a href="#quick-shop-modal" class="btn quick_shop">
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
                                            <a href="product.html">Demo Product Sample</a>
                                        </p>
                                        <p class="product-price">
                                            <strong>On Sale</strong>
                                            <span class="money" data-currency-usd="$19.99">$19.99</span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                        </p>
                                        <ul class="action-button">
                                            <li class="add-to-cart-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                                <div class="grid__item">
                                    <div class="grid__item_wrapper">
                                        <div class="grid__image product-image">
                                            <a href="product.html">
                                                <img src="assets/images/demo1_product10_208x208.jpg" alt="Demo Product Sample">
                                            </a>
                                            <div class="quickview">
                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                    <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                        <a href="#quick-shop-modal" class="btn quick_shop">
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
                                            <a href="product.html">Demo Product Sample</a>
                                        </p>
                                        <p class="product-price">
                                            <strong>On Sale</strong>
                                            <span class="money" data-currency-usd="$19.99">$19.99</span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                        </p>
                                        <ul class="action-button">
                                            <li class="add-to-cart-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                            </div>	
                        </div>											           
                    </div>
                </div>
                <div class="grid__item one-quarter bh-right small--one-whole medium--one-whole">
                    <div class="brands-area">
                        <ul class="brands-elements">
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand1_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand2_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand3_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand4_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand5_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand6_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand7_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand8_123x64.png" alt=""></a>
                            </li>         
                        </ul>
                    </div>
                    <div class="banner-area">
                        <a href="collection.html"><img src="assets/images/demo1_banner2_185x345.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="kids-blocks" class="kids-wrapper grid--full grid--table grid-block-full">
        <div class="kids-inner">
            <div class="bh-top home-block-title">
                <div class="collection-name">
                    <img class="collection-icon" src="assets/images/clothing.png" alt="">
                    <a href="collection.html">Clothing</a>
                </div>
                <div class="collection-tags">
                    <ul class="bh-tags">          
                        <li class=""><a href="collection.html">Headphone</a></li>          
                        <li class=""><a href="collection.html">Rechargeable Battery </a></li>          
                        <li class=""><a href="collection.html">Portable Hard Drive</a></li>          
                        <li class=""><a href="collection.html">USB</a></li>          
                        <li class=""><a href="collection.html">Caple</a></li>          
                        <li class="link-to"><a href="collection.html">See all</a></li>          
                    </ul>
                </div>
            </div>
            <div class="bh-btm">
                <div class="bh-btm">
                <div class="grid__item three-quarters bh-left small--one-whole medium--one-whole">
                    <div class="home-slideshow-block bh-slideshow">
                        <div class="home-gallery-slider">
                            <div><a href="collection.html"><img src="assets/images/demo1_slide7_880x285.jpg" alt=""></a></div>
                            <div><a href="collection.html"><img src="assets/images/demo1_slide8_880x285.jpg" alt=""></a></div>
                            <div><a href="collection.html"><img src="assets/images/demo1_slide9_880x285.jpg" alt=""></a></div>    
                        </div>
                    </div>
                    <div class="home-products-block bh-products">
                        <div class="home-products-block-title">
                            <span>Spotlight</span>
                        </div>
                        <div class="home-products-block-content">
                            <div class="home-products-slider">
                                <div class="grid__item">
                                    <div class="grid__item_wrapper">
                                        <div class="grid__image product-image">
                                            <a href="product.html">
                                                <img src="assets/images/demo1_product11_208x208.jpg" alt="Demo Product Sample">
                                            </a>
                                            <div class="quickview">
                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                    <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                        <a href="#quick-shop-modal" class="btn quick_shop">
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
                                            <a href="product.html">Demo Product Sample</a>
                                        </p>
                                        <p class="product-price">
                                            <strong>On Sale</strong>
                                            <span class="money" data-currency-usd="$19.99">$19.99</span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                        </p>
                                        <ul class="action-button">
                                            <li class="add-to-cart-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                                <div class="grid__item">
                                    <div class="grid__item_wrapper">
                                        <div class="grid__image product-image">
                                            <a href="product.html">
                                                <img src="assets/images/demo1_product12_208x208.jpg" alt="Demo Product Sample">
                                            </a>
                                            <div class="quickview">
                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                    <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                        <a href="#quick-shop-modal" class="btn quick_shop">
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
                                            <a href="product.html">Demo Product Sample</a>
                                        </p>
                                        <p class="product-price">
                                            <strong>On Sale</strong>
                                            <span class="money" data-currency-usd="$19.99">$19.99</span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                        </p>
                                        <ul class="action-button">
                                            <li class="add-to-cart-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                                <div class="grid__item">
                                    <div class="grid__item_wrapper">
                                        <div class="grid__image product-image">
                                            <a href="product.html">
                                                <img src="assets/images/demo1_product13_208x208.jpg" alt="Demo Product Sample">
                                            </a>
                                            <div class="quickview">
                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                    <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                        <a href="#quick-shop-modal" class="btn quick_shop">
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
                                            <a href="product.html">Demo Product Sample</a>
                                        </p>
                                        <p class="product-price">
                                            <strong>On Sale</strong>
                                            <span class="money" data-currency-usd="$19.99">$19.99</span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                        </p>
                                        <ul class="action-button">
                                            <li class="add-to-cart-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                                <div class="grid__item">
                                    <div class="grid__item_wrapper">
                                        <div class="grid__image product-image">
                                            <a href="product.html">
                                                <img src="assets/images/demo1_product14_208x208.jpg" alt="Demo Product Sample">
                                            </a>
                                            <div class="quickview">
                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                    <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                        <a href="#quick-shop-modal" class="btn quick_shop">
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
                                            <a href="product.html">Demo Product Sample</a>
                                        </p>
                                        <p class="product-price">
                                            <strong>On Sale</strong>
                                            <span class="money" data-currency-usd="$19.99">$19.99</span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                        </p>
                                        <ul class="action-button">
                                            <li class="add-to-cart-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                                <div class="grid__item">
                                    <div class="grid__item_wrapper">
                                        <div class="grid__image product-image">
                                            <a href="product.html">
                                                <img src="assets/images/demo1_product15_208x208.jpg" alt="Demo Product Sample">
                                            </a>
                                            <div class="quickview">
                                                <div class="product-ajax-cart hidden-xs hidden-sm">
                                                    <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                        <a href="#quick-shop-modal" class="btn quick_shop">
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
                                            <a href="product.html">Demo Product Sample</a>
                                        </p>
                                        <p class="product-price">
                                            <strong>On Sale</strong>
                                            <span class="money" data-currency-usd="$19.99">$19.99</span>
                                            <span class="visually-hidden">Regular price</span>
                                            <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                        </p>
                                        <ul class="action-button">
                                            <li class="add-to-cart-form">
                                                <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                    <div class="effect-ajax-cart">
                                                        <input type="hidden" name="quantity" value="1">
                                                        <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                            <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                        </button>
                                                    </div>
                                                </form>
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
                            </div>	
                        </div>											           
                    </div>
                </div>
                <div class="grid__item one-quarter bh-right small--one-whole medium--one-whole">
                    <div class="brands-area">
                        <ul class="brands-elements">
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand1_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand2_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand3_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand4_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand5_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand6_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand7_123x64.png" alt=""></a>
                            </li>
                            <li class="">
                                <a href="collection.html"><img src="assets/images/demo1_brand8_123x64.png" alt=""></a>
                            </li>         
                        </ul>
                    </div>
                    <div class="banner-area">
                        <a href="collection.html"><img src="assets/images/demo1_banner3_185x345.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div id="accessories-blocks" class="accessories-wrapper grid--full grid--table grid-block-full">
        <div class="accessories-inner">
            <div class="bh-top home-block-title">
                <div class="collection-name">
                    <img class="collection-icon" src="assets/images/sport.png" alt=""><a href="collection.html">Sport &amp; Outdoor</a>
                </div>
                <div class="collection-tags">
                    <ul class="bh-tags">          
                        <li class=""><a href="collection.html">Football</a></li>          
                        <li class=""><a href="collection.html">Cycling</a></li>          
                        <li class=""><a href="collection.html">Running</a></li>          
                        <li class=""><a href="collection.html">Swimming</a></li>          
                        <li class=""><a href="collection.html">Badminton</a></li>          
                        <li class="link-to"><a href="collection.html">See all</a></li>          
                    </ul>
                </div>
            </div>
            <div class="bh-btm">
                <div class="bh-btm">
                    <div class="bh-btm">
                    <div class="grid__item three-quarters bh-left small--one-whole medium--one-whole">
                        <div class="home-slideshow-block bh-slideshow">
                            <div class="home-gallery-slider">
                                <div><a href="collection.html"><img src="assets/images/demo1_slide10_880x285.jpg" alt=""></a></div>
                                <div><a href="collection.html"><img src="assets/images/demo1_slide11_880x285.jpg" alt=""></a></div>
                                <div><a href="collection.html"><img src="assets/images/demo1_slide12_880x285.jpg" alt=""></a></div>    
                            </div>
                        </div>
                        <div class="home-products-block bh-products">
                            <div class="home-products-block-title">
                                <span>Spotlight</span>
                            </div>
                            <div class="home-products-block-content">
                                <div class="home-products-slider">
                                    <div class="grid__item">
                                        <div class="grid__item_wrapper">
                                            <div class="grid__image product-image">
                                                <a href="product.html">
                                                    <img src="assets/images/demo1_product16_208x208.jpg" alt="Demo Product Sample">
                                                </a>
                                                <div class="quickview">
                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                        <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                            <a href="#quick-shop-modal" class="btn quick_shop">
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
                                                <a href="product.html">Demo Product Sample</a>
                                            </p>
                                            <p class="product-price">
                                                <strong>On Sale</strong>
                                                <span class="money" data-currency-usd="$19.99">$19.99</span>
                                                <span class="visually-hidden">Regular price</span>
                                                <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                            </p>
                                            <ul class="action-button">
                                                <li class="add-to-cart-form">
                                                    <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                                <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                            </button>
                                                        </div>
                                                    </form>
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
                                    <div class="grid__item">
                                        <div class="grid__item_wrapper">
                                            <div class="grid__image product-image">
                                                <a href="product.html">
                                                    <img src="assets/images/demo1_product17_208x208.jpg" alt="Demo Product Sample">
                                                </a>
                                                <div class="quickview">
                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                        <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                            <a href="#quick-shop-modal" class="btn quick_shop">
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
                                                <a href="product.html">Demo Product Sample</a>
                                            </p>
                                            <p class="product-price">
                                                <strong>On Sale</strong>
                                                <span class="money" data-currency-usd="$19.99">$19.99</span>
                                                <span class="visually-hidden">Regular price</span>
                                                <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                            </p>
                                            <ul class="action-button">
                                                <li class="add-to-cart-form">
                                                    <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                                <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                            </button>
                                                        </div>
                                                    </form>
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
                                    <div class="grid__item">
                                        <div class="grid__item_wrapper">
                                            <div class="grid__image product-image">
                                                <a href="product.html">
                                                    <img src="assets/images/demo1_product18_208x208.jpg" alt="Demo Product Sample">
                                                </a>
                                                <div class="quickview">
                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                        <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                            <a href="#quick-shop-modal" class="btn quick_shop">
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
                                                <a href="product.html">Demo Product Sample</a>
                                            </p>
                                            <p class="product-price">
                                                <strong>On Sale</strong>
                                                <span class="money" data-currency-usd="$19.99">$19.99</span>
                                                <span class="visually-hidden">Regular price</span>
                                                <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                            </p>
                                            <ul class="action-button">
                                                <li class="add-to-cart-form">
                                                    <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                                <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                            </button>
                                                        </div>
                                                    </form>
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
                                    <div class="grid__item">
                                        <div class="grid__item_wrapper">
                                            <div class="grid__image product-image">
                                                <a href="product.html">
                                                    <img src="assets/images/demo1_product19_208x208.jpg" alt="Demo Product Sample">
                                                </a>
                                                <div class="quickview">
                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                        <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                            <a href="#quick-shop-modal" class="btn quick_shop">
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
                                                <a href="product.html">Demo Product Sample</a>
                                            </p>
                                            <p class="product-price">
                                                <strong>On Sale</strong>
                                                <span class="money" data-currency-usd="$19.99">$19.99</span>
                                                <span class="visually-hidden">Regular price</span>
                                                <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                            </p>
                                            <ul class="action-button">
                                                <li class="add-to-cart-form">
                                                    <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                                <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                            </button>
                                                        </div>
                                                    </form>
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
                                    <div class="grid__item">
                                        <div class="grid__item_wrapper">
                                            <div class="grid__image product-image">
                                                <a href="product.html">
                                                    <img src="assets/images/demo1_product20_208x208.jpg" alt="Demo Product Sample">
                                                </a>
                                                <div class="quickview">
                                                    <div class="product-ajax-cart hidden-xs hidden-sm">
                                                        <div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
                                                            <a href="#quick-shop-modal" class="btn quick_shop">
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
                                                <a href="product.html">Demo Product Sample</a>
                                            </p>
                                            <p class="product-price">
                                                <strong>On Sale</strong>
                                                <span class="money" data-currency-usd="$19.99">$19.99</span>
                                                <span class="visually-hidden">Regular price</span>
                                                <s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
                                            </p>
                                            <ul class="action-button">
                                                <li class="add-to-cart-form">
                                                    <form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
                                                        <div class="effect-ajax-cart">
                                                            <input type="hidden" name="quantity" value="1">
                                                            <button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
                                                                <span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
                                                            </button>
                                                        </div>
                                                    </form>
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
                                </div>	
                            </div>											           
                        </div>
                    </div>
                    <div class="grid__item one-quarter bh-right small--one-whole medium--one-whole">
                        <div class="brands-area">
                            <ul class="brands-elements">
                                <li class="">
                                    <a href="collection.html"><img src="assets/images/demo1_brand1_123x64.png" alt=""></a>
                                </li>
                                <li class="">
                                    <a href="collection.html"><img src="assets/images/demo1_brand2_123x64.png" alt=""></a>
                                </li>
                                <li class="">
                                    <a href="collection.html"><img src="assets/images/demo1_brand3_123x64.png" alt=""></a>
                                </li>
                                <li class="">
                                    <a href="collection.html"><img src="assets/images/demo1_brand4_123x64.png" alt=""></a>
                                </li>
                                <li class="">
                                    <a href="collection.html"><img src="assets/images/demo1_brand5_123x64.png" alt=""></a>
                                </li>
                                <li class="">
                                    <a href="collection.html"><img src="assets/images/demo1_brand6_123x64.png" alt=""></a>
                                </li>
                                <li class="">
                                    <a href="collection.html"><img src="assets/images/demo1_brand7_123x64.png" alt=""></a>
                                </li>
                                <li class="">
                                    <a href="collection.html"><img src="assets/images/demo1_brand8_123x64.png" alt=""></a>
                                </li>         
                            </ul>
                        </div>
                        <div class="banner-area">
                            <a href="collection.html"><img src="assets/images/demo1_banner4_185x345.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>


@endsection
@section('css')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection

@section('script_js')
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
{{-- <script>
	  jQuery(document).ready(function($) {  
		if($('.quantity-wrapper').length){
		  $('.quantity-wrapper').on('click', '.qty-up', function() {
			var $this = $(this);
			var qty = $this.data('src');
			$(qty).val(parseInt($(qty).val()) + 1);
		  });
		  $('.quantity-wrapper').on('click', '.qty-down', function() {
			var $this = $(this);
			var qty = $this.data('src');
			if(parseInt($(qty).val()) > 1)
			  $(qty).val(parseInt($(qty).val()) - 1);
		  });
		}	 			 
	  });
	</script> --}}
@endsection
