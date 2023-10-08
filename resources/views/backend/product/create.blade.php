@extends('backend.layout')

@section('title')
    Create New Product
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Create Product</h1>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('b.home')}}"><i class="fas fa-fw fa-tachometer-alt"></i></a>
            </li>
            <li class="breadcrumb-item">Create</li>
        </ul>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            @if (session('msg'))
                <div class="alert alert-{{session('type')}} alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>{{session('msg')}}</strong>
                </div>

                <script>
                    $(".alert").alert();
                </script>
            @endif
            <div class="card-body">
                <form method="POST" action="{{route('products.store')}}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-lg-4 col-12">
                            <label for="">Hình Ảnh</label>
                            <img width="250"/>
                            <input type="text" name="image" id="image" class="form-control" required placeholder=""
                                   aria-describedby="helpId">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <button type="button" onclick="openfile('image')">Choose File</button>
                        </div>
                        <div class="form-group col-lg-4 col-12">
                            <label for="">Hình Ảnh 2</label>
                            <img width="250"/>
                            <input type="text" name="image_2" id="image_2" class="form-control" required placeholder=""
                                   aria-describedby="helpId">
                            @error('image_2')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <button type="button" onclick="openfile('image_2')">Choose File</button>
                        </div>
                        <div class="form-group col-lg-4 col-12">
                            <label for="">Hình Ảnh 3</label>
                            <img width="250"/>
                            <input type="text" name="image_3" id="image_3" class="form-control" required placeholder=""
                                   aria-describedby="helpId">
                            @error('image_3')
                            <span class="text-danger">{{$message}}</span>
                            @enderror
                            <button type="button" onclick="openfile('image_3')">Choose File</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Tiếng Việt</label>
                                <input type="text" value="{{old('name_vi','')}}" id="name_vi"
                                       onkeyup="stralias('name_vi','alias')" class="form-control" required
                                       name="name_vi"
                                       aria-describedby="emailHelp">
                                @error('name_vi')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Alias</label>
                                <input type="text" value="{{old('alias','')}}" name="alias" id="alias" required
                                       class="form-control" placeholder="" aria-describedby="helpId">
                                @error('alias')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên Tiếng Anh</label>
                                <input type="text" value="{{old('name_en','')}}" id="name_en" class="form-control"
                                       required
                                       name="name_en" aria-describedby="emailHelp">
                                @error('name_en')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                        <!--------------------------------------------------------------->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nhà Sản Xuất</label>
                                <select type="text" class="form-control" name="supplier_id">
                                    @foreach ($supp as $item )
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('supplier_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Danh Mục</label>
                                <select type="text" class="form-control" name="category_id">
                                    @foreach ($cate as $item )
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Vùng Nuôi</label>
                                <input type="text" value="{{old('farming_area ','')}}" required class="form-control"
                                       name="farming_area"
                                       aria-describedby="emailHelp">
                                @error('farming_area')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <!--------------------------------------------------------------->
                    <div class="form-group">
                        <label for="">Mô Tả</label>
                        @error('summary')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <textarea type="text" name="summary" id="summary" class="form-control ckeditor" required placeholder=""
                                  aria-describedby="helpId"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Kích Thước</label>
                        @error('product_size')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <textarea type="text" name="product_size" id="product_size" class="form-control ckeditor"
                                  required placeholder=""
                                  aria-describedby="helpId"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Đóng Gói</label>
                        @error('packing_standard')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <textarea type="text" name="packing_standard" id="packing_standard"
                                  class="form-control ckeditor" required placeholder=""
                                  aria-describedby="helpId"></textarea>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a id="" class="btn btn-secondary btn-md mr-2" href="{{ route('b.home') }}"
                           role="button">Quay về
                            Home</a>
                        <button type="submit" class="btn btn-primary">Tạo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('jscustom')
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('backend/asset/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('backend/asset/js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('backend/asset/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset('backend/asset/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('backend/asset/js/demo/datatables-demo.js')}}"></script>

    <!-- CKEditor -->
    <script src="{{asset('backend/ckfinder/ckfinder.js')}}"></script>
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('backend/js/myscript.js')}}"></script>

@endpush
