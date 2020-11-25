<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistem de Management al Resurselor Umane in Sistemul Bugetar</title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
    <script src="{{ asset('/js/app.js')}}"></script>
    </body>
</html>
