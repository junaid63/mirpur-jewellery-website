<!-- search -->
<div class="modal fade modal-search" id="search">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="d-flex justify-content-between align-items-center">
                <h5>Search</h5>
                <span class="icon-close icon-close-popup" data-bs-dismiss="modal"></span>
            </div>
            <form class="form-search">
                <fieldset class="text">
                    <input type="text" placeholder="Searching..." class="" name="text" tabindex="0" value="" aria-required="true" required="">
                </fieldset>
                <button class="" type="submit">
                    <svg class="icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 19C15.4183 19 19 15.4183 19 11C19 6.58172 15.4183 3 11 3C6.58172 3 3 6.58172 3 11C3 15.4183 6.58172 19 11 19Z" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M21.35 21.0004L17 16.6504" stroke="#181818" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
            </form>
            <div>
                <h5 class="mb_16">Feature keywords Today</h5>
                <ul class="list-tags">
                    <li><a href="#" class="radius-60 link">Gold</a></li>
                    <li><a href="#" class="radius-60 link">Gold</a></li>
                    <li><a href="#" class="radius-60 link">Gold</a></li>
                    <li><a href="#" class="radius-60 link">Gold</a></li>
                </ul>
            </div>
            <div>
                <h6 class="mb_16">Recently viewed products</h6>
                <div class="tf-grid-layout tf-col-2 lg-col-3 xl-col-4 loadmore-item" data-display="4" data-count="4">
                    @for($i = 0; $i < 5; $i++)
                        <div class="fl-item card-product card-product-size">
                            <div class="card-product-wrapper">
                                <a href="product-detail.html" class="product-img">
                                    <img class="lazyload img-product" data-src="{{ url('frontend/images/products/womens/women-8.jpg') }}" src="{{ url('frontend/images/products/womens/women-8.jpg') }}" alt="image-product">
                                    <img class="lazyload img-hover" data-src="{{ url('frontend/images/products/womens/women-9.jpg') }}" src="{{ url('frontend/images/products/womens/women-9.jpg') }}" alt="image-product">
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
                                <a href="product-detail.html" class="title link">Ribbed cotton-blend top</a>
                                <span class="price current-price">&pound;39.99</span>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /search -->