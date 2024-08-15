@extends('include.layout-section')
@push('style')
    <style>
        .btn-outline-primary {
            color: #608637;
            border-color: #608637;
            border-radius: 50px;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #608637;
            border-color: #608637;
        }

        .btn-outline-primary:focus,
        .btn-outline-primary.focus {
            box-shadow: 0 0 0 0.2rem rgba(96, 134, 55, 0.5);
        }
    </style>
@endpush
@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Produk {{ env('APP_NAME') }}</li>
                    <li class="current">{{ $produk->name }}</li>
                </ol>
            </nav>
            <h1>{{ $produk->name }}</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
        <div class="container" data-aos="fade-up">
            <div class="card">
                <div class="card-img-wrapper w-75 mx-auto">
                    <h2 class="text-center my-5">{{ $produk->name }}</h2>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $produk->image) }}" class="card-img-top w-75" alt="Blog Image">
                    </div>
                </div>
                <div class="card-body mx-auto px-5">
                    <div class="d-flex justify-content-center">
                        <h5 class="text-center mt-2">Harga : <span> Rp. {{ number_format($produk->price, 0, ',', '.') }} / 1
                                KG </span></h5>
                        <a href="https://api.whatsapp.com/send?phone=6281259294640&text=Assalamualaikum%20Desa%20Sialang%20Panjang%2C%20Saya%20datang%20dari%20Website%20sialangpanjang.site."
                            class="btn btn-outline-primary ms-2" target="_blank">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                    <p class="card-text">
                        {!! $produk->description !!}
                    </p>
                    <div class="text-center">
                        <a href="https://api.whatsapp.com/send?phone=6281259294640&text=Assalamualaikum%20Desa%20Sialang%20Panjang%2C%20Saya%20datang%20dari%20Website%20sialangpanjang.site."
                            class="btn btn-outline-primary" target="_blank">Klik Disini untuk Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Starter Section Section -->
@endsection
