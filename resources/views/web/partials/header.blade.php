<style>
    .mega_menu {
        height: 80vh;
        overflow-y: scroll;
    }

    .mega_menu_inner {
        display: flex;
        flex-wrap: wrap;
    }

    .mega_menu_inner>li {
        width: calc(100% / 6);
        border-bottom: 1px solid #a4a4a4;
        padding: 10px 0;
        margin: 0 10px;
    }

    .banner_thumb img {
        border-radius: 10px;
    }

    .product_image {
        width: 100%;
        height: 225px;
        object-fit: contain;
    }

    .product_image2 {
        width: 100%;
        height: 350px;
        object-fit: contain;
    }

    .product_image3 {
        width: 100%;
        height: 100px;
        object-fit: contain;
    }

    .product_image4 {
        width: 100%;
        height: 500px;
        object-fit: contain;
    }

    .product_image5 {
        width: 100%;
        height: 200px;
        object-fit: contain;
    }

    @media (max-width: 991px) {
        .mega_menu_inner>li {
            width: calc(100% / 4);
        }
    }
</style>
    <!--offcanvas menu area start-->
    <div class="off_canvars_overlay">

    </div>
    <div class="offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="call_support">
                            <p><i class="icon-phone-call" aria-hidden="true"></i> <span>Call us: <a
                                        href="tel:0123456789">0123456789</a></span></p>

                        </div>
                        <div class="header_account">
                            <ul>
                                <li class="language"><a href="#"><img
                                            src="{{ asset('web/assets/img/logo/language.png') }}" alt="">
                                        english <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_language">
                                        <li><a href="#">English</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Japanese</a></li>
                                    </ul>
                                </li>
                                <li class="currency"><a href="#">USD <i class="ion-chevron-down"></i></a>
                                    <ul class="dropdown_currency">
                                        <li><a href="#">EUR – Euro</a></li>
                                        <li><a href="#">GBP – British Pound</a></li>
                                        <li><a href="#">INR – India Rupee</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="header_top_links">
                            <ul>
                                <li><a href="login.html">Register</a></li>
                                <li><a href="login.html">login</a></li>
                                <li><a href="cart.html">Shopping Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                            </ul>
                        </div>
                        <div class="search_container">
                            <form action="#">
                                <div class="hover_category">
                                    <select class="select_option" name="select" id="categori1">
                                        <option selected value="1">All Categories</option>
                                        <option value="2">Accessories</option>
                                        <option value="3">Accessories & More</option>
                                        <option value="4">Butters & Eggs</option>
                                        <option value="5">Camera & Video </option>
                                        <option value="6">Mornitors</option>
                                        <option value="7">Tablets</option>
                                        <option value="8">Laptops</option>
                                        <option value="9">Handbags</option>
                                        <option value="10">Headphone & Speaker</option>
                                        <option value="11">Herbs & botanicals</option>
                                        <option value="12">Vegetables</option>
                                        <option value="13">Shop</option>
                                        <option value="14">Laptops & Desktops</option>
                                        <option value="15">Watchs</option>
                                        <option value="16">Electronic</option>
                                    </select>
                                </div>
                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="#">Home</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop Layouts</a>
                                            <ul class="sub-menu">
                                                <li><a href="shop.html">shop</a></li>
                                                <li><a href="shop-fullwidth.html">Full Width</a></li>
                                                <li><a href="shop-fullwidth-list.html">Full Width list</a></li>
                                                <li><a href="shop-right-sidebar.html">Right Sidebar </a></li>
                                                <li><a href="shop-right-sidebar-list.html"> Right Sidebar list</a></li>
                                                <li><a href="shop-list.html">List View</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">other Pages</a>
                                            <ul class="sub-menu">
                                                <li><a href="cart.html">cart</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="checkout.html">Checkout</a></li>
                                                <li><a href="my-account.html">my account</a></li>
                                                <li><a href="404.html">Error 404</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Product Types</a>
                                            <ul class="sub-menu">
                                                <li><a href="product-details.html">product details</a></li>
                                                <li><a href="product-sidebar.html">product sidebar</a></li>
                                                <li><a href="product-grouped.html">product grouped</a></li>
                                                <li><a href="variable-product.html">product variable</a></li>
                                                <li><a href="product-countdown.html">product countdown</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">blog</a></li>
                                        <li><a href="blog-details.html">blog details</a></li>
                                        <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                        <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                        <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                    </ul>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">pages </a>
                                    <ul class="sub-menu">
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="faq.html">Frequently Questions</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a href="login.html">login</a></li>
                                        <li><a href="404.html">Error 404</a></li>
                                        <li><a href="compare.html">compare</a></li>
                                        <li><a href="privacy-policy.html">privacy policy</a></li>
                                        <li><a href="coming-soon.html">coming soon</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="my-account.html">my account</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.html">About Us</a>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="contact.html"> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--offcanvas menu area end-->

    <header>
        <div class="main_header main_h_four color_three">
            <!--header top start-->
            <div class="header_top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12">
                            <div class="header_top_links text-right">
                                <ul>
                                    <li><a href="{{ route('cart') }}" wire:navigate>Shopping Cart</a></li>
                                    <li><a href="{{ route('checkout') }}" wire:navigate>Checkout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header top start-->

            <!--header middel start-->
            <div class="header_middle">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-4 col-sm-4 col-4">
                            <div class="logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('web/assets/img/logo/logo-milachin.png') }}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-10 col-md-6 col-sm-6 col-6">
                            <div class="header_right_box">
                                <div class="search_container">
                                    <form action="{{ route('search') }}" method="GET">
                                        <div class="search_box">
                                            <input placeholder="Search product..." type="text" name="query">
                                            <button type="submit">Search</button>
                                        </div>
                                    </form>
                                </div>
                                @livewire('header-cart')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header middel end-->

            <!--header bottom satrt-->
            <div class="header_bottom h_bottom_four sticky-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-10">
                            <div class="main_menu menu_four menu_position text-left">
                                <nav>
                                    <ul>
                                        @foreach ($sharedData['categories'] as $category)
                                            @if ($category->subcategories->count() > 0)
                                                <li class="mega_items"><a href="javascript:;">{{ $category->title }}<i
                                                            class="fa fa-angle-down"></i></a>
                                                    <div class="mega_menu">
                                                        <ul class="mega_menu_inner">
                                                            @foreach($category->subcategories as $subcategory)
                                                            <li><a href="{{ route('categorypage', $subcategory->slug) }}" wire:navigate>{{ $subcategory->title }}</a>
                                                                <ul>
                                                                    @foreach ($subcategory->subsubcategories as $sscategory)    
                                                                    <li><a href="{{ route('subcategorypage', $sscategory->slug) }}" wire:navigate>{{ $sscategory->title }}</a>
                                                                    </li>
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </li>
                                            @else
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:;">{{ $category->title }}</a>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--header bottom end-->
        </div>
    </header>
    <!--header area end-->
