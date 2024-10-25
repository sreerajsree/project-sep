@extends('layouts.app')

@section('content')
    <div id="wrapper">
        @include('admin.includes.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.includes.topbar')
                <div class="container-fluid">
                        <h1 class="h3 mb-2 text-gray-800">Edit: {{ $careers->name }}</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.careers.update',$careers->id) }}" enctype="multipart/form-data">
                                @csrf
                               
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ $careers->name }}"
                                        placeholder="Enter Title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" name="location" class="form-control" id="location" value="{{ $careers->location }}"
                                        placeholder="Enter Location" required>
                                </div>
                                <div class="mb-3">
                                    <label for="salary" class="form-label">Salary</label>
                                    <input type="text" name="salary" class="form-control" id="salary" value="{{ $careers->salary }}"
                                        placeholder="Enter Salary">
                                </div>
                                <div class="mb-3">
                                    <label for="time" class="form-label">Time</label>
                                    <input type="text" name="time" class="form-control" id="time" value="{{ $careers->time }}"
                                        placeholder="Enter Time" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Job Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="4" placeholder="Enter Job Description"
                                        required>{{ $careers->description }}</textarea>
                                </div>
                        
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
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
@push('scripts')
<script src="https://cdn.tiny.cloud/1/i4lmk4fechey6ryl1m6vx3z54f41gc3pro1kur9au4qin8ez/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#description',
            height: "480",
            plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
            toolbar_mode: 'floating',
            extended_valid_elements: 'script[src|async|defer|type|charset]',
            setup: function(editor) {
                editor.on('change', function() {
                    tinymce.triggerSave();
                });
            }
        });
    </script>
@endpush
