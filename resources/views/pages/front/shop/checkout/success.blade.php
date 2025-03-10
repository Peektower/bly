@extends('layouts.main')
@section('content')

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
        <div class="section no-padding">
            <div class="checkout-wrapper" data-checkout-step="5">

                <!--Success step-->
                <div class="checkout-main">
                    <div class="checkout-container">
                        <div class="checkout-success">
                            <div class="success-card">
                                <div class="success-content has-text-centered">
                                    <svg class="SuccessAnimation is-primary animated" xmlns="http://www.w3.org/2000/svg" width="70" height="70" viewBox="0 0 70 70">
                                        <path class="SuccessAnimationResult" fill="#D8D8D8" d="M35,60 C21.1928813,60 10,48.8071187 10,35 C10,21.1928813 21.1928813,10 35,10 C48.8071187,10 60,21.1928813 60,35 C60,48.8071187 48.8071187,60 35,60 Z M23.6332378,33.2260427 L22.3667622,34.7739573 L34.1433655,44.40936 L47.776114,27.6305926 L46.223886,26.3694074 L33.8566345,41.59064 L23.6332378,33.2260427 Z" />
                                        <circle class="SuccessAnimationCircle" cx="35" cy="35" r="24" stroke="#979797" stroke-width="2" stroke-linecap="round" fill="transparent" />
                                        <polyline class="SuccessAnimationCheck" stroke="#979797" stroke-width="2" points="23 34 34 43 47 27" fill="transparent" />
                                    </svg>
                                    <h3>Order Complete!</h3>
                                    <p>Thank you for placing your order! Your order is now complete and we already started processing it.</p>
                                    <div class="button-wrap">
                                        <button id="end-checkout-button" class="button primary-button raised is-fullwidth is-rounded">My Orders</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="checkout-side">
                    <div class="side-header">
                        <h2 class="side-title">Checkout</h2>
                    </div>
                    <div class="side-inner has-slimscroll">
                        <div class="side-card user-card">
                            <div class="avatar-container">
                                <img id="checkout-avatar" src="http://via.placeholder.com/250x250" data-demo-src="assets/img/avatars/elie.jpg" alt="">
                            </div>
                            <div class="meta">
                                <span>Checkout as</span>
                                <span id="checkout-username">Elie Daniels</span>
                            </div>
                        </div>

                        <div class="side-card is-address">
                            <label class="form-switch is-vhidden">
                                <input id="shipping-switch" type="checkbox" class="is-switch">
                                <i></i>
                            </label>
                            <h3 class="address-title">Shipping Address</h3>
                            <p class="address">
                                <var id="shipping-address1">463 San Bernardo Ave</var>, <var id="shipping-address2">Crimson Road</var>
                                <br><var id="shipping-city">Long Beach</var>, <var id="shipping-state">CA</var> <var id="shipping-postalCode">90808</var>
                                <br><var id="shipping-country">United States</var>
                            </p>
                        </div>

                        <div class="side-card is-totals">
                            <h3 class="info-title">Payment Information</h3>
                            <div class="payment-block">
                                <span>Order subtotal</span>
                                <span id="checkout-subtotal-value" class="has-price">200.37</span>
                            </div>
                            <div class="payment-block">
                                <span>Order shipping</span>
                                <span id="checkout-shipping-value" class="has-price">0.00</span>
                            </div>
                            <div class="payment-block">
                                <span>Order tax</span>
                                <span id="checkout-tax-value" class="has-price">7.82</span>
                            </div>
                            <div class="payment-block">
                                <span class="is-bold">Order total</span>
                                <span id="checkout-grandtotal-value" class="has-price is-bold">208.09</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Main section -->
    </div>

@endsection
