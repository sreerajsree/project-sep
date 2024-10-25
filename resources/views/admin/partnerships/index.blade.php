@extends('layouts.app')

@section('content')
    <div id="wrapper">
        @include('admin.includes.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.includes.topbar')
                <div class="container-fluid">
                    <div class="d-flex justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800">Partnership</h1>
                    </div>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Company Name</th>
                                            <th>Subject</th>
                                            <th>Country</th>
                                            <th>Contact Person</th>
                                            <th>Email</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $d->id }}</td>
                                                <td>{{ $d->companyname }}</td>
                                                <td>{{ $d->subject }}</td>
                                                <td>{{ $d->country }}</td>
                                                <td>{{ $d->contactperson }}</td>
                                                <td><a href="mailto:{{ $d->email }}">{{ $d->email }}</a></td>
                                                <td>
                                                    <div>
                                                        <a href="{{ route('admin.partnership.delete',$d->id) }}" class="btn btn-primary">Show</a>
                                                        <a href="{{ route('admin.partnership.delete',$d->id) }}" class="btn btn-danger">Delete</a>
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
