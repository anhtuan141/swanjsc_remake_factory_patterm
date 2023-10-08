@extends('frontend.layout')

@section('title')
    About Us
@endsection

@section('content')
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Thông Tin</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('f.home') }}">Trang Chủ</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Thông Tin</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


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
@endsection

@push('jscustom')
    @include('frontend.widget.js')
@endpush
