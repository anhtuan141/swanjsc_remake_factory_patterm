@extends('frontend.layout')

@section('title')
Nông Sản
@endsection

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Nông Sản</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('f.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('f.product') }}">Sản Phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh Mục</li>
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
            <h1 class="mb-5">DANH MỤC</h1>
        </div>
        <div class="row gx-4">
            @foreach ($cateList as $item )
            <div class="col-md-6 col-lg-6 col-xl-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="product-item">
                    <div class="position-relative">
                        <img class="img-fluid rounded" src="{{ $item->image }}" alt="">
                        <div class="product-overlay rounded">
                            <a class="btn btn-secondary rounded-pill py-3 px-5"
                                href="{{ route('f.product.index',$item->alias) }}">
                                <h3 class="m-0">Xem</h3>
                            </a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <a class="d-block capitalize h5" href="{{ route('f.product.index',$item->alias) }}">
                            {{ $item->name}}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Product End -->
@endsection

@push('jscustom')
@include('frontend.widget.js')
@endpush
