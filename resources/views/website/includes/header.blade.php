
<div class="preloader">
    <div class="preloader-inner">
        <div class="preloader-icon">
            <span></span>
            <span></span>
        </div>
    </div>
</div>


<header class="header navbar-area">

    <div class="topbar"  style="background-color: #67c7f3">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-12">
                    <div class="top-middle">
                        <ul class="useful-links">
                            <li><a href="{{route("home")}}">Home</a></li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="contact.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-12">
                    <div class="top-end">
                        <div class="user">
                            <i class="lni lni-user"></i>
                            Hello
                        </div>
                        <ul class="user-login">
                            <li>
                                <a href="login.html">Sign In</a>
                            </li>
                            <li>
                                <a href="register.html">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-middle">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-3 col-7">

                    <a class="navbar-brand" href="{{route('home')}}">
                        <h1 style="color: #67c7f3">eₐₛy sₕₒₚ</h1>
                    </a>

                </div>
                <div class="col-lg-5 col-md-7 d-xs-none">

                    <div class="main-menu-search">

                        <div class="navbar-search search-style-5">
                            <div class="search-select">
                                <div class="select-position">
                                    <select id="select1">
                                        <option selected>All</option>
                                        <option value="1">Watch</option>
                                        <option value="2">Headphones</option>
                                    </select>
                                </div>
                            </div>
                            <div class="search-input" >
                                <input type="text" placeholder="Search">
                            </div>
                            <div class="search-btn">
                                <button><i class="lni lni-search-alt"></i></button>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4 col-md-2 col-5">
                    <div class="middle-right-area">
                        <div class="nav-hotline">
                            <i class="lni lni-phone"></i>
                            <h3>Hotline:
                                <span>(+880) 1955904596</span>
                            </h3>
                        </div>
                        <div class="navbar-cart">
                            <div class="wishlist">
                                <a href="javascript:void(0)">
                                    <i class="lni lni-heart"></i>
                                    <span class="total-items">0</span>
                                </a>
                            </div>
                            <div class="cart-items">
                                <a href="javascript:void(0)" class="main-btn">
                                    <i class="lni lni-cart"></i>
                                    <span class="total-items">2</span>
                                </a>

                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>2 Items</span>
                                        <a href="cart.html">View Cart</a>
                                    </div>
                                    <ul class="shopping-list">
                                        <li>
                                            <a href="javascript:void(0)" class="remove"
                                                title="Remove this item"><i class="lni lni-close"></i></a>
                                            <div class="cart-img-head">
                                                <a class="cart-img" href="product-details.html"><img
                                                        src="{{asset('/')}}website/assets/images/header/cart-items/item1.jpg"
                                                        alt="#"></a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="product-details.html">
                                                        Apple Watch Series 6</a></h4>
                                                <p class="quantity">1x - <span class="amount">$99.00</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0)" class="remove"
                                                title="Remove this item"><i class="lni lni-close"></i></a>
                                            <div class="cart-img-head">
                                                <a class="cart-img" href="product-details.html"><img
                                                        src="{{asset('/')}}website/assets/images/header/cart-items/item2.jpg"
                                                        alt="#"></a>
                                            </div>
                                            <div class="content">
                                                <h4><a href="product-details.html">Wi-Fi Smart Camera</a></h4>
                                                <p class="quantity">1x - <span class="amount">$35.00</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">$134.00</span>
                                        </div>
                                        <div class="button">
                                            <a href="#" class="btn animate">Checkout</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="nav-inner">

                    <div class="mega-category-menu">
                        <span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
                        <ul class="sub-category">
                            @foreach ($categories as $category)
                            <li>
                                <a href="{{route('product-category', ['id' => $category->id])}}">{{$category->name}}
                                    @if (count($category->subCategories) > 0 )
                                    <i class="lni lni-chevron-right"></i>
                                    @endif
                                </a>
                                <ul class="inner-sub-category">
                                    @foreach ($category->subCategories as $subCategory)
                                    <li><a href="">{{$subCategory->name}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>


                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav mx-auto">
                                <li class="nav-item">
                                    <a href="#" class="active" aria-label="Toggle navigation">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)"
                                        data-bs-toggle="collapse" data-bs-target="#submenu-1-2"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">Pages</a>
                                    <ul class="sub-menu collapse" id="submenu-1-2">
                                        <li class="nav-item"><a href="about-us.html">About Us</a></li>
                                        <li class="nav-item"><a href="faq.html">Faq</a></li>
                                        <li class="nav-item"><a href="login.html">Login</a></li>
                                        <li class="nav-item"><a href="register.html">Register</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="dd-menu collapsed" href="javascript:void(0)"
                                        data-bs-toggle="collapse" data-bs-target="#submenu-1-3"
                                        aria-controls="navbarSupportedContent" aria-expanded="false"
                                        aria-label="Toggle navigation">Shop</a>
                                    <ul class="sub-menu collapse" id="#">
                                        <li class="nav-item"><a href="#">Product List</a></li>
                                        <li class="nav-item"><a href="#">Single Product</a></li>
                                        <li class="nav-item"><a href="#">Cart</a></li>
                                        <li class="nav-item"><a href="#">Checkout</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">

                <div class="nav-social">
                    <h5 class="title">Follow Us:</h5>
                    <ul>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

</header>