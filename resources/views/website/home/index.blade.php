@extends('website.master')

@section('title')
    Online Super Store
@endsection

@section('body')
    {{-- <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">

                        <div class="hero-slider">
                            @foreach ($products as $product)
                            <div class="single-slider">
                                <img style="padding-left: 450px" height="400px" width="100%" src="{{asset($product->image)}}" alt="#">
                                <div class="content">
                                    <h2 style="color: rgb(0, 0, 0)">{{$product->name}}</h2>
                                    <p></p>
                                    <h3 style="color: #000000"><span style="color: white">Now Only</span>{{$product->price}}</h3>
                                    <div class="button">
                                        <a href="{{route('product-detail',['id'=>$product->id])}}" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                       </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">

                            <div class="hero-small-banner">
                                <div class="content">
                                    <h2>iPhone 12 Pro Max</h2>
                                    <h3>$259.99</h3>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="hero-small-banner style2">
                                <div class="content">
                                    <h2>Weekly Sale!</h2>
                                    <p></p>
                                    <div class="button">
                                        <a class="btn" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

        <section class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 custom-padding-right">
                    <div class="slider-head">

                        <div class="hero-slider">

                            <div class="single-slider"
                                style="background-image: url(https://i0.wp.com/www.smartprix.com/bytes/wp-content/uploads/2023/09/iPhone-15-series.jpg?ssl=1&quality=80&w=f);">
                                <div class="content">
                                    <h2 style="color: white"><span style="color: white">No restocking fee ($35
                                            savings)</span>
                                        M75 Sport Watch
                                    </h2>
                                    <p></p>
                                    <h3 style="color: #67c7f3"><span style="color: white">Now Only</span> $320.99</h3>
                                    <div class="button">
                                        <a href="#" class="btn">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                            <div class="single-slider"
                            style="background-image: url(https://media.licdn.com/dms/image/D4D12AQHZZhyOLTajXw/article-cover_image-shrink_720_1280/0/1687512344004?e=2147483647&v=beta&t=iYGzrGhon2nM24FaRKbuVR5xU1-E4yQq5Y1wutcIgjo);">
                            <div class="content">
                                <h2 style="color: white"><span style="color: white">Big Sale Offer</span>
                                    Get the Best Deal on CCTV Camera
                                </h2>
                                <p></p>
                                <h3 style="color: #67c7f3"><span style="color: white">Combo Only:</span> $590.00</h3>
                                <div class="button">
                                    <a href="#" class="btn">Shop Now</a>
                                </div>
                            </div>
                            </div>


                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-12 md-custom-padding">

                            <div class="hero-small-banner">
                                <div class="content">
                                    <h2>iPhone 12 Pro Max</h2>
                                    <h3>$259.99</h3>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-12 col-md-6 col-12">
                            <div class="hero-small-banner style2">
                                <div class="content">
                                    <h2>Weekly Sale!</h2>
                                    <p></p>
                                    <div class="button">
                                        <a class="btn" href="#">Shop Now</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="featured-categories section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Featured Categories</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($categories as $category)
                <div  class="col-lg-4 col-md-6 col-12">

                    <div class="single-category">
                        <h3 class="heading">{{$category->name}}</h3>
                        @foreach ($category->subCategories as $subCategory)

                        <ul>
                            <li><a href="#">{{$subCategory->name}}</a></li>
                        </ul>
                        @endforeach
                        @foreach ($products as $product)

                        <div class="images">
                            <img width="250px" src=""
                                alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>


    <section class="trending-product section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Trending Product</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                <div class="col-lg-3 col-md-6 col-12">

                    <div class="single-product">
                        <div class="product-image">
                            <img height="300px" width="200px" src="{{asset($product->image)}}" alt="#">
                            <div class="button">
                                <a href="{{route('product-detail',['id'=>$product->id])}}" class="btn"><i class="lni lni-cart"></i> Add to Cart</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <span class="category">{{$product->category->name}}</span>
                            <h4 class="title">
                                <a href="{{route('product-detail',['id'=>$product->id])}}">{{$product->name}}</a>
                            </h4>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star"></i></li>
                                <li><span>4.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>{{$product->price}}</span>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="banner section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner"
                        style="background-image:url('{{ asset('/') }}website/assets/images/banner/banner-1-bg.jpg')">
                        <div class="content">
                            <h2>Smart Watch 2.0</h2>
                            <p>Space Gray Aluminum Case with <br>Black/Volt Real Sport Band </p>
                            <div class="button">
                                <a href="#" class="btn">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="single-banner custom-responsive-margin"
                        style="background-image:url('{{ asset('/') }}website/assets/images/banner/banner-2-bg.jpg')">
                        <div class="content">
                            <h2>Smart Headphone</h2>
                            <p></p>
                            <div class="button">
                                <a href="#" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="special-offer section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        <h2>Special Offer</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">

                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset('/') }}website/assets/images/products/product-3.jpg"
                                        alt="#">
                                    <div class="button">
                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>
                                            Add to
                                            Cart</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">Camera</span>
                                    <h4 class="title">
                                        <a href="#">WiFi Security Camera</a>
                                    </h4>
                                    <ul class="review">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><span>5.0 Review(s)</span></li>
                                    </ul>
                                    <div class="price">
                                        <span>$399.00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-12">

                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset('/') }}website/assets/images/products/product-8.jpg"
                                        alt="#">
                                    <div class="button">
                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>
                                            Add to
                                            Cart</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">Laptop</span>
                                    <h4 class="title">
                                        <a href="#">Apple MacBook Air</a>
                                    </h4>
                                    <ul class="review">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><span>5.0 Review(s)</span></li>
                                    </ul>
                                    <div class="price">
                                        <span>$899.00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-12">

                            <div class="single-product">
                                <div class="product-image">
                                    <img src="{{ asset('/') }}website/assets/images/products/product-6.jpg"
                                        alt="#">
                                    <div class="button">
                                        <a href="product-details.html" class="btn"><i class="lni lni-cart"></i>
                                            Add to
                                            Cart</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <span class="category">Speaker</span>
                                    <h4 class="title">
                                        <a href="#">Bluetooth Speaker</a>
                                    </h4>
                                    <ul class="review">
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star-filled"></i></li>
                                        <li><i class="lni lni-star"></i></li>
                                        <li><span>4.0 Review(s)</span></li>
                                    </ul>
                                    <div class="price">
                                        <span>$70.00</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="single-banner right"
                        style="background-image:url('{{ asset('/') }}website/assets/images/banner/banner-3-bg.jpg');margin-top: 30px;">
                        <div class="content">
                            <h2>Samsung Notebook 9 </h2>
                            <p></p>
                            <div class="price">
                                <span>$590.00</span>
                            </div>
                            <div class="button">
                                <a href="#" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="offer-content">
                        <div class="image">
                            <img src="{{ asset('/') }}website/assets/images/offer/offer-image.jpg" alt="#">
                            <span class="sale-tag">-50%</span>
                        </div>
                        <div class="text">
                            <h2><a href="#">Bluetooth Headphone</a></h2>
                            <ul class="review">
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><i class="lni lni-star-filled"></i></li>
                                <li><span>5.0 Review(s)</span></li>
                            </ul>
                            <div class="price">
                                <span>$200.00</span>
                                <span class="discount-price">$400.00</span>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-product-list section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                    <h4 class="list-title">Best Sellers</h4>

                    <div class="single-list">
                        <div class="list-image">
                            <a href="#"><img
                                    src="{{ asset('/') }}website/assets/images/home-product-list/01.jpg"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="#">GoPro Hero4 Silver</a>
                            </h3>
                            <span>$287.99</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="#"><img
                                    src="{{ asset('/') }}website/assets/images/home-product-list/02.jpg"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="#">Puro Sound Labs BT2200</a>
                            </h3>
                            <span>$95.00</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="#"><img
                                    src="{{ asset('/') }}website/assets/images/home-product-list/03.jpg"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="#">HP OfficeJet Pro 8710</a>
                            </h3>
                            <span>$120.00</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12 custom-responsive-margin">
                    <h4 class="list-title">New Arrivals</h4>

                    <div class="single-list">
                        <div class="list-image">
                            <a href="#"><img
                                    src="{{ asset('/') }}website/assets/images/home-product-list/04.jpg"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="#">iPhone X 256 GB Space Gray</a>
                            </h3>
                            <span>$1150.00</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="#"><img
                                    src="{{ asset('/') }}website/assets/images/home-product-list/05.jpg"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="#">Canon EOS M50 Mirrorless Camera</a>
                            </h3>
                            <span>$950.00</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="#"><img
                                    src="{{ asset('/') }}website/assets/images/home-product-list/06.jpg"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="#">Microsoft Xbox One S</a>
                            </h3>
                            <span>$298.00</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <h4 class="list-title">Top Rated</h4>

                    <div class="single-list">
                        <div class="list-image">
                            <a href="#"><img
                                    src="{{ asset('/') }}website/assets/images/home-product-list/07.jpg"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="#">Samsung Gear 360 VR Camera</a>
                            </h3>
                            <span>$68.00</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="#"><img
                                    src="{{ asset('/') }}website/assets/images/home-product-list/08.jpg"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="#">Samsung Galaxy S9+ 64 GB</a>
                            </h3>
                            <span>$840.00</span>
                        </div>
                    </div>


                    <div class="single-list">
                        <div class="list-image">
                            <a href="#"><img
                                    src="{{ asset('/') }}website/assets/images/home-product-list/09.jpg"
                                    alt="#"></a>
                        </div>
                        <div class="list-info">
                            <h3>
                                <a href="#">Zeus Bluetooth Headphones</a>
                            </h3>
                            <span>$28.00</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-12">
                    <h2 class="title">Popular Brands</h2>
                </div>
            </div>
            <div class="brands-logo-wrapper">
                <div class="brands-logo-carousel d-flex align-items-center justify-content-between">
                    <div class="brand-logo">
                        <img src="{{ asset('/') }}website/assets/images/brands/01.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/') }}website/assets/images/brands/02.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/') }}website/assets/images/brands/03.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/') }}website/assets/images/brands/04.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/') }}website/assets/images/brands/05.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/') }}website/assets/images/brands/06.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/') }}website/assets/images/brands/03.png" alt="#">
                    </div>
                    <div class="brand-logo">
                        <img src="{{ asset('/') }}website/assets/images/brands/04.png" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog-section section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 style="text-align-last: center">Our Latest News</h2>
                        <p></p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class=" col-md-12">

                    <div class="single-blog ">
                        <div class="blog-img">
                            <a href="blog-single-sidebar.html">
                                <img height="600px" width="100$" src="{{ asset('/') }}website/assets/images/ecommerce3-1 (1).jpg" alt="#">
                            </a>
                        </div>
                        <div class="blog-content">
                            <a class="category" href="javascript:void(0)">eCommerce</a>
                            <h4>
                                <a href="#">Our up coming feature is premium membership</a>
                            </h4>
                            <p></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="shipping-info">
        <div class="container">
            <ul>

                <li>
                    <div class="media-icon">
                        <i class="lni lni-delivery"></i>
                    </div>
                    <div class="media-body">
                        <h5>Free Shipping</h5>
                        <span>On order over $99</span>
                    </div>
                </li>

                <li>
                    <div class="media-icon">
                        <i class="lni lni-support"></i>
                    </div>
                    <div class="media-body">
                        <h5>24/7 Support.</h5>
                        <span>Live Chat Or Call.</span>
                    </div>
                </li>

                <li>
                    <div class="media-icon">
                        <i class="lni lni-credit-cards"></i>
                    </div>
                    <div class="media-body">
                        <h5>Online Payment.</h5>
                        <span>Secure Payment Services.</span>
                    </div>
                </li>

                <li>
                    <div class="media-icon">
                        <i class="lni lni-reload"></i>
                    </div>
                    <div class="media-body">
                        <h5>Easy Return.</h5>
                        <span>Hassle Free Shopping.</span>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection
