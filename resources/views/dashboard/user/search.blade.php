@extends('dashboard.user.users')

@section('search')

    @if ($userSearch->count() > 0)
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Search Users</h5>
                    <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Price</th>
                                    <th>Role</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            @if (isset($userSearch) && count($userSearch) > 0)
                                <?php $i = 1; ?>
                                @foreach ($userSearch as $user)
                                    <tbody>
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->fullname }}</td>
                                            <td>{{ $user->address }}</td>
                                            <td>{{ $user->phonenumber }}</td>
                                            <td>{{ $user->role }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><i
                                                        class="fa-solid fa-pen" style="color:white;"></i></a>
                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Are you sure you want to delete this product?');">
                                                        <i class="fa-regular fa-trash-can" style="color:white"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                    </tbody>
                                @endforeach
                            @endif
                        </table>
                    </div>
                    {{-- <div class="pagination justify-content-center">
                        @if ($products->onFirstPage())
                            <button class="btn btn-secondary disabled" aria-disabled="true">&laquo;</button>
                        @else
                            <a href="{{ $products->previousPageUrl() }}" class="btn btn-secondary"
                                rel="prev">&laquo;</a>
                        @endif

                        @for ($i = 1; $i <= $products->lastPage(); $i++)
                            <a href="{{ $products->url($i) }}"
                                @if ($products->currentPage() == $i) class="btn btn-primary" @else class="btn btn-none" @endif>{{ $i }}</a>
                        @endfor

                        @if ($products->hasMorePages())
                            <a href="{{ $products->nextPageUrl() }}" class="btn btn-secondary" rel="next">&raquo;</a>
                        @else
                            <button class="btn btn-secondary disabled" aria-disabled="true">&raquo;</button>
                        @endif
                    </div> --}}
                </div>
            </div>
        </div>
        {{-- <div class="row px-xl-5">
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
        </div> --}}
    @else
        <div class="alert alert-warning alert-dismissible fade show w-25 mx-auto" role="alert">
            No users found!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
@endsection
