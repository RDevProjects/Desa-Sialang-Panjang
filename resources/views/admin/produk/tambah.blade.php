@extends('include.admin.layoutDashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            Tambah Produk
        </div>
        <div class="card-body">
            <form action="{{ route('dashboard.produk.store') }}" method="POST" enctype="multipart/form-data"
                onsubmit="submitForm(event)">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama Produk</label>
                    <input type="text" name="nama" id="nama" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga Produk</label>
                    <input type="number" name="harga" id="harga" class="form-control w-50" required>
                </div>
                <div class="form-group">
                    <label for="image">Gambar Produk</label>
                    <input type="file" name="image" id="image" class="form-control w-50 h-25" required>
                </div>
                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <div id="quillEditorDefault" style="height: 50vh;"></div>
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
