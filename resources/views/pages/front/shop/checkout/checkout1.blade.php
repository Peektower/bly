@extends('layouts.main')
@section('content')
    <!-- Action Bar -->
{{--    <div class="action-bar is-centered">--}}
{{--        <div class="steps-wrapper">--}}
{{--            <ol class="step-list">--}}
{{--                <li class="active"></li>--}}
{{--                <li class="active"></li>--}}
{{--                <li class="active"></li>--}}
{{--                <li class="active"></li>--}}
{{--            </ol>--}}
{{--        </div>--}}
{{--    </div>--}}


    <!-- Main wrapper -->
    <div class="shop-wrapper">

        <!-- Search overlay -->
        <div class="search-overlay"></div>

        <!-- Search input -->
        <div class="search-input-wrapper is-desktop is-hidden">
            <div class="field">
                <div class="control">
                    <input id="nephos-search" type="text" name="search" placeholder="Search a Product">
                    <span id="clear-search" role="button"><i data-feather="x"></i></span>
                    <span class="bar"></span>
                </div>
                <span class="search-help">Type the name of the product you are looking for</span>
            </div>
        </div>
        <!-- Main section -->
        <div id="checkout-4" class="section no-padding">
            <div class="checkout-wrapper" data-checkout-step="4">

                <!--Checkout step 4-->
                <div class="checkout-main">
                    <div class="checkout-container">
                        <div class="order-summary">
                            <h2>Order Summary</h2>
                            <p>Please carefully review your order before confirming.</p>

                            <div class="order-summary-grid">
                                <div class="columns is-multiline">
                                    <!--Shipping Method-->
                                    <div class="column is-6">
                                        <label class="summary-label">Shipping Method</label>
                                        <div class="method-card is-readonly">
                                            <input type="radio" name="selected_shipping_method" checked readonly>
                                            <a class="change-link">Change</a>
                                            <div class="method-card-inner">
                                                <div class="icon-container">
                                                    <img id="summary-shipping-icon" src="assets/img/icons/checkout/tram.svg" alt="">
                                                    <div class="indicator gelatine">
                                                        <i data-feather="check"></i>
                                                    </div>
                                                </div>
                                                <div class="meta">
                                                    <h3 id="summary-shipping-name">Ground Express</h3>
                                                    <p id="summary-shipping-description">If you want the traditional good old school method</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Payment Method-->
                                    <div class="column is-6">
                                        <label class="summary-label">Payment Method</label>
                                        <div class="method-card is-readonly">
                                            <a class="change-link">Change</a>
                                            <input id="paypal" type="radio" name="selected_payment_method" checked readonly>
                                            <div class="method-card-inner">
                                                <div class="icon-container">
                                                    <img id="summary-payment-icon" src="assets/img/icons/checkout/paypal.svg" alt="">
                                                    <div class="indicator gelatine">
                                                        <i data-feather="check"></i>
                                                    </div>
                                                </div>
                                                <div class="meta">
                                                    <h3 id="summary-payment-name">Paypal</h3>
                                                    <p id="summary-payment-description">If you want the traditional good old school method</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="order-notes">
                                <h3>Order Notes</h3>
                                <p>Enter some special instructions to be attached to your order (optional)</p>
                                <div class="field">
                                    <div class="control">
                                        <textarea id="checkout-notes" class="textarea" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="flex-table">
                                <!--Table header-->
                                <div class="flex-table-header">
                                    <span class="product"><span>Product</span></span>
                                    <span class="quantity">Quantity</span>
                                    <span class="price">Price</span>
                                    <span class="discount">Discount</span>
                                    <span class="total">Total</span>
                                </div>
                                <!--Table item-->
                                @forelse($carts as $c)
                                <div class="flex-table-item" data-product-id="107">
                                    <div class="product">
                                        <img src="{{$c->options->image}}" data-demo-src="{{$c->options->image}}" alt="">
                                        <span class="product-name">{{$c->name}}</span>
                                    </div>
                                    <div class="quantity">
                                        <span>{{$c->qty}}</span>
                                    </div>
                                    <div class="price">
                                        <span class="has-price">{{$c->price}}</span>
                                    </div>
                                    <div class="discount">
                                        <span class="has-price">0</span>
                                    </div>
                                    <div class="total">
                                        <span class="has-price">{{$c->price*$c->qty}}</span>
                                    </div>
                                </div>
                                <!--Table item-->
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout-side">
                    <div class="side-header">
                        <h2 class="side-title">Checkout</h2>
                        <a class="button is-rounded checkout-back" data-checkout-step="4">Previous</a>
                    </div>
                    <div class="side-inner has-slimscroll">
                        <div class="side-card user-card">
                            <div class="avatar-container">
                                <img id="checkout-avatar" src="http://via.placeholder.com/250x250" data-demo-src="assets/img/avatars/elie.jpg" alt="">
                            </div>
                            <div class="meta">
                                <span>Checkout as</span>
                                <span id="checkout-username">{{$user->name}}</span>
                            </div>
                        </div>

                        <div class="side-card is-address">
                            <label class="form-switch is-vhidden">
                                <input id="shipping-switch" type="checkbox" class="is-switch">
                                <i></i>
                            </label>
                            <h3 class="address-title">Shipping Address</h3>
                            <p class="address">
                                <var id="shipping-address1">{{$user->shipping_address}}</var>, <var id="shipping-address2">Crimson Road</var>
                                <br><var id="shipping-city">{{$user->shipping_city}}</var>, <var id="shipping-state">CA</var> <var id="shipping-postalCode">{{$user->shipping_zipcode}}</var>
                                <br><var id="shipping-country">Sierra Leone</var>
                            </p>
                        </div>

                        <div class="side-card is-totals">
                            <h3 class="info-title">Payment Information</h3>
                            <div class="payment-block">
                                <span>Order subtotal</span>
                                <span id="checkout-subtotal-value" class="has-price">{{$subTotal}}</span>
                            </div>
                            <div class="payment-block">
                                <span class="is-bold">Order total</span>
                                <span id="checkout-grandtotal-value" class="has-price is-bold">{{$cartTotal}}</span>
                            </div>
                        </div>

                        <form method="POST" action="{{route('checkout.store')}}">
                            @csrf
                        <div class="side-action">
                            <button type="submit" id="checkout-next" class="button primary-button raised is-fullwidth is-rounded">Confirm & Pay</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /Main section -->
        </div>
    </div>
    <!-- /Main wrapper -->
@endsection
