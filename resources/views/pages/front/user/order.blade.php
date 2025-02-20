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
        <div id="orders-list" class="section">
            <!-- Container -->
            <div class="container">

                <!-- Orders List -->
                <div class="columns account-header">
                    <div class="column main-column is-tablet-landscape-padded">
                        <div class="account-title">
                            <h2>MY ORDERS</h2>
                            <img class="brand-filigrane" src="{{asset('assets/img/logo/nephos-greyscale.svg')}}" alt="">
                        </div>

                        <!-- Account tabs -->
                        @include('partials.front.acct-tab')

                        <!-- Controls -->
                        <div class="listing-controls">
                            <div class="layout-controls">
                                <a href="#"><span><i data-feather="grid"></i></span></a>
                                <a href="#"><span class="is-active"><i data-feather="list"></i></span></a>
                            </div>
                            <!-- Sort -->
                            <div class="sort-box">
                                <div class="sort-box-select">
                                    <select data-placeholder="Default order" class="chosen-select-no-single">
                                        <option>All Orders</option>
                                        <option>Pending</option>
                                        <option>In Progress</option>
                                        <option>Complete</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /Controls -->

                        @if(!auth()->check())
                            @include('partials.front.not-log')
                        @else

{{--                        <div id="orders-empty-placeholder" class="main-placeholder">--}}
{{--                            <div class="placeholder-content">--}}
{{--                                <img src="assets/img/illustrations/shop.svg" alt="">--}}
{{--                                <h3>No Orders</h3>--}}
{{--                                <p>You have no orders to show. Your order details will be stored here, once you checkout.</p>--}}
{{--                                <div class="button-wrap">--}}
{{--                                    <a href="products.html" class="button big-button primary-button rounded raised">Continue Shopping</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <!-- Orders  -->
                        <div class="columns is-account-grid is-multiline">
                            <!--Loader-->
{{--                            <div class="account-loader is-active">--}}
{{--                                <div class="loader is-pulled is-loading"></div>--}}
{{--                            </div>--}}
                            <!--Orders-->
                            <div class="column is-12">
                                <!--Order-->
                                @forelse($orders as $or)
                                <div class="order-long-card">
                                    <div class="left-side">
                                        <div class="order-header">
                                            <h3>#{{$or->order_number}}</h3>
                                            <span class="date">{{$or->created_at}}</span>
                                            <span class="tag is-primary">{{$or->status}}</span>
                                            <span class="order-total">{{$or->grand_total}}</span>
                                        </div>
                                        <!--List-->
                                        <div class="ordered-products has-slimscroll">
                                            <!--Loader-->
                                            <div class="products-loader">
                                                <div class="loader is-loading"></div>
                                            </div>
                                            @forelse($or->orderItems as $item)
                                            <!--Ordered Product-->
                                            <div class="ordered-product">
                                                <img src="{{$item->product->proImg}}" data-demo-src="{{$item->product->proImg}}" alt="">
                                                <div class="product-meta">
                                                    <span class="name">{{$item->product->name}}</span>
                                                    <span class="price">
                                                            <span>{{$item->price}}</span>
                                                    <span>x <var>{{$item->qty}}</var></span>
                                                    </span>
                                                </div>
                                                <div class="product-subtotal">
                                                    <span>Total</span>
                                                    <span>{{$item->price*$item->qty}}</span>
                                                </div>
                                            </div>
                                            <!--Ordered Product-->
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="right-side">
                                        <!-- Background Nephos Icon -->
                                        <img class="side-bg" src="{{asset('assets/img/logo/nephos-greyscale.svg')}}" alt="">
                                        <div class="meta-header">
                                            <img src="{{$or->user->proImg}}" data-demo-src="{{$or->user->proImg}}" alt="">
                                            <div class="inner-meta">
                                                <span>Order by</span>
                                                <span>{{$or->user->name}}</span>
                                            </div>
                                            <a class="support">
                                                <i data-feather="life-buoy"></i>
                                            </a>
                                        </div>

                                        <div class="meta-actions">
                                            <a class="button is-rounded is-fullwidth primary-button raised">Order Details</a>
                                            <a class="button is-rounded is-fullwidth grey-button rounded">Invoice</a>
                                        </div>
                                    </div>
                                </div>
                                <!--Order-->
                                @empty
                                @endforelse
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <!-- /Orders List -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Main section -->
    </div>
    <!-- /Main wrapper -->
@endsection
