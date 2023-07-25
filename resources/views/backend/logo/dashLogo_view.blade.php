@extends('backend.layouts.dashboard')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Logo</h1>
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
                            <h3>Logo List
                                @if($countlogo<1) <a class="btn btn-success float-right btn-sm"
                                    href="{{route('logo.add')}}"><i class="fa fa-plus-circle"></i> Add
                                    Logo</a>
                                    @endif
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Logo</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allData as $key => $logo)
                                    <tr>
                                        <td>{{$key+1}}</td>

                                        <td><img src="{{(!empty($logo->image))? url('public/upload/logo_images/'.$logo->image):url('public/upload/no_image.png')}}"
                                                width="120px" height="130px" alt=""></td>
                                        <td><a title="Edit" class="btn btn-sm btn-primary"
                                                href="{{route('logo.edit',$logo->id)}}"><i class="fa fa-edit"></i></a>
                                  

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div><!-- /.card-body -->
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
