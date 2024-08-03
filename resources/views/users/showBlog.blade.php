@extends('include.layout-section')
@section('content')
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
        <div class="container">
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li>Blog {{ env('APP_NAME') }}</li>
                    <li class="current">{{ $blog->title }}</li>
                </ol>
            </nav>
            <h1>{{ $blog->title }}</h1>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section">
        <div class="container" data-aos="fade-up">
            <div class="card" style="margin: 5%">
                <div class="card-img-wrapper w-50 mx-auto">
                    <h2 class="text-center my-5">{{ $blog->title }}</h2>
                    <img src="{{ asset('storage/' . $blog->image) }}" class="card-img-top" alt="Blog Image">
                </div>
                <div class="card-body w-75 mx-auto">
                    <p class="card-text">
                        {!! $blog->description !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Starter Section Section -->
@endsection
