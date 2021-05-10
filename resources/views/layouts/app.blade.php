<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>@yield('titoloPagina','La Molisana') | La Molisana</title>
</head>

<body>
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
</body>

</html>
