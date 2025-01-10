@extends('layouts.app')

@section('content')
    <div id="wrapper">
        @include('admin.includes.sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                @include('admin.includes.topbar')
                <div class="container-fluid">
                        <h1 class="h3 mb-2 text-gray-800">Edit: {{ $product->name }}</h1>
                  
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.products.update',$product->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-4">
                                    <label for="category" class="form-label">Category</label>
                                    <select class="form-control" name="category" id="category" required>
                                        <option value="Anti Cancer Capsules" @if($product->category == 'Anti Cancer Capsules')  selected @endif>Anti Cancer Capsules</option>
                                        <option value="Anti Cancer Tablets" @if($product->category == 'Anti Cancer Tablets')  selected @endif>Anti Cancer Tablets</option>
                                        <option value="Pharmaceutical Injection" @if($product->category == 'Pharmaceutical Injection')  selected @endif>Pharmaceutical Injection</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Title" value="{{ $product->name }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Brand</label>
                                    <input type="text" name="brand" class="form-control" id="brand" placeholder="Enter Brand" value="{{ $product->brand }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Composition</label>
                                    <input type="text" name="composition" class="form-control" id="composition" placeholder="Enter Composition" value="{{ $product->composition }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Manufacturer</label>
                                    <input type="text" name="manufacturer" class="form-control" id="manufacturer" placeholder="Enter Manufacturer" value="{{ $product->manufacturer }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Image</label>
                                    <input type="file" name="image" class="form-control" id="image" accept="image/*">
                                    <div class="mt-3">
                                        <img src="{{ asset('products/'.$product->image) }}" alt="{{ $product->name }}" width="200" height="100">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="body" class="form-label">Description</label>
                                    <textarea class="form-control" name="description" id="mytextarea" rows="4" placeholder="Enter description here..." required>{!!  $product->description !!}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="meta_title" class="form-label">Meta Title</label>
                                    <input type="text" name="meta_title" class="form-control" id="meta_title" placeholder="Enter Meta Title" value="{{ $product->meta_title }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="meta_description" class="form-label">Meta Description</label>
                                    <textarea class="form-control" name="meta_description" id="meta_description" rows="4" placeholder="Enter Meta Description here..." required>{!!  $product->meta_description !!}</textarea>
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
<script src="https://cdn.tiny.cloud/1/i4lmk4fechey6ryl1m6vx3z54f41gc3pro1kur9au4qin8ez/tinymce/7/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
        const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;
        tinymce.init({
            selector: '#mytextarea',
            plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
            editimage_cors_hosts: ['picsum.photos'],
            menubar: 'file edit view insert format tools table help',
            toolbar: "undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",
            autosave_ask_before_unload: true,
            autosave_interval: '30s',
            autosave_prefix: '{path}{query}-{id}-',
            autosave_restore_when_empty: false,
            autosave_retention: '2m',
            image_advtab: true,
            link_list: [{
                    title: 'My page 1',
                    value: 'https://www.tiny.cloud'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.moxiecode.com'
                }
            ],
            image_list: [{
                    title: 'My page 1',
                    value: 'https://www.tiny.cloud'
                },
                {
                    title: 'My page 2',
                    value: 'http://www.moxiecode.com'
                }
            ],
            image_class_list: [{
                    title: 'None',
                    value: ''
                },
                {
                    title: 'Some class',
                    value: 'class-name'
                }
            ],
            importcss_append: true,
            file_picker_callback: (callback, value, meta) => {
                /* Provide file and text for the link dialog */
                if (meta.filetype === 'file') {
                    callback('https://www.google.com/logos/google.jpg', {
                        text: 'My text'
                    });
                }

                /* Provide image and alt text for the image dialog */
                if (meta.filetype === 'image') {
                    callback('https://www.google.com/logos/google.jpg', {
                        alt: 'My alt text'
                    });
                }

                /* Provide alternative source and posted for the media dialog */
                if (meta.filetype === 'media') {
                    callback('movie.mp4', {
                        source2: 'alt.ogg',
                        poster: 'https://www.google.com/logos/google.jpg'
                    });
                }
            },
            height: 600,
            image_caption: true,
            quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
            noneditable_class: 'mceNonEditable',
            toolbar_mode: 'sliding',
            contextmenu: 'link image table',
            skin: useDarkMode ? 'oxide-dark' : 'oxide',
            content_css: useDarkMode ? 'dark' : 'default',
            // content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
            content_style: 'body { font-size:14px }',
            setup: function(editor) {
                editor.on('change', function() {
                    tinymce.triggerSave();
                });
            }
        });
    </script>
@endpush
