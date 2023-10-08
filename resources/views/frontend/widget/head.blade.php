<head>
    <meta charset="utf-8">
    <title>
        @section('title')
            SWANJSC VIETNAM
        @show
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    
    <!-- Support Open Graph For Facebook -->
    <meta property="og:url"
          content="http://www.swanvn.com"/>
    <meta property="og:title" content="Cung cấp nông sản - thủy sản uy tín nhất Việt Nam"/>
    <meta property="og:description"
          content="Cung cấp nông sản - thủy sản - sản phẩm chế biến và nhiều sản phẩm khác"/>
    
    <!-- Ajax -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/favicon/favicon.png') }}" sizes="32x32" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    <!-- Ajax -->
    <script src="{{ asset('frontend/js/jquery-3.5.1.min.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    <!-- Toastr CSS -->
    <link href="{{ asset('frontend/css/toastr.css') }}" rel="stylesheet" />
</head>
