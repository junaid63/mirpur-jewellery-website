<!-- Footer -->
<footer id="footer" class="footer">
    <div class="footer-wrap">
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-infor">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="{{ url('storage') }}/{{ setting('site.headerlogo') }}" alt="{{ ucwords(config('app.name')) }}">
                                </a>
                            </div>
                            <div class="footer-address">
                                <p>{{ setting('site.address') }}</p>
                                <a href="contact.html" class="tf-btn-default fw-6">GET DIRECTION<i class="icon-arrowUpRight"></i></a>
                            </div>
                            <ul class="footer-info">
                                <li>
                                    <i class="icon-mail"></i>
                                    <p>{{ setting('site.email') }}</p>
                                </li>
                                <li>
                                    <i class="icon-phone"></i>
                                    <p>{{ setting('site.phoneno') }}</p>
                                </li>
                            </ul>
                            <ul class="tf-social-icon">
                                <li><a href="#" class="social-facebook"><i class="icon icon-fb"></i></a></li>
                                <li><a href="#" class="social-twiter"><i class="icon icon-x"></i></a></li>
                                <li><a href="#" class="social-instagram"><i class="icon icon-instagram"></i></a></li>
                                <li><a href="#" class="social-tiktok"><i class="icon icon-tiktok"></i></a></li>
                                <li><a href="#" class="social-amazon"><i class="icon icon-amazon"></i></a></li>
                                <li><a href="#" class="social-pinterest"><i class="icon icon-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-menu">
                            <div class="footer-col-block">
                                <div class="footer-heading text-button footer-heading-mobile">
                                    Infomation
                                </div>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li class="text-caption-1">
                                            <a href="about-us.html" class="footer-menu_item">About Us</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="#" class="footer-menu_item">Our Stories</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="#" class="footer-menu_item">Size Guide</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="contact.html" class="footer-menu_item">Contact us</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="#" class="footer-menu_item">Career</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="my-account.html" class="footer-menu_item">My Account</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="footer-menu">
                            <div class="footer-col-block">
                                <div class="footer-heading text-button footer-heading-mobile">
                                    Customer Services
                                </div>
                                <div class="tf-collapse-content">
                                    <ul class="footer-menu-list">
                                        <li class="text-caption-1">
                                            <a href="#" class="footer-menu_item">Shipping</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="#" class="footer-menu_item">Return & Refund</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="#" class="footer-menu_item">Privacy Policy</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="term-of-use.html" class="footer-menu_item">Terms & Conditions</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="FAQs.html" class="footer-menu_item">Orders FAQs</a>
                                        </li>
                                        <li class="text-caption-1">
                                            <a href="wish-list.html" class="footer-menu_item">My Wishlist</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-wrap">
                            <div class="left">
                                <p class="text-caption-1">{{ date('Y') }} {{ucwords(config('app.name'))}}. All Rights Reserved.</p>
                            </div>
                            <div class="tf-payment">
                                <p class="text-caption-1">Payment:</p>
                                <ul>
                                    <li>
                                        <img src="{{ url('frontend/images/payment/img-1.png') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ url('frontend/images/payment/img-2.png') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ url('frontend/images/payment/img-3.png') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ url('frontend/images/payment/img-4.png') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ url('frontend/images/payment/img-5.png') }}" alt="">
                                    </li>
                                    <li>
                                        <img src="{{ url('frontend/images/payment/img-6.png') }}" alt="">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer -->