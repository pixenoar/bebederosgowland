<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bebederos Gowland</title>
        <meta name="description" content="Fabricamos bebederos y comederos para el sector rural. Apto para ganado, caballos, cerdos y ovejas.">

        <meta property="og:title" content="Bebederos Gowland">
        <meta property="og:image" content="{{ asset('img/bebederos-gowland.jpg') }}">
        <meta name="og:description" content="Fabricamos bebederos y comederos para el sector rural. Apto para ganado, caballos, cerdos y ovejas.">
        <meta property="og:site_name" content="Bebederos Gowland">
        <meta property="og:url" content="https://bebederosgowland.ar">
        <meta property="og:type" content="website">

        <link href="{{ asset('favicon.ico') }}" rel="shortcut icon">

        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        @yield('contenido')
    </body>
</html>