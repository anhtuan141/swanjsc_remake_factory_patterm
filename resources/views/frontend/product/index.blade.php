@extends('frontend.layout')

@section('title')
{{ $cate->name }}
@endsection

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">SẢN PHẨM</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('f.home') }}">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="{{ route('f.product') }}">Sản phẩm</a></li>
                <li class="breadcrumb-item"><a href="{{ route('f.product') }}">Danh mục</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $cate->name }}</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Product Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Swan JSC</p>
            <h1 class="mb-5">{{ $cate->name }}</h1>
        </div>
        <div class="row gx-4">
            @if ($list->isEmpty())
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="mb-5">Sản phẩm đang cập nhật</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <a class="btn btn-secondary rounded-pill py-3 px-5" href="{{ route('f.product') }}">Quay về</a>
                    </div>
                </div>
            </div>
            @else
            @foreach ($list as $item )
            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid rounded" src="{{ $item->image }}" alt="">
                        <div class="product-overlay rounded">
                            <a class="btn btn-secondary rounded-pill py-3 px-5"
                                href="{{ route('f.product.detail',$item->alias) }}">
                                <h3 class="m-0">Chi Tiết</h3>
                            </a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block capitalize h5" href="{{ route('f.product.detail',$item->alias) }}">{{
                            $item->name_vi }}</a>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $list->links() }}
            @endif
        </div>
    </div>
</div>
<!-- Product End -->
@endsection

@push('jscustom')
@include('frontend.widget.js')
@endpush
