@extends('backend.emptylayout')
@section('title')
Login Admin
@endsection
@section('content')
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
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
                            <form method="POST" class="user" action="{{route('b.loginpost')}}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" required name="username"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter Username...">
                                </div>
                                @error('username')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" required
                                        name="password" id="exampleInputPassword" placeholder="Password">
                                </div>
                                @error('password')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" value="1" name="remember"
                                            for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-user btn-block">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
@push('jscustom')
@include('backend.widget.js')
@endpush
