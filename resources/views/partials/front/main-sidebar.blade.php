<div class="shop-quickview has-background-image" data-background="http://via.placeholder.com/1280x853" data-demo-background="assets/img/bg/sidebar.jpg">
    <div class="inner">
        <!-- Header -->
        <div class="quickview-header">
            <h2>BLY</h2>
            <span id="close-shop-sidebar"><i data-feather="x"></i></span>
        </div>
        <!-- Shop menu -->
        <ul class="shop-menu">
            <li>
                <a href="{{route('shop')}}">
                    <span>Shop</span>
                    <i data-feather="grid"></i>
                </a>
            </li>
            <li>
                <a href="{{route('user.account')}}">
                    <span>My Account</span>
                    <i data-feather="user"></i>
                </a>
            </li>
            <li>
                <a href="{{route('user.order')}}">
                    <span>My Orders</span>
                    <i data-feather="credit-card"></i>
                </a>
            </li>
            <li>
                <a href="{{route('user.wishlist')}}">
                    <span>My Wishlists</span>
                    <i data-feather="heart"></i>
                </a>
            </li>
        </ul>
        <!-- Profile image -->
        <ul class="user-profile">
            <li>
                <a href="javascript:void(0);">
                    <img id="quickview-avatar" src="http://via.placeholder.com/250x250" data-demo-src="{{asset('assets/img/avatars/altvatar.png')}}" alt="">
                    <span class="user">
                        @if(auth()->check())
                                <span id="quickview-username">{{auth()->user()->name}}</span>
                        @endif
{{--                        <span id="quickview-cart-count"><var>0</var> <small>Items in Cart</small></span>--}}
{{--                        </span>--}}
                </a>
            </li>
        </ul>
    </div>
</div>
