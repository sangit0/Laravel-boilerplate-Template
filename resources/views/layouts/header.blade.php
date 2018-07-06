    <meta charset="UTF-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  {{ config('app.name') }} {{ config('app.name_last') }} </title>
    <link rel="stylesheet" href="{{ asset('/css/everything_css.css')}}">
    <script src="{{ asset('/js/everything_js.js')}}"></script>
