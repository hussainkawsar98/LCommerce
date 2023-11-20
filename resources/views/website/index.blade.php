<!-- EXTEND WEBSITE LAYOUT -->
@extends('layouts.website')

<!-- WEBSITE PADE TITLE -->
@section('title', 'E-commerce Website with Laravel | Develop by Muktar Hussain')

<!-- START WEBSITE BODY PART -->
@section('content')
<!--================================
         START HERO AREA
=================================-->
<section class="hero-area">
    <div class="hero-slider owl-carousel owl-theme owl-theme-styled">
        <div class="hero-item hero-bg-4">
            <div class="overlay z-index-0"></div><!-- end overlay -->
            <div class="container position-relative z-index-1">
                <div class="hero-content">
                    <h2 class="sec-title fs-60 mb-3 text-white">Hand Picked Items Sold
                        <br> Exclusively Online
                    </h2>
                    <p class="sec-desc text-white">This is just a simple text made for this unique and awesome template,
                        <br> you can replace it with any text.
                    </p>
                    <div class="mt-4 hero-btns">
                        <a href="#" class="btn btn-primary mr-2 mb-1">Shop Now <i class="fal fa-angle-right ml-1"></i></a>
                        <a href="#" class="btn bg-light mb-1">All Products <i class="fal fa-angle-right ml-1"></i></a>
                    </div>
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div><!-- end hero-item -->
        <div class="hero-item hero-bg-5">
            <div class="overlay z-index-0"></div><!-- end overlay -->
            <div class="container position-relative z-index-1">
                <div class="hero-content text-center">
                    <h2 class="sec-title fs-60 mb-3 text-white">Find that Perfect Gift and
                        <br> Surprise Someone
                    </h2>
                    <p class="sec-desc text-white">This is just a simple text made for this unique and awesome template,
                        <br> you can replace it with any text.
                    </p>
                    <div class="mt-4 hero-btns">
                        <a href="#" class="btn btn-primary mr-2 mb-1">Shop Now <i class="fal fa-angle-right ml-1"></i></a>
                        <a href="#" class="btn bg-light mb-1">All Products <i class="fal fa-angle-right ml-1"></i></a>
                    </div>
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div><!-- end hero-item -->
        <div class="hero-item hero-bg-6">
            <div class="overlay z-index-0"></div><!-- end overlay -->
            <div class="container position-relative z-index-1">
                <div class="hero-content">
                    <h2 class="sec-title fs-60 mb-3 text-white">Beautifully Designed Pieces
                        <br> by Talented Designers
                    </h2>
                    <p class="sec-desc text-white">This is just a simple text made for this unique and awesome template,
                        <br> you can replace it with any text.
                    </p>
                    <div class="mt-4 hero-btns">
                        <a href="#" class="btn btn-primary mr-2 mb-1">Shop Now <i class="fal fa-angle-right ml-1"></i></a>
                        <a href="#" class="btn bg-light mb-1">All Products <i class="fal fa-angle-right ml-1"></i></a>
                    </div>
                </div><!-- end hero-content -->
            </div><!-- end container -->
        </div><!-- end hero-item -->
    </div><!-- end hero-slider -->
</section><!-- end hero-area -->
<!--================================
        END HERO AREA
=================================-->

<!-- ================================
       START SERVICE AREA
================================= -->
<section class="service-area section--padding">
    <div class="container">
        <div class="text-center">
            <p class="mb-2 fw-medium">Newest Collection For You</p>
            <h2 class="sec-title">Check Out Our Newest items</h2>
        </div>
        <div class="row mt-5">
            <div class="col-lg-6">
                <a href="shop-sidebar.html" class="new-product-item position-relative d-block text-black-50 mb-4">
                    <img src="images/img-loading.jpg" data-src="images/shop-img.jpg" alt="new product image" class="w-100 rounded lazy">
                    <div class="position-absolute top-0 left-0 w-100 h-100 d-flex align-items-center pl-4">
                        <div>
                            <h4 class="mb-2 fw-semi-bold">Product Collection</h4>
                            <span>Shop now <i class="fal fa-angle-right ml-1"></i></span>
                        </div>
                    </div>
                </a><!-- end new-product-item -->
            </div><!-- end col-lg-6 -->
            <div class="col-lg-6">
                <a href="shop-sidebar.html" class="new-product-item position-relative d-block text-black-50 mb-4">
                    <img src="images/img-loading.jpg" data-src="images/shop-img2.jpg" alt="new product image" class="w-100 rounded lazy">
                    <div class="position-absolute top-0 left-0 w-100 h-100 d-flex align-items-center pl-4">
                        <div>
                            <h4 class="mb-2 fw-semi-bold">Basket Collection</h4>
                            <span>Shop now <i class="fal fa-angle-right ml-1"></i></span>
                        </div>
                    </div>
                </a><!-- end new-product-item -->
            </div><!-- end col-lg-6 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end service-area -->
<!-- ================================
       START SERVICE AREA
================================= -->

<hr class="border-top-gray my-0">

<!-- ================================
       START PRODUCT AREA
================================= -->
<section class="product-area section-padding">
    <div class="container">
        <div class="text-center">
            <p class="mb-2 fw-medium">Great Collection For You</p>
            <h3 class="sec-title">Best Products</h3>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <img src="images/img-loading.jpg" data-src="images/shop-img3.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20"><a href="product-detail.html">Astor Sofa Chair</a></h4>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$100.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <img src="images/img-loading.jpg" data-src="images/shop-img4.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20"><a href="product-detail.html">Malachite Carna Mug</a></h4>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$100.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <span class="badge badge-danger">-30%</span>
                        <img src="images/img-loading.jpg" data-src="images/shop-img5.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20"><a href="product-detail.html">Leader Backpack</a></h4>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$35.00</span>
                            <span class="td-line-through text-gray-2">$75.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <img src="images/img-loading.jpg" data-src="images/shop-img6.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20"><a href="product-detail.html">Wooden Pen Holder</a></h4>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$100.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <img src="images/img-loading.jpg" data-src="images/shop-img7.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20"><a href="product-detail.html">Bag Power Bank</a></h4>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$100.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <img src="images/img-loading.jpg" data-src="images/shop-img8.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20"><a href="product-detail.html">Cotton Hand Bag</a></h4>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$100.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <span class="badge badge-danger">-30%</span>
                        <img src="images/img-loading.jpg" data-src="images/shop-img9.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20"><a href="product-detail.html">Marble Pen Holder</a></h4>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$35.00</span>
                            <span class="td-line-through text-gray-2">$75.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <img src="images/img-loading.jpg" data-src="images/shop-img10.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20"><a href="product-detail.html">Leader Camera Bag</a></h4>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$100.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="text-center">
            <a href="#" class="btn btn-primary"><i class="far fa-sync-alt mr-1"></i> Load more product</a>
        </div>
    </div><!-- end container -->
</section><!-- end product-area -->
<!-- ================================
       START PRODUCT AREA
================================= -->

<!-- ================================
       START PRODUCT AREA
================================= -->
<section class="product-area section-padding">
    <div class="container">
        <div class="text-center">
            <p class="mb-2 fw-medium">Check Out Our</p>
            <h3 class="sec-title">Best Selling Products</h3>
        </div>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <img src="images/img-loading.jpg" data-src="images/shop-img3.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20 mb-1"><a href="product-detail.html">Astor Sofa Chair</a></h4>
                        <div class="rating-container mb-3 d-flex align-items-center justify-content-center">
                            <div class="star-rating fs-14" data-rating="5"></div>
                            <span class="rating-counter">(2 Reviews)</span>
                        </div>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$100.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <img src="images/img-loading.jpg" data-src="images/shop-img4.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20 mb-1"><a href="product-detail.html">Malachite Carna Mug</a></h4>
                        <div class="rating-container mb-3 d-flex align-items-center justify-content-center">
                            <div class="star-rating fs-14" data-rating="3"></div>
                            <span class="rating-counter">(2 Reviews)</span>
                        </div>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$100.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <span class="badge badge-danger">-30%</span>
                        <img src="images/img-loading.jpg" data-src="images/shop-img5.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20 mb-1"><a href="product-detail.html">Leader Backpack</a></h4>
                        <div class="rating-container mb-3 d-flex align-items-center justify-content-center">
                            <div class="star-rating fs-14" data-rating="4.5"></div>
                            <span class="rating-counter">(2 Reviews)</span>
                        </div>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$35.00</span>
                            <span class="td-line-through text-gray-2">$75.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="card text-center hover-y overflow-hidden">
                    <ul class="product-action-list">
                        <li><a href="wishlist.html" data-toggle="tooltip" data-placement="right" title="Wishlist"><i class="fal fa-heart"></i></a></li>
                        <li><a href="cart.html" data-toggle="tooltip" data-placement="right" title="Add To Cart"><i class="fal fa-shopping-cart"></i></a></li>
                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fal fa-random"></i></a></li>
                    </ul>
                    <div class="card-head">
                        <img src="images/img-loading.jpg" data-src="images/shop-img6.png" alt="product image" class="card-img-top lazy">
                        <a href="#" class="btn btn-sm btn-primary add-to-cart-btn">Add to Cart <i class="fal fa-angle-right ml-1"></i></a>
                    </div><!-- end card-head -->
                    <div class="card-body">
                        <h4 class="card-title fs-20 mb-1"><a href="product-detail.html">Wooden Pen Holder</a></h4>
                        <div class="rating-container mb-3 d-flex align-items-center justify-content-center">
                            <div class="star-rating fs-14" data-rating="3.5"></div>
                            <span class="rating-counter">(2 Reviews)</span>
                        </div>
                        <div class="price-range fs-18 fw-semi-bold">
                            <span class="text-color-1">$100.00</span>
                        </div>
                    </div><!-- end card-body -->
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
        <div class="text-center">
            <a href="#" class="btn btn-primary"><i class="far fa-sync-alt mr-1"></i> Load more product</a>
        </div>
    </div><!-- end container -->
</section><!-- end product-area -->
<!-- ================================
       START PRODUCT AREA
================================= -->

<!-- ================================
       START HOW-IT-WORKS AREA
================================= -->
<section class="how-it-works-area bg-gray pt-5 pb-4 text-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="mb-4">
                    <span class="fal fa-rocket mb-3 fs-40 text-black"></span>
                    <h5 class="mb-2 fw-semi-bold">Payment & Delivery</h5>
                    <p>Free shipping for orders over $50</p>
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="mb-4">
                    <span class="fal fa-undo-alt mb-3 fs-40 text-black"></span>
                    <h5 class="mb-2 fw-semi-bold">Return & Refund</h5>
                    <p>Free 100% money back guarantee</p>
                </div>
            </div><!-- end col-lg-4 -->
            <div class="col-lg-4 col-md-6">
                <div class="mb-4">
                    <span class="fal fa-headphones mb-3 fs-40 text-black"></span>
                    <h5 class="mb-2 fw-semi-bold">Quality Support</h5>
                    <p>Always online feedback 24/7</p>
                </div>
            </div><!-- end col-lg-4 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end how-it-works-area -->
<!-- ================================
       START HOW-IT-WORKS AREA
================================= -->

<!-- ================================
       START FUN-FACT AREA
================================= -->
<section class="fun-fact-area bg-dark text-center section-padding pattern-bg">
    <div class="container">
        <h2 class="sec-title text-white">Numbers Say Everything</h2>
        <div class="row mt-5">
            <div class="col-lg-3 col-md-6">
                <div class="fun-fact-item mb-4">
                    <div class="icon-element mx-auto mb-5 d-block">
                        <i class="fal fa-bullhorn"></i>
                    </div>
                    <span class="counter text-white fs-50 font-weight-bold">40,540</span>
                    <span class="fs-50 text-white">+</span>
                    <p class="mt-3 fs-18 text-white">Products</p>
                </div><!-- end fun-fact-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="fun-fact-item mb-4">
                    <div class="icon-element mx-auto mb-5 d-block">
                        <i class="fal fa-users"></i>
                    </div>
                    <span class="counter text-white fs-50 font-weight-bold">1</span>
                    <span class="fs-50 text-white">M</span>
                    <p class="mt-3 fs-18 text-white">Customers</p>
                </div><!-- end fun-fact-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="fun-fact-item mb-4">
                    <div class="icon-element mx-auto mb-5 d-block">
                        <i class="fal fa-hand-holding-seedling"></i>
                    </div>
                    <span class="counter text-white fs-50 font-weight-bold">5,000</span>
                    <span class="fs-50 text-white">+</span>
                    <p class="mt-3 fs-18 text-white">Company</p>
                </div><!-- end fun-fact-item -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="fun-fact-item mb-4">
                    <div class="icon-element mx-auto mb-5 d-block">
                        <i class="fal fa-bullseye-arrow"></i>
                    </div>
                    <span class="counter text-white fs-50 font-weight-bold">10</span>
                    <p class="mt-3 fs-18 text-white">Years on the market</p>
                </div><!-- end fun-fact-item -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end fun-fact-area -->
<!-- ================================
       START FUN-FACT AREA
================================= -->

<!-- ================================
       START TESTIMONIAL AREA
================================= -->
<section class="testimonial-area section-padding">
    <div class="container">
        <h2 class="sec-title text-center">Our Customer's Feedback</h2>
        <div class="testimonial-slider owl-carousel owl-theme owl-theme-styled mt-4">
            <div class="card mb-0">
                <div class="card-body">
                    <div class="star-rating mb-2" data-rating="5"></div>
                    <p class="card-text mb-3">
                        Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi.
                    </p>
                    <h4 class="card-title fs-18 mb-0">Alex Smith</h4>
                    <p class="card-text">United States</p>
                    <span class="fas fa-quote-right fs-50 position-absolute bottom-0 right-0 text-gray mr-3 mb-3"></span>
                </div>
            </div><!-- end card -->
            <div class="card mb-0">
                <div class="card-body">
                    <div class="star-rating mb-2" data-rating="5"></div>
                    <p class="card-text mb-3">
                        Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi.
                    </p>
                    <h4 class="card-title fs-18 mb-0">John Doe</h4>
                    <p class="card-text">United States</p>
                    <span class="fas fa-quote-right fs-50 position-absolute bottom-0 right-0 text-gray mr-3 mb-3"></span>
                </div>
            </div><!-- end card -->
            <div class="card">
                <div class="card-body">
                    <div class="star-rating mb-2" data-rating="5"></div>
                    <p class="card-text mb-3">
                        Consequat occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat velit proident aliquip nisi incididunt nostrud exercitation proident est nisi.
                    </p>
                    <h4 class="card-title fs-18 mb-0">Kevin</h4>
                    <p class="card-text">Italy</p>
                    <span class="fas fa-quote-right fs-50 position-absolute bottom-0 right-0 text-gray mr-3 mb-3"></span>
                </div>
            </div><!-- end card -->
        </div><!-- end testimonial-slider -->
    </div><!-- end container -->
</section><!-- end testimonial-area -->
<!-- ================================
       START TESTIMONIAL AREA
================================= -->

<hr class="border-top-gray my-0">

<!-- ================================
       START CLIENTLOGO AREA
================================= -->
<section class="clientlogo-area section-padding text-center">
    <div class="container">
        <div class="client-logo-slider owl-carousel">
            <div class="d-inline-block">
                <img src="images/client1.png" alt="brand image">
            </div>
            <div class="d-inline-block">
                <img src="images/client2.png" alt="brand image">
            </div>
            <div class="d-inline-block">
                <img src="images/client3.png" alt="brand image">
            </div>
            <div class="d-inline-block">
                <img src="images/client4.png" alt="brand image">
            </div>
            <div class="d-inline-block">
                <img src="images/client5.png" alt="brand image">
            </div>
        </div><!-- end client-logo-slider -->
    </div><!-- end container -->
</section><!-- end clientlogo-area -->
<!-- ================================
       START CLIENTLOGO AREA
================================= -->

<hr class="border-top-gray my-0">

<!-- ================================
       START CTA AREA
================================= -->
<section class="cta-area bg-img py-5 position-relative">
    <div class="overlay z-index-0"></div>
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-between position-relative z-index-1">
            <div class="my-2">
                <h2 class="sec-title text-white mb-1">Sign Up & Get 10% Off</h2>
                <p class="text-white">Minzel presents the best in interior design</p>
            </div>
            <a href="sign-up.html" class="btn btn-light">Sign Up <i class="fal fa-angle-right ml-1"></i></a>
        </div><!-- end d-flex -->
    </div><!-- end container -->
</section><!-- end cta-area -->
<!-- ================================
       START CTA AREA
================================= -->

<!-- END WEBSITE BODY PART -->
@endsection('content')