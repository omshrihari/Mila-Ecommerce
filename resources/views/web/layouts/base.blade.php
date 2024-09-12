<!doctype html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    @yield('meta_seo')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('web.partials.links')
</head>

<body>
   
    @include('web.partials.header')
    
    @yield('content')
        
    @include('web.partials.footer')
    
    @include('web.partials.scripts')

</body>

</html>