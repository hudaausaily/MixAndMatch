@extends('user.layouts.master')

@section('content')
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Classy and Organic</p>
						<h1>Check Out Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

<!-- check out section -->
<div class="checkout-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-accordion-wrap">
                    <div class="accordion" id="accordionExample">
                      <div class="card single-accordion">
                        <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              Billing Address
                            </button>
                          </h5>
                        </div>

                        <div id="collapseOne" class="collapse show" >
                          <div class="card-body">
                            <div class="billing-address-form">
                              <form action="{{ route('user.place-order') }}" method="POST">
                                @csrf
                                  <p><input type="text" placeholder="name" name="name" required></p>
                                    <p><input type="email" placeholder="email" name="email" required></p>
                                    <p><input type="text" placeholder="address" name="address" required></p>
                                    <p><input type="tel" placeholder="phone" name="phone" required></p>
                                    <p><textarea name="comment" id="bill" cols="30" rows="10" placeholder="Say Something"></textarea></p>
                                    <input type="hidden" name="cartItems" value="{{ json_encode($cartItems) }}">


                                    <p class="form-submit-button"><input  type="submit" value="Submit"></p>

                                </form>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card single-accordion">
                        <div class="card-header" id="headingTwo">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Shipping Address
                            </button>
                          </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="shipping-address-form">
                                <p>Your shipping address form is here.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card single-accordion">
                        <div class="card-header" id="headingThree">
                          <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              Card Details
                            </button>
                          </h5>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                            <div class="card-details">
                                <p>Your card details goes here.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
              <div class="order-details-wrap">
                  <table class="order-details">
                      <thead>
                          <tr>
                              <th>Your order Details</th>
                              <th>Price</th>
                          </tr>
                      </thead>
                      <tbody class="order-details-body">
                        @foreach ($cartItems as $cartItem)
                            <tr>
                                <td>{{ $cartItem->product->name }}</td>
                                <td>{{ $cartItem->product->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                      <tbody class="checkout-details">
                          <tr>
                              <td>Subtotal</td>
                              <td>{{ $subtotal }}</td>
                          </tr>
                          <tr>
                              <td>Shipping</td>
                              <td>5</td>
                          </tr>
                          <tr>
                              <td>Total</td>
                              <td>{{ $subtotal + 5 }}</td>
                          </tr>
                      </tbody>
                  </table>
              </div>
          </div>
          
        </div>
    </div>
</div>




@endsection