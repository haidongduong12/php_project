@extends('layouts.index')

@section('content')
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Search</span>
        </h2>
    </div>
    @if ($productSearch->count() > 0)
        <div class="row px-xl-5">
            @foreach ($productSearch as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                    <div class="product-item bg-light mb-4">
                        <div class="product-img position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ $product->product_image }}" alt="anh">
                            <div class="product-action">
                                <a href="{{ route('productDetails', ['id' => $product->id]) }}>{{ $product->product_name }}"
                                    class="btn btn-outline-dark btn-square" href=""><i class="far fa-eye"></i>
                                    </i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i
                                        class="fa fa-shopping-cart"></i></a>
                                <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>

                                <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                            </div>
                        </div>
                        <div class="text-center py-4">
                            <a class="h6 text-decoration-none text-truncate"
                                href="{{ route('productDetails', ['id' => $product->id]) }}">{{ $product->product_name }}</a>
                            <div class="d-flex align-items-center justify-content-center mt-2">
                                <h5>${{ $product->product_price + 200000 }}</h5>
                                <h6 class="text-muted ml-2"><del>${{ $product->product_price }}</del></h6>
                            </div>
                            <div class="d-flex align-items-center justify-content-center mb-1">
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small class="fa fa-star text-primary mr-1"></small>
                                <small>({{ $product['rating'] }})</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="alert alert-warning alert-dismissible fade show w-25 mx-auto" role="alert">
            No products found!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection
