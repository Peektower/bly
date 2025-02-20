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
        <div class="section">
            <!-- Container -->
            <div class="container">

                <!-- Product Categories Grid -->
                <div class="columns category-header">
                    <div class="column main-column is-tablet-landscape-padded">
                        <!-- Title -->
                        <div class="category-title no-border is-padded">
                            <h2>SHOP</h2>
                            <img class="brand-filigrane" src="{{asset('assets/img/logo/nephos-greyscale.svg')}}" alt="">
                        </div>

                        <div class="is-categories-grid">
                            <!-- Tile Grid -->
                            <div class="tile is-ancestor">
                                <div class="tile is-vertical is-8">
                                    <div class="tile">
                                        <div class="tile is-parent is-vertical">
                                            <!-- Accessories Tile -->
                                            <article class="tile is-child has-background-image" data-background="http://via.placeholder.com/1280x853" data-demo-background="{{asset('assets/img/bg/accessories.jpg')}}" onClick="return true">
                                                <div class="tile-content is-small">
                                                    <!-- Category name -->
                                                    <h2 class="shop-category is-small">{{$cat2->name}}</h2>
                                                    <!-- Animated divider -->
                                                    <div class="divider"></div>
                                                    <!-- Category subtitle -->
                                                    <p>Inner Comfort</p>
                                                    <!-- Category description -->
                                                    <p class="is-italic">Finest products collected amongst the countrie's best artisans.</p>
                                                    <!-- Products number -->
                                                    <div class="products is-absolute">
                                                        {{$cat2->products->count()}} <span>Products</span>
                                                    </div>
                                                    <!-- View category link -->
                                                    <a href="{{route('category.show', $cat2->slug)}}" class="action">
                                                        <span>Discover</span>
                                                        <i data-feather="chevron-right"></i>
                                                    </a>
                                                </div>
                                                <!-- Overlay -->
                                                <div class="tile-overlay"></div>
                                            </article>
                                            <!-- Kitchen Tile -->
                                            <article class="tile is-child has-background-image" data-background="http://via.placeholder.com/1280x853" data-demo-background="{{asset('assets/img/bg/kitchen.jpg')}}" onClick="return true">
                                                <div class="tile-content is-small">
                                                    <h2 class="shop-category is-small">{{$cat3->name}}</h2>
                                                    <div class="divider"></div>
                                                    <p>Inner Comfort</p>
                                                    <p class="is-italic">Finest products collected amongst the countrie's best artisans.</p>
                                                    <div class="products is-absolute">
                                                        {{$cat3->products->count()}} <span>Products</span>
                                                    </div>
                                                    <a href="{{route('category.show', $cat3->slug)}}" class="action">
                                                        <span>Discover</span>
                                                        <i data-feather="chevron-right"></i>
                                                    </a>
                                                </div>
                                                <!-- Overlay -->
                                                <div class="tile-overlay"></div>
                                            </article>
                                        </div>
                                        <!-- House Tile -->
                                        <div class="tile is-parent">
                                            <article class="tile is-child has-min-height has-background-image" data-background="http://via.placeholder.com/1280x853" data-demo-background="{{asset('assets/img/bg/house.jpg')}}" onClick="return true">
                                                <div class="tile-content">
                                                    <h2 class="shop-category">{{$cat1->name}}</h2>
                                                    <div class="divider"></div>
                                                    <p>Inner Comfort</p>
                                                    <p class="is-italic">Finest products collected amongst the countrie's best artisans.</p>
                                                    <div class="products">
                                                        {{$cat1->products->count()}} <span>Products</span>
                                                    </div>
                                                    <a href="{{route('category.show', $cat1->slug)}}" class="action">
                                                        <span>Discover</span>
                                                        <i data-feather="chevron-right"></i>
                                                    </a>
                                                </div>
                                                <!-- Overlay -->
                                                <div class="tile-overlay"></div>
                                            </article>
                                        </div>
                                    </div>
                                    <!-- Kids Tile -->
                                    <div class="tile is-parent">
                                        <article class="tile is-child is-danger has-min-height has-background-image" data-background="http://via.placeholder.com/1280x853" data-demo-background="{{asset('assets/img/bg/for-kid.jpg')}}" onClick="return true">
                                            <div class="tile-content">
                                                <h2 class="shop-category">{{$cat4->name}}</h2>
                                                <div class="divider"></div>
                                                <p>Their Playground</p>
                                                <p class="is-italic">Finest products collected amongst the countrie's best artisans.</p>
                                                <div class="products">
                                                    {{$cat4->products->count()}} <span>Products</span>
                                                </div>
                                                <a href="{{route('category.show', $cat4->slug)}}" class="action">
                                                    <span>Discover</span>
                                                    <i data-feather="chevron-right"></i>
                                                </a>
                                            </div>
                                            <!-- Overlay -->
                                            <div class="tile-overlay"></div>
                                        </article>
                                    </div>
                                </div>
                                <!-- Office Tile -->
                                <div class="tile is-parent">
                                    <article class="tile is-child has-background-image" data-background="http://via.placeholder.com/1280x853" data-demo-background="{{asset('assets/img/bg/office.jpg')}}" onClick="return true">
                                        <div class="tile-content">
                                            <h2 class="shop-category">{{$cat5->name}}</h2>
                                            <div class="divider"></div>
                                            <p>Premium Office furniture</p>
                                            <p class="is-italic">Finest products collected amongst the countrie's best artisans.</p>
                                            <div class="products">
                                                {{$cat5->products->count()}} <span>Products</span>
                                            </div>
                                            <a href="{{route('category.show', $cat5->slug)}}" class="action">
                                                <span>Discover</span>
                                                <i data-feather="chevron-right"></i>
                                            </a>
                                        </div>
                                        <div class="tile-overlay"></div>
                                    </article>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- /House products -->

            </div>
            <!-- /Container -->
        </div>
        <!-- /Main section -->
    </div>
@endsection
