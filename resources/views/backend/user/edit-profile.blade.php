@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Profile</h1>
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
                            <h3>Edit Profile <a class="btn btn-success float-right btn-sm"
                                    href="{{route('profiles.view')}}"><i class="fa fa-arrow-left"></i> Go back</a></h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST" action="{{route('profiles.update',$editData->id)}}" id="myForm"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="card-body">


                                    <!-- <div class="form-group ">
                                        <label for="usertype">User Type</label>
                                        <select class="custom-select form-control-border" id="usertype" name="usertype">
                                            <option value="">Select User Type</option>
                                            <option value="Admin" {{($editData->usertype=="Admin")?("selected"):""}}>
                                                Admin</option>
                                            <option value="User" {{($editData->usertype=="User")?("selected"):""}}>User
                                            </option>
                                        </select>

                                    </div> -->
                                    <div class="form-group ">
                                        <label for="name">Name</label>
                                        <input type="name" class="form-control" name="name" placeholder="Enter Name"
                                            value="{{$editData->name}}">

                                    </div>
                                    <div class="form-group ">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email"
                                            value="{{$editData->email}}">
                                        <font style="color: red;">
                                            {{($errors->has('email'))?($errors->first('email')):''}}
                                        </font>

                                    </div>

                                    <div class="form-group ">
                                        <label for="mobile">Mobile</label>
                                        <input type="mobile" class="form-control" name="mobile"
                                            placeholder="Enter Mobile No" value="{{$editData->mobile}}">

                                    </div>

                                    <div class="form-group ">
                                        <label for="address">Address</label>
                                        <input type="address" class="form-control" name="address"
                                            placeholder="Enter Address " value="{{$editData->address}}">

                                    </div>

                                    <div class="form-group ">
                                        <label for="gender">Gender</label>
                                        <select class="custom-select form-control-border" id="gender" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male" {{($editData->gender=="Male")?("selected"):""}}>
                                                Male</option>
                                            <option value="Female" {{($editData->gender=="Female")?("selected"):""}}>
                                                Female
                                            </option>

                                            <option value="Others" {{($editData->gender=="Others")?("selected"):""}}>
                                                Others
                                            </option>
                                        </select>

                                    </div>
                                    <div class="form-group">
                                        <label for="branch_id">Branch <font style="color: red;">*</font></label>
                                        <select name="branch_id" class="form-control form-control-sm">
                                            <option value="">Select Branch</option>

                                            @foreach($editData['branches'] as $branch)
                                            <option value="{{$branch->id}}"
                                                {{(@$editData->branch==$branch->id)?"selected":""}}>
                                                {{$branch->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="gender">Image</label>
                                            <input type="file" class="form-control" name="image" id="image"
                                                placeholder="Upload Image" value="{{$editData->image}}">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <img src="{{(!empty($editData->image))? url('public/upload/user_images/'.$editData->image):url('public/upload/no_image.png')}}"
                                                id="showImage" alt="profile picture"
                                                style="height: 160px; width: 150px; border: 1px solid #000;">
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
<script>
$(function() {
    $.validator.setDefaults({
        submitHandler: function() {
            alert("Form successful submitted!");
        }
    });
    $('#myForm').validate({
        rules: {
            usertype: {
                required: true
            },
            name: {
                required: true

            },


            email: {
                required: true,
                email: true,
                unique: true

            },
            password: {
                required: true,
                minlength: 5
            },
            confirmpassword: {
                required: true,
                equalTo: '#password'
            }

        },
        messages: {
            usertype: {
                required: "Please enter user type",

            },
            name: {
                required: "Please enter name",

            },
            email: {
                required: "Please enter a email address",
                email: "Please enter a valid email address",
                unique: "This email already registered"
            },
            password: {
                required: "Please provide a password",
                minlength: "Your password must be at least 5 characters long"
            },
            confirmpassword: {
                required: "Please confirm password",
                equalTo: "Confirm password does not match"
            },

        },
        errorElement: 'span',
        errorPlacement: function(error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }
    });
});
</script>

@endsection