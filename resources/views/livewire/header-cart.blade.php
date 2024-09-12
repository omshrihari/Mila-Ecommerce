<div>
    <div class="header_configure_area">
        <div class="mini_cart_wrapper">
            <a href="javascript:void(0)">
                <i class="icon-shopping-bag2"></i>
                <span class="cart_price">₹{{ $cartTotal }} <i class="ion-ios-arrow-down"></i></span>
                <span class="cart_count">{{ $cartItemCount }}</span>
            </a>
            <!--mini cart-->
            <div class="mini_cart">
                <div class="mini_cart_inner">
                    <div class="cart_close">
                        <div class="cart_text">
                            <h3>cart</h3>
                        </div>
                        <div class="mini_cart_close">
                            <a href="javascript:void(0)"><i class="icon-x"></i></a>
                        </div>
                    </div>
                    @if ($carts)
                        @foreach ($carts as $key => $c)
                            <div class="cart_item">
                                <div class="cart_img">
                                    <a href="#"><img src="{{ asset('web/uploads/' . $c['product_image']) }}"
                                            alt=""></a>
                                </div>
                                <div class="cart_info">
                                    <a href="#">{{ $c['product_name'] }}</a>
                                    <p>Qty: {{ $c['product_qty'] }} X <span> ₹{{ $c['product_price'] }} </span></p>
                                </div>
                                <div class="cart_remove">
                                    <a wire:click="removeCartItem('{{ $key }}')" href=""><i class="ion-android-close"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="mini_cart_table">
                        <div class="cart_total">
                            <span>Sub total:</span>
                            <span class="price">₹{{ $cartTotal }}</span>
                        </div>
                        <div class="cart_total mt-10">
                            <span>total:</span>
                            <span class="price">₹{{ $cartTotal }}</span>
                        </div>
                    </div>
                </div>
                <div class="mini_cart_footer">
                    <div class="cart_button">
                        <a href="{{ route('cart') }}" wire:navigate>View cart</a>
                    </div>
                    <div class="cart_button">
                        <a class="active" href="{{ route('checkout') }}" wire:navigate>Checkout</a>
                    </div>

                </div>
            </div>
            <!--mini cart end-->
        </div>
    </div>
</div>
