<a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
    <!-- Uncomment the line below if you also wish to use an image logo -->
    <!-- <img src="assets/img/logo.png" alt=""> -->
    <h1 class="sitename">Desa Sialang Panjang</h1>
</a>

<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="{{ route('home') }}#hero" class="active">Beranda</a></li>
        <li><a href="{{ route('home') }}#tentang">Tentang Kami</a></li>
        <li><a href="{{ route('home') }}#blog">Blog</a></li>
        <li><a href="{{ route('home') }}#produk">Produk</a></li>
        <li><a href="{{ route('home') }}#komunitas">Komunitas</a></li>
        {{-- <li><a href="#pricing">Pricing</a></li>
        <li class="dropdown"><a href="#"><span>Dropdown</span> <i
                    class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Deep Dropdown 1</a></li>
                        <li><a href="#">Deep Dropdown 2</a></li>
                        <li><a href="#">Deep Dropdown 3</a></li>
                        <li><a href="#">Deep Dropdown 4</a></li>
                        <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
            </ul>
        </li> --}}
        <li><a href="{{ route('home') }}#kontak">Kontak Kami</a></li>
    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>

{{-- <a class="btn-getstarted" href="#about">Get Started</a> --}}
