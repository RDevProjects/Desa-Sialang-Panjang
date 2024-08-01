@extends('include.admin.layoutDashboard')
@push('script-head')
@endpush
@section('content')
    <div class="card">
        <div class="card-header">
            Edit Blog
        </div>
        <div class="card-body">
            {{-- buatkan form input 'title', 'slug', 'description', 'image' --}}
            <form action="{{ route('dashboard.blog.update', $blog->slug) }}" method="POST" enctype="multipart/form-data"
                onsubmit="submitForm(event)">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ $blog->title }}"
                        required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    @if ($blog->image)
                        <img src="{{ asset('storage/' . $blog->image) }}" alt="Post Image" width="200"><br>
                        <p class="my-2"><em>Jika ingin mengubah thumbnail blog, Klik 👇</em></p>
                        <input type="file" name="image" id="image" class="form-control w-50 h-25">
                        <!-- Hidden input to store the current image path -->
                        <input type="hidden" name="current_image" value="{{ $blog->image }}">
                    @else
                        <input type="file" name="image" id="image" class="form-control" required>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <div id="quillEditorDefault" style="height: 50vh;">{!! $blog->description !!}</div>
                    <!-- Hidden input to store the description -->
                    <input type="hidden" name="description" id="description">
                    <!-- End Quill Editor Default -->
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script>
        var quill = new Quill('#quillEditorDefault', {
            theme: 'snow'
        });

        function submitForm(event) {
            event.preventDefault();
            document.getElementById('description').value = quill.root.innerHTML;
            event.target.submit();
        }
    </script>
@endpush
