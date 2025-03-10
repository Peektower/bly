@extends('layouts.main')
@section('content')
    <!-- Content Wrapper -->
    <div class="shop-wrapper has-background-image">

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
        <!-- Background Caption -->
        <div class="background-caption">
            <h1>BLY</h1>
        </div>

        <!-- Hero Caption -->
        <div class="hero-caption">
            <h1>BLY</h1>
            <h2>MODERN SHOP TEMPLATE</h2>
            <a href="{{route('shop')}}" class="button big-button primary-button upper-button rounded raised">Start shopping</a>
        </div>

        <!-- Fullscreen Slick SLider -->
        <div class="slider-wrapper">
            <div class="fullscreen-slick">
                <div class="full-slide has-background-image" data-background="http://via.placeholder.com/1920x1080" data-demo-background="{{asset('assets/img/bg/main-bg.jpg')}}"></div>
                <div class="full-slide has-background-image" data-background="http://via.placeholder.com/1920x1080" data-demo-background="{{asset('assets/img/bg/main-bg.jpg')}}"></div>
                <div class="full-slide has-background-image" data-background="http://via.placeholder.com/1920x1080" data-demo-background="{{asset('assets/img/bg/main-bg.jpg')}}"></div>
                <div class="full-slide has-background-image" data-background="http://via.placeholder.com/1920x1080" data-demo-background="{{asset('assets/img/bg/main-bg.jpg')}}"></div>
            </div>
        </div>
    </div>
    <!-- /Content Wrapper -->

@endsection
