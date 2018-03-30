<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <div id="app">
        @yield('content')
    </div>
    @include('layouts.partials.footer')
</body>
</html>