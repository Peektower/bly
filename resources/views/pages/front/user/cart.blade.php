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
        <div id="cart-page" class="section">
            <!-- Container -->
            <div class="container">

                <!-- Cart page -->
                <div class="columns account-header">
                    <div class="column main-column is-tablet-landscape-padded">
                        <div class="account-title">
                            <h2>MY CART</h2>
                            <img class="brand-filigrane" src="{{asset('assets/img/logo/nephos-greyscale.svg')}}" alt="">
                        </div>

                        <!-- Account tabs -->
                        @include('partials.front.acct-tab')

{{--                        <div id="cart-main-placeholder" class="main-placeholder is-hidden">--}}
{{--                            <div class="placeholder-content">--}}
{{--                                <img src="assets/img/illustrations/shop.svg" alt="">--}}
{{--                                <h3>Empty Cart</h3>--}}
{{--                                <p>Your shopping cart is currenlty empty. Start adding products to be able to checkout.</p>--}}
{{--                                <div class="button-wrap">--}}
{{--                                    <a href="products.html" class="button big-button primary-button rounded raised">Continue Shopping</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <!-- Cart Layout -->
                        <div class="columns is-account-grid is-multiline">
                            <!--Loader-->
{{--                            <div class="account-loader is-active">--}}
{{--                                <div class="loader is-loading"></div>--}}
{{--                            </div>--}}
                            <!-- Product list -->
                            <div id="cart-page-products" class="column is-8">

                            </div>
                            <!--Cart Summary-->
                            <div class="column is-4">
                                <div class="flat-card cart-order-summary">
                                    <div class="button-wrap">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Cart Layout -->
                    </div>
                </div>
                <!-- /Cart page -->
            </div>
            <!-- /Container -->
        </div>
        <!-- /Main section -->
    </div>
    <!-- /Main wrapper -->

    <!-- Add to Wishlist Modal -->
    <div id="add-to-wishlist-modal" class="modal add-to-wishlist-modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <div class="box-header">
                    <img src="assets/img/logo/nephos-greyscale.svg" alt="">
                    <span>ADD TO WISHLIST</span>
                    <div class="modal-delete"><i data-feather="x"></i></div>
                </div>
                <div class="box-body">
                    <div class="inner-content">
                        <div id="existing-product-message" class="message is-link has-close-icon is-hidden">
                            <div class="message-body">
                                <a class="close-icon">
                                    <i data-feather="x"></i>
                                </a>
                                This product already exists in the selected wishlist. Please try another one.
                            </div>
                        </div>
                        <div id="wishlist-modal-list-placeholder" class="modal-placeholder is-hidden">
                            <div class="placeholder-content">
                                <img src="assets/img/illustrations/bed.svg" alt="">
                                <h3>No Wishlists</h3>
                                <p>You currently don't have any wishlist saved. Start by creating one.</p>
                                <div class="button-wrap">
                                    <a href="wishlist.html" class="button big-button primary-button rounded raised modal-delete">Add
                                        Wishlist</a>
                                </div>
                            </div>
                        </div>
                        <div id="wishlist-modal-list" class="wishlist-modal-list">
                            <p>Add a new sub list to classify your wishlist items. You can then manage them and find them
                                more
                                easily.</p>
                            <ul>
                                <li class="list-item is-active">
                                    <div class="meta">
                                        <span class="name">Title</span>
                                        <span class="count"><var>0</var> Items</span>
                                    </div>
                                    <div class="selected-indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </li>
                                <li class="list-item">
                                    <div class="meta">
                                        <span class="name">Title</span>
                                        <span class="count"><var>0</var> Items</span>
                                    </div>
                                    <div class="selected-indicator">
                                        <i data-feather="check"></i>
                                    </div>
                                </li>
                            </ul>
                            <div class="button-wrap">
                                <button type="submit" class="button add-to-wishlist-action is-fullwidth feather-button is-bold primary-button raised">
                                    Add To Wishlist
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
