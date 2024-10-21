@extends('layouts.app')

@section('content')
    <div id="wrapper">
        @include('admin.includes.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.includes.topbar')
                <div class="container-fluid">
                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800">Blogs</h1>
                    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary">Add Blog</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $d->id }}</td>
                                                <td>{{ $d->name }}</td>
                                                <td><img src="{{ asset('blog/'.$d->image) }}" alt="{{ $d->name }}" width="100" height="50"></td>
                                                <td>
                                                    <div>
                                                        <a href="{{ route('admin.blog.edit',$d->id) }}" class="btn btn-warning">Edit</a>
                                                        <a href="{{ route('admin.blog.delete',$d->id) }}" class="btn btn-danger">Delete</a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <!-- End of Main Content -->

            @include('admin.includes.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
@endsection
