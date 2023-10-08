@extends('backend.layout')

@section('title')
    Update Supplier
@endsection

@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Update Supplier</h1>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('b.home') }}"><i class="fas fa-fw fa-tachometer-alt"></i></a>
            </li>
            <li class="breadcrumb-item"><a href="{{ route('brands.index') }}">List</a></li>
            <li class="breadcrumb-item">Update for
                <strong class="name_prod">{{ $supp->name }}</strong>
            </li>

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
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">
                    Update for <strong class="name_prod">{{ $supp->name }}</strong>
                </h5>
            </div>
            <div class="card-body">
                <form action="{{ route('suppliers.update',$supp->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên</label>
                        <input type="text" value="{{ $supp->name }}" id="name" onkeyup="stralias('name','alias')"
                               class="form-control" required name="name" aria-describedby="emailHelp">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Alias</label>
                        <input type="text" value="{{ $supp->alias }}" name="alias" id="alias" required
                               class="form-control"
                               placeholder="" aria-describedby="helpId">
                        @error('alias')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Trạng Thái</label>
                        <select type="text" class="form-control" name="status">
                            @if (auth()->user()->id === \App\Enums\UserRole::Administrator)
                                <option value="1" {{ $supp->status == 1 ? 'selected' : '' }} >Active</option>
                                <option value="-2" {{ $supp->status == -2 ? 'selected' : '' }} >Block</option>
                                <option value="-1" {{ $supp->status == -1 ? 'selected' : '' }} >Hidden</option>
                            @else
                                <option value="1" {{ $supp->status == 1 ? 'selected' : '' }} >Active</option>
                                <option value="-2" {{ $supp->status == -2 ? 'selected' : '' }} >Block</option>
                            @endif
                        </select>
                    </div>
                    <div>
                        <a name="" id="" class="btn btn-secondary btn-md" href="{{ route('suppliers.index') }}"
                           role="button">Quay Về Danh Sách</a>
                        <button name="submit" class="btn btn-primary">Cập Nhật</button>
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
