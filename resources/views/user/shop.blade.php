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
{{-- @if (session('message'))
    <div class="alert alert-danger">{{ session('message') }}</div>
@endif --}}
<!-- products -->
<div class="product-section mt-150 mb-150">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="product-filters">
                    <ul>
                        <li class="active" data-filter="*">All</li>
                        <li data-filter=".Primer">Primer</li>
                        <li data-filter=".Foundation">Foundation</li>
                        <li data-filter=".Bronzer">Bronzer</li>
                        <li data-filter=".Blusher">Blusher</li>
                        <li data-filter=".Lipstick">Lipstick</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row ">
            @foreach ($products as $product)
            <?php $img = $product['image']; ?>


            <div class="col-lg-4 col-md-6 text-center {{ $product->category->name }}">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="{{route('user.single',['id'=> $product->id])}}"><img  src="{{URL::asset("storage/image/$img")}}" alt=""></a>
                    </div>
                    <h3>{{$product->name}}</h3>
                    <p class="product-price"> {{$product->price}}$ </p>
                    <a href="{{ route('user.cart.add', ['id' => $product->id]) }}"  class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                    
                    @if(session('error'))
                    
                    <div style="margin-top: 10px; margin-bottom:0" class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                </div>
            </div>
            @endforeach
            
        </div>
<br><br>
        <div class="row" style="visibility: hidden">
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


@endsection