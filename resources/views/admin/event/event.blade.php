@extends('admin.layouts.default')
@section('title_area')
Manage Event
@endsection
@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manage Event</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Home</a></li>
                    <li class="breadcrumb-item active">Manage Event</li>
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
                        <h3 class="card-title">Event Add</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{route("admin.event")}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="name">Event Name</label><code>*</code>
                                        <input type="text" name="name" required class="form-control @error('name') is-invalid @enderror" id="name">
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                     <div class="form-group">
                                        <label>Event Date</label><code>*</code>
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                <input type="text" required name="event_date" class="form-control datetimepicker-input @error('event_date') is-invalid @enderror" data-target="#reservationdate"/>
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                    </div>
                                    @error('event_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Event Time</label><code>*</code>

                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                        <input type="text" name="event_time" required class="form-control datetimepicker-input @error('event_time') is-invalid @enderror" data-target="#timepicker"/>
                                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    @error('event_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="whatsapp_number">WhatsApp Number</label><code>*</code>
                                        <input type="text" name="whatsapp_number" required class="form-control @error('whatsapp_number') is-invalid @enderror" id="whatsapp_number">
                                    </div>
                                    @error('whatsapp_number')
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
                        <h3 class="card-title">Event Edit</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                      <form role="form" action="{{route("admin.event")}}" method="post">
                        @csrf
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="name">Event Name</label><code>*</code>
                                        <input type="hidden" name="id" value="{{$single->id}}" required>
                                        <input type="text" name="name" value="{{$single->name}}" required class="form-control @error('name') is-invalid @enderror" id="name">
                                    </div>
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                     <div class="form-group">
                                        <label>Event Date</label><code>*</code>
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                            <input type="text" required name="event_date" value="{{date("m/d/Y",strtotime($single->event_date))}}" class="form-control datetimepicker-input @error('event_date') is-invalid @enderror" data-target="#reservationdate"/>
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                    </div>
                                    @error('event_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Event Time</label><code>*</code>

                                        <div class="input-group date" id="timepicker" data-target-input="nearest">
                                        <input type="text" name="event_time" value="{{date("h:i A",strtotime($single->event_date))}}" required class="form-control datetimepicker-input @error('event_time') is-invalid @enderror" data-target="#timepicker"/>
                                        <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="far fa-clock"></i></div>
                                        </div>
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    @error('event_time')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="whatsapp_number">WhatsApp Number</label><code>*</code>
                                        <input type="text" name="whatsapp_number" value="{{$single->whatsapp_number}}" required class="form-control @error('whatsapp_number') is-invalid @enderror" id="whatsapp_number">
                                    </div>
                                    @error('whatsapp_number')
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
                            <th>Event Date</th>
                            <th>Event Time</th>
                            <th>WhatsApp Number</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @if($event)
                                @foreach ($event as $key=>$value)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$value->name}}</td>
                                        <td>{{date("d-m-Y",strtotime($value->event_date))}}</td>
                                        <td>{{date("H:i A",strtotime($value->event_date))}}</td>
                                        <td>{{$value->whatsapp_number}}</td>
                                        <td>
                                             <a title="Edit" href="{{route("admin.eventedit",['id'=>$value->id])}}" class=" btn btn-default btn-xs  waves-effect tooltips" data-placement="top" data-toggle="tooltip" data-original-title="View"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Are You Sure?')" href="{{route("admin.eventcontrol",['id'=>$value->id])}}" title="{{$value['status']==1?"Enable":"Disable"}}" class="text-{{$value['status']==1?"info":"danger"}} btn btn-default  btn-xs  waves-effect tooltips" data-placement="top" data-toggle="tooltip" data-original-title="View" id=""><i class="fa fa-check-circle"></i></a>
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
<!-- date-range-picker -->
<script src="{{asset("admin")}}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Summernote -->
<script src="{{asset("admin")}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
$(function () {
    $("#datatable").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT',
    });
     $('#reservationdate').datetimepicker({
        format: 'L'
    });
     summernote();

    function summernote() {
        $('#gala_night').summernote({
            height: 200,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']],
                ['insert', ['math', 'picture', 'video', 'table']],
            ]
        });
    }
});
</script>
@endsection
