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
            <h2 class="sec-title mb-2">Shopping Cart</h2>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Cart</li>
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
<section class="product-area pt-80 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mb-4 mb-lg-0">
                <table class="table table-mobile">
                    <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="product-col">
                            <div class="media align-items-center">
                                <a href="product-detail.html" class="mr-3 d-block">
                                    <img src="images/product-1.jpeg" alt="Product image" class="img-fluid rounded">
                                </a>
                                <div class="media-body">
                                    <h5 class="product-title"><a href="product-detail.html">Beige knitted elastic runner shoes</a></h5>
                                </div>
                            </div><!-- end media -->
                        </td>
                        <td class="price-col">$84.00</td>
                        <td class="quantity-col">
                            <div class="quantity-box d-inline-flex align-items-center">
                                <a href="javascript:void(0)" class="qtyBtn qtyDec"><i class="fal fa-minus"></i></a>
                                <input class="qtyInput" type="text" name="qty-input" value="1">
                                <a href="javascript:void(0)" class="qtyBtn qtyInc"><i class="far fa-plus"></i></a>
                            </div>
                        </td>
                        <td class="total-col text-color-1">$84.00</td>
                        <td class="remove-col">
                            <a href="#" class="icon-element icon-element-xs-2"><i class="fal fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td class="product-col">
                            <div class="media align-items-center">
                                <a href="product-detail.html" class="mr-3 d-block">
                                    <img src="images/product-1.jpeg" alt="Product image" class="img-fluid rounded">
                                </a>
                                <div class="media-body">
                                    <h5 class="product-title"><a href="product-detail.html">Beige knitted elastic runner shoes</a></h5>
                                </div>
                            </div><!-- end media -->
                        </td>
                        <td class="price-col">$84.00</td>
                        <td class="quantity-col">
                            <div class="quantity-box d-inline-flex align-items-center">
                                <a href="javascript:void(0)" class="qtyBtn qtyDec"><i class="fal fa-minus"></i></a>
                                <input class="qtyInput" type="text" name="qty-input" value="1">
                                <a href="javascript:void(0)" class="qtyBtn qtyInc"><i class="far fa-plus"></i></a>
                            </div>
                        </td>
                        <td class="total-col text-color-1">$84.00</td>
                        <td class="remove-col">
                            <a href="#" class="icon-element icon-element-xs-2"><i class="fal fa-times"></i></a>
                        </td>
                    </tr>
                    </tbody>
                </table><!-- end table -->
                <hr class="border-top-gray mt-0 mb-4">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="input-group w-auto my-2">
                        <input type="text" class="form-control form--control" placeholder="Enter coupon code">
                        <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fal fa-long-arrow-right"></i></button>
                        </div>
                    </div><!-- end input-group -->
                    <a href="#" class="btn btn-primary">Update Cart</a>
                </div><!-- end d-flex -->
            </div><!-- end col-lg-9 -->
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="fw-semi-bold">Cart Total</h5>
                        <hr class="border-top-gray mb-0">
                        <ul class="list-group list-group-flush fs-15 mb-4">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="text-black fw-medium">Subtotal:</span>
                                $168.00
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="text-black fw-medium">Shipping:</span>
                                Free Shipping
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="text-black fw-medium">Tax:</span>
                                $0.00
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center fs-17">
                                <span class="text-color-1 fw-medium">Total:</span>
                                <span class="text-color-1">$168.00</span>
                            </li>
                        </ul>
                        <a href="checkout.html" class="btn btn-primary w-100 mb-3">Proceed to Checkout <i class="fal fa-angle-right ml-2"></i></a>
                        <a href="shop-no-sidebar.html" class="btn btn-light w-100"><i class="fal fa-shopping-cart mr-2"></i> Continue Shopping </a>
                    </div>
                </div><!-- end card -->
            </div><!-- end col-lg-3 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end product-area -->
<!-- ================================
       START PRODUCT AREA
================================= -->

<!-- END WEBSITE BODY PART -->
@endsection('content')