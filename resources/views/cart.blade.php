@include('layouts.header')




<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
                <a class="breadcrumb-item text-dark" href="#">Home</a>
                <a class="breadcrumb-item text-dark" href="#">Shop</a>
                <span class="breadcrumb-item active">Shopping Cart</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->


<!-- Cart Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-light table-borderless table-hover text-center mb-0">
                <thead class="thead-dark">
                    <tr>
                        <th>Img</th>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @if (!empty($userCart))
                        @foreach ($userCart as $id => $details)
                            <tr id="cart-item-{{ $id }}">
                                <td><img src="{{ Storage::url('images/' . $details['image']) }}" alt=""
                                        style="width: 50px;"></td>
                                <td class="align-middle">{{ $details['name'] }}</td>
                                <td class="align-middle">{{ $details['price'] }}</td>
                                <td class="align-middle">

                                    <form action="{{ route('cart.update') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <input type="number" name="quantity" value="{{ $details['quantity'] }}"
                                            style="width:50px;" min="1">
                                        <button type="submit" class="btn btn-sm btn-primary"><i
                                                class="fa-solid fa-pen"></i></button>
                                    </form>
                                </td>
                                {{-- <td class="align-middle">
                                    <div class="input-group quantity mx-auto" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus"
                                                data-id="{{ $id }}">
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text"
                                            class="form-control form-control-sm bg-secondary border-0 text-center quantity-input"
                                            data-id="{{ $id }}" value="{{ $details['quantity'] }}"
                                            name="quantity">

                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus"
                                                data-id="{{ $id }}">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td> --}}
                                <td class="align-middle total-price" id="total-price-{{ $id }}">
                                    {{ number_format($details['price'] * $details['quantity'], 0, ',', '.') }} VND</td>
                                <td class="align-middle">
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $id }}">
                                        <button onclick="return confirm('Are you sure ?')" type="submit"
                                            class="btn btn-sm btn-danger">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">
                                <p>Your cart is empty.</p>
                            </td>
                        </tr>
                    @endif
                </tbody>

            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-30" action="">
                <div class="input-group">
                    <input type="text" class="form-control border-0 p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Cart
                    Summary</span></h5>
            <div class="bg-light p-30 mb-5">
                <div class="border-bottom pb-2">
                    <div class="d-flex justify-content-between mb-3">
                        <h6>Subtotal</h6>
                        <div class="cart-summary">
                            <h6>{{ number_format($totalPrice, 0, ',', '.') }} VND</h6>
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <h6 class="font-weight-medium">Shipping</h6>
                    <h6 class="font-weight-medium">30.000VND</h6>
                </div>

            </div>
            <div class="pt-2">
                <div class="d-flex justify-content-between mt-2">
                    <h5>Total</h5>
                    <h6 class="font-weight-medium">{{ number_format($totalPrice + 30000, 0, ',', '.') }} VND</h6>

                </div>

                <a href="{{ route('checkout') }}" class="btn btn-block btn-primary font-weight-bold my-3 py-3">Proceed
                    To
                    Checkout</a>

            </div>

        </div>
    </div>
</div>
</div>
<!-- Cart End -->

@include('layouts.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Function to update the total price
        function updateTotal(id, price, quantity) {
            var totalPrice = price * quantity;
            $('#total-price-' + id).text(formatCurrency(totalPrice));
        }

        // Function to format currency
        function formatCurrency(value) {
            return new Intl.NumberFormat("vi-VN", {
                style: "currency",
                currency: "VND",
            }).format(value);
        }

        // Increase quantity
        $('.btn-plus').click(function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            var input = $('.quantity-input[data-id="' + id + '"]');
            var quantity = parseInt(input.val());
            var price = parseFloat($('#cart-item-' + id + ' .align-middle:nth-child(3)').text().replace(
                /[^0-9.-]+/g, ""));
            input.val(quantity);
            updateTotal(id, price, quantity);
        });

        // Decrease quantity
        $('.btn-minus').click(function(event) {
            event.preventDefault();
            var id = $(this).data('id');
            var input = $('.quantity-input[data-id="' + id + '"]');
            var quantity = parseInt(input.val());
            if (quantity < 1) quantity = 1;
            var price = parseFloat($('#cart-item-' + id + ' .align-middle:nth-child(3)').text().replace(
                /[^0-9.-]+/g, ""));
            input.val(quantity);
            updateTotal(id, price, quantity);
        });

        // Update total on manual input
        $('.quantity-input').change(function() {
            var id = $(this).data('id');
            var quantity = parseInt($(this).val());
            if (quantity < 1 || isNaN(quantity)) quantity = 1;
            var price = parseFloat($('#cart-item-' + id + ' .align-middle:nth-child(3)').text().replace(
                /[^0-9.-]+/g, ""));
            $(this).val(quantity);
            updateTotal(id, price, quantity);
        });


    });
</script>
