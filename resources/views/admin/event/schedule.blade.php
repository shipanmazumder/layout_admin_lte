@extends('admin.layouts.default')
@section('title_area')
Event Schedule
@endsection
@section('breadcrumb')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Event Schedule</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route("admin.dashboard")}}">Home</a></li>
                    <li class="breadcrumb-item active">Event Schedule</li>
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
        <div class="row">
             <div class="col-md-12">
                <!-- general form elements -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Event Schedule Add</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
            <form role="form" action="{{route("admin.eventschedule")}}" method="post">
                @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                <input type="hidden" name='id' value="{{@$single->id}}">
                                    <label for="selection_round">Selection Round</label><code>*</code>
                                    <textarea name="selection_round" required class="form-control @error('selection_round') is-invalid @enderror" id="selection_round">{{html_entity_decode(@$single->selection_round)}}</textarea>
                                </div>
                                 @error('selection_round')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="pro_round">Pro Round</label><code>*</code>
                                <textarea name="pro_round" required class="form-control @error('pro_round') is-invalid @enderror" id="pro_round">{{html_entity_decode(@$single->pro_round)}}</textarea>
                                </div>
                                 @error('pro_round')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="final_round">Final Round</label><code>*</code>
                                    <textarea name="final_round" required class="form-control @error('final_round') is-invalid @enderror" id="final_round">{{html_entity_decode(@$single->final_round)}}</textarea>
                                </div>
                                 @error('final_round')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- Summernote -->
<script src="{{asset("admin")}}/plugins/summernote/summernote-bs4.min.js"></script>
<script>
    summernote();

    function summernote() {
        $('#selection_round,#pro_round,#final_round').summernote({
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
</script>
@endsection
