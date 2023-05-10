@extends('user.layouts.master')



@section('content')

    <!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
					<div class="hero-text">
						<div class="hero-text-tablecell">
							<p class="subtitle">Classy & Organic</p>
							<h2>Be the standout instantly <br>
								with the right make-up.</h2>
							<div class="hero-btns">
								<a href="{{route('user.shop')}}" class="boxed-btn">Shop Now</a>
								<a href="#" class="bordered-btn">Customize make-up</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

    <!-- logo carousel -->
	<div class="logo-carousel-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="logo-carousel-inner">
						<div class="single-logo-item">
							<img src="assets/img/company-logos/topface.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/merit.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/elf.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/W3LLPEOPLE.jpg" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/theLipBar.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/exa.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/hourglass.png" alt="">
						</div>
						<div class="single-logo-item">
							<img src="assets/img/company-logos/tower28.jpg" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end logo carousel -->

	

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Best</span> Sellers</h3>
						<h5>WE CATER TO YOUR INDIVIDUAL BEAUTY. EACH WOMAN IS UNIQUE AND WE CREATE MAKEUP THAT IS AS SPECIAL AS SHE IS.</h5>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href=""><img src="assets/img/products/1.png" alt=""></a>
						</div>
						<h3>E.L.F., Hydrating Face Primer</h3><br>
						<p class="product-price"><span>0.47 fl oz (14 ml)</span> 17$ </p>
						<a href="{{route('user.shop')}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href=""><img src="assets/img/products/2.png" alt=""></a>
						</div>
						<h3> Minute Finish Powder Face Palette</h3>
						<p class="product-price"><span>0.11 oz./ 3g</span> 22$ </p>
						<a href="{{route('user.shop')}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
					<div class="single-product-item">
						<div class="product-image">
							<a href=""><img src="assets/img/products/3.png" alt=""></a>
						</div>
						<h3>Bronzino Illuminating Cream Bronzer</h3>
						<p class="product-price"><span>0.158 oz / 4.5 g</span> 20$ </p>
						<a href="{{route('user.shop')}}" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">	
                   <h4 style="font-size: 25px;"> “The most beautiful makeup of a woman is passion. But cosmetics are easier to buy.” <h5 class="orange-text">― Yves Saint Laurent<h5></h4>
                </div>
            </div>
        </div>
    </div>
	<!-- end product section -->

	<!-- cart banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-6">
                	<div class="image">
                    	<div class="price-box">
                        	<div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> off purchase
                                </span>
                            </div>
                        </div>
                    	<img src="assets/img/products/tlb.png" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
					<h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4 style="font-weight:600;">T.L.B</h4>
                    <div class="text">The Lip Bar is on fire!!! Discount up to 30% off any purchase you make on T.L.B's products until the end of this month. Don't miss the sale.</div>
                    <!--Countdown Timer-->
                    <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2023/2/01"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
                	<a href="{{route('user.shop')}}" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> SHOP NOW</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

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
								<img src="assets/img/avaters/avatar1.jpg" alt="">
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
								<img src="assets/img/avaters/avatar2.jpg" alt="">
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
								<img src="assets/img/avaters/avatar3.jpg" alt="">
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
	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
						<a href="https://youtu.be/esgelqn7230" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						
						<h3>We are <span class="orange-text">Mix & Match</span></h3>
						<p>We believe that make-up is the art of uplifting your overall and in order for the art to be inspiring and delightful it has to be fit and healthy .From these sincere beliefs came MIX & MATCH. </p>
						<p>Our body thanks us when we not only give our thoughts a break, but also do something good for our health in the long term. This is made possible by natural and organic cosmetics.You'll be a couple of questions away from finding and shopping the perfectly matching products to your skins needs and color.</p>
						<a href="about.html" class="boxed-btn mt-4">know more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	
	<!-- shop banner -->
	<section class="shop-banner">
    	<div class="container">
        	<h3>January sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="{{route('user.shop')}}" class="cart-btn btn-lg">Shop Now</a>
           
        </div>
         
    </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Our</span> News</h3>
						<p></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="{{route('user.news')}}"><div class="latest-news-bg news-bg-1"></div></a>
						<div class="news-text-box">
							<h3><a href="{{route('user.news')}}">Market Insights and Forecast with Impact of COVID-19 (2022-2027).</a></h3>
							<p class="blog-meta"> The Global Natural and Organic Cosmetics Market was valued at USD 29.92 billion in the year 2021.<br>
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 3 October, 2021</span>
							</p>
							<p class="excerpt"></p>
							<a href="{{route('user.news')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
                
                <div class="col-lg-4 col-md-6 ">
					<div class="single-latest-news">
						<a href="{{route('user.news')}}"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3><a href="{{route('user.news')}}">Marie Kondo Reveals Which Beauty Products Spark Joy for Her </a></h3>
							<p class="blog-meta">Marie Kondo,explains how applying the KonMari method to your makeup can make you look at yourself in a new way. <br>
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 21 December, 2022</span>
							</p>
							<p class="excerpt"></p>
							<a href="{{route('user.news')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						     </div>
					    </div>
				    </div>
			    
               

				<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="{{route('user.news')}}"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3><a href="{{route('user.news')}}">The 12 Best Natural and Organic Makeup Brands of 2022</a></h3>
							<p class="blog-meta">  We asked makeup artists for their all-time favorites and you wont believe their answers!!<br>
								<span class="author"><i class="fas fa-user"></i> Admin</span>
								<span class="date"><i class="fas fa-calendar"></i> 27 May, 2022</span>
							</p>
							<p class="excerpt"></p>
							<a href="{{route('user.news')}}" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
            </div>
               
			
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="{{route('user.news')}}"class="boxed-btn">More News</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->
    <!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->
	
@endsection

