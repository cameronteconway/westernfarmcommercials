<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('inc/head')
</head>
<body>

    <header>
        @include('inc/header')
    </header>

    <div id="main" role="main">
        @yield('content')
    </div>

    <footer class="d-flex justify-content-center">
        @include('inc/footer')
    </footer>

    @include('inc/scripts')

</body>
</html>