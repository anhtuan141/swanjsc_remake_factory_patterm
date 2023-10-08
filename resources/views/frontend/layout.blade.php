<!DOCTYPE html>
<html lang="en">

<!-- Head -->
@include('frontend.widget.head')

<body>
    <!-- Spinner -->
    @include('frontend.widget.spiner')


    <!-- Topbar -->
    @include('frontend.widget.topbar')


    <!-- Navbar -->
    @include('frontend.widget.navbar')

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    @include('frontend.widget.footer')

    <!-- Copyright -->
    @include('frontend.widget.copyright')

    <!-- Back to Top -->
    @include('frontend.widget.backtotop')

    <!-- JavaScript -->
    @stack('jscustom')
</body>

</html>
