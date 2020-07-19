<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8" />
        <title>CRUD Laravel - Bruno Marques Nogueira</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <meta name="Keywords" content="Bruno Nogueira, CRUD, Laravel, Estudo" />
        <meta name="Description" content="Estudo, aprendizagem do framework PHP Laravel" />
        <link href="{{ URL::asset('assets/css/bootstrap/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        @yield('content')
        <script type="text/javascript" src="{{ URL::asset('js/jquery-3.4.1.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/bootstrap/bootstrap.min.js') }}"></script>
    </body>
</html>
