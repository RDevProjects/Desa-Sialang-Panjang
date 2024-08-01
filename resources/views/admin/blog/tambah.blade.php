@extends('include.admin.layoutDashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            Add Blog
        </div>
        <div class="card-body">
            {{-- buatkan form input 'title', 'slug', 'description', 'image' --}}
            <form action="{{ route('dashboard.blog.tambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control w-50 h-25" required>
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection
