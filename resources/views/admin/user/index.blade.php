@extends('admin.layouts.default')
@section('title_area')
Manage Users
@endsection
@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Home</a></li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
@section('main_section')
<section class="content">
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-{{Session::get("class")}}">{{Session::get("message")}}</div>
        @endif
        <!-- /.row -->
        <!-- /.row (main row) -->
        <div class="row">
           <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users View</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Reg. Id</th>
                            <th>Event Name</th>
                            <th>E. Date</th>
                            <th>E.Time</th>
                            <th>Name</th>
                            <th>Mobile Num.</th>
                            <th>Gold ID</th>
                            <th>Area</th>
                            <th>W. Num.</th>
                            <th>IMO Num.</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
           </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- DataTables -->
<script src="{{asset("admin")}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset("admin")}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset("admin")}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset("admin")}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
<script>
$(function () {
    $("#datatable").DataTable({
        dom: 'Bfrtip',
         buttons: [
            'excel','pageLength'
        ],
        "lengthMenu": [ 10, 25, 50, 75, 100,500],
      responsive: true,
      autoWidth :false,
      processing:true,
      serverSide:true,
      ordering:false,
      ajax:{
          url:"{{route('admin.user')}}"
      },
      columns:[
            { "data": "registration_unique_id" },
            { "data": "event.name" },
            { "data": "event.date" },
            { "data": "event.time" },
            { "data": "name" },
            { "data": "mobile_number" },
            { "data": "gold_id" },
            { "data": "area.name" },
            { "data": "whatsapp_number" },
            { "data": "imo_number" },
      ]

    });
});
</script>
@endsection
