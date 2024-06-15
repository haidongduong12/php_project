@extends('dashboard.order.orders')
@section('orders')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mt-5">Edit Products</h5>
                <hr>

                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label for="category_id" class="col-sm-3 col-form-label">Status</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="status" name="status" value="{{ $order->status }}">
                                <option value="">Select a status</option>
                                <option value="Pending" {{ $order->status === 'Pending' ? 'selected' : '' }}>Pending
                                </option>
                                <option value="Processing" {{ $order->status === 'Processing' ? 'selected' : '' }}>
                                    Processing
                                </option>
                                <option value="Completed" {{ $order->status === 'Completed' ? 'selected' : '' }}>
                                    Completed</option>
                            </select>
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
