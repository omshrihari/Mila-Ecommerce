@extends('web.layouts.base')

@section('content')
    <!--breadcrumbs area start-->
    <div class="breadcrumbs_area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_content">
                        <ul>
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--Checkout page section-->
    <div class="checkout_page_bg">
        <div class="container">
            <div class="Checkout_section" id="accordion">
                <div class="checkout_form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="checkout_form_left">
                                <form action="{{ route('order') }}" method="POST">
                                    @csrf
                                    <h3>Billing Details</h3>
                                    <div class="row">
                                        <div class="col-lg-12 mb-20">
                                            <label>Your Name <span>*</span></label>
                                            <input type="text" name="name" required>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label for="country">country <span>*</span></label>
                                            <input type="text" name="country" value="India" readonly required>
                                        </div>

                                        <div class="col-12 mb-20">
                                            <label>Street address <span>*</span></label>
                                            <input name="street1" placeholder="House number and street name" type="text" required>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <input name="street2" placeholder="Apartment, suite, unit etc. (optional)"
                                                type="text">
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Town / City <span>*</span></label>
                                            <input name="city" type="text" required>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>State <span>*</span></label>
                                            <input name="state" type="text" required>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label>Pincode <span>*</span></label>
                                            <input name="pincode" type="text" required>
                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label>Phone<span>*</span></label>
                                            <input name="mobile" type="text" required>

                                        </div>
                                        <div class="col-lg-6 mb-20">
                                            <label> Email Address <span>*</span></label>
                                            <input name="email" type="text" required>

                                        </div>
                                        <div class="col-12">
                                            <div class="order-notes">
                                                <label for="order_note">Order Notes</label>
                                                <textarea id="order_note" name="order_notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="checkout_form_right">
                                <h3>Your order</h3>
                                <div class="order_table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($carts as $item)
                                                <tr>
                                                    <td> {{ $item['product_name'] }} <strong> ×
                                                            {{ $item['product_qty'] }}</strong></td>
                                                    <td> {{ number_format($item['product_price'] * $item['product_qty'], 2) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Cart Subtotal</th>
                                                <td>{{ number_format($cartTotal, 2) }}</td>
                                            </tr>
                                            <tr class="order_total">
                                                <th>Order Total</th>
                                                <td><strong>{{ number_format($cartTotal, 2) }}</strong></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment_method">
                                    <div class="order_button">
                                        <button type="submit">Proceed to PayPal</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Checkout page section end-->
@endsection
