@extends('web.layouts.base')

@section('meta_seo')
    <title>{{ config('app.name') }}</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
@endsection

@section('content')
    <!--slider area start-->
    <section class="slider_section slider_s_four">
        <div class="slider_area slider_carousel owl-carousel">
            @foreach ($banners as $banner)
                <a href="{{ $banner->link }}" wire:navigate target="_blank">
                    <div class="single_slider d-flex align-items-center"
                        data-bgimg="{{ asset('web/uploads/' . $banner->banner) }}"></div>
                </a>
            @endforeach
        </div>
    </section>
    <!--slider area end-->

    <!--home section bg area start-->
    <div class="home_section_bg section_bg_four home_s_bg3">

        <!--Categories product area start-->
        <div class="categories_product_area categories_product_four mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section_title title_style2">
                            <div class="title_content">
                                <h2><span>Shop By</span> Bike</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row"> -->
                <!-- <div class="col-12"> -->
                <div class="categories_product_inner categories_column6 owl-carousel">
                    @foreach($bikeBrands as $bike)
                    <div class="single_categories_product">
                        <div class="categories_product_thumb">
                            <a href="{{ route('categorypage',$bike->slug) }}" wire:navigate><img src="{{ asset('web/uploads/'.$bike->image) }}"
                                    alt=""></a>
                        </div>
                        <div class="categories_product_content">
                            <h4><a href="{{ route('categorypage',$bike->slug) }}" wire:navigate> {{ $bike->title }}</a></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- </div> -->
                <!-- </div> -->
            </div>
        </div>
        <!--Categories product area end-->




        <section class="slider_section s_section_three mb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <img src="{{ asset('web/uploads/'.$scondLvlBnr->main_banner) }}" class="rounded-3" alt=""
                            style="height: 459px; width: 100%;">
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('web/uploads/'.$scondLvlBnr->small_banner1) }}" class="rounded-3" alt="">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('web/uploads/'.$scondLvlBnr->small_banner2) }}" class="rounded-3" alt="">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('web/uploads/'.$scondLvlBnr->small_banner3) }}" class="rounded-3" alt="">
                            </div>
                            <div class="col-md-6 mb-4">
                                <img src="{{ asset('web/uploads/'.$scondLvlBnr->small_banner4) }}" class="rounded-3" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--slider area end-->


        <!--banner area start-->
        <div class="banner_area mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $thirdLvlBnr->banner1_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$thirdLvlBnr->banner1) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $thirdLvlBnr->banner2_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$thirdLvlBnr->banner2) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $thirdLvlBnr->banner3_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$thirdLvlBnr->banner3) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <!--banner area end-->




        <section class="slider_section s_section_three mb-50">
            <div class="container">
                <div class="row">
                    @foreach ($ytVideos as $yt)
                        @if($loop->index == 0)                            
                        <div class="col-lg-5 col-md-12">
                            <iframe width="100%" height="415"
                                src="https://www.youtube.com/embed/{{ $yt->yt_link }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        @else
                        <div class="col-lg-7 col-md-12">
                            <iframe width="100%" height="415"
                                src="https://www.youtube.com/embed/{{ $yt->yt_link }}"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                allowfullscreen></iframe>
                        </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>



        <!--banner area start-->
        <div class="banner_area mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $forthLvlBnr->banner1_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$forthLvlBnr->banner1) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $forthLvlBnr->banner2_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$forthLvlBnr->banner2) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $forthLvlBnr->banner3_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$forthLvlBnr->banner3) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>





        <div class="banner_area mb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $fiveLvlBnr->banner1_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$fiveLvlBnr->banner1) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $fiveLvlBnr->banner2_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$fiveLvlBnr->banner2) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>




        <div class="banner_area mb-80 bg-dark p-4">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-2 col-md-2">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $sixLvlBnr->banner1_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$sixLvlBnr->banner1) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $sixLvlBnr->banner2_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$sixLvlBnr->banner2) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $sixLvlBnr->banner3_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$sixLvlBnr->banner3) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $sixLvlBnr->banner4_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$sixLvlBnr->banner4) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                    <div class="col-lg-2 col-md-2">
                        <figure class="single_banner">
                            <div class="banner_thumb">
                                <a href="{{ $sixLvlBnr->banner5_link }}" wire:navigate><img class="rounded-3"
                                        src="{{ asset('web/uploads/'.$sixLvlBnr->banner5) }}" alt=""></a>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </div>

        <!--product area start-->
        @livewire('product-slider-card',['slider' => $newArrivals, 'title' => 'Our New Arrivals'])
        <!--product area end-->
    </div>
    <!--home section bg area end-->
@endsection
