<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body{
      height: 100%
    }
    /* width */
    ::-webkit-scrollbar {
    height: 5px;
    width: 5px;
    }
    
    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #ccc; 
    }
    
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555; 
    }
    </style>
  @include('admin.layouts.head')
</head>
<?php
$user=Auth::user()->name
?>
<body style="background-color: #88979d">
{{-- <div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">

  </div> --}}



@include('admin.layouts.main-sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #88979d">
    <!-- Content Header (Page header) -->
    <div class="content-header" style="margin-top: 30px">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('section_title')</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item text-white">{{$user}}</li>
              <li class="breadcrumb-item text-white">@yield('title_page2')</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->

    @yield('content')

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 

</body>
</html>
@include('admin.layouts.footer-scripts')
