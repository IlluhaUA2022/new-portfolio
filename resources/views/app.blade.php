<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Portfolio</title>
    <link href="{{ mix('css/app.css')}}" rel="stylesheet">
</head>
<body>
<div id="app" class="relative bg-indigo-200 h-screen flex items-center">
    <div class="mb-7">
        @include('layouts.photo')
        @include('layouts.next')
        <div class="text-center absolute bottom-3 left-0 w-full">
            <p>Copyright 20222</p>
        </div>
    </div>



</div>

<script src="{{ mix('js/app.js') }}" defer></script>
</body>
</html>
