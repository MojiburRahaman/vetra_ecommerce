@extends('frontend.master')
@section('title')
    Cart
@endsection
@section('content')
    <style>
        .rotate {
            -moz-transition: all 1s linear;
            -webkit-transition: all 1s linear;
            transition: all 1s linear;
        }

        .rotate.down {
            -ms-transform: rotate(360deg);
            -moz-transform: rotate(360deg);
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
    </style>
    <div class="breadcrumb-wrapper">
        <nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
            <a href="{{ route('FrontendView') }}" title="Back to the frontpage">Home</a>
            <span aria-hidden="true">&rsaquo;</span>
            <span>Shopping Cart Page</span>
        </nav>
        <h1 class="section-header__title">Shopping Cart</h1>
    </div>
    <div class="wrapper">
        <form action="" method="post" novalidate="" class="cart table-wrap">
            <table class="cart-table full table--responsive cart_tb">
                <thead class="cart__row cart__header-labels">
                    <tr>
                        <th class="text-center">
                            Product
                        </th>
                        <th class="text-center">
                            Price
                        </th>
                        <th class="text-center">
                            Quantity
                        </th>
                        <th class="text-center">
                            Total
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $total_cart_amount = 0;
                    @endphp
                    @forelse ($carts as $item)
                        <tr class="cart__row table__section">
                            <td class="product-name" data-label="Product">
                                <div class="img_item">
                                    <a href="{{ route('ProductView', $item->Product->slug) }}" class="cart__image">
                                        <img src="{{ asset('thumbnail_img/' . $item->Product->thumbnail_img) }}"
                                            alt="Raesent Scelerisque Dan - S / Red">
                                    </a>
                                </div>
                                <p class="product-title">
                                    <a href="{{ route('ProductView', $item->Product->slug) }}">
                                        {{ $item->Product->title }} </a>
                                </p>
                                <a href="#" data-id="{{ $item->id }}" class="cart__remove" id="cart__remove">
                                    <small>Remove</small>
                                </a>
                            </td>
                            <td data-label="Price">
                                @if ($item->Product->sale_price != '')
                                    <span class="h3 ">
                                        <span class="money"
                                            data-currency-usd="$34.00">${{ $item->Product->sale_price }}</span>
                                    </span>
                                @else
                                    <span class="h3">
                                        <span class="money"
                                            data-currency-usd="$34.00">${{ $item->Product->regular_price }}</span>
                                    </span>
                                @endif
                            </td>
                            <td data-label="Quantity">
                                <div class="js-qty">
                                    <button type="button" class="js-qty__adjust js-qty__adjust--minus icon-fallback-text"
                                        data-id="" data-qty="0">
                                        <span class="icon icon-minus" aria-hidden="true"></span>
                                        <span class="fallback-text">−</span>
                                    </button>
                                    <input type="text" class="js-qty__num cart_quantity" value="{{ $item->quantity }}"
                                        min="1" data-id="" aria-label="quantity" pattern="[0-9]*"
                                        name="updates[]" id="updates_8772444163">
                                    <button type="button" class="js-qty__adjust js-qty__adjust--plus icon-fallback-text"
                                        data-id="" data-qty="11">
                                        <span class="icon icon-plus" aria-hidden="true"></span>
                                        <span class="fallback-text">+</span>
                                    </button>
                                </div>
                                <div>
                                    <a class="pointer" title="Update Item"><i data-id="{{ $item->id }}"
                                            class="rotate fa fa-refresh"></i>
                                </div>
                            </td>
                            <td data-label="Total" class="text-center">
                                @if ($item->Product->sale_price != '')
                                    @php
                                        $total_cart_amount += $item->Product->sale_price * $item->quantity;
                                    @endphp
                                    <span class="h3 total_price">
                                        <span class="money sub_product_total"
                                            data-currency-usd="$34.00">${{ $item->Product->sale_price * $item->quantity }}</span>
                                    </span>
                                @else
                                    @php
                                        $total_cart_amount += $item->Product->regular_price * $item->quantity;
                                    @endphp
                                    <span class="h3 total_price">
                                        <span class="money sub_product_total"
                                            data-currency-usd="$34.00">${{ $item->Product->regular_price * $item->quantity }}</span>
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr class="text-center">
                            <td class="text-center" colspan="10">No Item In Your Cart</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="grid cart__row">
                <div class="grid__item two-thirds small--one-whole">
                </div>
                <div class="grid__item text-right one-third small--one-whole">
                    <p>
                        <span class="cart__subtotal-title">Subtotal</span>
                        <span class="h3 cart__subtotal"><span class="money cart_total"
                                data-currency-usd="$223.00">${{ $total_cart_amount }}</span></span>
                    </p>
                    <p>
                        <em>Shipping &amp; taxes calculated at checkout</em>
                    </p>
                    <a href="{{route('CheckoutView')}}" class="btn">Cehck Out</a>
                </div>
            </div>
        </form>
    </div>

    @php
    session()->put('cart_total', $total_cart_amount);
    @endphp
@endsection

@section('css')
    <link href="{{ asset('frontend/assets/css/social-buttons.scss.css') }}" rel="stylesheet" type="text/css"
        media="all">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
@section('script_js')
    <script src="{{ asset('frontend/assets/js/jquery.easytabs.min.js') }}" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        $(".rotate").click(function() {
            $(this).toggleClass("down");
            var ele = $(this);
            var sub_total = $('.subtotal').html();
            var cart_id = $(this).attr('data-id');
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        // 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                }),
                $.ajax({
                    type: "POST",
                    url: "/cart/quantity-update",
                    data: {
                        cart_id: cart_id,
                        cart_quantity: ele.parents("tr").find(".cart_quantity").val(),
                    },
                    success: function(res) {
                        if (res == '') {
                            Swal.fire({
                                text: 'The Product Quantity is out of stock'
                            });
                        } else {
                            ele.parents("tr").find('.total_price').html(res);
                            $(".cart_total").load(location.href + " .cart_total");
                        }
                    }
                })
        });
        $(".cart__remove").click(function() {

            var ele = $(this);
            var cart_id = $(this).attr('data-id');
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    }
                }),
                $.ajax({
                    type: "POST",
                    url: "{{ route('CartRemove') }}",
                    data: {
                        cart_id: cart_id,
                    },
                    success: function(res) {

                        $(".cart_tb").load(location.href + " .cart_tb");
                        $(".cart_total").load(location.href + " .cart_total");
                        Command: toastr["warning"](res.done)
                    }
                })
        });
    </script>
@endsection
