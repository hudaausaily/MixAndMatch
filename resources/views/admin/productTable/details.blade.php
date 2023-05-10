@extends('admin.layouts.master')


@section('title')
Product details
@endsection

@section('css')
  <!-- Google Font: Source Sans Pro -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
@endsection

@section('title_page1')
admin
@endsection

@section('title_page2')
Product details
@endsection

@section('content')
{{-- <div class="content-wrapper"> --}}
    <!-- Main content -->
    <section class="content" style="display: flex; justify-content:center">
        <?php $img=$data[0]['image']?>


        <!-- Default box -->
        <div class="card card-solid" style="width: 80%">
          <div class="card-body">
            <div class="row" >
              <div class="col-12 col-sm-6">
                <div class="col-12">
                  <img style="max-height:500px" src="{{URL::asset("storage/image/$img")}}" class="product-image" alt="Product Image">
                </div>
                
              </div>
              <div class="col-12 col-sm-6">
                <h3 class="my-3">{{$data[0]['name']}}</h3>

                <hr>
                <h4>Category : {{$data[0]['category']}} </h4>
                <br>
                <h5>Description : {{$data[0]['long_description']}}  </h5>




                <div class="bg-gray py-2 px-3 mt-4">
                  <h5 class="mb-0">
                    Price : {{$data[0]['price']}} JD
                  </h5>

                </div>




              </div>
            </div>
           
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
{{-- </div> --}}
@endsection

@section('script')
<!-- jQuery -->

<script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{URL::asset('assets/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{URL::asset('assets/js/demo.js')}}"></script>
<script>
  $(document).ready(function() {
    $('.product-image-thumb').on('click', function () {
      var $image_element = $(this).find('img')
      $('.product-image').prop('src', $image_element.attr('src'))
      $('.product-image-thumb.active').removeClass('active')
      $(this).addClass('active')
    })
  })
</script>
@endsection
