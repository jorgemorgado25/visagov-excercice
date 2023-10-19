<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visagov Excercice</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap-5/bootstrap.min.css') }}">
</head>
<body>
    @include('layouts.partials.navbar')
    @yield('content')
</body>

<script src="{{ asset('assets/bootstrap-5/bootstrap.bundle.min.js') }}"></script>

</html>