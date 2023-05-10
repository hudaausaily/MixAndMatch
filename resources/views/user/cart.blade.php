@extends('user.layouts.master')

@section('content')

<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Classy and Organic</p>
                    <h1>Cart</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- cart -->

<div class="cart-section mt-150 mb-150">
    <div class="container">
        @if(isset($cartItem))
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="cart-table-wrap">
                    <table class="cart-table">
                        <thead class="cart-table-head">
                            <tr class="table-head-row">
                                <th class="product-remove"></th>
                                <th class="product-image">Product Image</th>
                                <th class="product-name">Name</th>
                                <th class="product-price">Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-total">Total</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($cartItems as $cartItem)
                            <tr class="table-body-row">
                                <td class="product-remove"><a href="{{ route('user.cart.remove', $cartItem['id']) }}"><i class="far fa-window-close"></i></a></td>
                                <td class="product-image"><img src="{{ asset('assets/img/products/' . $cartItem['product']['image']) }}" alt=""></td>
                                <td class="product-name">{{ $cartItem['product']['name'] }}</td>
                                <td class="product-price">{{ $cartItem['product']['price'] }}$</td>
                                <td>
                                    <form class="update-cart-form" action="{{ route('user.cart.update', $cartItem['id']) }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="item_id" value="{{ $cartItem['id'] }}">
                                        <input type="number" value="{{ $cartItem['quantity'] }}" name="quantity" class="quantity">
                                        <button type="submit" style="background: none; border: none"><i class="fa-solid fa-plus" style="color: #f71610;"></i></button>
                                    </form>
                                </td>
                                <td class="product-total">{{ $cartItem['product']['price'] * $cartItem['quantity'] }}$</td>
                            </tr>
                        @endforeach
                        
                        </tbody>
                        
                            
                           
                    </table>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="total-section">
                    <table class="total-table">
                        <thead class="total-table-head">
                            <tr class="table-total-row">
                                <th>Total</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="total-data">
                                <td><strong>Subtotal: </strong></td>
                                <td>{{ $subtotal }}$</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Shipping: </strong></td>
                                <td>5$</td>
                            </tr>
                            <tr class="total-data">
                                <td><strong>Total: </strong></td>
                                <td>{{ $subtotal + 5 }}$</td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="cart-buttons">
                        {{-- <a href="#" class="boxed-btn" id="update-cart-btn">Update Cart</a> --}}
                        <a href="{{route('user.checkout.index',['id'=> $cartItem->id])}}" class="boxed-btn black" >Check Out</a>
                        @else
                        <p>Your cart is currently empty.</p>
                        @endif
                    </div>
                    
                </div>
               
            
                



                {{-- <div class="coupon-section">
                    <h3>Apply Coupon</h3>
                    <div class="coupon-form-wrap">
                        <form action="index.html">
                            <p><input type="text" placeholder="Coupon"></p>
                            <p><input type="submit" value="Apply"></p>
                        </form>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<!-- end cart -->
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("#update-cart-btn").click(function(event) {
            event.preventDefault();
            $(".update-cart-form").each(function() {
                $(this).submit();
            });
        });
    });
</script>

 
  