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
    <section class="content">
        <?php $img=$data[0]['image']?>
        <?php $img2=$data[0]['image2']?>


        <!-- Default box -->
        <div class="card card-solid">
          <div class="card-body">
            <div class="row">
              <div class="col-12 col-sm-6">
                <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
                <div class="col-12">
                  <img src="{{URL::asset("storage/image/$img")}}" class="product-image" alt="Product Image">
                </div>
                <div class="col-12 product-image-thumbs">
                  <div class="product-image-thumb active"><img src="{{URL::asset("storage/image/$img2")}}" alt="Product Image"></div>
                  <div class="product-image-thumb" ><img src="{{URL::asset("storage/image/$img")}}" alt="Product Image"></div>
                  {{-- <div class="product-image-thumb" ><img src="../../dist/img/prod-3.jpg" alt="Product Image"></div>
                  <div class="product-image-thumb" ><img src="../../dist/img/prod-4.jpg" alt="Product Image"></div>
                  <div class="product-image-thumb" ><img src="../../dist/img/prod-5.jpg" alt="Product Image"></div> --}}
                </div>
              </div>
              <div class="col-12 col-sm-6">
                <h3 class="my-3">{{$data[0]['name']}}</h3>
                <p>{{$data[0]['short_description']}}</p>

                <hr>
                <h4>Category : {{$data[0]['category']}} </h4>


                {{-- <h4 class="mt-3">Guest  number : {{$data[0]['guest_number']}}</h4> --}}


                <div class="bg-gray py-2 px-3 mt-4">
                  <h2 class="mb-0">
                    Price : {{$data[0]['price']}} JD
                  </h2>

                </div>


{{--
                <div class="mt-4 product-share">
                  <a href="#" class="text-gray">
                    <i class="fab fa-facebook-square fa-2x"></i>
                  </a>
                  <a href="#" class="text-gray">
                    <i class="fab fa-twitter-square fa-2x"></i>
                  </a>
                  <a href="#" class="text-gray">
                    <i class="fas fa-envelope-square fa-2x"></i>
                  </a>
                  <a href="#" class="text-gray">
                    <i class="fas fa-rss-square fa-2x"></i>
                  </a>
                </div> --}}

              </div>
            </div>
            <div class="row mt-4">
              <nav class="w-100">
                <div class="nav nav-tabs" id="product-tab" role="tablist">
                  <a class="nav-item nav-link " id="product-desc-tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                  {{-- <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a> --}}
                  {{-- <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a> --}}
                </div>
              </nav>
              <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{$data[0]['long_description']}} </div>
                {{-- <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab"> Vivamus rhoncus nisl sed venenatis luctus. Sed condimentum risus ut tortor feugiat laoreet. Suspendisse potenti. Donec et finibus sem, ut commodo lectus. Cras eget neque dignissim, placerat orci interdum, venenatis odio. Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div> --}}
                {{-- <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div> --}}
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
