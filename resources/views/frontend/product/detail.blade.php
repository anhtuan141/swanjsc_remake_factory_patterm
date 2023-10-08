@extends('frontend.layout')

@section('title')
    {{ $detail->name_vi }}
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
                    <li class="breadcrumb-item"><a href="{{ route('f.catechild') }}">{{ $detail->catename }}</a></li>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $detail->name_vi }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Product</p>
                <h1 class="mb-5">{{ $detail->name_vi }}</h1>
            </div>
            <div class="row g-0">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <!-- Carousel Start -->
                        <div class="col-lg-12 col-xl-4">
                            <div id="product-carousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid w-100" src="{{ $detail->image }}" alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid w-100" src="{{ $detail->image_2 }}" alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid w-100" src="{{ $detail->image_3 }}" alt="Image">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#product-carousel"
                                        data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#product-carousel"
                                        data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        <!-- Carousel End -->
                        
                        <div class="col-lg-12 col-xl-8 text-center">
                            <div class="product-item">
                                <table class="table table-bordered table-hover">
                                    <tbody>
                                    <tr>
                                        <th style="width:30%" class="text-start">Nhà sản xuất</th>
                                        <td class="text-start">{{ $detail->suppname }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">Mô tả sản phẩm</th>
                                        <td class="text-start">{!! $detail->summary !!} </td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">Tên tiếng Anh</th>
                                        <td class="text-start">{{ $detail->name_en }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">Size</th>
                                        <td class="text-start">{{ $detail->product_size }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">Đóng gói</th>
                                        <td class="text-start">{{ $detail->packing_standard }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-start">Vùng nuôi</th>
                                        <td class="text-start">{{ $detail->farming_area }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <div class="col-xl-6 col-lg-12 col-md-12 col-12 text-center">
                                    <a href="{{ route('f.contact') }}" class="btn btn-primary btn-lg">Contact To Buy
                                        <i class="fa fa-envelope" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Product End -->
@endsection

@push('jscustom')
    @include('frontend.widget.js')
@endpush
