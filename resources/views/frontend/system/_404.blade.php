@extends('frontend.layout')

@section('title')
    404
@endsection

@section('content')
     <!-- Page Header Start -->
     <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">404 Page</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('f.home')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">404</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- 404 Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4">Không tìm thấy</h1>
                    <p class="mb-4">Rất tiếc, trang bạn tìm kiếm không tồn tại trên trang web của chúng tôi! Có thể truy cập trang chủ của chúng tôi hoặc thử sử dụng tìm kiếm?</p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="{{ route('f.home') }}">Quay Trở Lại</a>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 End -->
@endsection

@push('jscustom')
    @include('frontend.widget.js')
@endpush
