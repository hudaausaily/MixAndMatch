@extends('admin.layouts.master')

<?php
$user=Auth::user()->name
?>
@section('title')
welcome
@endsection
@section('css')
<style>
  .bars{
    margin-top: 55px;
    margin-bottom: -45px;
  }
  </style>
@endsection
@section('Dashboard')
active
@endsection
@section('title_page1')
{{$user}}
@endsection
@section('title_page2')
welcome
@endsection

@section('content')

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid" >
      <!-- Small boxes (Stat box) -->
      <div class="row">
                <blockquote style="border-color: #ffe8a1; width: 100% ; padding : 15px">
                  <p style="font-size: 18px">Welcome to Mix&Match's Admin Dashboard {{$user}}!<br> We hope you find the system easy to manage and navigate through.</p>
                  {{-- <small> <cite title="Source Title"></cite></small> --}}
                </blockquote>
      </div>
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box text-white bg-danger" >
            <div class="inner">
             
              <h3>

                {{$number_of_products}}
              </h3>
              

              <p>Number of products</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-cart-shopping"></i>
            </div>
            <a href="{{route('admin.products.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box" style="background-color: #ffe8a1 ">
            <div class="inner">
              <h3>{{$number_of_order}}</h3>

              <p>Number of orders</p>
            </div>
            <div class="icon">
              <i class="ion fas fa-th"></i>
            </div>
            <a href="{{route('admin.order.index')}}" class="small-box-footer text-body">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box text-white bg-danger">
            <div class="inner">
              <h3>{{$number_of_users}}</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-users"></i>
            </div>
            <a href="{{route('admin.users.index')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box" style="background-color: #ffe8a1 ">
            <div class="inner">
              <h3>{{$number_of_message}}</h3>

              <p>Number of messages</p>
            </div>
            <div class="icon">
              <i class="fa-solid fa-message"></i>
            </div>
            <a href="{{route('admin.contact.show')}}" class="small-box-footer text-body">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
     <div class="row">
      <div class="col-md-6">
        <div class="card">
          
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
            <h4>Sponsor of the month</h4>
          </div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img style="height: 350px"class="d-block w-100" src="https://snobette.com/wp-content/uploads/2020/03/alexa-demie-mac-cosmetics-campaign-spring-2020-1-1024x776.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img style="height: 350px" class="d-block w-100" src="https://lybui98.files.wordpress.com/2019/04/mac-e1554787105203.png?w=640" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img style="height: 350px" class="d-block w-100" src="https://i.ytimg.com/vi/Gi9aIuFquUE/maxresdefault.jpg" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-custom-icon" aria-hidden="true">
                  <i class="fas fa-chevron-left"></i>
                </span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-custom-icon" aria-hidden="true">
                  <i class="fas fa-chevron-right"></i>
                </span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>

      <div class="col-md-6">
        <div class="card">
          
          <!-- /.card-header -->
          <div class="card-body" style="margin-bottom: 112px">
            <h4>
              Most selling brands this month
            </h4>
            <div class="bars">
            <h6>Hourglass</h6>
            <div class="progress mb-3">
              <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                   aria-valuemax="100" style="width: 40%">
                <span class="sr-only">40% Complete (success)</span>
              </div>
            </div>
            <h6>NYX</h6>
            <div class="progress mb-3">
              <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                   aria-valuemax="100" style="width: 20%">
                <span class="sr-only">20% Complete</span>
              </div>
            </div>
            <h6>Tower 28</h6>
            <div class="progress mb-3">
              <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                   aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (warning)</span>
              </div>
            </div>
            <h6>MAC</h6>
            <div class="progress mb-3">
              <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                   aria-valuemax="100" style="width: 80%">
                <span class="sr-only">80% Complete</span>
              </div>
            </div>
            </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    




@endsection
@section('script')

@endsection
