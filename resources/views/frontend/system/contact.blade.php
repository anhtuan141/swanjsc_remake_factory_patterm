@extends('frontend.layout')

@section('title')
Contact
@endsection

@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4 animated slideInDown">Liên Hệ</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{ route('f.home') }}">Trang Chủ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Liên Hệ</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <p class="section-title bg-white text-center text-primary px-3">Contact Us</p>
            <h1 class="mb-5">Vui Lòng Liện Hệ Với Chúng Tôi</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <form data-action="{{ route('f.sendmail') }}" enctype="multipart/form-data" id="frmContactus">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" value="{{old('name','')}}" required name="name" id="name"
                                    placeholder="Tên Của Bạn">
                                @error('name')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <label for="name">Tên Của Bạn*</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" value="{{old('email','')}}" required name="email"
                                    id="email" placeholder="Địa Chỉ Email">
                                @error('email')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <label for="email">Địa Chỉ Email*</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" value="{{old('subject','')}}" required name="subject"
                                    id="subject" placeholder="Chủ Đề">
                                @error('subject')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <label for="subject">Chủ Đề*</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here"
                                    value="{{old('message','')}}" required name="message" id="message"
                                    style="height: 250px"></textarea>
                                @error('message')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <label for="message">Nội Dung Liên Hệ*</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-secondary rounded-pill py-3 px-5" name="submit" id="submit"
                                type="button">Gửi Liên Hệ</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h3 class="mb-4">Chi Tiết Liên Hệ</h3>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-map-marker-alt text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>CÔNG TY CỔ PHẦN SẢN XUẤT VÀ THƯƠNG MẠI SWAN - TRỤ SỞ</h6>
                        <span>833 Lê Hồng Phong, Phường 12, Quận 10, Tp.Hồ Chí Minh, Việt Nam</span>
                    </div>
                </div>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-map-marker-alt text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>CÔNG TY CỔ PHẦN SẢN XUẤT VÀ THƯƠNG MẠI SWAN - CHI NHÁNH ĐỒNG THÁP</h6>
                        <span>1094/B Quốc lộ 80, Ấp Tân Hòa, Xã Tân Nhuận Đông, Huyện Châu Thành, Tỉnh Đồng Tháp, Việt Nam</span>
                    </div>
                </div>
                <div class="d-flex border-bottom pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-phone-alt text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Phone</h6>
                        <span>+84 903392335</span>
                    </div>
                </div>
                <div class="d-flex border-bottom-0 pb-3 mb-3">
                    <div class="flex-shrink-0 btn-square bg-secondary rounded-circle">
                        <i class="fa fa-envelope text-body"></i>
                    </div>
                    <div class="ms-3">
                        <h6>Mail</h6>
                        <span>swanvn.jsc@gmail.com</span>
                    </div>
                </div>

                <iframe class="w-100 rounded"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d800.5154675051638!2d106.67085896469077!3d10.7733372019306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752edec06eb3cd%3A0x96e5058560927a08!2zODMzIMSQLiBMw6ogSOG7k25nIFBob25nLCBQaMaw4budbmcgMTIsIFF14bqtbiAxMCwgVGjDoG5oIHBo4buRIEjhu5MgQ2jDrSBNaW5oIDcwMDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1685436331907!5m2!1svi!2s"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade" frameborder="0" style="min-height: 300px; border:0;"
                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection

@push('jscustom')
@include('frontend.widget.js')
@endpush
