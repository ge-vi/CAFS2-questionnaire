<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Questionnaire</title>

    @vite(['resources/js/app.js'])

</head>
<body>

<div class="container">
    <div class="row my-5">

        @yield('content')

    </div>
</div>

</body>
</html>
