@extends('admin.layouts.default')
@section('title_area')
Area
@endsection
@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Area</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Home</a></li>
                    <li class="breadcrumb-item active">Area</li>
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
        <!-- Small boxes (Stat box) -->
         @isset($add)
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Event Schedule Add</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route("admin.area")}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="name">Area Name</label><code>*</code>
                                        <input type="text" name="name" required class="form-control @error('name') is-invalid @enderror" id="name">
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group m-t-30">
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        @endisset
        @isset($edit)
            <div class="row">
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Event Schedule Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route("admin.area")}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                    <input type="hidden" name='id' value="{{@$single->id}}">
                                        <label for="name">Area Name</label><code>*</code>
                                    <input type="hidden" name="id" value="{{ $single->id}}">
                                    <input type="text" name="name" required value="{{$single->name}}" class="form-control @error('name') is-invalid @enderror" id="name">
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group m-t-30">
                                        <button type="submit" class="btn btn-success">Update</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        @endisset
        <!-- /.row -->
        <!-- /.row (main row) -->
        <div class="row">
           <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Area View</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL.</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($area)
                                @foreach ($area as $key=>$value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>
                                             <a title="Edit" href="{{route("admin.areaedit",['id'=>$value->id])}}" class=" btn btn-default btn-xs  waves-effect tooltips" data-placement="top" data-toggle="tooltip" data-original-title="View"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Are You Sure?')" href="{{route("admin.areacontrol",['id'=>$value->id])}}" title="{{$value['status']==1?"Enable":"Disable"}}" class="text-{{$value['status']==1?"info":"danger"}} btn btn-default  btn-xs  waves-effect tooltips" data-placement="top" data-toggle="tooltip" data-original-title="View" id=""><i class="fa fa-check-circle"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
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
      "responsive": true,
      "autoWidth": false,
    });
});
</script>
@endsection
