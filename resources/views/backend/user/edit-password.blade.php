@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Change Password</h1>
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
                            <h3>Edit Password <a class="btn btn-success float-right btn-sm"
                                    href="{{route('profiles.view')}}"><i class="fa fa-arrow-left"></i> Go back</a></h3>
                        </div><!-- /.card-header -->

                        <div class="card-body">
                            <form method="POST" action="{{route('profiles.password.update')}}" id="myForm">
                                @csrf

                                <div class="card-body">


                                    <div class="form-group ">
                                        <label for="current_password">Current Password</label>
                                        <input type="password" class="form-control" name="current_password"
                                            id="current_password" placeholder="Current Password">

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="new_password">New Password</label>
                                            <input type="password" class="form-control" name="new_password"
                                                id="new_password" placeholder="New Password">

                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="confirmpassword">Confirm Password</label>
                                            <input type="confirmpassword" class="form-control" name="confirmpassword"
                                                placeholder="Confirm Password">

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

    $('#myForm').validate({
        rules: {
            current_password: {
                required: true,

            },

            new_password: {
                required: true,
                minlength: 6
            },
            confirmpassword: {
                required: true,
                equalTo: '#new_password'
            }

        },
        messages: {

            current_password: {
                required: "Please provide old password",
                minlength: "Your password must be at least 5 characters long"
            },

            new_password: {
                required: "Please provide a new password",
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