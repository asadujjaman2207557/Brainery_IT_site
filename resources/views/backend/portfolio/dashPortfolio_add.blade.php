@extends('backend.layouts.dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Add Testimonial</h1>
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
                            <h3>Add Testimonial <a class="btn btn-success float-right btn-sm"
                                    href="{{route('testimonial.view')}}"><i class="fa fa-arrow-left"></i> Go back</a></h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST" action="{{route('testimonial.store')}}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">


                                    <div class="form-group col-md-12">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                            >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="user">User</label>
                                        <input type="text" class="form-control" name="user" placeholder="Enter User"
                                            >
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="review">Review</label>
                                        <textarea type="text" class="form-control" name="review" rows="4"
                                            placeholder="Enter Review"></textarea>
                                    </div>
                                   



                                    <div class="row">
                                          <div class="form-group col-md-6">
                                            <label for="image">Image</label>
                                            <input type="file" class="form-control" name="image" id="image"
                                                placeholder="Upload Image" >
                                        </div>


                                        <div class="form-group col-md-6">
                                            {{--  {{ asset('public') }}/images/svg/{{ $all_data[0]->image }}  --}}
                                            <img src="{{(!empty($editData->image))?url('public/images/portfolio/'.@$editData->image):url('public/upload/no_image.png')}}"
                                                id="showImage" alt="profile picture"
                                                style="height: 160px; width: 150px; border: 1px solid #000;">

                                                <p id="fileName">{{ $editData->image ?? 'Select Image File Only' }}</p>
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
