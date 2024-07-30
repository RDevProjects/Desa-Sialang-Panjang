<!DOCTYPE html>
<html lang="en">

@include('include.head')

<body class="starter-page-page">

    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">
            @include('include.navbar')
        </div>
    </header>

    <main class="main">
        @yield('content')
    </main>

    @include('include.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    @include('include.script')
</body>

</html>
