<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>window.Laravel = {csrfToken: '{{ csrf_token()}} ' }</script>
        <meta name="_token" content="{{ csrf_token() }}">
        <link href="{{ asset('css/app.css')}}" rel="stylesheet">
        <link href="{{ asset('css/syscode.css')}}" rel="stylesheet">
        <title>Laravel</title>
    </head>
    <body>
        <div class="container">
                <div id="vue">
                    Laravel
                </div>
        </div>
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="{{ asset('js/syscode.js')}}"></script>
    </body>
</html>
