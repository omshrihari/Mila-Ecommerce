    <!--footer area start-->
    <footer class="footer_widgets color_three">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="widgets_container">
                            <h3>{{ $sharedData['web']->app_name }}</h3>
                            <div class="footer_contact">
                                <div class="footer_contact_inner">
                                    <div class="contact_icone">
                                        <img src="{{ asset('web/assets/img/icon/icon-phone2.png') }}" alt="">
                                    </div>
                                    <div class="contact_text">
                                        <p>Hotline Free 24x7: <br> <strong><a
                                                    href="tel:91{{ $sharedData['web']->mobile1 }}">+91
                                                    {{ $sharedData['web']->mobile1 }}</a><br><a
                                                    href="tel:91{{ $sharedData['web']->mobile2 }}"> +91
                                                    {{ $sharedData['web']->mobile2 }}</a> </strong></p>
                                    </div>
                                </div>
                                <p><b>Email ID:</b> <a
                                        href="mailto:{{ $sharedData['web']->email1 }}">{{ $sharedData['web']->email1 }}</a>
                                </p>
                                <p><b>Address:</b> {{ $sharedData['web']->address1 }}</p>
                                <p><b>Mfg:</b> {{ $sharedData['web']->address2 }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="footer_col_container">
                            <div class="widgets_container widget_menu">
                                <h3>Other Pages</h3>
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="my-account.html">About Us</a></li>
                                        <li><a href="{{ route('contact') }}" wire:navigate>Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widgets_container widget_menu">
                                <h3>Information</h3>
                                <div class="footer_menu">
                                    <ul>
                                        @foreach ($sharedData['pages'] as $page)
                                            <li><a href="{{ route('page', $page->slug) }}"
                                                    wire:navigate>{{ $page->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="widgets_container widget_menu" style="width:60%">
                                <h3>Locate Us</h3>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14009.08927405215!2d77.1615164!3d28.6215994!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d030e4d9b4e0d%3A0xec106eb1a6c88f5c!2sMilachin%20automotive%20store!5e0!3m2!1sen!2sin!4v1688113975689!5m2!1sen!2sin"
                                    width="100%" height="250px" style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="copyright_area">
                            <p>&copy; {{ date('Y') }} <a href="{{ route('home') }}"
                                    class="text-uppercase">{{ $sharedData['web']->app_name }}</a>. Managed & Developed
                                by <a target="_blank" href="https://webkartindia.com/">Webkart Digital Pvt Ltd</a></p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="footer_payment text-right">
                            <img src="{{ asset('web/assets/img/icon/payment.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer area end-->



    <!-- modal area start-->
    <div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal_body">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-12">
                                <div class="modal_tab">
                                    <div class="tab-content product-details-large">
                                        <div class="tab-pane fade show active" id="tab1" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig1.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab2" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig2.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab3" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig3.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="tab4" role="tabpanel">
                                            <div class="modal_tab_img">
                                                <a href="#"><img src="assets/img/product/productbig4.jpg"
                                                        alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal_tab_button">
                                        <ul class="nav product_navactive owl-carousel" role="tablist">
                                            <li>
                                                <a class="nav-link active" data-bs-toggle="tab" href="#tab1"
                                                    role="tab" aria-controls="tab1" aria-selected="false"><img
                                                        src="assets/img/product/product2.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab2"
                                                    role="tab" aria-controls="tab2" aria-selected="false"><img
                                                        src="assets/img/product/product6.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link button_three" data-bs-toggle="tab" href="#tab3"
                                                    role="tab" aria-controls="tab3" aria-selected="false"><img
                                                        src="assets/img/product/product9.jpg" alt=""></a>
                                            </li>
                                            <li>
                                                <a class="nav-link" data-bs-toggle="tab" href="#tab4"
                                                    role="tab" aria-controls="tab4" aria-selected="false"><img
                                                        src="assets/img/product/product3.jpg" alt=""></a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12">
                                <div class="modal_right">
                                    <div class="modal_title mb-10">
                                        <h2>Sit voluptatem rhoncus sem lectus</h2>
                                    </div>
                                    <div class="modal_price mb-10">
                                        <span class="new_price">$64.99</span>
                                        <span class="old_price">$78.99</span>
                                    </div>
                                    <div class="modal_description mb-15">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste
                                            laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam
                                            in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel
                                            recusandae </p>
                                    </div>
                                    <div class="variants_selects">
                                        <div class="variants_size">
                                            <h2>size</h2>
                                            <select class="select_option">
                                                <option selected value="1">s</option>
                                                <option value="1">m</option>
                                                <option value="1">l</option>
                                                <option value="1">xl</option>
                                                <option value="1">xxl</option>
                                            </select>
                                        </div>
                                        <div class="variants_color">
                                            <h2>color</h2>
                                            <select class="select_option">
                                                <option selected value="1">purple</option>
                                                <option value="1">violet</option>
                                                <option value="1">black</option>
                                                <option value="1">pink</option>
                                                <option value="1">orange</option>
                                            </select>
                                        </div>
                                        <div class="modal_add_to_cart">
                                            <form action="#">
                                                <input min="1" max="100" step="1" value="1"
                                                    type="number">
                                                <button type="submit">add to cart</button>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="modal_social">
                                        <h2>Share this product</h2>
                                        <ul>
                                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li class="pinterest"><a href="#"><i
                                                        class="fa fa-pinterest"></i></a></li>
                                            <li class="google-plus"><a href="#"><i
                                                        class="fa fa-google-plus"></i></a></li>
                                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal area end-->
