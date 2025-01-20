@extends('frontend/layouts/master')

@section('title')
@endsection

@section('metas')
@endsection

@section('css')
    <style>
        .mjx-slider{
            height: 750px;
        }
        .video-container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .video-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            pointer-events: none;
        }
    </style>
@endsection

@section('content')
<div class="tf-slideshow slider-style2 slider-effect-fade">
    <div dir="ltr" class="swiper tf-sw-slideshow" data-preview="1" data-tablet="1" data-mobile="1" data-centered="false" data-space="0" data-space-mb="0" data-loop="true" data-auto-play="false">
        <div class="swiper-wrapper slider mjx-slider">
            <div class="swiper-slide">
                <div class="wrap-slider">
                    <div class="video-container">
                        <video autoplay muted loop playsinline src="{{ url('frontend/videos/web-video.mp4') }}" alt="fashion-slideshow"></video>
                    </div>
                    <div class="box-content">
                        <div class="container">
                            <div class="content-slider">
                                <div class="box-title-slider">
                                    <div class="fade-item fade-item-1 heading title-display text-primary fw-8">Sparkling New Arrivals</div>
                                    <p class="fade-item fade-item-2 body-text-1 text-white">Be the first to dazzle with our latest jewelry additions. Explore today!</p>
                                </div>
                                <div class="fade-item fade-item-3 box-btn-slider">
                                    <a href="shop-default-grid.html" class="tf-btn btn-fill btn-white"><span class="text">Explore Collection</span><i class="icon icon-arrowUpRight"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="wrap-pagination">
        <div class="container">
            <div class="sw-dots sw-pagination-slider type-circle justify-content-center"></div>
        </div>
    </div>
</div>

<section class="flat-spacing">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">On TikTok</h3>
            <p class="subheading text-secondary">"Join us on TikTok for exclusive brand releases, unboxings, reviews, and more!"</p>
        </div>
        <div class="swiper tf-sw-collection" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="3" data-pagination-lg="4">
            <div class="swiper-wrapper">
                <!-- TikTok Video 1 -->
                <div class="swiper-slide">
                    <div class="collection-social hover-img wow fadeInUp" data-wow-delay="0s">
                        <div class="tiktok-embed">
                            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@mirpur.jewellers/video/7363665092648520993" data-video-id="7363665092648520993" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@mirpur.jewellers" href="https://www.tiktok.com/@mirpur.jewellers?refer=embed">@mirpur.jewellers</a> Latest bangle designs at Mirpur Jewellers✨😍 <a title="mirpurjewellersluton" target="_blank" href="https://www.tiktok.com/tag/mirpurjewellersluton?refer=embed">#mirpurjewellersluton</a> <a title="fy" target="_blank" href="https://www.tiktok.com/tag/fy?refer=embed">#fy</a> <a title="luton" target="_blank" href="https://www.tiktok.com/tag/luton?refer=embed">#luton</a> <a title="lutonjewellers" target="_blank" href="https://www.tiktok.com/tag/lutonjewellers?refer=embed">#lutonjewellers</a> <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a target="_blank" title="♬ الصوت الأصلي - βℓµѕнιꨄ" href="https://www.tiktok.com/music/الصوت-الأصلي-7299055786406906626?refer=embed">♬ الصوت الأصلي - βℓµѕнιꨄ</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
                        </div>
                    </div>
                </div>
                <!-- TikTok Video 2 -->
                <div class="swiper-slide">
                    <div class="collection-social hover-img wow fadeInUp" data-wow-delay="0.1s">
                        <div class="tiktok-embed">
                            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@mirpur.jewellers/video/7392267130852478241" data-video-id="7392267130852478241" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@mirpur.jewellers" href="https://www.tiktok.com/@mirpur.jewellers?refer=embed">@mirpur.jewellers</a> Gold will always be the best investment as it increases in value every five years🥰 <a title="mirpurjewellersluton" target="_blank" href="https://www.tiktok.com/tag/mirpurjewellersluton?refer=embed">#mirpurjewellersluton</a> <a title="fy" target="_blank" href="https://www.tiktok.com/tag/fy?refer=embed">#fy</a> <a title="luton" target="_blank" href="https://www.tiktok.com/tag/luton?refer=embed">#luton</a> <a title="lutonjewellers" target="_blank" href="https://www.tiktok.com/tag/lutonjewellers?refer=embed">#lutonjewellers</a> <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a target="_blank" title="♬ Originalton - Jodok Cello" href="https://www.tiktok.com/music/Originalton-7349583700050397985?refer=embed">♬ Originalton - Jodok Cello</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
                        </div>
                    </div>
                </div>

                <!-- TikTok Video 2 -->
                <div class="swiper-slide">
                    <div class="collection-social hover-img wow fadeInUp" data-wow-delay="0.1s">
                        <div class="tiktok-embed">
                            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@mirpur.jewellers/video/7391575203488238880" data-video-id="7391575203488238880" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@mirpur.jewellers" href="https://www.tiktok.com/@mirpur.jewellers?refer=embed">@mirpur.jewellers</a> 👀🌟 Witness a customers shopping experience at Mirpur Jewellers! From the moment they walk in, see why we’re the ultimate destination for gold shopping. As the largest independent gold showroom in the UK, Mirpur Jewellers offers an unparalleled selection of exquisite Asian jewellery designs. <a title="mirpurjewellersluton" target="_blank" href="https://www.tiktok.com/tag/mirpurjewellersluton?refer=embed">#mirpurjewellersluton</a> <a title="fy" target="_blank" href="https://www.tiktok.com/tag/fy?refer=embed">#fy</a> <a title="luton" target="_blank" href="https://www.tiktok.com/tag/luton?refer=embed">#luton</a> <a title="lutonjewellers" target="_blank" href="https://www.tiktok.com/tag/lutonjewellers?refer=embed">#lutonjewellers</a> <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a target="_blank" title="♬ original sound - Mirpur Jewellers" href="https://www.tiktok.com/music/original-sound-7391575261010234144?refer=embed">♬ original sound - Mirpur Jewellers</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
                        </div>
                    </div>
                </div>

                <!-- TikTok Video 2 -->
                <div class="swiper-slide">
                    <div class="collection-social hover-img wow fadeInUp" data-wow-delay="0.1s">
                        <div class="tiktok-embed">
                            <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@mirpur.jewellers/video/7461677033391754529" data-video-id="7461677033391754529" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@mirpur.jewellers" href="https://www.tiktok.com/@mirpur.jewellers?refer=embed">@mirpur.jewellers</a> Little touches of golden charm are in stock.  Dm For More Info  <a title="instagram" target="_blank" href="https://www.tiktok.com/tag/instagram?refer=embed">#instagram</a> <a title="instadaily" target="_blank" href="https://www.tiktok.com/tag/instadaily?refer=embed">#instadaily</a> <a title="million" target="_blank" href="https://www.tiktok.com/tag/million?refer=embed">#million</a> <a title="trending" target="_blank" href="https://www.tiktok.com/tag/trending?refer=embed">#trending</a> <a title="fyp" target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a> <a title="fypppp" target="_blank" href="https://www.tiktok.com/tag/fypppp?refer=embed">#fypppp</a> <a title="necklace" target="_blank" href="https://www.tiktok.com/tag/necklace?refer=embed">#necklace</a> <a title="wedding" target="_blank" href="https://www.tiktok.com/tag/wedding?refer=embed">#wedding</a> <a title="ring" target="_blank" href="https://www.tiktok.com/tag/ring?refer=embed">#ring</a> <a title="jewellery" target="_blank" href="https://www.tiktok.com/tag/jewellery?refer=embed">#jewellery</a> <a title="goldjewellery" target="_blank" href="https://www.tiktok.com/tag/goldjewellery?refer=embed">#goldjewellery</a> <a title="gold" target="_blank" href="https://www.tiktok.com/tag/gold?refer=embed">#gold</a> <a title="million" target="_blank" href="https://www.tiktok.com/tag/million?refer=embed">#million</a> <a title="bridaljewellery" target="_blank" href="https://www.tiktok.com/tag/bridaljewellery?refer=embed">#bridaljewellery</a> <a title="earrings" target="_blank" href="https://www.tiktok.com/tag/earrings?refer=embed">#earrings</a>  <a title="bridaloutfit" target="_blank" href="https://www.tiktok.com/tag/bridaloutfit?refer=embed">#bridaloutfit</a> <a title="fashion" target="_blank" href="https://www.tiktok.com/tag/fashion?refer=embed">#fashion</a> <a title="jewelrygram" target="_blank" href="https://www.tiktok.com/tag/jewelrygram?refer=embed">#jewelrygram</a> <a title="asianjewellery" target="_blank" href="https://www.tiktok.com/tag/asianjewellery?refer=embed">#asianjewellery</a>  <a title="bangles" target="_blank" href="https://www.tiktok.com/tag/bangles?refer=embed">#bangles</a> <a title="pakistanifashion" target="_blank" href="https://www.tiktok.com/tag/pakistanifashion?refer=embed">#pakistanifashion</a> <a title="bridal" target="_blank" href="https://www.tiktok.com/tag/bridal?refer=embed">#bridal</a> <a title="pakistanibride" target="_blank" href="https://www.tiktok.com/tag/pakistanibride?refer=embed">#pakistanibride</a> <a title="view" target="_blank" href="https://www.tiktok.com/tag/view?refer=embed">#view</a> <a title="jewels" target="_blank" href="https://www.tiktok.com/tag/jewels?refer=embed">#jewels</a> <a title="mirpurjewellers" target="_blank" href="https://www.tiktok.com/tag/mirpurjewellers?refer=embed">#mirpurjewellers</a> <a title="coinpusher" target="_blank" href="https://www.tiktok.com/tag/coinpusher?refer=embed">#coinpusher</a> <a title="viral_video_tiktok_treding" target="_blank" href="https://www.tiktok.com/tag/viral_video_tiktok_treding?refer=embed">#viral_video_tiktok_treding</a> <a target="_blank" title="♬ original sound - Mirpur Jewellers" href="https://www.tiktok.com/music/original-sound-7461677076169771808?refer=embed">♬ original sound - Mirpur Jewellers</a> </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-pagination-collection sw-dots type-circle justify-content-center"></div>
            <div class="sec-btn text-center">
                <a href="https://www.tiktok.com/@mirpur.jewellers" class="btn-line">Follow us on TikTok</a>
            </div>
        </div>
    </div>
</section>


<!-- Categories -->
<section class="flat-spacing">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Popular Categories</h3>
        </div>
        <div class="flat-collection-circle wow fadeInUp" data-wow-delay="0.1s">
            <div dir="ltr" class="swiper tf-sw-categories" data-preview="6" data-tablet="4" data-mobile-sm="3" data-mobile="2" data-space-lg="30" data-space-md="20" data-space="15" data-pagination="2" data-pagination-md="4" data-pagination-lg="1">
                <div class="swiper-wrapper">
                    <!-- item 1 -->
                    <div class="swiper-slide">
                        <div class="collection-circle hover-img">
                            <a href="shop-categories-top.html" class="img-style">
                                <img class="lazyload" data-src="{{ url('frontend/images/collections/collection-circle/cls-circle12.jpg') }}" src="{{ url('frontend/images/collections/collection-circle/cls-circle12.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content text-center">
                                <div>
                                    <a href="shop-categories-top.html" class="cls-title">
                                        <h6 class="text">Necklaces</h6>
                                        <i class="icon icon-arrowUpRight"></i>
                                    </a>
                                </div>
                                <div class="count text-secondary">12 items</div>
                            </div>
                        </div>
                    </div>
                    <!-- item 2 -->
                    <div class="swiper-slide">
                        <div class="collection-circle hover-img">
                            <a href="shop-categories-top.html" class="img-style">
                                <img class="lazyload" data-src="{{ url('frontend/images/collections/collection-circle/cls-circle13.jpg') }}" src="{{ url('frontend/images/collections/collection-circle/cls-circle13.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content text-center">
                                <div>
                                    <a href="shop-categories-top.html" class="cls-title">
                                        <h6 class="text">Rings</h6>
                                        <i class="icon icon-arrowUpRight"></i>
                                    </a>
                                </div>
                                <div class="count text-secondary">16 items</div>
                            </div>
                        </div>
                    </div>
                    <!-- item 3 -->
                    <div class="swiper-slide">
                        <div class="collection-circle hover-img">
                            <a href="shop-categories-top.html" class="img-style">
                                <img class="lazyload" data-src="{{ url('frontend/images/collections/collection-circle/cls-circle14.jpg') }}" src="{{ url('frontend/images/collections/collection-circle/cls-circle14.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content text-center">
                                <div>
                                    <a href="shop-categories-top.html" class="cls-title">
                                        <h6 class="text">Bracelets</h6>
                                        <i class="icon icon-arrowUpRight"></i>
                                    </a>
                                </div>
                                <div class="count text-secondary">18 items</div>
                            </div>
                        </div>
                    </div>
                    <!-- item 4 -->
                    <div class="swiper-slide">
                        <div class="collection-circle hover-img">
                            <a href="shop-categories-top.html" class="img-style">
                                <img class="lazyload" data-src="{{ url('frontend/images/collections/collection-circle/cls-circle15.jpg') }}" src="{{ url('frontend/images/collections/collection-circle/cls-circle15.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-categories-top.html" class="cls-title">
                                    <h6 class="text">Earnings</h6>
                                    <i class="icon icon-arrowUpRight"></i>
                                </a>
                                <div class="count text-secondary">24 items</div>
                            </div>
                        </div>
                    </div>
                    <!-- item 5 -->
                    <div class="swiper-slide">
                        <div class="collection-circle hover-img">
                            <a href="shop-categories-top.html" class="img-style">
                                <img class="lazyload" data-src="{{ url('frontend/images/collections/collection-circle/cls-circle16.jpg') }}" src="{{ url('frontend/images/collections/collection-circle/cls-circle16.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-categories-top.html" class="cls-title">
                                    <h6 class="text">Charm & Dangles</h6>
                                    <i class="icon icon-arrowUpRight"></i>
                                </a>
                                <div class="count text-secondary">08 items</div>
                            </div>
                        </div>
                    </div>
                    <!-- item 6 -->
                    <div class="swiper-slide">
                        <div class="collection-circle hover-img">
                            <a href="shop-categories-top.html" class="img-style">
                                <img class="lazyload" data-src="{{ url('frontend/images/collections/collection-circle/cls-circle17.jpg') }}" src="{{ url('frontend/images/collections/collection-circle/cls-circle17.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content text-center">
                                <a href="shop-categories-top.html" class="cls-title">
                                    <h6 class="text">Gift Ideas</h6>
                                    <i class="icon icon-arrowUpRight"></i>
                                </a>
                                <div class="count text-secondary">26 items</div>
                            </div>
                        </div>
                    </div>
                    <!-- item 7 -->
                    <div class="swiper-slide">
                        <div class="collection-circle hover-img">
                            <a href="shop-categories-top.html" class="img-style">
                                <img class="lazyload" data-src="{{ url('frontend/images/collections/collection-circle/cls-circle16.jpg') }}" src="{{ url('frontend/images/collections/collection-circle/cls-circle16.jpg') }}" alt="collection-img">
                            </a>
                            <div class="collection-content text-center">
                                <div>
                                    <a href="shop-categories-top.html" class="cls-title">
                                        <h6 class="text">Charm & Dangles</h6>
                                        <i class="icon icon-arrowUpRight"></i>
                                    </a>
                                </div>
                                <div class="count text-secondary">12 items</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex d-lg-none sw-pagination-categories sw-dots type-circle justify-content-center"></div>

            </div>
            <div class="nav-prev-categories d-none d-lg-flex nav-sw style-line nav-sw-left"><i class="icon icon-arrLeft"></i></div>
            <div class="nav-next-categories d-none d-lg-flex nav-sw style-line nav-sw-right"><i class="icon icon-arrRight"></i></div>
        </div>
    </div>
</section>
<!-- /Categories -->
<!-- today -->
<section class="flat-spacing pt-0">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Today's Top Picks</h3>
            <p class="subheading text-secondary">Fresh styles just in! Elevate your look.</p>
        </div>
        <div dir="ltr" class="swiper tf-sw-products" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
            <div class="swiper-wrapper">
                @for($i = 0; $i < 9; $i++)
                <div class="swiper-slide">
                    <div class="card-product wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card-product-wrapper">
                            <a href="product-detail.html" class="product-img">
                                <img class="lazyload img-product" data-src="{{ url('frontend/images/products/jewellery/1.jpg') }}" src="{{ url('frontend/images/products/jewellery/1.jpg') }}" alt="image-product">
                                <img class="lazyload img-hover" data-src="{{ url('frontend/images/products/jewellery/1.jpg') }}" src="{{ url('frontend/images/products/jewellery/1.jpg') }}" alt="image-product">
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
                            <div class="on-sale-wrap"><span class="on-sale-item">-25%</span></div>
                            <div class="variant-wrap countdown-wrap">
                                <div class="variant-box">
                                    <div class="js-countdown" data-timer="1007500" data-labels="D :,H :,M :,S"></div>
                                </div>
                            </div>
                            <div class="list-btn-main">
                                <a href="#shoppingCart" data-bs-toggle="modal" class="btn-main-product">Add To cart</a>
                            </div>
                        </div>
                        <div class="card-product-info">
                            <a href="product-detail.html" class="title link">Mia Amalfi Bracelet Gold</a>
                            <span class="price"><span class="old-price">&pound;98.00</span> &pound;129.99</span>
                            <ul class="list-color-product">
                                <li class="list-color-item color-swatch active line">
                                    <span class="swatch-value bg-light-green"></span>
                                    <img class="lazyload" data-src="{{ url('frontend/images/products/jewellery/1.jpg') }}" src="{{ url('frontend/images/products/jewellery/1.jpg') }}" alt="image-product">
                                </li>
                                <li class="list-color-item color-swatch">
                                    <span class="swatch-value bg-light-grey"></span>
                                    <img class="lazyload" data-src="{{ url('frontend/images/products/jewellery/1.jpg') }}" src="{{ url('frontend/images/products/jewellery/1.jpg') }}" alt="image-product">
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
                @endfor
            </div>
            <div class="sw-pagination-products sw-dots type-circle justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /today -->
<!-- Banner collection -->
<section class="flat-spacing pt-0">
    <div class="container">
        <div class="flat-sw-pagination swiper tf-sw-lookbook" dir="ltr" data-preview="2" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="30" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="collection-position radius style-lg hover-img">
                        <a class="img-style">
                            <img class="lazyload" data-src="{{ url('frontend/images/collections/banner-collection/banner-cls28.jpg') }}" src="{{ url('frontend/images/collections/banner-collection/banner-cls28.jpg') }}" alt="banner-cls">
                        </a>
                        <div class="content">
                            <h3 class="title wow fadeInUp"><a href="shop-default-grid.html" class="link text-white">Capsule Collection</a></h3>
                            <p class="desc text-white wow fadeInUp" data-wow-delay="0.1s">Reserved for special occasions</p>
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <a href="shop-default-grid.html" class="btn-line style-white">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="collection-position radius style-lg hover-img">
                        <a class="img-style">
                            <img class="lazyload" data-src="{{ url('frontend/images/collections/banner-collection/banner-cls29.jpg') }}" src="{{ url('frontend/images/collections/banner-collection/banner-cls29.jpg') }}" alt="banner-cls">
                        </a>
                        <div class="content">
                            <h3 class="title wow fadeInUp"><a href="shop-default-grid.html" class="link text-white">New Arrival</a></h3>
                            <p class="desc text-white wow fadeInUp" data-wow-delay="0.1s">Reserved for special occasions</p>
                            <div class="wow fadeInUp" data-wow-delay="0.2s">
                                <a href="shop-default-grid.html" class="btn-line style-white">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="sw-pagination-lookbook sw-dots type-circle white-circle-line justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Banner collection -->
<!-- Trendy Collection -->
<section class="flat-spacing pt-0">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Trendy Collection</h3>
            <p class="subheading text-secondary">Fresh styles just in! Elevate your look.</p>
        </div>
        <div dir="ltr" class="swiper tf-sw-recent" data-preview="4" data-tablet="3" data-mobile="2" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
            <div class="swiper-wrapper">
                <!-- 1 -->
                @for($i = 0; $i < 5; $i++)
                    <div class="swiper-slide">
                        <div class="card-product card-product-size wow fadeInUp" data-wow-delay="0s">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{ url('frontend/images/products/jewellery/2.jpg') }}" src="{{ url('frontend/images/products/jewellery/2.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{ url('frontend/images/products/jewellery/2.jpg') }}" src="{{ url('frontend/images/products/jewellery/2.jpg') }}" alt="image-product">
                                </a>
                                <div class="variant-wrap size-list">
                                    <ul class="variant-box">
                                        <li class="size-item">S</li>
                                        <li class="size-item">M</li>
                                        <li class="size-item">L</li>
                                        <li class="size-item">XL</li>
                                    </ul>
                                </div>
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
                                    <a href="#quickAdd" data-bs-toggle="modal" class="btn-main-product">Quick Add</a>
                                </div>
                            </div>
                            <div class="card-product-info">
                                <a href="product-detail.html" class="title link">Pilgrim Care Recycled Semi-Hoop</a>
                                <span class="price">&pound;39.99</span>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
            <div class="sw-pagination-recent sw-dots type-circle justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Trendy Collection -->
<!-- Testimonial -->
<section class="flat-spacing bg-beige-1">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Customer Say!</h3>
            <p class="subheading">Our customers adore our products, and we constantly aim to delight them.</p>
        </div>
        <div dir="ltr" class="swiper tf-sw-testimonial wow fadeInUp" data-wow-delay="0.1s" data-preview="3" data-tablet="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-md="1" data-pagination-lg="1">
            <div class="swiper-wrapper">
                @for($i = 0; $i < 5; $i++)
                    <div class="swiper-slide">
                        <div class="testimonial-item style-2 no-border">
                            <div class="content-top">
                                <div class="list-star-default">
                                    <i class="icon icon-star"></i>
                                    <i class="icon icon-star"></i>
                                    <i class="icon icon-star"></i>
                                    <i class="icon icon-star"></i>
                                    <i class="icon icon-star"></i>
                                </div>
                                <p class="text-secondary">"I love this pendant! The design is stunning, and I appreciate the eco-friendly materials. High-quality craftsmanship and unique style. Highly recommended!"</p>
                                <div class="box-author">
                                    <div class="text-title author">Sybil Sharp</div>
                                    <svg class="icon" width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_15758_14563)">
                                        <path d="M6.875 11.6255L8.75 13.5005L13.125 9.12549" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M10 18.5005C14.1421 18.5005 17.5 15.1426 17.5 11.0005C17.5 6.85835 14.1421 3.50049 10 3.50049C5.85786 3.50049 2.5 6.85835 2.5 11.0005C2.5 15.1426 5.85786 18.5005 10 18.5005Z" stroke="#3DAB25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </g>
                                        <defs>
                                        <clipPath id="clip0_15758_14563">
                                        <rect width="20" height="20" fill="white" transform="translate(0 0.684082)"/>
                                        </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </div>
                            <div class="box-avt">
                                <div class="avatar avt-60 round">
                                    <img src="{{ url('frontend/images/avatar/jewelry-1.jpg') }}" alt="avt">
                                </div>
                                <div class="box-price">
                                    <p class="text-title text-line-clamp-1">John Doe</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="sw-pagination-testimonial sw-dots type-circle d-flex justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Testimonial -->

<!-- Iconbox -->
<section class="flat-spacing">
    <div class="container">
        <div dir="ltr" class="swiper tf-sw-iconbox" data-preview="4" data-tablet="3" data-mobile-sm="2" data-mobile="1" data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1" data-pagination-sm="2" data-pagination-md="3" data-pagination-lg="4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><span class="icon icon-return"></span></div>
                        <div class="content text-center">
                            <h6>14-Day Returns</h6>
                            <p class="text-secondary">Risk-free shopping with easy returns.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><span class="icon icon-shipping"></span></div>
                        <div class="content text-center">
                            <h6>Free Shipping</h6>
                            <p class="text-secondary">No extra costs, just the price you see.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><span class="icon icon-headset"></span></div>
                        <div class="content text-center">
                            <h6>24/7 Support</h6>
                            <p class="text-secondary">24/7 support, always here just for you</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="tf-icon-box">
                        <div class="icon-box"><span class="icon icon-sealCheck"></span></div>
                        <div class="content text-center">
                            <h6>Member Discounts</h6>
                            <p class="text-secondary">Special prices for our loyal customers.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sw-pagination-iconbox sw-dots type-circle justify-content-center"></div>
        </div>
    </div>
</section>
<!-- /Iconbox -->
<!-- Gallery shop gram -->
<section class="flat-spacing pt-0">
    <div class="container">
        <div class="heading-section text-center wow fadeInUp">
            <h3 class="heading">Shop Instagram</h3>
            <p class="subheading text-secondary">Elevate your wardrobe with fresh finds today!</p>
        </div>
        <div dir="ltr" class="swiper tf-sw-shop-gallery" data-preview="5" data-tablet="3" data-mobile="2" data-space-lg="10" data-space-md="10" data-space="8" data-pagination="2" data-pagination-md="3" data-pagination-lg="1">
            <div class="swiper-wrapper">
                @for($i = 0; $i < 6; $i++)
                    <div class="swiper-slide">
                        <div class="gallery-item hover-overlay hover-img wow fadeInUp" data-wow-delay=".1s">
                            <div class="img-style">
                                <blockquote class="instagram-media" data-instgrm-captioned data-instgrm-permalink="https://www.instagram.com/p/CuY8z8zAx4x/" data-instgrm-version="14"></blockquote>
                            </div>
                            <a href="product-detail.html" class="box-icon hover-tooltip"><span class="icon icon-eye"></span> <span class="tooltip">View Product</span></a>
                        </div>
                    </div>
                @endfor
            </div>
            <div class="sw-pagination-gallery sw-dots type-circle justify-content-center"></div>
        </div>
    </div>
</section>
<script async src="//www.instagram.com/embed.js"></script>
<script async src="https://www.tiktok.com/embed.js"></script>
<!-- /Gallery shop gram -->
@endsection

@section('js')
@endsection
