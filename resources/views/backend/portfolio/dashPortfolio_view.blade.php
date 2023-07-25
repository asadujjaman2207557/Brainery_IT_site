@extends('backend.layouts.dashboard')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Manage Portfolio</h1>
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
                                <h3>Portfolio List
                                    <a class="btn btn-success float-right btn-sm" href="{{ route('portfolios.add') }}"><i
                                            class="fa fa-plus-circle"></i> Add
                                        Portfolio</a>

                                </h3>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-hover" style="text-overflow: clip;">
                                    <thead>
                                        <tr>
                                            <th>SL</th>

                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Tab1 Title</th>
                                            <th>Tab1 Text</th>
                                            <th>Tab2 Title</th>
                                            <th>Tab2 Text</th>
                                            <th>Tab3 Title</th>
                                            <th>Tab3 Text</th>


                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allData as $key => $feature)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $feature->title }}</td>
                                                <td class="ellipsis "> <span> {{ $feature->description }} </span></td>
                                                <td class="ellipsis "> <span> {{ $feature->tab1_title }} </span></td>
                                                <td class="ellipsis "> <span> {{ $feature->tab1_text }} </span></td>
                                                <td class="ellipsis "> <span> {{ $feature->tab2_title }} </span></td>
                                                <td class="ellipsis "> <span> {{ $feature->tab2_text }} </span></td>
                                                <td class="ellipsis "> <span> {{ $feature->tab3_title }} </span></td>
                                                <td class="ellipsis "> <span> {{ $feature->tab3_text }} </span></td>

                                                <td ><a title="Edit" class="btn btn-sm btn-primary"
                                                        href="{{ route('portfolios.edit', $feature->id) }}"><i
                                                            class="fa fa-edit"></i></a>
                                                    {{--  <a title="Delete" id="delete" class="btn btn-sm btn-danger"
                                                        href="{{ route('portfolios.delete', $feature->id) }}"><i
                                                        class="fa fa-trash"></i></a>  --}}
                                                    <form method="POST" action="{{ url('/services/delete' . '/' . $feature->id) }}">
                                                        {{ method_field('DELETE') }}
                                                        {{ csrf_field() }}

                                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete_service"><i
                                                            class="fa fa-trash"></i></button>
                                                    </form>
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
