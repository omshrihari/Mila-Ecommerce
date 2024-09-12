<div class="cart_page_bg">
    <div class="container">
        <div class="shopping_cart_area">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="cart_page">
                                <table>
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($carts)
                                            @foreach ($carts as $key => $item)
                                                <tr>
                                                    <td class="product_remove"><a wire:click="removeItem('{{ $key }}')"><i class="fa fa-trash-o"></i></a></td>
                                                    <td class="product_thumb"><a href="#"><img
                                                                src="{{ asset('web/uploads/'.$item['product_image']) }}"
                                                                alt=""></a></td>
                                                    <td class="product_name"><a href="#">{{ $item['product_name'] }}</a>
                                                    </td>
                                                    <td class="product-price">{{ $item['product_price'] }}</td>
                                                    <td class="product_quantity"><label></label> <input wire:change="updateQuantity('{{ $key }}', $event.target.value)" min="1" max="100" value="{{ $item['product_qty'] }}" type="number">
                                                    </td>
                                                    <td class="product_total">{{ number_format($item['product_qty'] * $item['product_price'],2) }}</td>
                                                </tr>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button type="submit">update cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area start-->
                <div class="coupon_area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="coupon_code right">
                                <h3>Cart Totals</h3>
                                <div class="coupon_inner">
                                    <div class="cart_subtotal">
                                        <p>Subtotal</p>
                                        <p class="cart_amount">{{ number_format($totalPrice,2) }}</p>
                                    </div>

                                    <div class="cart_subtotal">
                                        <p>Total</p>
                                        <p class="cart_amount">{{ number_format($totalPrice,2) }}</p>
                                    </div>
                                    <div class="checkout_btn">
                                        <a href="{{ route('checkout') }}" wire:navigate>Proceed to Checkout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--coupon code area end-->
            </form>
        </div>
    </div>
</div>
