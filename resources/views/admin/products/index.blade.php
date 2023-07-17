@extends('layouts.admin')
@section('title')
    Products
@endsection
@section('content')

    <div class="col-12 col-md-12 col-lg-12">

        <div class="card">

            @if (session('success'))
                <div class="alert alert-success alert-dismissible show fade">
                    <div class="alert-body">
                        <button class="close" data-dismiss="alert">
                            <span>×</span>
                        </button>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="card-header">
                <h4>Product table</h4>
                <div class="card-header-form">
                        <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Create</a>
                </div>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody><tr>
                            <th>#</th>
                            <th>Name(UZ)</th>
                            <th>namessoft toys (UZ)</th>
                            <th>Categories</th>
                            <th>Slug</th>
                            <th>Images</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{$loop->iteration  }}</td>
                                <td>{{ $product->name_uz }}</td>
                                <td>{{ $product->namesoftoys_uz }}</td>
                                <td>{{ $product->category->name_uz ?? ''}}</td>
                                <td>{{ $product->slug }}</td>
{{--                                <td>--}}
{{--                                    @php($product['images'] = json_decode($product->images))--}}
{{--                                    <img alt="image" src="/site/images/products/{{$product->images[1]}}" width="35">--}}
{{--                                </td>--}}
                                <td>
                                    @if (!empty($product['images']) && count($product['images']) > 0)
                                        @php($firstImage = $product['images'][0])
                                        <img alt="image" src="{{ asset('site/images/products/' . $firstImage) }}" width="35">
                                    @endif
                                </td>
                                <td >
                                    <form style="display: inline" action="{{ route('admin.products.destroy',$product->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button href="#" class="btn btn-danger" onclick="return confirm('Ochirishni xohlisizmi?')" type="submit">Delete</button>
                                    </form>
                                    <a href="{{ route('admin.products.edit',$product->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('admin.products.show',$product->id) }}" class="btn btn-warning">Show</a>
                                </td>
                            </tr>
                        @endforeach


                        </tbody></table>
                </div>
            </div>
            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    {{--            {{ $categories->links() }}--}}

                    {{-- <ul class="pagination mb-0">
                      <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                      </li>
                    </ul> --}}
                </nav>
            </div>
        </div>
    </div>
@endsection

