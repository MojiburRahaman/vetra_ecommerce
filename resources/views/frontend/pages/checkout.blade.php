@extends('frontend.master')

@section('content')
<div class="breadcrumb-wrapper">
    <nav class="breadcrumb" >
        <a href="{{ route('FrontendView') }}" title="Back to the frontpage">Home</a>
        <span>&rsaquo;</span>
        <span>Checkout Page</span>
    </nav>
    <h1 class="section-header__title">Checkout</h1>
</div>
<div class="wrapper">
    <div class="container">
        <form action="" method="POST">
            @csrf
            <div class="row ">
                <div class="col-lg-7 pt-4">
                    <div class="checkout-form form-style">
                        <h3>Billing Details</h3>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <h5>Something is wrong with this field!</h5                
                            @foreach ($errors->all() as $err_msg)
                            <li>{{$err_msg}}</li>
                            @endforeach
                        </div>
                        @endif
                        <div class="row">
                            <div class="col-sm-12 col-12">
                                <p> Name <span style="color: red">*</span></p>
                                <input class="@error('billing_user_name') is-invalid @enderror form-control" type="text"
                                    name="billing_user_name" @error('billing_user_name') required @enderror
                                    placeholder="Enter Name" autocomplete="none" value="{{old('billing_user_name')}}">
                            </div>
                            <div class="col-sm-12 col-12">
                                <p>Phone No.<span style="color: red">*</span> </p>
                                <input class="@error('billing_number') is-invalid @enderror form-control" type="number"
                                    type="number" name="billing_number" placeholder="Enter Your Number"
                                    autocomplete="none" value="{{old('billing_number')}}">
                            </div>
                            <div class="col-6 col-sm-6 m-none">
                                <p>Division <span style="color: red">*</span></p>
                                <select name="division_name"  id="divisions_name">
                                    <option value=>Select One</option>
                                  
                                </select>
                            </div>
                            <div class="col-6 col-sm-6">
                                <p>District <span style="color: red">*</span></p>
                                <select class="@error('district_name') is-invalid @enderror form-control"
                                    name="district_name" id="disctrict_name">

                                </select>
                            </div>
                            <br><br>
                            <div class="col-12 col-sm-8 mt-4">
                                <p>Your Address <span style="color: red">*</span></p>
                                <input class="@error('billing_number') is-invalid @enderror form-control"
                                    name="billing_address" type="text">
                            </div>
                            <div class="col-sm-4 col-12 mt-4">
                                <p>Postcode/ZIP</p>
                                <input type="text" name="billing_postcode">
                            </div>
                            <div class="col-12 mb-4">
                                <p>Order Notes (Optional) </p>
                                <textarea name="billing_order_note" placeholder="Notes about Your Order."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12 ml-5 pt-4 pr-4 pl-4" style="background: #f4f4f4;height:100%">
                    <div class="order-area">
                        <h3 class="">Your Order</h3>
                        <ul class="total-cost">
                            <li>Total <span class="pull-right"> <strong>৳{{session()->get('cart_total')}}</strong>
                                </span>
                            </li>

                            <li>Discount<span
                                    class="pull-right"><strong>৳{{session()->get('cart_discount')}}</strong></span></li>
                            <li>Shipping <span class="pull-right">৳<strong id="shipping_id">0</spstrongan></span></li>
                            <li> Subtotal<span class="pull-right"
                                    id="sub_total"><strong>৳{{session()->get('cart_subtotal')}}
                                    </strong></span></li>
                        </ul>
                        <ul class="payment-method">
                            {{-- <li>
                                <input @error('payment_option') required  @enderror name="payment_option" style="background: orange" id="bank" value="pay_now" type="radio">
                                <label for="bank">Direct Bank Transfer</label>
                            </li> --}}
                            <li>
                                <input checked @error('payment_option') required  @enderror name="payment_option" id="cash_on_delivery" value="cash_on_delivery" type="radio">
                                <label for="cash_on_delivery">Cash On Delivery</label>
                            </li>

                        </ul>
                        <button type="submit" class="mb-5">Place Order</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection


@section('css')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


@endsection
@section('script_js')
<script src="{{asset('frontend/assets/js/jquery.easytabs.min.js')}}" type="text/javascript"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

@endsection