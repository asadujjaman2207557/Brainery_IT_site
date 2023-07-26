@extends('backend.layouts.dashboard')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Manage Contact</h1>
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
                            <h3>Contact List
                                @if($countcontact<1) <a class="btn btn-success float-right btn-sm"
                                    href="{{route('contact.add')}}"><i class="fa fa-plus-circle"></i> Add
                                    Contact</a>
                                    @endif
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover" style="text-overflow: clip;">
                                <thead>
                                    <tr>
                                        <th>SL</th>

                                        <th>Phone_1</th>
                                        <th>Phone_2</th>
                                        <th>Email_1</th>
                                        <th>Email_2</th>
                                        <th>Address</th>
                                        <th>FaceBook </th>
                                        <th>Twitter</th>
                                        <th>Instagram</th>
                                        <th>Linkedin</th>


                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{--  @foreach($allData as $key => $contact)  --}}
                                    <tr>
                                        <td>1</td>
                                        <td class="ellipsis "> <span>  {{$allData->phone1}} </span></td>
                                        <td class="ellipsis "> <span>  {{$allData->phone2}} </span></td>
                                        <td class="ellipsis "> <span>  {{$allData->email1}} </span></td>
                                        <td class="ellipsis "> <span>  {{$allData->email2}} </span></td>
                                        <td class="ellipsis "> <span>  {{$allData->address}} </span></td>
                                        <td class="ellipsis "> <span>  {{$allData->facebook}} </span></td>
                                        <td class="ellipsis "> <span>  {{$allData->twitter}} </span></td>
                                        <td class="ellipsis "> <span>  {{$allData->instagram}} </span></td>
                                        <td class="ellipsis "> <span>  {{$allData->linkedin}} </span></td>

                                        <td><a title="Edit" class="btn btn-sm btn-primary"
                                                href="{{route('contact.edit',$allData->id)}}"><i class="fa fa-edit"></i></a>
                                            {{--  <a title="Delete" id="delete" class="btn btn-sm btn-danger"
                                                href="{{route('about.delete',$about->id)}}"><i
                                                    class="fa fa-trash"></i></a>  --}}
                                        </td>
                                    </tr>
                                    {{--  @endforeach  --}}
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
