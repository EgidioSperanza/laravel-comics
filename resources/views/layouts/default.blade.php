<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel DC | @yield('pageTitle')</title>
    {{-- ----CSS---- --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <header>
        @include ('partials.navbar')
    </header>

    <main>
        @yield('main')
    </main>

    <footer>
    @include('partials.footer')
    </footer>
    
</body>
</html>