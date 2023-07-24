<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/scss/admin.scss')
    <title>@yield('title')</title>
</head>
<body>
<div id="app">
    @include('admin.main_part.svg')
    @include('admin.main_part.header')
    @include('admin.main_part.sidebar')
    <div class="content">
        @yield('content')
    </div>
    @include('admin.main_part.footer')
</div>
@vite('resources/js/admin.js')
</body>
</html>
