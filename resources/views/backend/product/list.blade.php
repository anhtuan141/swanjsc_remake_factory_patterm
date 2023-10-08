@extends('backend.layout')

@section('title')
Product List
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Product</h1>
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('b.home')}}"><i class="fas fa-fw fa-tachometer-alt"></i></a></li>
        <li class="breadcrumb-item">List</li>
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
            <h5 class="m-0 font-weight-bold text-primary">{{count($collection)}} Products</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Hình</th>
                            <th>Nhà Sản Xuất</th>
                            <th>Danh Mục</th>
                            <th>Tên Tiếng Việt</th>
                            <th>Tên Tiếng Anh</th>
                            <th>Size</th>
                            <th>Đóng Gói</th>
                            <th>Vùng Nuôi</th>
                            <th>Mô Tả</th>
                            <th>Trạng Thái</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Hình</th>
                            <th>Nhà Sản Xuất</th>
                            <th>Danh Mục</th>
                            <th>Tên Tiếng Việt</th>
                            <th>Tên Tiếng Anh</th>
                            <th>Size</th>
                            <th>Đóng Gói</th>
                            <th>Vùng Nuôi</th>
                            <th>Mô Tả</th>
                            <th>Trạng Thái</th>
                            <th>Hành Động</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($collection as $item)
                        <tr>
                            <td> {{ $item->id }} </td>
                            <td> <img width="100" src="{{ $item->image }}" alt="" /> </td>
                            <td> {{ $item->suppname }}</td>
                            <td> {{ $item->catename }} </td>
                            <td> {{ $item->name_vi }} </td>
                            <td> {{ $item->name_en }} </td>
                            <td> {{ Str::limit($item->product_size,20) }} </td>
                            <td> {{ Str::limit($item->packing_standard,20)}} </td>
                            <td> {{ $item->farming_area }} </td>
                            <td> {{ Str::limit($item->summary,20) }}</td>
                            <td class="text-center">
                                @if ($item->status == 1)
                                <span class="badge badge-success">Active</span>
                                @elseif ($item->status == -2)
                                <span class="badge badge-dark">Lock</span>
                                @else
                                <span class="badge badge-dark">Hidden</span>
                                @endif
                            </td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a id="" class="btn btn-primary btn-sm" href="{{ route('products.edit',$item->id) }}"
                                        role="button">Cập Nhật</a>
                                    <form action="{{ route('products.destroy',$item->id) }}" method="POST" class="ml-2">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Do you want to delete this?')"
                                            class="btn btn-danger btn-sm">Xóa</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $collection->links() }}
            </div>
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

@endpush
