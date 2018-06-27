<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.header')
</head>
<body class="hold-transition login-page">
            @yield('content')
    
    </body>
</html>
