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
                            <li>Search</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs area end-->

    <!--shop  area start-->
    <div class="shop_area shop_fullwidth">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-4">
                    <h3 class="text-center">You searched for : "{{ $query }}"</h3>
                    <p class="text-center">Available results are ({{ $products->count() }})</p>
                </div>
                <div class="col-12">
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_4" type="button" class="active btn-grid-4" data-bs-toggle="tooltip"
                                title="4"></button>
                            <button data-role="grid_3" type="button" class=" btn-grid-3" data-bs-toggle="tooltip"
                                title="3"></button>
                        </div>
                        <div class="page_amount">
                            <p>Showing 1–9 of {{ $products->count() }} results</p>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <div class="container">
                        <div class="row shop_wrapper justify-content-between mb-5">
                            @foreach ($products as $prd)
                                <div class="col-lg-3 col-md-4 col-12 ">
                                    @livewire('product-card',['product' => $prd])
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="shop_toolbar t_bottom">
                        <div class="pagination">
                            <ul>
                                @if ($products->onFirstPage())
                                    <li class="current">1</li>
                                @else
                                    <li><a href="{{ $products->previousPageUrl() }}">«</a></li>
                                @endif
                    
                                @foreach ($products as $element)
                                    @if (is_string($element))
                                        <li class="{{ $element == $products->currentPage() ? 'current' : '' }}">{{ $element }}</li>
                                    @endif
                                @endforeach
                    
                                @if ($products->hasMorePages())
                                    <li><a href="{{ $products->nextPageUrl() }}">»</a></li>
                                    <li><a href="{{ $products->url($products->lastPage()) }}">>></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>                    
                    <!--shop toolbar end-->
                    <!--shop wrapper end-->
                </div>
            </div>
        </div>
    </div>
    <!--shop  area end-->
@endsection
