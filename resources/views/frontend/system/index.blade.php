@extends('frontend.layout')

@section('title')
    SWANJSC VIETNAM
@endsection

@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid px-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('frontend/img/carousel/carousel-1.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Welcome to</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">SWAN JSC VIETNAM</h1>
                                    <a href="{{ route('f.about') }}"
                                       class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Tìm
                                        Hiểu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/img/carousel/carousel-2.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Welcome to</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">SWAN JSC VIETNAM</h1>
                                    <a href="{{ route('f.about') }}"
                                       class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Tìm
                                        Hiểu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/img/carousel/carousel-3.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Welcome to</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">SWAN JSC VIETNAM</h1>
                                    <a href="{{ route('f.about') }}"
                                       class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Tìm
                                        Hiểu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/img/carousel/carousel-4.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-8 text-end">
                                    <p class="fs-4 text-white">Welcome to</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">SWAN JSC VIETNAM</h1>
                                    <a href="{{ route('f.about') }}"
                                       class="btn btn-secondary rounded-pill py-3 px-5 animated slideInLeft">Tìm
                                        Hiểu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('frontend/img/carousel/carousel-5.jpg') }}" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-8 text-start">
                                    <p class="fs-4 text-white">Welcome to</p>
                                    <h1 class="display-1 text-white mb-5 animated slideInRight">SWAN JSC VIETNAM</h1>
                                    <a href="{{ route('f.about') }}"
                                       class="btn btn-secondary rounded-pill py-3 px-5 animated slideInRight">Tìm
                                        Hiểu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-end">
                <div class="col-lg-6">
                    <div class="row g-2">
                        <div class="col-6 position-relative wow fadeIn" data-wow-delay="0.7s">
                            <div class="about-experience bg-secondary rounded">
                                <small class="fs-5 fw-bold">Xuất Khẩu Hơn</small>
                                <h1 class="display-1 mb-0" data-toggle="counter-up">10</h1>
                                <small class="fs-5 fw-bold">Quốc Gia</small>
                            </div>
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded" src="{{ asset('frontend/img/service/service-1.jpg') }}"
                                 alt="">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid rounded" src="{{ asset('frontend/img/service/service-2.jpg') }}"
                                 alt="">
                        </div>
                        <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid rounded" src="{{ asset('frontend/img/service/service-3.jpg') }}"
                                 alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <p class="section-title bg-white text-start text-primary pe-3">About Us</p>
                    <h1 class="mb-4">Tìm Hiểu Về Công Ty và Lịch Sử Phát Triển</h1>
                    <p class="mb-4">SWAN là một công ty hàng đầu trong lĩnh vực cung cấp mặt hàng thủy sản và nông sản
                        cấp đông xuất khẩu. Với kinh nghiệm lâu năm và sự chuyên nghiệp, chúng tôi cam kết mang đến
                        những sản phẩm chất lượng cao, đáp ứng các tiêu chuẩn quốc tế và yêu cầu khắt khe của khách hàng
                        trên toàn cầu.</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('frontend/img/service.png') }}" alt="">
                            <h5 class="mb-3">Dịch Vụ</h5>
                            <span>Hỗ trợ, giải đáp và tư vấn về sản phẩm.</span>
                        </div>
                        <div class="col-sm-6">
                            <img class="img-fluid mb-4" src="{{ asset('frontend/img/product.png') }}" alt="">
                            <h5 class="mb-3">Sản Phẩm</h5>
                            <span>Chuyên cung cấp mặt hàng thủy sản và nông sản cấp đông xuất khẩu.</span>
                        </div>
                    </div>
                    <a class="btn btn-secondary rounded-pill py-3 px-5" href="{{ route('f.about') }}">Tìm Hiểu</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title bg-white text-start text-primary pe-3">Why Us!</p>
                    <h1 class="mb-4">Lý Do Tại Sao Nên Chọn Chúng Tôi!</h1>
                    <p class="mb-4">Chúng tôi chuyên sản xuất và xuất khẩu các loại thủy sản và nông sản đa dạng như cá,
                        tôm, hàu, cua, ngao, các loại rau củ, quả, gia vị và trái cây, các sản phẩm chế biến từ thủy sản
                        và nông sản khác. Công ty SWAN đặt mục tiêu đảm bảo nguồn cung cấp ổn định và đa dạng, đồng thời
                        tuân thủ các quy trình chất lượng và an toàn thực phẩm để đảm bảo sản phẩm đạt chuẩn cao nhất
                        trước khi đến tay người tiêu dùng.
                    </p>
                    <p>
                        <br>Swan theo tiếng anh có nghĩa là loài chim Thiên Nga.
                        <br>S.W.A.N còn là viết tắt Smart, Work Hard, Ambitious và Nice.
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Smart: là thông minh, luôn áp dụng những tư duy sáng
                        tạo cho ngành nông nghiệp truyền thống. Còn ý chỉ sự thông minh của con người Việt Nam.
                    </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Work Hard: Sự chăm chỉ của nông dân Việt Nam. Sự cần
                        cù
                        đội nắng mưa của người nông dân Việt Nam. </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Ambitious : Sự tham vọng. Luôn tham vọng trở thành
                        ngựa ô trong cuộc đua của các ông lớn cùng ngành. </p>
                    <p><i class="fa fa-check text-primary me-3"></i>Nice : Tươi cười, ý chỉ sự hài lòng của khách hàng
                        đối với sản phẩm của công ty Swan mang lại.</p>
                    <a class="btn btn-secondary rounded-pill py-3 px-5 mt-3" href="{{ route('f.about') }}">Tìm Hiểu</a>
                </div>
                <div class="col-lg-6">
                    <div class="rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('frontend/img/experience.png') }}" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">10</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Quốc Gia Xuất Khẩu </span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('frontend/img/award.png') }}" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">13</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Giải Thưởng</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                                <div class="text-center bg-secondary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('frontend/img/food.png') }}" alt="">
                                    <h1 class="display-6" data-toggle="counter-up">60</h1>
                                    <span class="fs-5 fw-semi-bold text-primary">Loại Sản Phẩm</span>
                                </div>
                            </div>
                            <div class="col-sm-6 wow fadeIn" data-wow-delay="0.7s">
                                <div class="text-center bg-primary py-5 px-4">
                                    <img class="img-fluid mb-4" src="{{ asset('frontend/img/client.png') }}" alt="">
                                    <h1 class="display-6 text-white" data-toggle="counter-up">680</h1>
                                    <span class="fs-5 fw-semi-bold text-secondary">Khách Hàng Hài Lòng</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Banner Start -->
    <div class="container-fluid banner my-5 py-5" data-parallax="scroll"
         data-image-src="{{ asset('frontend/img/banner.jpg') }}">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="{{ asset('frontend/img/export/noi-dia.jpg') }}" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">Sản Phẩm Thị Trường Nội Địa</h2>
                            <p class="text-white mb-4">Cung cấp các sản phẩm nông thủy sản nhập khẩu từ Nhật, Hàn, Trung
                                Quốc.</p>
                            <p class="text-white mb-4">Cung cấp các sản phẩm giá trị gia tăng từ nông thủy sản.</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="{{ route('f.product') }}">Xem</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-4 align-items-center">
                        <div class="col-sm-4">
                            <img class="img-fluid rounded" src="{{ asset('frontend/img/export/xuat-khau.jpg') }}"
                                 alt="">
                        </div>
                        <div class="col-sm-8">
                            <h2 class="text-white mb-3">Sản Phẩm Thị Trường Xuất Khẩu </h2>
                            <p class="text-white mb-4">Cung cấp nông sản tươi như Xoài, Sầu Riêng, Mít, Nhãn, Vải,
                                Dừa. </p>
                            <p class="text-white mb-4">Cung cấp các loại Nông Sản Cấp Đông, Thủy Sản Cấp Đông.</p>
                            <a class="btn btn-secondary rounded-pill py-2 px-4" href="{{ route('f.product') }}">Xem</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto pb-4 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Qui Trình Sản Xuất</p>
                <h1 class="mb-5">Lấy Chất Lượng Làm Tiêu Chí Hàng Đầu</h1>
            </div>
            <div class="row gy-5 gx-4">
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('frontend/img/process/process-1.jpg') }}" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle"
                                     src="{{ asset('frontend/img/process/process-1.jpg') }}"
                                     alt="">
                            </div>
                            <h5 class="mb-3">Tiêu Chuẩn</h5>
                            <p class="mb-4">Làm việc trực tiếp với vùng trồng trọt, chăn nuôi theo các tiêu chuẩn Quốc
                                Tế.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('frontend/img/process/process-2.jpg') }}" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle"
                                     src="{{ asset('frontend/img/process/process-2.jpg') }}"
                                     alt="">
                            </div>
                            <h5 class="mb-3">Qui Trình và Kiểm Tra</h5>
                            <p class="mb-4">Qui trình sản xuất và kiểm tra chất lượng nghiêm ngặt.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-5 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item d-flex h-100">
                        <div class="service-img">
                            <img class="img-fluid" src="{{ asset('frontend/img/process/process-3.jpg') }}" alt="">
                        </div>
                        <div class="service-text p-5 pt-0">
                            <div class="service-icon">
                                <img class="img-fluid rounded-circle"
                                     src="{{ asset('frontend/img/process/process-3.jpg') }}"
                                     alt="">
                            </div>
                            <h5 class="mb-3">Hỗ Trợ</h5>
                            <p class="mb-4">Hỗ trợ các thủ tục xuất khẩu từ nhà máy đến kho của khách hàng.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Gallery Start -->
    <div class="container-xxl py-5 px-0">
        <div class="row g-0">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('frontend/img/gallery/gallery-1.jpg') }}"
                           data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('frontend/img/gallery/gallery-1.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('frontend/img/gallery/gallery-2.jpg') }}"
                           data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('frontend/img/gallery/gallery-2.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('frontend/img/gallery/gallery-3.jpg') }}"
                           data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('frontend/img/gallery/gallery-3.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('frontend/img/gallery/gallery-4.jpg') }}"
                           data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('frontend/img/gallery/gallery-4.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('frontend/img/gallery/gallery-5.jpg') }}"
                           data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('frontend/img/gallery/gallery-5.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('frontend/img/gallery/gallery-6.jpg') }}"
                           data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('frontend/img/gallery/gallery-6.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="row g-0">
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('frontend/img/gallery/gallery-7.jpg') }}"
                           data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('frontend/img/gallery/gallery-7.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-12">
                        <a class="d-block" href="{{ asset('frontend/img/gallery/gallery-8.jpg') }}"
                           data-lightbox="gallery">
                            <img class="img-fluid" src="{{ asset('frontend/img/gallery/gallery-8.jpg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


    <!-- Product Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Sản Phẩm</p>
                <h1 class="mb-5">Các Sản Phẩm Vì Cuộc Sống Khỏe Mạnh</h1>
            </div>
            <div class="row gx-4">
                @if ($cateList->isEmpty())
                    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h3 class="mb-5">Danh Mục đang cập nhật</h3>
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <a class="btn btn-secondary rounded-pill py-3 px-5" href="{{ route('f.product') }}">Quay
                                    về</a>
                            </div>
                        </div>
                    </div>
                @else
                    @foreach ($cateList as $item )
                        @if ($item->parent_id == 0)
                            <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative">
                                        <img class="img-fluid rounded" src="{{ $item->image }}" sizes="300x300" alt="">
                                        <div class="product-overlay rounded">
                                            @if ($item->id != 2)
                                                <a class="btn btn-secondary rounded-pill py-3 px-5"
                                                   href="{{ route('f.product.index',$item->alias) }}">
                                                    <h5 class="m-0">Xem</h5>
                                                </a>
                                            @else
                                                <a class="btn btn-secondary rounded-pill py-3 px-5"
                                                   href="{{ route('f.catechild') }}">
                                                    <h5 class="m-0">Xem</h5>
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="text-center p-4">
                                        @if ($item->id != 2)
                                            <a class="d-block capitalize h5"
                                               href="{{ route('f.product.index',$item->alias) }}">
                                                {{ $item->name}}</a>
                                        @else
                                            <a class="d-block capitalize h5" href="{{ route('f.catechild') }}">
                                                {{ $item->name}}</a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Product End -->
@endsection

@push('jscustom')
    @include('frontend.widget.js')
@endpush
