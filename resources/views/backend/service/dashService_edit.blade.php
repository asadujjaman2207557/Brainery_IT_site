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
                                    href="{{route('services.view')}}"><i class="fa fa-arrow-left"></i> Go back</a></h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST" action="{{route('services.update',$editData->id)}}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">


                                    <div class="form-group col-md-12">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control" name="title" placeholder="Enter Title"
                                            value="{{$editData->title}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="description">Description</label>
                                        <textarea type="text" class="form-control" name="description" rows="4"
                                            placeholder="Enter Description">{{$editData->description}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="tab1_title">Tab1 Title</label>
                                        <textarea type="text" class="form-control" name="tab1_title" rows="4"
                                            placeholder="Enter Tab1 Title">{{$editData->tab1_title}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="tab1_text">Tab1 Text</label>
                                        <textarea type="text" class="form-control" name="tab1_text" rows="4"
                                            placeholder="Enter Tab1 Text">{{$editData->tab1_text}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="tab2_title">Tab2 Title</label>
                                        <textarea type="text" class="form-control" name="tab2_title" rows="4"
                                            placeholder="Enter Tab2 Title">{{$editData->tab2_title}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="tab2_text">Tab2 Text</label>
                                        <textarea type="text" class="form-control" name="tab2_text" rows="4"
                                            placeholder="Enter Tab2 Text">{{$editData->tab2_text}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="tab3_title">Tab3 Title</label>
                                        <textarea type="text" class="form-control" name="tab3_title" rows="4"
                                            placeholder="Enter Tab3 Title">{{$editData->tab3_title}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="tab3_text">Tab3 Text</label>
                                        <textarea type="text" class="form-control" name="tab3_text" rows="4"
                                            placeholder="Enter Tab3 Text">{{$editData->tab3_text}}</textarea>
                                    </div>



                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image" id="image"
                                                placeholder="Upload Image" value="public/images/svg/{{$editData->image}}">
                                        </div>

                                        <div class="form-group col-md-6">

                                            <img src="{{(!empty($editData->image))?url('public/images/svg/'.@$editData->image):url('public/upload/no_image.png')}}"
                                                id="showImage" alt="profile picture"
                                                style="height: 160px; width: 150px; border: 1px solid #000;">

                                                <p id="fileName">public/images/svg/{{ $editData->image ?? 'No image selected' }}</p>
                                        </div>
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
