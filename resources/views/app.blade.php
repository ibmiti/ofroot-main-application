<!DOCTYPE HTML>
<html>
    <head>
        <title>OFROOT @yield('title') </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href=" {{ asset('css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{  asset('css/noscript.css') }}" /></noscript>
        <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Protecting Client/Server Communication -->
        <!-- Bootstrap CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="is-preload">

        @yield('content')
        <!-- Scripts -->
        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/browser.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/breakpoints.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>
</html>
