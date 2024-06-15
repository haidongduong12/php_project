@extends('dashboard.product.products')
@section('content')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mt-5">Products</h5>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="product_name"
                                placeholder="Name ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Price</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" name="product_price"
                                placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Quantity</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" name="product_quantity"
                                placeholder="Price">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" name="product_description"
                                placeholder="Price">
                        </div>
                    </div>
                    {{-- <fieldset class="form-group">
                    <div class="row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Radios</label>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios"
                                    id="gridRadios1" value="option1" checked="">
                                <label class="form-check-label" for="gridRadios1">First radio</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios"
                                    id="gridRadios2" value="option2">
                                <label class="form-check-label" for="gridRadios2">Second radio</label>
                            </div>
                            <div class="form-check disabled">
                                <input class="form-check-input" type="radio" name="gridRadios"
                                    id="gridRadios3" value="option3" disabled="">
                                <label class="form-check-label" for="gridRadios3">Third disabled
                                    radio</label>
                            </div>
                        </div>
                    </div>
                </fieldset> --}}

                    <div class="form-group row">
                        <div class="col-sm-3">Image</div>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="product_image">
                                <label class="custom-file-label" for="inputGroupFile01">Choose
                                    file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="category_id" class="col-sm-3 col-form-label">Category</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="category_id" name="category_id">
                                <option value="">Select a category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn  btn-primary">Add</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
