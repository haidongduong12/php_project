@extends('dashboard.brand.brands')
@section('brands')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mt-5">Brands</h5>
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
                <form action="{{ route('brands.update', $brand->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEmail3" name="brand_name"
                                value="{{ $brand->name }} ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Descriotion</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" name="brand_description"
                                value="{{ $brand->description }}">
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-3">Image</div>
                        <div class="col-sm-9">
                            <div class="form-check">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="brand_image">
                                <label class="custom-file-label" for="inputGroupFile01">Choose Image</label>
                            </div>
                        </div>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn  btn-primary">Edit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
