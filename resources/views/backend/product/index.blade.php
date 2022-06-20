@extends('backend.master')
@section('title')
    Product
@endsection
@section('content')
    <div class="row" id="products">
        <h3>Category</h3>
        @if (session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('warning'))
            <div class="alert alert-warning" role="alert">
                {{ session('warning') }}
            </div>
        @endif
        @if (session('danger'))
            <div class="alert alert-danger" role="alert">
                {{ session('danger') }}
            </div>
        @endif
        <div class="col-12">

            <div>
                <a href="{{ route('product.create') }}" id="add_product_btn" class="btn btn-primary btn-icon"
                    style="float: right;">Add Product</a>
            </div>
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Thumbnail</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>
                                <img src="{{ asset('category_images/' . $item->thumbnail) }}" width="40px"
                                    alt="">
                            </td>
                            <td>
                                <a href="{{ route('product.edit', $item->id) }}" class="btn-sm btn-success ">Edit </a>
                                {{-- &nbsp; --}}
                                <br>
                                <form action="{{ route('product.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn-sm btn-danger" style="">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">
                                No data
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="text-left mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
@endsection
@section('script_js')
    <script></script>
@endsection
@section('css')
@endsection
