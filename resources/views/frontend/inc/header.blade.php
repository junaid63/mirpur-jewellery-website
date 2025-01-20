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
                                        <a href="#" class="categories-item"><span class="inner-left">Rings</span><i class="icon icon-arrRight"></i></a>
                                        <ul class="list-categories-inner">
                                            <li><a href="#" class="categories-item"><span class="inner-left">Engagement Rings</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Wedding Bands</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Casual Rings</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Statement Rings</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-categories2">
                                        <a href="#" class="categories-item"><span class="inner-left">Necklaces</span><i class="icon icon-arrRight"></i></a>
                                        <ul class="list-categories-inner">
                                            <li><a href="#" class="categories-item"><span class="inner-left">Pendants</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Chains</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Chokers</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Statement Necklaces</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-categories2">
                                        <a href="#" class="categories-item"><span class="inner-left">Bracelets</span><i class="icon icon-arrRight"></i></a>
                                        <ul class="list-categories-inner">
                                            <li><a href="#" class="categories-item"><span class="inner-left">Bangles</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Chain Bracelets</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Charm Bracelets</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="sub-categories2">
                                        <a href="#" class="categories-item"><span class="inner-left">Earrings</span><i class="icon icon-arrRight"></i></a>
                                        <ul class="list-categories-inner">
                                            <li><a href="#" class="categories-item"><span class="inner-left">Studs</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Hoops</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Drop Earrings</span></a></li>
                                            <li><a href="#" class="categories-item"><span class="inner-left">Chandeliers</span></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="categories-item"><span class="inner-left">Anklets</span></a></li>
                                    <li><a href="#" class="categories-item"><span class="inner-left">Nose Rings</span></a></li>
                                    <li><a href="#" class="categories-item"><span class="inner-left">Brooches</span></a></li>
                                    
                                </ul>
                                <div class="box-cate-bottom">
                                    <ul>
                                        <li class="sub-categories2">
                                            <a href="#" class="categories-item"><span class="inner-left">Investment Bars</span><i class="icon icon-arrRight"></i></a>
                                            <ul class="list-categories-inner">
                                                <li><a href="#" class="categories-item"><span class="inner-left">24K Bars</span></a></li>
                                                <li><a href="#" class="categories-item"><span class="inner-left">22K Bars</span></a></li>
                                            </ul>
                                        </li>
                                        <li class="sub-categories2">
                                            <a href="#" class="categories-item"><span class="inner-left">Gold Coins</span><i class="icon icon-arrRight"></i></a>
                                            <ul class="list-categories-inner">
                                                <li><a href="#" class="categories-item"><span class="inner-left">Commemorative Coins</span></a></li>
                                                <li><a href="#" class="categories-item"><span class="inner-left">Bullion Coins</span></a></li>
                                            </ul>
                                        </li>
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
                                <a href="#" class="item-link">Home</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="item-link">Shop</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="item-link">About Us</a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="item-link">Contact Us</a>
                            </li>
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