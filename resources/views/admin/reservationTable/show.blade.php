@extends('admin.layouts.master')


@section('title')
Reservation
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href=".{{asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
<style>
  /* width */
  ::-webkit-scrollbar {
  height: 5px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555;
  }
  </style>
@endsection

@section('section_title')
Reservations Table
@endsection

@section('Reservations')
active
@endsection

@section('title_page1')
admin
@endsection

@section('title_page2')
Reservation
@endsection


@section('content')
<!-- /.row -->

 <div class="row container-fluid" style="margin: auto auto 30px auto">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-warning">
          <h3 class="card-title">Reservations Pending</h3>

        </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body table-responsive p-0" >
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Phone No.</th>
                <th>Email</th>
                <th>Trip</th>
                <th>Guest number</th>
                <th>Reservation date</th>
                <th>Status</th>
                <th>edit</th>
                <th>delete</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($data as $value)
                @if($value['status']=="Pending")
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['first_name']}}</td>
                    <td>{{$value['last_name']}}</td>
                    <td>{{$value['phoneNumber']}}</td>
                    <td>{{$value['email']}}</td>
                    <td>{{$value['trip']	}}</td>
                    <td>{{$value['number_of_guest']}}</td>

                    <td>{{$value['res_date']	}}</td>

                    @if ($value['status']=="Pending")
                    <td><span class="badge bg-warning">Pending</span></td>
                    @endif


                    <td><a href="{{Route('admin.reservation.edit',$value['id'])}}"><button type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button>
                    </a></td>
                    <td>
                        <form action="{{Route('admin.reservation.destroy',$value['id'])}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                        </form>
                    </td>

                </tr>

                @endif
                @endforeach


            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->
</div>

<div class="row container-fluid " style="margin: auto auto 30px auto">
    <div class="col-12">
        <div class="card">
        <div class="card-header bg-success" >
          <h3 class="card-title">Reservations Accepted</h3>

        </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body table-responsive p-0" >
          <table class="table table-head-fixed text-nowrap">
            <thead>
                <tr>
                    <th>#</th>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Phone No.</th>
                    <th>Email</th>
                    <th>Trip</th>
                    <th>Guest number</th>
                    <th>Reservation date</th>
                    <th>Status</th>
                    <th>edit</th>
                    <th>delete</th>
                  </tr>
            </thead>
            <tbody>

                @foreach ($data as $value)
                @if($value['status']=="Accepted")
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['first_name']}}</td>
                    <td>{{$value['last_name']}}</td>
                    <td>{{$value['phoneNumber']}}</td>
                    <td>{{$value['email']}}</td>
                    <td>{{$value['trip']	}}</td>
                    <td>{{$value['number_of_guest']}}</td>

                    <td>{{$value['res_date']	}}</td>



                    @if ($value['status']	=="Accepted")
                    <td><span class="badge bg-success">Accepted</span></td>

                    @endif




                    <td><a href="{{Route('admin.reservation.edit',$value['id'])}}"><button type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button>
                    </a></td>
                    <td>
                        <form action="{{Route('admin.reservation.destroy',$value['id'])}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                        </form>
                    </td>

                </tr>

                @endif
                @endforeach


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

 <div class="row container-fluid " style="margin: auto auto 30px auto">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-danger">
          <h3 class="card-title">Reservations Rejected</h3>

        </div>
        </div>
        <!-- /.card-header -->

        <div class="card-body table-responsive p-0" >
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Phone No.</th>
                <th>Email</th>
                <th>Trip</th>
                <th>Guest number</th>
                <th>Reservation date</th>
                <th>Status</th>
                <th>edit</th>
                <th>delete</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($data as $value)
                @if($value['status']=="Rejected")
                <tr>
                    <td>{{$value['id']}}</td>
                    <td>{{$value['first_name']}}</td>
                    <td>{{$value['last_name']}}</td>
                    <td>{{$value['phoneNumber']}}</td>
                    <td>{{$value['email']}}</td>
                    <td>{{$value['trip']	}}</td>
                    <td>{{$value['number_of_guest']}}</td>

                    <td>{{$value['res_date']	}}</td>



                    @if ($value['status']	=="Rejected")
                    <td><span class="badge bg-danger">Rejected</span></td>
                    @endif



                    <td><a href="{{Route('admin.reservation.edit',$value['id'])}}"><button type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button>
                    </a></td>
                    <td>
                        <form action="{{Route('admin.reservation.destroy',$value['id'])}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                        </form>
                    </td>

                </tr>

                @endif
                @endforeach


            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  <!-- /.row -->
@endsection

@section('script')
<script src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src=".{{URL::asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection
