<footer id="footer" class="footer light-background">

    {{-- <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-6">
                    <h4>Join Our Newsletter</h4>
                    <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
                    <form action="forms/newsletter.php" method="post" class="php-email-form">
                        <div class="newsletter-form"><input type="email" name="email"><input type="submit"
                                value="Subscribe"></div>
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your subscription request has been sent. Thank you!</div>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="container footer-top">
        <div class="row gy-4">
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="d-flex align-items-center">
                    <span class="sitename">{{ env('APP_NAME') }}</span>
                </a>
                <div class="footer-contact pt-3">
                    <p>Sialang Panjang</p>
                    <p>Tembilahan Hulu, Indragiri Hilir Regency, Riau</p>
                    <p class="mt-3"><strong>Telepon:</strong> <span>+62 823-8862-7415</span></p>
                    <p><strong>Email:</strong> <span>sialangpanjang24@gmail.com</span></p>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Beberapa Link Yang Berguna</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#hero">Beranda</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#tentang">Tentang Kami</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#blog">Blog</a></li>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#komunitas">Komunitas</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-md-3 footer-links">
                <h4>Produk {{ env('APP_NAME') }}</h4>
                <ul>
                    <li><i class="bi bi-chevron-right"></i> <a href="{{ route('home') }}#produk">Produk</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-12">
                <h4>Ikuti Sosial Media {{ env('APP_NAME') }}</h4>
                <p>Beberapa Sosial Media {{ env('APP_NAME') }}</p>
                <div class="social-links d-flex">
                    <a href="https://www.youtube.com/@sialangpanjang" target="_blank"><i class="bi bi-youtube"></i></a>
                    <a href="https://www.facebook.com/salang.panjang"><i class="bi bi-facebook" target="_blank"></i></a>
                    {{-- <a href=""><i class="bi bi-instagram" target="_blank"></i></a> --}}
                    <a href="https://www.tiktok.com/@sialangpanjang" target="_blank"><i class="bi bi-tiktok"></i></a>
                </div>
            </div>

        </div>
    </div>

    <div class="container copyright text-center mt-4">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">{{ env('APP_COPYRIGHT') }}</strong> <span>All Rights
                Reserved</span>
        </p>
        {{-- <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you've purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div> --}}
    </div>

</footer>
