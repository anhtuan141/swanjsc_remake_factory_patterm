@extends('backend.layout')

@section('title')
    User Information
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">User Information</h1>
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('b.home') }}"><i class="fas fa-fw fa-tachometer-alt"></i></a>
            </li>
            <li class="breadcrumb-item">Information for
                <strong class="name_info">{{ $user->name }}</strong> (<strong>{{ $user->username }}</strong>)
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
            </div>
            <div class="card-body">
                <form action="{{ route('b.profile.update') }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                               aria-describedby="emailHelp">
                        @error('name')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                        <span class="text-danger error-text name_error"></span>
                    </div>
                    <div class="form-group">
                        <label for="">Avatar</label>
                        <img width="100" src="{{ $user->image }}" alt=""/>
                        <input type="text" name="image" id="image" value="" class="form-control" placeholder=""
                               aria-describedby="helpId">
                        <button type="button" onclick="openfile('image')">Choose File</button>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Username</label>
                        <input type="text" readonly class="form-control" value="{{ $user->username }}" name="username"
                               aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" readonly class="form-control" value="{{ $user->email }}" name="email"
                               id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="text" class="form-control" value="{{ $user->phone }}" name="phone"
                               aria-describedby="emailHelp">
                        @error('phone')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div>
                        <a id="" class="btn btn-secondary btn-md" href="{{ route('b.home') }}" role="button">Quay
                            Về Home</a>
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
