<div class="product_details">
    <div class="row">
        <div class="col-lg-5 col-md-6">
            <div class="product-details-tab">
                <div id="img-1" class="zoomWrapper single-zoom">
                    <a href="#">
                        <img id="zoom1" src="{{ asset('web/uploads/' . $product->image) }}"
                            data-zoom-image="{{ asset('web/uploads/' . $product->image) }}" alt="big-1">
                    </a>
                </div>
                <div class="single-zoom-thumb" wire:ignore>
                    <ul class="s-tab-zoom owl-carousel single-product-active" id="gallery_01">
                        @php
                            $images = explode('||', $product->images);
                        @endphp
                        @if (count($images) > 0)
                            <li>
                                <a href="#" class="elevatezoom-gallery active" data-update=""
                                    data-image="{{ asset('web/uploads/' . $product->image) }}"
                                    data-zoom-image="{{ asset('web/uploads/' . $product->image) }}">
                                    <img src="{{ asset('web/uploads/' . $product->image) }}" alt="zo-th-1" />
                                </a>
                            </li>
                            @foreach ($images as $img)
                                <li>
                                    <a href="#" class="elevatezoom-gallery active" data-update=""
                                        data-image="{{ asset('web/uploads/' . $img) }}"
                                        data-zoom-image="{{ asset('web/uploads/' . $img) }}">
                                        <img src="{{ asset('web/uploads/' . $img) }}" alt="zo-th-1" />
                                    </a>
                                </li>
                            @endforeach
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-7 col-md-6">
            <div class="product_d_right">
                <form wire:submit="save">
                    <h3><a href="#">{{ $product->name }}</a> </h3>
                    <div class="price_box">
                        <span class="old_price">₹{{ number_format($product->mrp, 2) }}</span>
                        <span class="current_price">₹{{ number_format($product->price, 2) }}</span>
                    </div>
                    <span class="bg-success px-2 rounded text-light">{{ $product->stock_status }}</span>
                    <div class="product_desc">
                        <p>{!! $product->intro !!}</p>
                    </div>
                    {{-- <div class="product_variant color">
                        <h3>Available Options</h3>
                        <label>color</label>
                        <ul>
                            <li class="color1"><a href="#"></a></li>
                            <li class="color2"><a href="#"></a></li>
                            <li class="color3"><a href="#"></a></li>
                            <li class="color4"><a href="#"></a></li>
                        </ul>
                    </div> --}}
                    <div class="product_variant quantity">
                        <label>quantity</label>
                        <input min="1" max="100" name="qty" value="{{ $qty }}" type="number" wire:model.live="qty">
                        <button class="button" type="submit">add to cart</button>
                    </div>
                    @error('qty')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </form>
            </div>
        </div>
    </div>
</div>
