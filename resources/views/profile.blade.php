<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MyProfile</title>

        <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link href="/node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="/style.css">

    </head>
    <body>

       {{-- Navbar --}}
        @include('layouts.navbar')

        @yield('content')

        {{-- Footer --}}
        @include('layouts.footer')

        <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/profile.js"></script>
    </body>
</html>
