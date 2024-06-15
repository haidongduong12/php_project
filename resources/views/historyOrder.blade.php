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
                        <h5 class="mb-0">Your Orders</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if ($historyOrder->isNotEmpty()): Kiểm tra xem collection $historyOrder có rỗng không.  --}}
                                    @if ($historyOrder->isNotEmpty())
                                        @foreach ($historyOrder as $items)
                                            <tr>
                                                <td>#{{ $items->id }}</td>
                                                <td>{{ $items->formatted_created_at }}</td>
                                                <td>{{ $items->status }}</td>
                                                <td>{{ number_format($items->total_price, 0, ',', '.') }} VND</td>
                                                <td>
                                                    <a href="{{ route('profile.showItemsOrder', ['id' => $items->id]) }}"
                                                        class="btn-small d-block">views</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p>No orders here</p>
                                    @endif


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="track-orders" role="tabpanel" aria-labelledby="track-orders-tab">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Orders tracking</h5>
                    </div>
                    <div class="card-body contact-from-area">
                        <p>To track your order please enter your OrderID in the box below and press "Track" button. This was
                            given to you on your receipt and in the confirmation email you should have received.</p>
                        <div class="row">
                            <div class="col-lg-8">
                                <form class="contact-form-style mt-30 mb-50" action="#" method="post">
                                    <div class="input-style mb-20">
                                        <label>Order ID</label>
                                        <input name="order-id" placeholder="Found in your order confirmation email"
                                            type="text" class="square">
                                    </div>
                                    <div class="input-style mb-20">
                                        <label>Billing email</label>
                                        <input name="billing-email" placeholder="Email you used during checkout"
                                            type="email" class="square">
                                    </div>
                                    <button class="submit submit-auto-width" type="submit">Track</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="address" role="tabpanel" aria-labelledby="address-tab">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card mb-3 mb-lg-0">
                            <div class="card-header">
                                <h5 class="mb-0">Billing Address</h5>
                            </div>
                            <div class="card-body">
                                <address>000 Interstate<br> 00 Business Spur,<br> Sault Ste. <br>Marie, MI 00000</address>
                                <p>New York</p>
                                <a href="#" class="btn-small">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="mb-0">Shipping Address</h5>
                            </div>
                            <div class="card-body">
                                <address>4299 Express Lane<br>
                                    Sarasota, <br>FL 00000 USA <br>Phone: 1.000.000.0000</address>
                                <p>Sarasota</p>
                                <a href="#" class="btn-small">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="account-detail" role="tabpanel" aria-labelledby="account-detail-tab">
                <div class="card">
                    <div class="card-header">
                        <h5>Account Details</h5>
                    </div>
                    <div class="card-body">
                        <p>Already have an account? <a href="login.html">Log in instead!</a></p>
                        <form method="post" name="enq">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>First Name <span class="required">*</span></label>
                                    <input required="" class="form-control square" name="name" type="text">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input required="" class="form-control square" name="phone">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Display Name <span class="required">*</span></label>
                                    <input required="" class="form-control square" name="dname" type="text">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input required="" class="form-control square" name="email" type="email">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Current Password <span class="required">*</span></label>
                                    <input required="" class="form-control square" name="password" type="password">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>New Password <span class="required">*</span></label>
                                    <input required="" class="form-control square" name="npassword" type="password">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Confirm Password <span class="required">*</span></label>
                                    <input required="" class="form-control square" name="cpassword" type="password">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-fill-out submit" name="submit"
                                        value="Submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
