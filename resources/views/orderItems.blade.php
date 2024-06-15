@extends('profileIndex')
@section('content')
    <div class="col-md-6">
        <div class="tab-content dashboard-content">
            <div class="tab-pane fade" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Hello Rosie! </h5>
                    </div>
                    <div class="card-body">
                        <p>From your account dashboard. you can easily check &amp; view your <a href="#">recent
                                orders</a>, manage your <a href="#">shipping and billing addresses</a> and <a
                                href="#">edit your password and account details.</a></p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade active show" id="orders" role="tabpanel" aria-labelledby="orders-tab">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Orders Items</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Date</th>
                                        <th>Qty</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if ($orderItems->isNotEmpty()): Kiểm tra xem collection $orderItems có rỗng không.  --}}
                                    @if ($orderItems->isNotEmpty())
                                        @foreach ($orderItems as $items)
                                            <tr>
                                                <td>{{ $items->product->product_name }}</td>
                                                <td><img style="max-width:100px;"
                                                        src="{{ Storage::url('images/' . $items->product->product_image) }}">
                                                </td>
                                                <td>{{ $items->quantity }}</td>
                                                <td>{{ number_format($items->price, 0, ',', '.') }} VND</td>
                                                <td><a href="#" class="btn-small d-block">Edit</a></td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p>No items here</p>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
