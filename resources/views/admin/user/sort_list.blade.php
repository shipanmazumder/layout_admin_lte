@extends('admin.layouts.default')
@section('title_area')
Manage Sort List User
@endsection
@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Sort List User</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Home</a></li>
                    <li class="breadcrumb-item active">Manage Sort List User</li>
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
           <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Sort List Users Import</h3>

                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ route('admin.import') }}" method="POST" enctype="multipart/form-data" role="form">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="name">File</label><code>(.xlxs)*</code>
                                       <input type="file" name="file" required class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group m-t-30">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group m-t-30 pull-right">
                                        <a href="{{route("admin.truncate")}}" onclick="return confirm('Are You Sure?')" class="btn btn-danger">Delete All</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
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
<script>
$(function () {
    $("#datatable").DataTable({
        lengthMenu: [ 10, 25, 50, 75, 100,500],
      responsive: true,
      autoWidth :false,
      processing:true,
      serverSide:true,
      ordering:false,
      ajax:{
          url:"{{route('admin.sortlist')}}"
      },
      columns:[
            { "data": "registration_unique_id" },
            { "data": "event_name" },
            { "data": "event_date" },
            { "data": "event_time" },
            { "data": "name" },
            { "data": "mobile_number" },
            { "data": "gold_id" },
            { "data": "area_name" },
            { "data": "whatsapp_number" },
            { "data": "imo_number" }
      ]

    });
});
</script>
@endsection
