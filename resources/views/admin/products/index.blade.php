@extends('layouts.app')

@section('content')
    <div id="wrapper">
        @include('admin.includes.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.includes.topbar')
                <div class="container-fluid">
                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800">Products</h1>
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Add Product</a>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Brand</th>
                                            <th>Image</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $d->id }}</td>
                                                <td>{{ $d->category }}</td>
                                                <td>{{ $d->name }}</td>
                                                <td>{{ $d->brand }}</td>
                                                <td><img src="{{ asset('products/'.$d->image) }}" alt="{{ $d->name }}" width="100" height="50"></td>
                                                <td>
                                                    <div>
                                                        <a href="{{ route('admin.products.edit',$d->id) }}" class="btn btn-warning">Edit</a>
                                                        <a href="{{ route('admin.products.delete',$d->id) }}" class="btn btn-danger">Delete</a>
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
