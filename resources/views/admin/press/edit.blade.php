@extends('layouts.app')

@section('content')
    <div id="wrapper">
        @include('admin.includes.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.includes.topbar')
                <div class="container-fluid">
                        <h1 class="h3 mb-2 text-gray-800">Edit: {{ $press->name }}</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.press.update',$press->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" value="{{ $press->name }}" required>
                                </div>
                        
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                                    <div class="mt-3">
                                        <img src="{{ asset('press/'.$press->image) }}" alt="{{ $press->name }}" width="200" height="100">
                                    </div>
                                </div>
                        
                                <div class="mb-3">
                                    <label for="body" class="form-label">Body</label>
                                    <textarea class="form-control" name="body" id="body" rows="4" required>{{ $press->body }}</textarea>
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
            selector: '#body',
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