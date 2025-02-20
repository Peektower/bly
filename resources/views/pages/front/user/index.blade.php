@extends('layouts.main')
@section('content')
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
        <div id="account-page" class="section">
            <!-- Container -->
            <div class="container">

                <!-- Account Layout -->
                <div class="columns account-header">
                    <div class="column main-column is-tablet-landscape-padded">
                        <!-- Title -->
                        <div class="account-title">
                            <h2>ACCOUNT</h2>
                            <img class="brand-filigrane" src="{{asset('assets/img/logo/nephos-greyscale.svg')}}" alt="">
                        </div>

                        <!-- Account tabs -->
                        @include('partials.front.acct-tab')

                        @if(!auth()->check())
                        @include('partials.front.not-log')
                        @else
                        <!-- Account layout -->
                        <div id="account-main" class="columns is-account-grid is-multiline">
                            <!--Loader-->
{{--                            <div class="account-loader is-active">--}}
{{--                                <div class="loader is-pulled is-loading"></div>--}}
{{--                            </div>--}}
                            <div class="column is-5">
                                <!-- User card -->
                                <div class="flat-card profile-card is-auto">
                                    <div class="card-body">
                                        <div class="profile-image">
                                            <img src="{{$user->proImg}}" data-demo-src="{{$user->proImg}}" alt="">
                                        </div>
                                        <div class="username has-text-centered">
                                            <span id="full-name">{{$user->name}}</span>
                                            <small id="full-email">{{$user->email}}</small>
                                        </div>
                                    </div>
{{--                                    <div class="profile-footer has-text-centered">--}}
{{--                                        <span class="achievement-title">Next Achievement</span>--}}
{{--                                        <div class="count">--}}
{{--                                            24/150--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </div>

                            <!-- Details -->
                            <div class="column is-7">
                                <div class="flat-card profile-info-card is-auto">
                                    <!-- Title -->
                                    <div class="card-title">
                                        <h3>Account details</h3>

                                        <div class="edit-account has-simple-popover popover-hidden-mobile" data-content="Edit Account" data-placement="top">
                                            <a href="#"><i class="feather-icons" data-feather="settings"></i></a>
                                        </div>
                                    </div>
                                    <!-- Contact Info -->
                                    <div class="card-body">
                                        <div class="columns">
                                            <div class="column is-6">
                                                <div class="info-block">
                                                    <span class="label-text">Name</span>
                                                    <span id="account-first-name" class="label-value">{{$user->name}}</span>
                                                </div>

                                                <div class="info-block">
                                                    <span class="label-text">Email</span>
                                                    <span id="account-email" class="label-value">{{$user->email}}</span>
                                                </div>
                                            </div>

                                            <div class="column is-6">
{{--                                                <div class="info-block">--}}
{{--                                                    <span class="label-text">Last Name</span>--}}
{{--                                                    <span id="account-last-name" class="label-value">Daniels</span>--}}
{{--                                                </div>--}}

                                                <div class="info-block">
                                                    <span class="label-text">Phone</span>
                                                    <span id="account-phone-number" class="label-value">{{$user->shipping_phone}}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Background Nephos Icon -->
                                    <img class="card-bg" src="{{asset('assets/img/logo/nephos-greyscale.svg')}}" alt="">
                                </div>

                                <!-- Billing Address -->
                                <div id="account-billing-address" class="flat-card profile-info-card is-auto">
                                    <!-- Title -->
                                    <div class="card-title">
                                        <h3>Billing address</h3>
                                        <!-- Cog Button -->
                                        <div class="edit-account is-vhidden">
                                            <a href="#"><i class="feather-icons" data-feather="settings"></i></a>
                                        </div>

                                    </div>
                                    <!-- Billing Address -->
                                    <div class="card-body">
                                        <div class="columns">
                                            <div class="column is-6">
                                                <div class="info-block">
                                                    <span class="label-text">Address</span>
                                                    <span class="label-value address1">{{$user->shipping_address}}</span>
                                                </div>

                                                <div class="info-block">
                                                    <span class="label-text">City</span>
                                                    <span class="label-value city">{{$user->shipping_city}}</span>
                                                </div>

                                            </div>

                                            <div class="column is-6">
                                                <div class="info-block">
                                                    <span class="label-text">Street</span>
                                                    <span class="label-value address2">Church Street</span>
                                                </div>

                                                <div class="info-block">
                                                    <span class="label-text">Country</span>
                                                    <span class="label-value country">Sierra Leone</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Address Form -->
                                </div>

                                <!-- Shipping Address -->
                                <div id="account-shipping-address" class="flat-card profile-info-card is-auto is-hidden">
                                    <!-- Title -->
                                    <div class="card-title">
                                        <h3>Shipping address</h3>
                                        <!-- Cog Button -->
                                        <div class="edit-account is-vhidden">
                                            <a href="#"><i class="feather-icons" data-feather="settings"></i></a>
                                        </div>

                                    </div>
                                    <!-- Billing Address -->
                                    <div class="card-body">
                                        <div class="columns">
                                            <div class="column is-6">
                                                <div class="info-block">
                                                    <span class="label-text">Number</span>
                                                    <span class="label-value address1">23, Block C2</span>
                                                </div>

                                                <div class="info-block">
                                                    <span class="label-text">City</span>
                                                    <span class="label-value city">Los Angeles</span>
                                                </div>

                                                <div class="info-block">
                                                    <span class="label-text">State</span>
                                                    <span class="label-value state">CA</span>
                                                </div>
                                            </div>

                                            <div class="column is-6">
                                                <div class="info-block">
                                                    <span class="label-text">Street</span>
                                                    <span class="label-value address2">Church Street</span>
                                                </div>

                                                <div class="info-block">
                                                    <span class="label-text">Postal Code</span>
                                                    <span class="label-value postal-code">100065</span>
                                                </div>

                                                <div class="info-block">
                                                    <span class="label-text">Country</span>
                                                    <span class="label-value country">United States</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Address Form -->
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
            <!-- /Container -->
        </div>
        <!-- /Main section -->
    </div>
    <!-- /Main wrapper -->
@endsection
