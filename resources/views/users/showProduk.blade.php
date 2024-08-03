@extends('include.layout-section')
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
            <div class="card" style="margin: 5%">
                <div class="card-img-wrapper w-25 mx-auto">
                    <h2 class="text-center my-5">{{ $produk->name }}</h2>
                    <img src="{{ asset('storage/' . $produk->image) }}" class="card-img-top" alt="Blog Image">
                </div>
                <div class="card-body w-75 mx-auto">
                    <h5 class="text-center">Harga : <span> Rp. {{ number_format($produk->price, 0, ',', '.') }}
                        </span></h5>
                    <p class="card-text">
                        {!! $produk->description !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Starter Section Section -->
@endsection
