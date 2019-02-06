<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('include.page_head')
</head>
<body>
    <div id="app">
        @include('include.nav')
        @yield('content')
    </div>
</body>
</html>
