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
                            <form method="POST" action="{{route('user.update',$editData[0]->id)}}" id="myForm">
                                @csrf
                                @method('PUT')

                                <div class="card-body">


                                    {{--  <div class="form-group ">
                                        <label for="role">User Role</label>
                                        <select class="custom-select form-control-border" id="role" name="role">
                                            <option value="">Select User Role</option>
                                            <option value="Admin" {{($editData->role=="Admin")?("selected"):""}}>
                                                Admin</option>
                                            <option value="Operator" {{($editData->role=="Operator")?("selected"):""}}>
                                                Operator
                                            </option>
                                        </select>

                                    </div>  --}}
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
                                            placeholder="Enter Mobile No" value="{{$editData1->mobile}}">

                                    </div>

                                    <div class="form-group ">
                                        <label for="address">Address</label>
                                        <input type="address" class="form-control" name="address"
                                            placeholder="Enter Address " value="{{$editData1->address}}">

                                    </div>

                                    <div class="form-group ">
                                        <label for="gender">Gender</label>
                                        <select class="custom-select form-control-border" id="gender" name="gender">
                                            <option value="">Select Gender</option>
                                            <option value="Male" {{($editData1->gender=="Male")?("selected"):""}}>
                                                Male</option>
                                            <option value="Female" {{($editData1->gender=="Female")?("selected"):""}}>
                                                Female
                                            </option>

                                            <option value="Others" {{($editData1->gender=="Others")?("selected"):""}}>
                                                Others
                                            </option>
                                        </select>

                                    </div>
                                    {{--  <div class="form-group">
                                        <label for="branch_id">Branch <font style="color: red;">*</font></label>
                                        <select name="branch_id" class="form-control form-control-sm">
                                            <option value="">Select Branch</option>
                                            @foreach($branches as $branch)
                                            <option value="{{$branch->id}}"
                                                {{(@$editData->branch==$branch->id)?"selected":""}}>
                                                {{$branch->name}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>  --}}


                                </div>
                                <!-- /.card-body -->

                                <div class="float-right">
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
            role: {
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
