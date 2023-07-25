@extends('backend.layouts.dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage About</h1>
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
                            <h3>About List
                                @if($countabout<1) <a class="btn btn-success float-right btn-sm"
                                    href="{{route('about.add')}}"><i class="fa fa-plus-circle"></i> Add
                                    About</a>
                                    @endif
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>mision</th>
                                        <th>vision</th>
                                        <th>Goal</th>

                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($allData as $key => $about)
                                    <tr>
                                        <td>{{$key+1}}</td>

                                        <td><img src="{{(!empty($about->image))? url('public/upload/other_images/'.$about->image):url('public/upload/no_image.png')}}"
                                                width="120px" height="130px" alt=""></td>
                                        <td class="ellipsis "> <span> {{$about->title}} </span></td>
                                        <td class="ellipsis "> <span> {{$about->description}} </span></td>
                                        <td class="ellipsis "> <span> {{$about->mision}} </span></td>
                                        <td class="ellipsis "> <span> {{$about->vision}} </span></td>
                                        <td class="ellipsis "> <span> {{$about->goal}} </span></td>
                                        <td class="ellipsis "><a title="Edit" class="btn btn-sm btn-primary"
                                                href="{{route('about.edit',$about->id)}}"><i class="fa fa-edit"></i></a>
                                            {{--  <a title="Delete" id="delete" class="btn btn-sm btn-danger"
                                                href="{{route('about.delete',$about->id)}}"><i
                                                    class="fa fa-trash"></i></a>  --}}
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
