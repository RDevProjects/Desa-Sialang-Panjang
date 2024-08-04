@extends('include.layout-section')
@push('css')
@endpush
@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li class="current">Komunitas {{ env('APP_NAME') }}</li>
                </ol>
            </nav>
            <h1>Komunitas yang ada di {{ env('APP_NAME') }}</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="services section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">

                @foreach ($komunitas as $item)
                    <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon"> <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                                    alt="Produk Image"></div>
                            <h4><a href="{{ route('komunitas.show', $item->slug) }}"
                                    class="stretched-link">{{ $item->name }}</a></h4>
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($item->description), 150) }}<a
                                    href="{{ route('komunitas.show', $item->slug) }}"> Baca Selengkapnya</a></p>
                        </div>
                    </div><!-- End Service Item -->
                @endforeach

            </div>
        </div>
    </section>
    <!-- /Starter Section Section -->
@endsection
