@extends('admin.layouts.master')


@section('title')
Product
@endsection

@section('section_title')
Product Table
@endsection


@section('products')
active
@endsection

@section('title_page1')
admin
@endsection

@section('title_page2')
Product
@endsection


@section('content')
 <!-- /.row -->

 <div class="row container-fluid m-auto" >
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product controls</h3>

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 100px;">


         <a href="{{route('admin.products.create')}}"><button type="button" class="btn btn-block bg-gradient-primary btn-sm">Add Product</button></a>

             
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0" style="height: 300px;">
          <table class="table table-head-fixed text-nowrap">
            <thead>
              <tr>
                <th style="text-align: center">#</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">more details</th>
                <th style="text-align: center">edit</th>
                <th style="text-align: center">delete</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($data as $value)


                <tr>
                    <td style="text-align: center">{{$value['id']}}</td>
                    <td style="text-align: center">{{$value['name']}}</td>
                    <td style="text-align: center"><a href="{{Route('admin.products.show',$value['id'])}}"><button type="button" class="btn btn-block bg-gradient-info btn-sm">more details</button>



                    <td style="text-align: center"><a href="{{Route('admin.products.edit',$value['id'])}}"><button type="button" class="btn btn-block bg-gradient-success btn-sm">Edit</button>
                    </a></td>
                    <td style="text-align: center">
                        <form action="{{Route('admin.products.destroy',$value['id'])}}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-block bg-gradient-danger btn-sm">Delete</button>
                        </form>
                    </td>

                </tr>

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
