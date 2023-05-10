@extends('user.layouts.master')

@section('content')

<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Get 24/7 Support</p>
                    <h1>Contact us</h1>
                    <h6>“Customer service shouldn’t just be a department, it should be the entire company.”<br>-Tony Hsieh</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <h3>Have you any question?</h3>
                    <p>We are always ready and on the go to answer your question and concerned to hear your feedback, so don't hesitate to leave a message !</p>
                </div>
                 <div id="form_status"></div>
                 @if(session('success'))
                 <div class="alert alert-success">
                     {{ session('success') }}
                 </div>
                @endif
                <div class="contact-form">
                    <form type="POST" action="{{route('user.contact.create')}}" id="fruitkha-contact" onSubmit="return valid_datas( this );" >
                        @csrf
                        <p>
                            <input type="text" placeholder="Name" name="name" id="name">
                            <input type="email" placeholder="Email" name="email" id="email">
                        </p>
                        <p>
                            <input type="tel" placeholder="Phone" name="phoneNumber" id="phone">
                            <input type="text" placeholder="Subject" name="subject" id="subject">
                        </p>
                        <p><textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea></p>
                        <p class="form-submit-button"><input  type="submit" value="Submit"></p>
                    </form>
                </div>
                
            </div>
            
        </div>
    </div>
</div>

@endsection