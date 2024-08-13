@extends('include.layout-section')
@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Komunitas {{ env('APP_NAME') }}</li>
                    <li class="current">{{ $komunitas->name }}</li>
                </ol>
            </nav>
            <h1>{{ $komunitas->name }}</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
        <div class="container" data-aos="fade-up">
            <div class="card">
                <div class="card-img-wrapper w-75 mx-auto">
                    <h2 class="text-center my-5">{{ $komunitas->name }}</h2>
                    <p class="card-text text-center">
                        Komunitas <b>{{ $komunitas->name }}</b> adalah salah satu komunitas yang ada di
                        {{ env('APP_NAME') }}.
                    </p>
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset('storage/' . $komunitas->image) }}" class="card-img-top w-75"
                            alt="Komunitas Image">
                    </div>
                </div>
                <div class="card-body mx-auto px-5">
                    {{-- <p class="card-text">
                        Komunitas <b>{{ $komunitas->name }}</b> adalah salah satu komunitas yang ada di
                        {{ env('APP_NAME') }}.
                    </p> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- /Starter Section Section -->
@endsection
