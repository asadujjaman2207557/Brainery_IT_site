@extends('backend.layouts.dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage User</h1>
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
                            <h3>Add User <a class="btn btn-success float-right btn-sm" href="{{route('user.view')}}"><i
                                        class="fa fa-list"></i> User List</a></h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST" action="{{route('user.store')}}" id="myForm">
                                @csrf
                                @method('PUT')

                                <div class="card-body">


                                    {{--  <div class="form-group ">
                                        <label for="role">User Role</label>
                                        <select class="custom-select form-control-border" id="role" name="role">
                                            <option value="">Select User Role</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Operator">Operator</option>
                                        </select>

                                    </div>  --}}
                                    <div class="form-group ">
                                        <label for="name">Name</label>
                                        <input type="name" class="form-control" name="name" placeholder="Enter Name">

                                    </div>
                                    <div class="form-group ">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                                        <font style="color: red;">
                                            {{($errors->has('email'))?($errors->first('email')):''}}
                                        </font>

                                    </div>
                                     <div class="form-group ">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" name="password" id="password"
                                            placeholder="Password">

                                    </div>

                                    <div class="form-group ">
                                        <label for="confirmpassword">Confirm Password</label>
                                        <input type="confirmpassword" class="form-control" name="confirmpassword"
                                            placeholder="Confirm Password">

                                    </div>

                                    <div class="form-group ">
                                        <label for="mobile">Mobile</label>
                                        <input type="mobile" class="form-control" name="mobile">

                                    </div>

                                    <div class="form-group ">
                                        <label for="address">Address</label>
                                        <input type="address" class="form-control" name="address">

                                    </div>

                                    <div class="form-group ">
                                        <label for="gender">Gender</label>
                                        <select class="custom-select form-control-border" id="gender" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male">
                                                Male</option>
                                            <option value="Female">
                                                Female
                                            </option>

                                            <option value="Others">
                                                Others
                                            </option>
                                        </select>

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
<script>
$(function() {

    $('#myForm').validate({
        rules: {

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
