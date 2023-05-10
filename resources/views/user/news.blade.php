@extends('user.layouts.master')

@section('content')

<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Organic Information</p>
                    <h1>News Article</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

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
                    <a href=" "><div class="latest-news-bg news-bg-1"></div></a>
                    <div class="news-text-box">
                        <h3><a href=" ">Market Insights and Forecast with Impact of COVID-19 (2022-2027).</a></h3>
                        <p class="blog-meta"> The Global Natural and Organic Cosmetics Market was valued at USD 29.92 billion in the year 2021.<br>
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> 3 October, 2021</span>
                        </p>
                        <p class="excerpt"></p>
                        <a href=" " class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 ">
                <div class="single-latest-news">
                    <a href=" "><div class="latest-news-bg news-bg-3"></div></a>
                    <div class="news-text-box">
                        <h3><a href=" ">Marie Kondo Reveals Which Beauty Products Spark Joy for Her </a></h3>
                        <p class="blog-meta">Marie Kondo,explains how applying the KonMari method to your makeup can make you look at yourself in a new way. <br>
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> 21 December, 2022</span>
                        </p>
                        <p class="excerpt"></p>
                        <a href=" " class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                         </div>
                    </div>
                </div>
            
           

            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                <div class="single-latest-news">
                    <a href=" "><div class="latest-news-bg news-bg-2"></div></a>
                    <div class="news-text-box">
                        <h3><a href=" ">The 12 Best Natural and Organic Makeup Brands of 2022</a></h3>
                        <p class="blog-meta">  We asked makeup artists for their all-time favorites and you wont believe their answers!!<br>
                            <span class="author"><i class="fas fa-user"></i> Admin</span>
                            <span class="date"><i class="fas fa-calendar"></i> 27 May, 2022</span>
                        </p>
                        <p class="excerpt"></p>
                        <a href=" " class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
           
        
        <div class="row">
            <div class="col-lg-12 text-center">
                <a href="" class="boxed-btn">More News</a>
            </div>
        </div>
    </div>
</div>
<!-- end latest news -->

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
<!-- end logo carousel -->

@endsection