@extends('backend.layouts.dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit About</h1>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-md-12">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3>Edit About <a class="btn btn-success float-right btn-sm"
                                    href="{{route('features.view')}}"><i class="fa fa-arrow-left"></i> Go back</a></h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST" action="{{route('videos.update',$editData->id)}}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">


                                    <div class="form-group col-md-12">
                                        <label for="url">URL</label>
                                        <input type="text" class="form-control" name="url" placeholder="Enter URL"
                                            value="{{$editData->url}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="project">Project</label>
                                        <textarea type="text" class="form-control" name="project" rows="4"
                                            placeholder="Enter Project">{{$editData->project}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="tea">Tea</label>
                                        <textarea type="text" class="form-control" name="tea" rows="4"
                                            placeholder="Enter Tea">{{$editData->tea}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="employee">Employee</label>
                                        <textarea type="text" class="form-control" name="employee" rows="4"
                                            placeholder="Enter Employee">{{$editData->employee}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="awards">Awards</label>
                                        <textarea type="text" class="form-control" name="awards" rows="4"
                                            placeholder="Enter Awards">{{$editData->awards}}</textarea>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                        </div>

                    </div>

                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->

                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->


@endsection
