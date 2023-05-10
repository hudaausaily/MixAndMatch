@extends('user.layouts.master')

@section('content')

<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    
                    <h1>About Us</h1>
                    <p>OUR STORY</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                    <h3>Who Are<span class="orange-text">We?</span></h3>
                    <h5>WE CATER TO YOUR INDIVIDUAL BEAUTY. EACH WOMAN IS UNIQUE AND WE CREATE MAKEUP THAT IS AS SPECIAL AS SHE IS. WE BELIEVE PERFECTLY MATCHING MAKEUP WILL TAKE YOUR OVER-ALL TO ANOTHER LEVEL, SO WE CAME UP WITH A PRECISE TEST TO DETERMINE WHAT'S MOST FITTING FOR YOU . WE HAVE A LARGE TEAM WORKING ON MAKING THE BEST SELECTION OF ORGANIC , CLEAN AND VEGAN MAKEUP.</h5>
                </div>
            </div>
        </div>
        </div>

<!-- featured section -->
<div class="feature-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="featured-text">
                    <h2 class="pb-3" style="color: black;">Why <span class="orange-text">Mix & Match? </span></h2>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-shipping-fast"></i>
                                </div>
                                <div class="content">
                                    <h3>Home Delivery</h3>
                                    <p>We deliver to your door step and ensure your products arrive safely.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-money-bill-alt"></i>
                                </div>
                                <div class="content">
                                    <h3>Best Price</h3>
                                    <p>All year long sales at every season !!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 mb-5 mb-md-5">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-briefcase"></i>
                                </div>
                                <div class="content">
                                    <h3>Custom Box</h3>
                                    <p>Custom picked makeup to fit your needs and wants.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="list-box d-flex">
                                <div class="list-icon">
                                    <i class="fas fa-sync-alt"></i>
                                </div>
                                <div class="content">
                                    <h3>Quick Refund</h3>
                                    <p>In case of any inconvenience a quick refund is possible .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end featured section -->

<!-- shop banner -->
<section class="shop-banner">
    <div class="container">
        <h3>January sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
        <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
        <a href="{{route('user.shop')}}" class="cart-btn btn-lg">Shop Now</a>
    </div>
</section>
<!-- end shop banner -->

<!-- team section -->
<div class="mt-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3>Our <span class="orange-text">Team</span></h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-team-item">
                    <div class="team-bg team-bg-1"></div>
                    <h4>Julie Doe <span> Cosmetic chemist</span></h4>
                    <ul class="social-link-team">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-team-item">
                    <div class="team-bg team-bg-2"></div>
                    <h4>Marry Doe <span>Make-up Artist</span></h4>
                    <ul class="social-link-team">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-team-item">
                    <div class="team-bg team-bg-3"></div>
                    <h4>Simon Joe <span> Makeup product developer</span></h4>
                    <ul class="social-link-team">
                        <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end team section -->

<!-- testimonail-section -->
<div class="testimonail-section mt-150 mb-150">
<div class="container">
    <div class="row">
        <div class="col-lg-8 offset-lg-2 text-center">
            <div class="section-title">	
                <h3>Our <span class="orange-text">Happy</span> Clients</h3>
            </div>
        </div>
        <div class="col-lg-10 offset-lg-1 text-center">
            <div class="testimonial-sliders">
                <div class="single-testimonial-slider">
                    <div class="client-avater">
                        <img src="../assets/img/avaters/avatar1.jpg" alt="">
                    </div>
                    <div class="client-meta">
                        <h3>Sara Karim </h3>
                        <p class="testimonial-body">
                            " Hands down the best make-up shopping experience i've had was with Mix & Match,offering a variety of organic brands to start with and the quick test you take to help customize your make-up to your needs was pretty helpful. "
                        </p>
                        <div class="last-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial-slider">
                    <div class="client-avater">
                        <img src="../assets/img/avaters/avatar2.jpg" alt="">
                    </div>
                    <div class="client-meta">
                        <h3>Georgia blu</h3>
                        <p class="testimonial-body">
                            " I've been looking for a long time for a place where all the cruelty-free and organic products are being sold and i found what i was looking for in Mix & Match "
                        </p>
                        <div class="last-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial-slider">
                    <div class="client-avater">
                        <img src="../assets/img/avaters/avatar3.jpg" alt="">
                    </div>
                    <div class="client-meta">
                        <h3>Jacob Riddle </h3>
                        <p class="testimonial-body">
                            "Made the job easier for me to pick out makeup as a gift for a friend. Had a pleasant experience with good quality products and ideal shipping time "
                        </p>
                        <div class="last-icon">
                            <i class="fas fa-quote-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end testimonail-section -->

<!-- logo carousel -->
<div class="logo-carousel-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="logo-carousel-inner">
                    <div class="single-logo-item">
                        <img src="../assets/img/company-logos/topface.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="../assets/img/company-logos/merit.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="../assets/img/company-logos/elf.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="../assets/img/company-logos/W3LLPEOPLE.jpg" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="../assets/img/company-logos/theLipBar.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="../assets/img/company-logos/exa.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="../assets/img/company-logos/hourglass.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="../assets/img/company-logos/tower28.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection