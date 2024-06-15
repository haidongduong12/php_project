@include('layouts.header')
<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Checkout Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing
                    Address</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="row">
                    @if (!empty($user))
                        <div class="col-md-6 form-group">
                            <label>Full Name</label>
                            <input class="form-control" type="text" placeholder="John" value="{{ $user->fullname }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Phonenumber</label>
                            <input class="form-control" type="text" placeholder="Doe"
                                value=" {{ $user->phonenumber }}">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" value="{{ $user->address }}">
                        </div>
                    @else
                        <div class="col-md-6 form-group">
                            <label>Full Name</label>
                            <input class="form-control" type="text" placeholder="Your name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Phonenumber</label>
                            <input class="form-control" type="text" placeholder="Your phone">
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" placeholder="Your email">
                        </div>
                    @endif
                    {{-- <div class="col-md-6 form-group">
                        <label>Country</label>
                        <select class="custom-select">
                            <option selected>United States</option>
                            <option>Afghanistan</option>
                            <option>Albania</option>
                            <option>Algeria</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>City</label>
                        <input class="form-control" type="text" placeholder="New York">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>State</label>
                        <input class="form-control" type="text" placeholder="New York">
                    </div>
                    <div class="col-md-6 form-group">
                        <label>ZIP Code</label>
                        <input class="form-control" type="text" placeholder="123">
                    </div> --}}
                    <div class="col-md-12 form-group">
                        <div class="custom-control custom-checkbox">
                            {{-- <input type="checkbox" class="custom-control-input" id="newaccount"> --}}
                            <a href="{{ route('login') }}"><label class="custom-control-label" style="color: #6C757D"
                                    for="newaccount">Login here</label></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="shipto">
                            <label class="custom-control-label" for="shipto" data-toggle="collapse"
                                data-target="#shipping-address">Ship to different address</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse mb-5" id="shipping-address">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Shipping
                        Address</span></h5>
                <div class="bg-light p-30">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>FullName</label>
                            <input class="form-control" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Phonenumber</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" placeholder="+123 456 789">
                        </div>
                        {{-- <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select">
                                <option selected>United States</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="123">
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order
                    Total</span></h5>
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom">
                    <h6 class="mb-3">Products</h6>
                    @if (!empty($userCart))
                        @foreach ($userCart as $id => $details)
                            <div class="d-flex justify-content-between">
                                <p>{{ $details['name'] }}</p>
                                {{-- <p>{{ $details['quantity'] }}</p> --}}
                                <p>{{ $details['price'] }}</p>
                                <input type="hidden" name="product_ids[]" value="{{ $id }}">
                            </div>
                        @endforeach
                    @else
                        <div class="d-flex justify-content-between">
                            <p>Your cart is empty.</p>
                        </div>
                    @endif
                </div>

                <div class="border-bottom pt-3 pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        @if (!empty($userCart))
                            <h6>{{ number_format($totalPrice, 0, ',', '.') }} VND</h6>
                        @endif
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">30.000 VND</h6>
                    </div>
                </div>
                <div class="pt-2">
                    <div class="d-flex justify-content-between mt-2">
                        <h5>Total</h5>
                        @if (!empty($userCart))
                            <h6>{{ number_format($totalPrice + 30000, 0, ',', '.') }} VND</h6>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <h5 class="section-title position-relative text-uppercase mb-3"><span
                        class="bg-secondary pr-3">Payment</span></h5>
                <div class="bg-light p-30">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="paypal">
                            <label class="custom-control-label" for="paypal">Paypal</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck"
                                checked>
                            <label class="custom-control-label" for="directcheck">COD</label>
                        </div>
                    </div>
                    <div class="form-group mb-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                        </div>
                    </div>
                    @if (!empty($user) && !empty($userCart))
                        <form action="{{ route('order.store') }}" method="POST">
                            @csrf
                            <button type="submit"
                                class="btn btn-block btn-primary font-weight-bold py-3">Checkout</button>
                        </form>
                    @else
                        <a href="{{ route('trangchu') }}" class="btn btn-block btn-primary font-weight-bold py-3">
                            Shop Now</a>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout End -->
@include('layouts.footer')
