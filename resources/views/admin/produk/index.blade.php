@extends('include.admin.layoutDashboard')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Produk</h1>
    <p class="mb-4">Halaman Data Produk</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-2 d-sm-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Data Produk</h6>
            <a href="{{ route('dashboard.produk.tambah') }}"
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Tambah Data Produk</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="w-10">No.</th>
                            <th>Image</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th class="w-25">Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No.</th>
                            <th>Image</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($produks as $produk)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td><img src="{{ asset('storage/' . $produk->image) }}" alt="Post Image"
                                        style="width: 100px; padding: 0%"></td>
                                <td>{{ $produk->name }}</td>
                                <td>{{ 'Rp. ' . number_format(floatval($produk->price), 0, ',', '.') }}</td>
                                <td>{{ Str::limit(strip_tags($produk->description), 150) }}</td>
                                <td class="d-flex gap-2">
                                    <a href="{{ route('dashboard.produk.edit', $produk->slug) }}" class="btn btn-primary"><i
                                            class="far fa-edit"></i> Edit</a>
                                    <form action="{{ route('dashboard.produk.delete', $produk->slug) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i>
                                            Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
