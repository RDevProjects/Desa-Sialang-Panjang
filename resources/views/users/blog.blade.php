@extends('include.layout-section')
@push('css')
    <style>
        .card-img-wrapper {
            width: 100%;
            height: 250px;
            overflow: hidden;
        }

        .card-img-wrapper img {
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
                    <li class="current">Blog {{ env('APP_NAME') }}</li>
                </ol>
            </nav>
            <h1>Blog yang dibuat {{ env('APP_NAME') }}</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
        <div class="container" data-aos="fade-up">
            <div class="row gy-4">

                @foreach ($blog as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card" style="border-radius: 10%">
                            <div class="card-img-wrapper" style="margin-top: 6%">
                                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="Blog Image">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a
                                        href="{{ route('blog.show', $item->slug) }}">{{ $item->title }}</a></h5>
                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($item->description), 150) }}<a
                                        href="{{ route('blog.show', $item->slug) }}"> Baca Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- /Starter Section Section -->
@endsection
