<!-- Header -->
<header id="header" class="header-default header-style-4">
    <div class="main-header line-bt">
        <div class="container">
            <div class="row wrapper-header align-items-center">
                <div class="col-xl-5 d-none d-xl-block">
                    <div class="wrapper-header-left d-flex align-items-center gap-20">
                        <div class="tf-currencies">
                            <select class="image-select center style-default type-currencies">
                                <option selected data-thumbnail="{{ url('frontend/images/country/eu.svg') }}">GBP</option>
                            </select>
                        </div>
                        <div class="tf-languages">
                            <select class="image-select center style-default type-languages">
                                <option>English</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-3 d-xl-none">
                    <a href="#mobileMenu" class="mobile-menu" data-bs-toggle="offcanvas" aria-controls="mobileMenu">
                        <i class="icon icon-categories"></i>
                    </a>
                </div>

                <div class="col-xl-2 col-md-4 col-6 text-center">
                    <a href="index.html" class="logo-header">
                        <img src="{{ url('storage') }}/{{ setting('site.headerlogo') }}" alt="{{ ucwords(config('app.name')) }}" class="logo">
                    </a>
                </div>
                
                <div class="col-xl-5 col-md-4 col-3">
                    <ul class="nav-icon d-flex justify-content-end align-items-center">
                        <li class="nav-search"><a href="#search" data-bs-toggle="modal" class="nav-icon-item">
                            <span class="icon icon-search2"></span>
                                
                        </a></li>
                        <li class="nav-account">
                            <a href="#" class="nav-icon-item"><span class="icon icon-user"></span></a>
                            <div class="dropdown-account dropdown-login">
                                <div class="sub-top">
                                    <a href="login.html" class="tf-btn btn-reset">Login</a>
                                    <p class="text-center text-secondary-2">Don’t have an account? <a href="register.html">Register</a></p>
                                </div>
                                <div class="sub-bot">
                                    <span class="body-text-">Support</span>
                                </div>
                            </div>
                        </li>
                        <li class="nav-wishlist"><a href="wish-list.html" class="nav-icon-item">
                            <span class="icon icon-heart"></span>  
                            </a>
                        </li>
                        <li class="nav-cart"><a href="#shoppingCart" data-bs-toggle="modal" class="nav-icon-item">
                            <span class="icon icon-ShoppingBagOpen"></span> 
                            <span class="count-box">1</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom style-2 d-none d-xl-block line-bt">
        <div class="container">
            <div class="row wrapper-header align-items-center">
                <div class="col-xl-3">
                    <div class="box-left">
                        <div class="tf-list-categories">
                            <a href="#" class="categories-title"><span class="text">BROWSE CATEGORIES</span> <span class="icon icon-arrow-down"></span></a>
                            <div class="list-categories-inner">
                                <ul>
                                    <li class="sub-categories2">
                                        <a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-laptop"></i> Accessories</span><i class="icon icon-arrRight"></i></a>
                                        <ul class="list-categories-inner">
                                            <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-camera"></i> Camera & Photo</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-camera"></i> Camera & Photo</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-camera"></i> Camera & Photo</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-categories2">
                                        <a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-camera"></i> Camera & Photo</span><i class="icon icon-arrRight"></i></a>
                                        <ul class="list-categories-inner">
                                            <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-camera"></i> Camera & Photo</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-camera"></i> Camera & Photo</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-camera"></i> Camera & Photo</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-smartphone"></i> Smart Phones</span></a></li>
                                    <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-tv"></i> TV & Audio</span><i class="icon icon-arrRight"></i></a></li>
                                    <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-laptop"></i> Computer & Laptop</span><i class="icon icon-arrRight"></i></a></li>
                                    <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-software"></i> Software</span></a></li>
                                    <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-headphones"></i> Headphones</span></a></li>
                                    <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-audio"></i> Home Audio</span></a></li>
                                    <li><a href="#" class="categories-item"><span class="inner-left"><i class="icon icon-security"></i> Security & Surveillance</span><i class="icon icon-arrRight"></i></a></li>
                                </ul>
                                <div class="box-cate-bottom">
                                    <ul>
                                        <li><a href="#" class="categories-item"><span class="inner-left"> Accessories</span><i class="icon icon-arrRight"></i></a></li>
                                        <li><a href="#" class="categories-item"><span class="inner-left"> Camera & Photo</span><i class="icon icon-arrRight"></i></a></li>
                                        <li><a href="#" class="categories-item"><span class="inner-left"> Smart Phones</span><i class="icon icon-arrRight"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <nav class="box-navigation text-center">
                        <ul class="box-nav-ul d-flex align-items-center justify-content-center">
                            <li class="menu-item active">
                                <a href="#" class="item-link">Home<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu mega-menu">
                                    <div class="container">
                                        <div class="row-demo">
                                            <div class="demo-item">
                                                <a href="index.html">
                                                    <div class="demo-image position-relative">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-womenswear.jpg" src="images/demo/home-fashion-womenswear.jpg" alt="home-fashion-womenswear">
                                                        <div class="demo-label">
                                                            <span class="demo-new">New</span>
                                                            <span>Trend</span>
                                                        </div>
                                                    </div>
                                                    <span class="demo-name">Fashion Womenswear</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-eleganceNest.html">
                                                    <div class="demo-image position-relative">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-eleganceNest.jpg" src="images/demo/home-fashion-eleganceNest.jpg" alt="home-fashion-eleganceNest">
                                                        <div class="demo-label">
                                                            <span class="demo-new">New</span>
                                                            <span class="demo-hot">Hot</span>
                                                        </div>
                                                    </div>
                                                    <span class="demo-name">Fashion EleganceNest</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-main.html">
                                                    <div class="demo-image position-relative">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-main.jpg" src="images/demo/home-fashion-main.jpg" alt="home-fashion-main">
                                                        <div class="demo-label">
                                                            <span class="demo-hot">Hot</span>
                                                        </div>
                                                    </div>
                                                    <span class="demo-name">Fashion Main</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-trendset.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-trendset.jpg" src="images/demo/home-fashion-trendset.jpg" alt="home-fashion-trendset">
                                                    </div>
                                                    <span class="demo-name">Fashion TrendsetHome</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-vogueLing.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-vogueLiving.jpg" src="images/demo/home-fashion-vogueLiving.jpg" alt="home-fashion-vogueLiving">
                                                    </div>
                                                    <span class="demo-name">Fashion VogueLiving</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-elegantAbode.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-elegantAbode.jpg" src="images/demo/home-fashion-elegantAbode.jpg" alt="home-fashion-elegantAbode">
                                                    </div>
                                                    <span class="demo-name">Fashion ElegantAbode</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-glamDwell.html">
                                                    <div class="demo-image position-relative">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-glamDwell.jpg" src="images/demo/home-fashion-glamDwell.jpg" alt="home-fashion-glamDwell">
                                                        <div class="demo-label">
                                                            <span class="demo-new">New</span>
                                                        </div>
                                                    </div>
                                                    <span class="demo-name">Fashion GlamDwell</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-classyCove.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-classycove.jpg" src="images/demo/home-fashion-classycove.jpg" alt="home-fashion-classyCove">
                                                    </div>
                                                    <span class="demo-name">Fashion ClassyCove</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-chicHaven.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-chicHaven.jpg" src="images/demo/home-fashion-chicHaven.jpg" alt="home-fashion-chicHaven1">
                                                    </div>
                                                    <span class="demo-name">Fashion ChicHaven 1</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-chicHaven-02.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-chicHaven2.jpg" src="images/demo/home-fashion-chicHaven2.jpg" alt="home-fashion-chicHaven2">
                                                    </div>
                                                    <span class="demo-name">Fashion ChicHaven 2</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-tiktok.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-tiktok.jpg" src="images/demo/home-fashion-tiktok.jpg" alt="home-fashion-tiktok">
                                                    </div>
                                                    <span class="demo-name">Fashion TikTok</span>
                                                </a>
                                            </div>
                                            <div class="demo-item">
                                                <a href="home-fashion-luxeLiving.html">
                                                    <div class="demo-image">
                                                        <img class="lazyload" data-src="images/demo/home-fashion-luxeLiving.jpg" src="images/demo/home-fashion-luxeLiving.jpg" alt="home-fashion-luxeLiving">
                                                    </div>
                                                    <span class="demo-name">Fashion LuxeLiving</span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="text-center view-all-demo">
                                            <a href="#modalDemo" data-bs-toggle="modal" class="tf-btn"><span class="text">View All Demos</span></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="item-link">Shop<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu mega-menu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">Shop Layout</div>
                                                    <ul class="menu-list">
                                                        <li><a href="shop-default-grid.html" class="menu-link-text">Default Grid</a></li>
                                                        <li><a href="shop-default-list.html" class="menu-link-text">Default List</a></li>
                                                        <li><a href="shop-fullwidth-list.html" class="menu-link-text">Full Width List</a></li>
                                                        <li><a href="shop-fullwidth-grid.html" class="menu-link-text">Full Width Grid</a></li>
                                                        <li><a href="shop-left-sidebar.html" class="menu-link-text">Left Sidebar</a></li>
                                                        <li><a href="shop-right-sidebar.html" class="menu-link-text">Right Sidebar</a></li>
                                                        <li><a href="shop-filter-dropdown.html" class="menu-link-text">Filter Dropdown</a></li>
                                                        <li><a href="shop-filter-canvas.html" class="menu-link-text">Filter Canvas</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">Shop Features</div>
                                                    <ul class="menu-list">
                                                        <li><a href="shop-categories-top.html" class="menu-link-text">Categories Top 1</a></li>
                                                        <li><a href="shop-categories-top-02.html" class="menu-link-text">Categories Top 2</a></li>
                                                        <li><a href="shop-collection.html" class="menu-link-text">Shop Collection</a></li>
                                                        <li><a href="shop-breadcrumb-img.html" class="menu-link-text">Breadcrumb IMG</a></li>
                                                        <li><a href="shop-breadcrumb-left.html" class="menu-link-text">Breadcrumb Left</a></li>
                                                        <li><a href="shop-breadcrumb-background.html" class="menu-link-text">Breadcrumb BG</a></li>
                                                        <li><a href="shop-load-button.html" class="menu-link-text">Load Button</a></li>
                                                        <li><a href="shop-pagination.html" class="menu-link-text">Pagination</a></li>
                                                        <li><a href="shop-infinite-scrolling.html" class="menu-link-text">Infinite Scrolling</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">Products Hover</div>
                                                    <ul class="menu-list">
                                                        
                                                        <li><a href="product-style-01.html" class="menu-link-text">Product Style 1</a></li>
                                                        <li><a href="product-style-02.html" class="menu-link-text">Product Style 2</a></li>
                                                        <li><a href="product-style-03.html" class="menu-link-text">Product Style 3</a></li>
                                                        <li><a href="product-style-04.html" class="menu-link-text">Product Style 4</a></li>
                                                        <li><a href="product-style-05.html" class="menu-link-text">Product Style 5</a></li>
                                                        <li><a href="product-style-06.html" class="menu-link-text">Product Style 6</a></li>
                                                        <li><a href="product-style-07.html" class="menu-link-text">Product Style 7</a></li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">My Pages</div>
                                                    <ul class="menu-list">
                                                        <li><a href="wish-list.html" class="menu-link-text">Wish List</a></li>
                                                        <li><a href="search-result.html" class="menu-link-text">Search Result</a></li>
                                                        <li><a href="shopping-cart.html" class="menu-link-text">Shopping Cart</a></li>
                                                        <li><a href="login.html" class="menu-link-text">Login/Register</a></li>
                                                        <li><a href="forget-password.html" class="menu-link-text">Forget Password</a></li>
                                                        <li><a href="order-tracking.html" class="menu-link-text">Order Tracking</a></li>
                                                        <li><a href="my-account.html" class="menu-link-text">My Account</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                            <div class="wrapper-sub-shop">
                                                <div class="menu-heading">Recent Products</div>
                                                <div dir="ltr" class="swiper tf-product-header">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <div class="card-product">
                                                                <div class="card-product-wrapper">
                                                                    <a href="product-detail.html" class="product-img">
                                                                        <img class="lazyload img-product" data-src="images/products/womens/women-19.jpg" src="images/products/womens/women-19.jpg" alt="image-product">
                                                                        <img class="lazyload img-hover" data-src="images/products/womens/women-20.jpg" src="images/products/womens/women-20.jpg" alt="image-product">
                                                                    </a>
                                                                    <div class="list-product-btn">
                                                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                                            <span class="icon icon-heart"></span>
                                                                            <span class="tooltip">Wishlist</span>
                                                                        </a>
                                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                                            <span class="icon icon-gitDiff"></span>
                                                                            <span class="tooltip">Compare</span>
                                                                        </a>
                                                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                                            <span class="icon icon-eye"></span>
                                                                            <span class="tooltip">Quick View</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-btn-main">
                                                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                                    </div> 
                                                                </div>
                                                                <div class="card-product-info">
                                                                    <a href="product-detail.html" class="title link">V-neck cotton T-shirt</a>
                                                                    <span class="price">$59.99</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="card-product">
                                                                <div class="card-product-wrapper">
                                                                    <a href="product-detail.html" class="product-img">
                                                                        <img class="lazyload img-product" data-src="images/products/womens/women-37.jpg" src="images/products/womens/women-37.jpg" alt="image-product">
                                                                        <img class="lazyload img-hover" data-src="images/products/womens/women-38.jpg" src="images/products/womens/women-38.jpg" alt="image-product">
                                                                    </a>
                                                                    <div class="list-product-btn">
                                                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                                            <span class="icon icon-heart"></span>
                                                                            <span class="tooltip">Wishlist</span>
                                                                        </a>
                                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                                            <span class="icon icon-gitDiff"></span>
                                                                            <span class="tooltip">Compare</span>
                                                                        </a>
                                                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                                            <span class="icon icon-eye"></span>
                                                                            <span class="tooltip">Quick View</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-btn-main">
                                                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                                    </div> 
                                                                </div>
                                                                <div class="card-product-info">
                                                                    <a href="product-detail.html" class="title link">Polarized sunglasses</a>
                                                                    <span class="price">$59.99</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="card-product">
                                                                <div class="card-product-wrapper">
                                                                    <a href="product-detail.html" class="product-img">
                                                                        <img class="lazyload img-product" data-src="images/products/womens/women-8.jpg" src="images/products/womens/women-8.jpg" alt="image-product">
                                                                        <img class="lazyload img-hover" data-src="images/products/womens/women-9.jpg" src="images/products/womens/women-9.jpg" alt="image-product">
                                                                    </a>
                                                                    <div class="list-product-btn">
                                                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                                            <span class="icon icon-heart"></span>
                                                                            <span class="tooltip">Wishlist</span>
                                                                        </a>
                                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                                            <span class="icon icon-gitDiff"></span>
                                                                            <span class="tooltip">Compare</span>
                                                                        </a>
                                                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                                            <span class="icon icon-eye"></span>
                                                                            <span class="tooltip">Quick View</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-btn-main">
                                                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                                    </div> 
                                                                </div>
                                                                <div class="card-product-info">
                                                                    <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                                                    <span class="price">$59.99</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="card-product">
                                                                <div class="card-product-wrapper">
                                                                    <a href="product-detail.html" class="product-img">
                                                                        <img class="lazyload img-product" data-src="images/products/womens/women-171.jpg" src="images/products/womens/women-172.jpg" alt="image-product">
                                                                        <img class="lazyload img-hover" data-src="images/products/womens/women-171.jpg" src="images/products/womens/women-172.jpg" alt="image-product">
                                                                    </a>
                                                                    <div class="list-product-btn">
                                                                        <a href="javascript:void(0);" class="box-icon wishlist btn-icon-action">
                                                                            <span class="icon icon-heart"></span>
                                                                            <span class="tooltip">Wishlist</span>
                                                                        </a>
                                                                        <a href="#compare" data-bs-toggle="offcanvas" aria-controls="compare" class="box-icon compare btn-icon-action">
                                                                            <span class="icon icon-gitDiff"></span>
                                                                            <span class="tooltip">Compare</span>
                                                                        </a>
                                                                        <a href="#quickView" data-bs-toggle="modal" class="box-icon quickview tf-btn-loading">
                                                                            <span class="icon icon-eye"></span>
                                                                            <span class="tooltip">Quick View</span>
                                                                        </a>
                                                                    </div>
                                                                    <div class="list-btn-main">
                                                                        <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                                                                    </div> 
                                                                </div>
                                                                <div class="card-product-info">
                                                                    <a href="product-detail.html" class="title link">Faux-leather trousers</a>
                                                                    <span class="price">$79.99</span>
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
                            </li>
                            <li class="menu-item">
                                <a href="#" class="item-link">Products<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu mega-menu">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">Products Layout</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-detail.html" class="menu-link-text">Product Default</a></li>
                                                        <li><a href="product-grid-1.html" class="menu-link-text">Product Grid1</a></li>
                                                        <li><a href="product-grid-2.html" class="menu-link-text">Product Grid2</a></li>
                                                        <li><a href="product-stacked.html" class="menu-link-text">Product stacked</a></li>
                                                        <li><a href="product-right-thumbnails.html" class="menu-link-text">Product right thumbnails</a></li>
                                                        <li><a href="product-bottom-thumbnails.html" class="menu-link-text">Product bottom thumbnails</a></li>
                                                        <li><a href="product-description-accordion.html" class="menu-link-text">Product Description Accordion</a></li>
                                                        <li><a href="product-description-list.html" class="menu-link-text">Product Description List</a></li>
                                                        <li><a href="product-description-menutab.html" class="menu-link-text">Product Description MenuTab</a></li>
                                                        <li><a href="product-description-fullwidth.html" class="menu-link-text">Product Description Fullwidth</a></li>
                                                        <li><a href="product-fixed-price.html" class="menu-link-text">Product Fixed Price</a></li>
                                                        <li><a href="product-fixed-scroll.html" class="menu-link-text">Product Fixed Scrolls</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">Colors Swatched</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-swatch-color.html" class="menu-link-text">Product Swatch Color</a></li>
                                                        <li><a href="product-swatch-rounded.html" class="menu-link-text">Product Swatch Rounded</a></li>
                                                        <li><a href="product-swatch-rounded-color.html" class="menu-link-text">Product Swatch Rounded Colors</a></li>
                                                        <li><a href="product-swatch-image.html" class="menu-link-text">Product Swatch Image</a></li>
                                                        <li><a href="product-swatch-rounded-image.html" class="menu-link-text">Product Swatch Rounded Image</a></li>
                                                        <li><a href="product-swatch-dropdown.html" class="menu-link-text">Product Swatch Dropdown</a></li>
                                                        <li><a href="product-swatch-dropdown-color.html" class="menu-link-text">Product Swatch Dropdown Colors</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                                <div class="mega-menu-item">
                                                    <div class="menu-heading">Products Features</div>
                                                    <ul class="menu-list">
                                                        <li><a href="product-frequently-bought-together.html" class="menu-link-text">Frequently Bought Together 1</a></li>
                                                        <li><a href="product-frequently-bought-together-02.html" class="menu-link-text">Frequently Bought Together 2</a></li>
                                                        <li><a href="product-up-sell.html" class="menu-link-text">Up Sell</a></li>
                                                        <li><a href="product-pre-order.html" class="menu-link-text">Pre-orders</a></li>
                                                        <li><a href="product-grouped.html" class="menu-link-text">Grouped</a></li>
                                                        <li><a href="product-customer-note.html" class="menu-link-text">Customer Note</a></li>
                                                        <li><a href="product-out-of-stock.html" class="menu-link-text">Out Of Stock</a></li>
                                                        <li><a href="product-pickup-available.html" class="menu-link-text">Pick Up Available</a></li>
                                                        <li><a href="product-variable.html" class="menu-link-text">Variable</a></li>
                                                        <li><a href="product-deals.html" class="menu-link-text">Deals</a></li>
                                                        <li><a href="product-with-discount.html" class="menu-link-text">With Discount</a></li>
                                                        <li><a href="product-external.html" class="menu-link-text">External</a></li>
                                                        <li><a href="product-subscribe-save.html" class="menu-link-text">Subscribe Save</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-3">
                                            <div class="menu-heading">Best seller</div>
                                            <div class="sec-cls-header">
                                                <div class="collection-position hover-img">
                                                    <a href="shop-collection.html" class="img-style">
                                                        <img class="lazyload" data-src="images/collections/cls-header.jpg" src="images/collections/cls-header.jpg" alt="banner-cls">
                                                    </a>
                                                    <div class="content">
                                                        <div class="title-top">
                                                            <h4 class="title"><a href="shop-collection.html" class="link text-white wow fadeInUp">Shop our top picks</a></h4>
                                                            <p class="desc text-white wow fadeInUp">Reserved for special occasions</p>
                                                        </div>
                                                        <div>
                                                            <a href="shop-collection.html" class="tf-btn btn-md btn-white"><span class="text">Shop Now</span><i class="icon icon-arrowUpRight"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="menu-item position-relative">
                                <a href="#" class="item-link">Blog<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu submenu-default">
                                    <ul class="menu-list">
                                        <li><a href="blog-default.html" class="menu-link-text">Blog Default</a></li>
                                        <li><a href="blog-list.html" class="menu-link-text">Blog List</a></li>
                                        <li><a href="blog-grid.html" class="menu-link-text">Blog Grid</a></li>
                                        <li><a href="blog-detail.html" class="menu-link-text">Blog Detail 1</a></li>
                                        <li><a href="blog-detail-02.html" class="menu-link-text">Blog Detail 2</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item position-relative">
                                <a href="#" class="item-link">Pages<i class="icon icon-arrow-down"></i></a>
                                <div class="sub-menu submenu-default">
                                    <ul class="menu-list">
                                        <li><a href="about-us.html" class="menu-link-text">About Us</a></li>
                                        <li><a href="store-list.html" class="menu-link-text">Store List 1</a></li>
                                        <li><a href="store-list-02.html" class="menu-link-text">Store List 2</a></li>
                                        <li><a href="contact.html" class="menu-link-text">Contact Us 1</a></li>  
                                        <li><a href="contact-02.html" class="menu-link-text">Contact Us 2</a></li>
                                        <li><a href="404.html" class="menu-link-text">404</a></li>
                                        <li><a href="FAQs.html" class="menu-link-text">FAQs</a></li>
                                        <li><a href="term-of-use.html" class="menu-link-text">Terms Of Use</a></li>
                                        <li><a href="coming-soon.html" class="menu-link-text">Coming Soon</a></li>
                                        <li><a href="customer-feedback.html" class="menu-link-text">Customer Feedbacks</a></li>
                                    <li><a href="my-account.html" class="menu-link-text">My Account</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item"><a href="https://themeforest.net/user/themesflat" class="item-link">Buy Theme</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-3">
                    <a href="tel:{{ setting('site.phoneno') }}" class="box-right phone"><span class="icon icon-phone"></span>{{ setting('site.phoneno') }}</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- /Header -->