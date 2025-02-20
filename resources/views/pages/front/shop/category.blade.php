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
        <div id="shop-list" class="section">
            <!-- Container -->
            <div class="container">

                <!-- House products -->
                <div class="columns category-header">
                    <div class="column main-column is-tablet-landscape-padded">
                        <!-- Title -->
                        <div class="category-title is-product-category">
                            <h2>{{$category->name}}</h2>
                            <div class="category-icon is-hidden-mobile">
                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M458.667,0H53.333C23.893,0.035,0.035,23.893,0,53.333v405.333C0.035,488.107,23.893,511.965,53.333,512h405.333
                                                         c29.441-0.035,53.298-23.893,53.333-53.333V53.333C511.965,23.893,488.107,0.035,458.667,0z M490.667,458.667
                                                         c0,17.673-14.327,32-32,32H53.333c-17.673,0-32-14.327-32-32V53.333c0-17.673,14.327-32,32-32h405.333c17.673,0,32,14.327,32,32
                                                         V458.667z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="245.333" y="42.667" width="21.333" height="352" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M320,181.333h-21.333v21.333H320V224h-21.333v21.333H320c0.295,0.006,0.589,0.006,0.884,0
                                                         c11.538-0.244,20.693-9.795,20.449-21.333v-21.333c0.006-0.295,0.006-0.589,0-0.884C341.089,190.245,331.538,181.089,320,181.333z
                                                         " />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <path d="M213.333,202.667v-21.333H192c-0.295-0.006-0.589-0.006-0.884,0c-11.538,0.244-20.693,9.795-20.449,21.333V224
                                                         c-0.006,0.295-0.006,0.589,0,0.884c0.244,11.538,9.795,20.693,21.333,20.449h21.333V224H192v-21.333H213.333z" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="42.667" y="384" width="426.667" height="21.333" />
                                        </g>
                                    </g>
                                    <g>
                                        <g>
                                            <rect x="234.667" y="437.333" width="42.667" height="21.333" />
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>

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
                                        <option>Default Sort</option>
                                        <option>Best Sellers</option>
                                        <option>Highest Rated</option>
                                        <option>Best Deals</option>
                                        <option>Newest Products</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /Controls -->

                        <!-- Product List -->
                        <div class="columns is-product-list is-multiline">
                            <div class="column is-12">
                                <ul>
                                    <!-- Product -->
                                    @forelse($products as $pro)
                                    <li class="flat-card product-container is-auto is-list-item" data-product-id="1" data-product-category="House">
                                        <!-- Product image -->
                                        <span class="image">
                                                <img src="{{$pro->proImg}}" data-demo-src="{{$pro->proImg}}" alt="">
                                            </span>
                                        <!-- Product meta -->
                                        <span class="product-info">
                                                <!-- Rating -->
                                                <span class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <small class="is-hidden-mobile">47 Ratings</small>
                                                </span>
                                            <!-- Meta -->
                                        <a class="product-details" href="{{route('product.show', $pro->slug)}}"><span class="product-name">{{$pro->name}}</span></a>
                                        <span class="product-description">Lorem ipsum sit dolor amet</span>
                                        <span class="product-price">
                                                    <span>{{$pro->price}}</span>
                                        </span>
                                        </span>

                                        <!-- Abstract -->
                                        <span class="product-abstract is-hidden-mobile">
                                                {{str_limit($pro->description, 120)}}
                                                <span class="view-more">
                                                    <a class="product-details" href="{{route('product.show', $pro->slug)}}">View more <i data-feather="chevron-right"></i></a>
                                                </span>
                                        </span>

                                        <!-- Actions -->
                                        <span class="actions">
                                                <span class="add"><i data-feather="shopping-cart" class="has-simple-popover" onclick="addToCart({{$pro->id}})" data-content="Add to Cart" data-placement="top"></i></span>
                                        <span class="like"><i data-feather="heart" class="has-simple-popover" data-content="Add to Wishlist" data-placement="top"></i></span>
                                        </span>
                                    </li>
                                    @empty
                                    @endforelse
                                    <!-- Product -->
                                </ul>

                            </div>

                        </div>
                        <!-- /Product list -->

                        <div class="show-more"><a href="#">Show more products</a></div>

                    </div>
                </div>
                <!-- /House products -->

            </div>
            <!-- /Container -->
        </div>
        <!-- /Main section -->
    </div>

@endsection
