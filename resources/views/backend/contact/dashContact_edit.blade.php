@extends('backend.layouts.dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Contact</h1>
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
                            <h3>Edit Contact <a class="btn btn-success float-right btn-sm"
                                    href="{{route('contact.view')}}"><i class="fa fa-arrow-left"></i> Go back</a></h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST" action="{{route('contact.update',$editData->id)}}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">


                                    <div class="form-group col-md-12">
                                        <label for="phone1">Phone 1</label>
                                        <input type="tel" class="form-control" name="phone1" placeholder="Enter Phone 1"
                                            value="{{$editData->phone1}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="phone2">Phone 2</label>
                                        <input type="tel" class="form-control" name="phone2" placeholder="Enter Phone 2"
                                            value="{{$editData->phone2}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="email1">Email 1</label>
                                        <input type="text" class="form-control" name="email1" placeholder="Enter Email 1"
                                            value="{{$editData->email1}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="email2">Email 2</label>
                                        <input type="text" class="form-control" name="email2" placeholder="Enter Email 2"
                                            value="{{$editData->email2}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="address">Address</label>
                                        <textarea type="text" class="form-control" name="address" rows="4"
                                            placeholder="Enter Address">{{$editData->address}}</textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="facebook">Facebook Link</label>
                                        <input type="text" class="form-control" name="facebook" placeholder="Enter Facebook link"
                                            value="{{$editData->facebook}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="twitter">Twitter Link</label>
                                        <input type="text" class="form-control" name="twitter" placeholder="Enter Twitter link"
                                            value="{{$editData->twitter}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="instagram">Instagram Link</label>
                                        <input type="text" class="form-control" name="instagram" placeholder="Enter Instagram link"
                                            value="{{$editData->instagram}}">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="linkedin">Linkedin Link</label>
                                        <input type="text" class="form-control" name="linkedin" placeholder="Enter Linkedin link"
                                            value="{{$editData->linkedin}}">
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
