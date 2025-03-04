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
        <div id="shop-wishlist" class="section">
            <!-- Container -->
            <div class="container">

                <!-- Wishlists Layout -->
                <div class="columns account-header">
                    <div class="column main-column is-tablet-landscape-padded">
                        <!-- title -->
                        <div class="account-title">
                            <h2>WISHLIST</h2>
                            <!-- Icon filigrane -->
                            <img class="brand-filigrane" src="assets/img/logo/nephos-greyscale.svg" alt="">
                        </div>

                        <!-- Account tabs -->
                        @include('partials.front.acct-tab')

                        @if(!auth()->check())
                            @include('partials.front.not-log')
                        @else

                        <div id="wishlist-empty-placeholder" class="main-placeholder is-hidden">
                            <div class="placeholder-content">
                                <img src="assets/img/illustrations/add-to-cart.svg" alt="">
                                <h3>No Wishlists</h3>
                                <p>You currently don't have any wishlist saved. Start by creating one.</p>
                                <div class="button-wrap">
                                    <a class="button big-button primary-button rounded raised modal-trigger" data-modal="new-wishlist">Add Wishlist</a>
                                </div>
                            </div>
                        </div>

                        <!-- Row -->
                        <div id="wishlist-main" class="columns is-account-grid is-multiline">
                            <!--Loader-->
{{--                            <div class="account-loader is-active">--}}
{{--                                <div class="loader is-loading"></div>--}}
{{--                            </div>--}}
                            <!-- Wishlists -->
                            <div class="column is-4">
                                <!-- List of Wishlists -->
                                <div class="flat-card is-auto menu-card">
                                    <div class="card-title">
                                        <h3>Add Wishlist</h3>

                                        <div class="edit-account">
                                            <a href="javascript:void(0);" class="modal-trigger has-simple-popover" data-modal="new-wishlist" data-content="Add a New Wishlist" data-placement="top"><i class="feather-icons" data-feather="plus"></i></a>
                                        </div>
                                    </div>
                                    <ul class="wishlists">
                                        <li class="is-active">
                                            <a>Main List</a>
                                            <div class="action-block">
                                                <span>5 items</span>
                                                <button class="remove-button">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </div>
                                        </li>
                                        <li>
                                            <a>Couches</a>
                                            <div class="action-block">
                                                <span>5 items</span>
                                                <button class="remove-button">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </div>
                                        </li>
                                        <li>
                                            <a>Tables</a>
                                            <div class="action-block">
                                                <span>5 items</span>
                                                <button class="remove-button">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </div>
                                        </li>
                                        <li>
                                            <a>Accessories</a>
                                            <div class="action-block">
                                                <span>5 items</span>
                                                <button class="remove-button">
                                                    <i data-feather="trash-2"></i>
                                                </button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div id="wishlists-container" class="column is-8">

                                <div class="flat-card wishlist-card is-auto">
                                    <!-- List of Wishlist Items -->
                                    <ul class="wishlist">

                                        <!-- Wishlist Item -->
                                        <li class="wishlist-item" onclick="return true">
                                            <div class="item-wrapper">
                                                <!-- Product Image -->
                                                <img src="http://via.placeholder.com/500x500/ffffff/999999" data-demo-src="assets/img/products/office6.png" alt="">
                                                <!-- Product meta -->
                                                <span class="product-info">
                                                        <a>The Conqueror</a>
                                                        <span>Office</span>
                                                </span>
                                                <div class="action">
                                                    <!-- actions -->
                                                    <a class="add-button">
                                                        <i data-feather="shopping-cart"></i>
                                                    </a>
                                                    <a class="remove-button">
                                                        <i data-feather="trash-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Wishlist Item -->
                                        <li class="wishlist-item" onclick="return true">
                                            <div class="item-wrapper">
                                                <img src="http://via.placeholder.com/500x500/ffffff/999999" data-demo-src="assets/img/products/office7.gif" alt="">
                                                <span class="product-info">
                                                        <a>The Gentleman</a>
                                                        <span>Office</span>
                                                </span>
                                                <div class="action">
                                                    <!-- actions -->
                                                    <a class="add-button">
                                                        <i data-feather="shopping-cart"></i>
                                                    </a>
                                                    <a class="remove-button">
                                                        <i data-feather="trash-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Wishlist Item -->
                                        <li class="wishlist-item" onclick="return true">
                                            <div class="item-wrapper">
                                                <img src="http://via.placeholder.com/500x500/ffffff/999999" data-demo-src="assets/img/products/access1.jpg" alt="">
                                                <span class="product-info">
                                                        <a>Styled Lamp</a>
                                                        <span>Accessories</span>
                                                </span>
                                                <div class="action">
                                                    <!-- actions -->
                                                    <a class="add-button">
                                                        <i data-feather="shopping-cart"></i>
                                                    </a>
                                                    <a class="remove-button">
                                                        <i data-feather="trash-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Wishlist Item -->
                                        <li class="wishlist-item" onclick="return true">
                                            <div class="item-wrapper">
                                                <img src="http://via.placeholder.com/500x500/ffffff/999999" data-demo-src="assets/img/products/kids5.jpg" alt="">
                                                <span class="product-info">
                                                        <a>Treasure Chest</a>
                                                        <span>For Kids</span>
                                                </span>
                                                <div class="action">
                                                    <!-- actions -->
                                                    <a class="add-button">
                                                        <i data-feather="shopping-cart"></i>
                                                    </a>
                                                    <a class="remove-button">
                                                        <i data-feather="trash-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>

                                        <!-- Wishlist Item -->
                                        <li class="wishlist-item" onclick="return true">
                                            <div class="item-wrapper">
                                                <img src="http://via.placeholder.com/500x500/ffffff/999999" data-demo-src="assets/img/products/modern-bed.jpg" alt="">
                                                <span class="product-info">
                                                        <a>Modern Bed</a>
                                                        <span>House</span>
                                                </span>
                                                <div class="action">
                                                    <!-- actions -->
                                                    <a class="add-button">
                                                        <i data-feather="shopping-cart"></i>
                                                    </a>
                                                    <a class="remove-button">
                                                        <i data-feather="trash-2"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>

                                <!-- List Pagination -->
                                <!--div class="wishlist-pagination">
                                        <ul>
                                            <li class="is-active"><span>1</span></li>
                                            <li><span>2</span></li>
                                            <li><span>3</span></li>
                                            <li><span>4</span></li>
                                        </ul>
                                    </div-->
                                <!-- /List Pagination -->
                            </div>
                        </div>
                        @endif
                        <!-- /Row -->
                    </div>
                </div>
            </div>
            <!-- /Container -->
        </div>
        <!-- /Main section -->
    </div>
    <!-- /Main wrapper -->

    <!-- Add Wishlist Modal -->
    <div id="new-wishlist" class="modal wishlist-modal">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <div class="box-header">
                    <img src="assets/img/logo/nephos-greyscale.svg" alt="">
                    <span>NEW LIST</span>
                    <div class="modal-delete"><i data-feather="x"></i></div>
                </div>
                <div class="box-body">
                    <img src="assets/img/illustrations/wishlist.svg" alt="">
                    <div class="inner-content">
                        <p>Add a new sub list to classify your wishlist items. You can then manage them and find them more easily.</p>
                        <div class="control">
                            <input id="new-wishlist-input" type="text" class="input is-minimal" placeholder="Wishlist name">
                        </div>
                        <div class="button-wrap">
                            <button type="submit" class="button add-wishlist-action is-fullwidth feather-button is-bold primary-button raised">
                                Create
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
