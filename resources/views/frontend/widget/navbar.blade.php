<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5">
    <a href="{{ route('f.home') }}" class="navbar-brand d-flex align-items-center">
        <h1 class="m-0"><img class="mb-2" src="{{ asset('frontend/img/logo/logo.jpg') }}" alt="">SWANJSC</h1>
    </a>
    <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('f.home') }}"
               class="nav-item nav-link {{ (Request::route()->getName() == 'f.home') ? 'active' : " " }}">Trang Chủ</a>
            <a href="{{ route('f.about') }}"
               class="nav-item nav-link {{ (Request::route()->getName() == 'f.about') ? 'active' : " " }}">Thông Tin</a>
            <a href="{{ route('f.product') }}"
               class="nav-item nav-link {{ (Request::route()->getName() == 'f.product') ? 'active' : " " }}">Sản Phẩm</a>
            <a href="{{ route('f.contact') }}"
               class="nav-item nav-link {{ (Request::route()->getName() == 'f.contact') ? 'active' : " " }}">Liên Hệ</a>
        </div>
    </div>
</nav>
<!-- Navbar End -->
