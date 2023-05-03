@extends('user.layouts.master')



@section('content')



<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    
                    <h1>Shop</h1>
                    <h6>“Don’t you love the confidence that comes with a good lipstick and the perfect mascara?”</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- products -->
<div class="product-section mt-150 mb-150">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".primer">Primer</li>
                        <li data-filter=".foundation">Foundation</li>
                        <li data-filter=".bronzer">Bronzer</li>
                        <li data-filter=".blusher">Blusher</li>
                        <li data-filter=".lipstick">Lipstick</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row product-lists">
            <div class="col-lg-4 col-md-6 text-center primer">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/1.png" alt=""></a>
                    </div>
                    <h3>Primer</h3>
                    <p class="product-price"> 17$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center blusher">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/2.png" alt=""></a>
                    </div>
                    <h3>Blush</h3>
                    <p class="product-price"> 22$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center bronzer">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/3.png" alt=""></a>
                    </div>
                    <h3>Bronzer</h3>
                    <p class="product-price"> 20$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center lipstick">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/4.png" alt=""></a>
                    </div>
                    <h3>Lipstick</h3>
                    <p class="product-price"> 12$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center foundation">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/5.png" alt=""></a>
                    </div>
                    <h3>Foundation</h3>
                    <p class="product-price"> 45$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center lipstick">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="assets/img/products/6.png" alt=""></a>
                    </div>
                    <h3>Lip balm</h3>
                    <p class="product-price"> 8$ </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="pagination-wrap">
                    <ul>
                        <li><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a class="active" href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end products -->

<!-- footer -->
<div class="footer-area">
    <div class="container">
        <div class="row cent">
            <div class="col-lg-3 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">Our Socials</h2>
                    <div class="foot-icons">
                    <a  class="socials" href=""><img src="./assets/img/instagram.png"></a>
                    <a class="socials" href=""><img src="./assets/img/facebook.png"></a>
                    <a class="socials" href=""><img src="./assets/img/twitter (1).png"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">Get in Touch</h2>
                    <ul>
                        
                        <li>mix&match@gmail.com</li>
                        <li>+962 798848899</li>
                    </ul>
                </div>
            </div>
        
            
        </div>
    </div>
</div>
@endsection