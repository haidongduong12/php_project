@extends('dashboard.order.orders')

@section('orders')
    <div class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h5>Hover Table</h5>
                <span class="d-block m-t-5">use class <code>table-hover</code> inside table element</span>
            </div>
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Img</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Days</th>
                            </tr>
                        </thead>
                        @if (isset($orderItems) && count($orderItems) > 0)
                            <? $i = 1; ?>
                            @foreach ($orderItems as $items)
                                <tbody>
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td><img style="max-width: 200px;"
                                                src="{{ Storage::url('images/' . $items->product->product_image) }}">
                                        </td>
                                        <td>{{ $items->product->product_name }}</td>
                                        <td>{{ number_format($items->price, 0, ',', '.') }} VND</td>
                                        <td>{{ $items->quantity }}</td>
                                        <td>{{ $items->formatted_created_at }}</td>


                                    </tr>

                                </tbody>
                            @endforeach
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
