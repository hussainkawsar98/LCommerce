<!-- EXTEND WEBSITE LAYOUT -->
@extends('layouts.website')

<!-- WEBSITE PADE TITLE -->
@section('title', 'Shop Page | E-commerce Website with Laravel')

<!-- WEBSITE BODY PART -->
@section('content')

<!--================================
         START HERO AREA
=================================-->
<section class="hero-area py-5 bg-gray bread-bg">
    <div class="container">
        <div class="hero-content text-center">
            <h2 class="sec-title mb-2">Shop</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </nav>
        </div><!-- end hero-content -->
    </div><!-- end container -->
</section><!-- end hero-area -->
<!--================================
        END HERO AREA
=================================-->

<!-- ================================
       START PRODUCT AREA
================================= -->
<section class="product-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="sidebar mb-4 mb-lg-0 position-sticky top-0">
                    <div class="sidebar-widget mb-4 border-bottom border-bottom-gray pb-4">
                        <div class="form-group position-relative mb-4">
                            <input class="form-control form--control" type="search" name="search" placeholder="Search Products">
                            <button type="submit" class="btn position-absolute top-0 right-0"><i class="fal fa-search"></i></button>
                        </div>
                        <h5 class="mb-3">Categories</h5>
                        <ul class="list-group list-group-flush fs-15">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#">Furniture</a>
                                <span class="badge badge-light badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#">Decoration</a>
                                <span class="badge badge-light badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#">Lighting</a>
                                <span class="badge badge-light badge-pill">1</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#">Electronics</a>
                                <span class="badge badge-light badge-pill">14</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#">Armchairs & Chaises</a>
                                <span class="badge badge-light badge-pill">2</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="#">Sofas & Sleeper Sofas</a>
                                <span class="badge badge-light badge-pill">1</span>
                            </li>
                        </ul>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget mb-4 border-bottom border-bottom-gray pb-4">
                        <h5 class="mb-3">Price</h5>
                        <form action="#" class="d-flex align-items-center">
                            <input class="form-control form--control form--control-sm" type="text" name="text" placeholder="$5">
                            <span class="mx-2">-</span>
                            <input class="form-control form--control form--control-sm mr-2" type="text" name="text" placeholder="$200">
                            <button type="submit" class="btn btn-sm btn-light"><i class="far fa-angle-right"></i></button>
                        </form>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget mb-4 border-bottom border-bottom-gray pb-4">
                        <h5 class="mb-3">Size</h5>
                        <div class="filter-size">
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" id="size-xs">
                                <label class="custom-control-label" for="size-xs">XS</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" id="size-s">
                                <label class="custom-control-label" for="size-s">S</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" id="size-m">
                                <label class="custom-control-label" for="size-m">M</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" id="size-l">
                                <label class="custom-control-label" for="size-l">L</label>
                            </div>
                            <div class="custom-control custom-checkbox mb-1">
                                <input type="checkbox" class="custom-control-input" id="size-xl">
                                <label class="custom-control-label" for="size-xl">XL</label>
                            </div>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget mb-4 border-bottom border-bottom-gray pb-4">
                        <h5 class="mb-3">Color</h5>
                        <div class="filter-colors">
                            <a href="#" class="brown selected"></a>
                            <a href="#" class="blue"></a>
                            <a href="#" class="purple"></a>
                            <a href="#" class="black"></a>
                            <a href="#" class="green"></a>
                        </div>
                    </div><!-- end sidebar-widget -->
                    <div class="sidebar-widget">
                        <h5 class="mb-3">Tags</h5>
                        <div class="filter-tags">
                            <a href="#" class="btn btn-sm btn-light mb-1">Armchairs</a>
                            <a href="#" class="btn btn-sm btn-light mb-1">Sofas</a>
                            <a href="#" class="btn btn-sm btn-light mb-1">Wood</a>
                            <a href="#" class="btn btn-sm btn-light mb-1">Office</a>
                            <a href="#" class="btn btn-sm btn-light mb-1">Desks</a>
                            <a href="#" class="btn btn-sm btn-light mb-1">Footstools</a>
                            <a href="#" class="btn btn-sm btn-light mb-1">Outdoor</a>
                            <a href="#" class="btn btn-sm btn-light mb-1">Bedroom</a>
                        </div>
                    </div><!-- end sidebar-widget -->
                </div><!-- end sidebar -->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-9">
                <div class="filter-bar d-flex flex-wrap align-items-center justify-content-between">
                    <p class="fs-15 my-2">Showing <span class="text-black">1–6 of 33</span> products</p>
                    <div class="select-picker-wrap">
                        <select class="custom-select" data-width="160" data-size="5">
                            <option value="popularity">Sort by popularity</option>
                            <option value="new">Sort by new</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date" selected="selected">Sort by latest</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </div>
                </div><!-- end filter-bar -->
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6">
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
                                <div class="filter-colors filter--colors mt-2 justify-content-center">
                                    <a href="#" class="brown"></a>
                                    <a href="#" class="blue"></a>
                                </div>
                            </div><!-- end card-body -->
                        </div><!-- end card -->
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
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
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
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
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
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
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
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
                    </div><!-- end col-lg-4 -->
                    <div class="col-lg-4 col-md-6">
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
                    </div><!-- end col-lg-4 -->
                </div><!-- end row -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center pagination-list">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true" class="fal fa-angle-left"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true" class="fal fa-angle-right"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- end col-lg-9 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end product-area -->
<!-- ================================
       START PRODUCT AREA
================================= -->

<!-- ================================
       START PRODUCT AREA
================================= -->
<section class="product-area section--padding bg-gray">
    <div class="container">
        <h3 class="sec-title text-center">You May Also Like</h3>
        <div class="card-slider owl-carousel owl-theme owl-theme-styled owl-theme--styled mt-4">
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
                    <h4 class="card-title fs-20 mb-1"><a href="product-detail.html">Beige power bank</a></h4>
                    <div class="rating-container mb-3 d-flex align-items-center justify-content-center">
                        <div class="star-rating fs-14" data-rating="3.5"></div>
                        <span class="rating-counter">(2 Reviews)</span>
                    </div>
                    <div class="price-range fs-18 fw-semi-bold">
                        <span class="text-color-1">$100.00</span>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div><!-- end card-slider -->
    </div><!-- end container -->
</section><!-- end product-area -->
<!-- ================================
       START PRODUCT AREA
================================= -->

<!-- END WEBSITE BODY PART -->
@endsection('content')