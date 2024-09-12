<article class="single_product">
    <figure>
        <div class="product_thumb">
            <a class="primary_img" href="{{ route('productdetail',$product->slug) }}" wire:navigate><img
                    src="{{ asset('web/uploads/' . $product->image) }}" alt=""></a>
            <a class="secondary_img" href="{{ route('productdetail',$product->slug) }}" wire:navigate><img
                    src="{{ asset('web/uploads/' . $product->image) }}" alt=""></a>
            <div class="label_product">
                <span class="label_sale">-45%</span>
            </div>
        </div>
        <div class="product_content">
            <div class="product_content_inner">
                <h4 class="product_name"><a href="{{ route('productdetail',$product->slug) }}" wire:navigate>{{ $product->name }}</a>
                </h4>
                <div class="price_box">
                    <span class="old_price">₹{{ $product->mrp }}</span>
                    <span class="current_price">₹{{ $product->price }}</span>
                </div>
            </div>
            <div class="action_links">
                <ul>
                    <li wire:click="addToCart('{{ $product->id }}')" class="add_to_cart"><a
                            href="javascript:;" title="Add to cart">Add to cart</a></li>
                    <li class="add_to_cart"><a href="javascript:;" title="Add to cart">Buy Now</a></li>
                </ul>
            </div>
        </div>
    </figure>
</article>