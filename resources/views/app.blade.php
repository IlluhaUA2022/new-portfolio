<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Portfolio</title>
    <link href="{{ mix('css/app.css')}}" rel="stylesheet">
</head>
<body>
<div id="app">

    @include('layouts.photo')
    @include('layouts.next')

</div>

<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
