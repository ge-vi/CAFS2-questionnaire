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
        <div class="col">

            <h1 class="text-center">Hello {{ $guest_name }}!</h1>
            <h2 class="text-center">Lets start the test</h2>


            <form action="{{ route('quiz') }}" method="post">

                @csrf

                <p>PHP language is:</p>

                <div class="form-check">
                    <input type="radio" name="q1" value="q1-a1" id="q1-a1">
                    <label for="q1-a1">Interpreted programming language</label>
                </div>

                <div class="form-check">
                    <input type="radio" name="q1" value="q1-a2" id="q1-a2">
                    <label for="q1-a2">Compiled programming language</label>
                </div>

                <div class="form-check">
                    <input type="radio" name="q1" value="q1-a3" id="q1-a3">
                    <label for="q1-a3">Internet programming language</label>
                </div>

                <button class="btn btn-outline-success">Next question</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>
