<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Clínica Camacho</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js', 'resources/css/custom.css'])
    <link rel="icon" type="image/jpg" href="{{ URL::asset('favicon.ico') }}" />
    <script defer src="{{ URL::asset('assets/js/custom.js') }}"></script>
</head>
<body>
    @yield('footer')
</body>
</html>