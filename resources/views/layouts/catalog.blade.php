<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel base @yield('title','template')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')

    <div class="container">

        <div class="row">

            <div class="col-10">

                @yield('cards')

            </div>

            <div class="col-2">

                @yield('content')

            </div>
        </div>
    </div>

    @include('partials.footer')

</body>

</html>