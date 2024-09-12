@extends('web.layouts.base')

@section('meta_seo')
    <title>{{ config('app.name') }}</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
@endsection

@section('content')
        <!--breadcrumbs area start-->
        <div class="breadcrumbs_area">
            <div class="container">   
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb_content">
                            <ul>
                                <li><a href="{{ route('home') }}">home</a></li>
                                <li>Shopping Cart</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>         
        </div>
        <!--breadcrumbs area end-->
        
        <!--shopping cart area start -->
        @livewire('cartpage')
        <!--shopping cart area end -->
@endsection
