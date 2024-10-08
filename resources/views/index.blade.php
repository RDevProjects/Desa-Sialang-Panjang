@extends('include.layout')
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

        .btn-primary-custom {
            color: #fff;
            background-color: #608637;
            border-color: #608637;
            border-radius: 50px;
        }

        .btn-primary-custom:hover {
            color: #fff;
            background-color: #3f5825;
            border-color: #3f5825;
        }

        .btn-primary-custom:focus,
        .btn-primary-custom.focus {
            color: #fff;
            background-color: #608637;
            border-color: #608637;
            box-shadow: 0 0 0 0.2rem rgba(96, 134, 55, 0.5);
        }

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
    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background d-flex align-items-center">

        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1 class="text-shadow">Selamat Datang di Pusat Pemasaran Beras Indragiri</h1>
                    <p class="text-shadow">Menyediakan Beras Berkualitas Tinggi dari Desa Sialang Panjang</p>
                    <div class="d-flex">
                        <a href="https://api.whatsapp.com/send?phone=6281259294640&text=Assalamualaikum%20Desa%20Sialang%20Panjang%2C%20Saya%20datang%20dari%20Website%20sialangpanjang.site."
                            class="btn-get-started">Belanja Sekarang</a>
                        {{-- <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a> --}}
                        <a href="#tentang" class="btn-get-started-outline ms-3">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('assets/users/img/hero-img.png') }}" class="img-fluid animated w-75" alt="">
                </div>
            </div>
        </div>

    </section><!-- /Hero Section -->


    <!-- About Section -->
    <section id="tentang" class="about section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>SIALANG PANJANG</h2>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-3">

                <div class="col-lg-12 content" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center">
                        <p>
                            Desa Sialang Panjang adalah desa yang mayoritas penduduknya adalah petani padi, terletak di
                            Kabupaten Indragiri Hilir. Desa ini memiliki potensi besar dalam bidang pertanian, khususnya
                            dalam produksi padi. Terletak di dataran rendah dengan iklim tropis, Desa Sialang Panjang
                            memiliki tanah yang subur dan sangat cocok untuk pertanian padi. Sejarah desa ini mencerminkan
                            tradisi bertani yang telah diwariskan dari generasi ke generasi, menjadikan pertanian sebagai
                            tulang punggung ekonomi masyarakat desa.
                        </p>
                        <p>
                            Total luas lahan pertanian di Desa Sialang Panjang adalah 950 hektar, Setiap hektar lahan
                            menghasilkan sekitar 3-4 ton gabah, menjadikan desa ini sebagai salah satu produsen padi yang
                            signifikan di daerah Indragiri Hilir. Beras yang dihasilkan dari Desa Sialang Panjang dikenal
                            dengan kualitasnya yang tinggi. Program Beras Indragiri bertujuan untuk memaksimalkan potensi
                            ini dengan memfasilitasi pemasaran beras melalui platform digital, sehingga dapat menjangkau
                            pasar yang lebih luas dan memberikan harga yang lebih baik bagi petani.
                        </p>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('tentangDesa') }}" class="btn btn-primary-custom"><span>Lihat Lebih
                                Banyak</span><i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- /About Section -->

    <!-- Blog Section -->
    <section id="blog" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Blog</h2>
            {{-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> --}}
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="200">

            <div class="row gy-4 justify-content-center">

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
            <div class="text-center">
                <a href="{{ route('blog') }}" class="btn btn-outline-primary">Baca Blog Lainnya</a>
            </div>
        </div>

    </section><!-- /Blog Section -->

    <!-- Produk Section -->
    <section id="produk" class="skills section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Produk</h2>
            <p>Produk unggulan dari Desa Sialang Panjang</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row justify-content-center">
                @foreach ($produk as $item)
                    <div class="col-lg-3 col-md-4 mb-4">
                        <div class="card" style="background-color: #fff9c4; border-radius: 10%">
                            <div class="card-body">
                                <div class="card-img-wrapper-50">
                                    <a href="{{ route('produk.show', $item->slug) }}">
                                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top"
                                            alt="Produk Image">
                                    </a>
                                </div>
                                <h5 class="card-title mt-2 text-truncate">
                                    <a href="{{ route('produk.show', $item->slug) }}">{{ $item->name }}</a>
                                </h5>
                                <p class="card-text">Rp. {{ number_format($item->price, 0, ',', '.') }} / 1 KG</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-center">
                <a href="{{ route('produk') }}" class="btn btn-primary-custom">Lihat Produk Sialang Panjang
                    Lainnya</a>
            </div>
        </div>

    </section><!-- /Produk Section -->

    <!-- Komunitas Section -->
    <section id="komunitas" class="services section light-background">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Komunitas</h2>
            <p>Beberapa Komunitas yang ada di {{ env('APP_NAME') }}</p>
        </div><!-- End Section Title -->

        <div class="container">

            <div class="row gy-4 justify-content-center">
                @foreach ($komunitas as $item)
                    <div class="col-lg-3 col-md-4 mb-4">
                        <div class="card rounded-pill" style="background-color: #fff9c4;">
                            <div class="card-body py-2">
                                <h5 class="card-title text-center mt-2 text-truncate">
                                    <a href="{{ route('komunitas.show', $item->slug) }}">{{ $item->name }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="text-center mt-5">
                <a href="{{ route('komunitas') }}" class="btn btn-outline-primary">Lihat Komunitas Lainnya</a>
            </div> --}}
        </div>

    </section><!-- /Komunitas Section -->

    <!-- Contact Section -->
    <section id="kontak" class="contact section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Kontak Kami</h2>
            {{-- buatkan deskripsi tentang Kontak Kami menggunakan tag p --}}
            <p>Beberapa Kontak dari {{ env('APP_NAME') }}</p>
        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">

                <div class="col-lg-5">

                    <div class="info-wrap" style="height: 30rem">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>{{ env('APP_NAME') }}</h3>
                                <p>Sialang Panjang, Tembilahan Hulu, Indragiri Hilir Regency, Riau</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Nomor Telp {{ env('APP_NAME') }}</h3>
                                {{-- <p>+62 812-5929-4640</p> --}}
                                <a href="https://api.whatsapp.com/send?phone=6281259294640&text=Assalamualaikum%20Desa%20Sialang%20Panjang%2C%20Saya%20datang%20dari%20Website%20sialangpanjang.site."
                                    target="_blank">+62
                                    812-5929-4640</a>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email {{ env('APP_NAME') }}</h3>
                                <p>sialangpanjang24@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        {{-- <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63835.76588849339!2d102.99515340347612!3d-0.36946735448220386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e28442b50b30bfb%3A0xfb6ac5972821aafa!2sSialang%20Panjang%2C%20Tembilahan%20Hulu%2C%20Indragiri%20Hilir%20Regency%2C%20Riau!5e0!3m2!1sen!2sid!4v1722342849613!5m2!1sen!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                    </div>
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                    <div class="info-wrap">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55025.100284091954!2d102.99515340347612!3d-0.36946735448220386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e28442b50b30bfb%3A0xfb6ac5972821aafa!2sSialang%20Panjang%2C%20Tembilahan%20Hulu%2C%20Indragiri%20Hilir%20Regency%2C%20Riau!5e1!3m2!1sen!2sid!4v1722635428958!5m2!1sen!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 100%;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div><!-- End Contact Form -->

            </div>

        </div>

    </section><!-- /Contact Section -->
@endsection
