<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">

<head>

    <meta charset="utf-8" />
    <title>{{ config('app.name') }} | Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    @include('admin.partials.links')
    @stack('head')

</head>

<body>

    <div id="layout-wrapper">

        @include('admin.partials.header')

        @include('admin.partials.sidebar')

        @yield('content')

    </div>

    @include('admin.partials.extra')

    @include('admin.partials.script')
    @stack('foot')

</body>

</html>