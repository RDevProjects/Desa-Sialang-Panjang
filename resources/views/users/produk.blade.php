@extends('include.layout-section')
@push('css')
    <style>
        .card-img-wrapper-50 {
            width: 100%;
            height: 150px;
            overflow: hidden;
        }

        .card-img-wrapper-50 img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            object-position: center;
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
                    <li class="current">Produk {{ env('APP_NAME') }}</li>
                </ol>
            </nav>
            <h1>Produk unggulan {{ env('APP_NAME') }}</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">

                @foreach ($produk as $item)
                    <div class="col-lg-3 col-md-4 mb-4">
                        <div class="card" style="background-color: #fff9c4; border-radius: 10%">
                            <div class="card-body">
                                <div class="card-img-wrapper-50">
                                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                                        alt="Produk Image">
                                </div>
                                <h5 class="card-title mt-2 text-truncate"><a
                                        href="{{ route('dashboard.blog', $item->slug) }}">{{ $item->name }}</a></h5>
                                <p class="card-text">Rp. {{ number_format($item->price, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- /Starter Section Section -->
@endsection
