@extends('backend.layouts.dashboard')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Upload Logo</h1>
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
                            <h3>Upload Logo <a class="btn btn-success float-right btn-sm"
                                    href="{{route('slider.view')}}"><i class="fa fa-arrow-left"></i> Go back</a></h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST" action="{{route('slider.store')}}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label for="title">MinTitle</label>
                                            <input type="text" class="form-control" name="mintitle" placeholder="Enter MinTitle"
                                                >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Enter Title"
                                                >
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="description">Description</label>
                                            <textarea type="text" class="form-control" name="description" rows="4"
                                                placeholder="Enter Description"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="tab1_title">Tab1 Title</label>
                                            <textarea type="text" class="form-control" name="tab1_title" rows="4"
                                                placeholder="Enter Tab1 Title"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="tab1_text">Tab1 Text</label>
                                            <textarea type="text" class="form-control" name="tab1_text" rows="4"
                                                placeholder="Enter Tab1 Text"></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="url">Url</label>
                                            <input type="text" class="form-control" name="url" placeholder="Enter url"
                                                >
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image" id="image"
                                                placeholder="Upload Image">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <img src="{{url('public/upload/no_image.png')}}" id="showImage"
                                                alt="profile picture"
                                                style="height: 160px; width: 150px; border: 1px solid #000;">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="float-right">
                                    <button type="submit" class="btn btn-primary">Submit</button>
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
