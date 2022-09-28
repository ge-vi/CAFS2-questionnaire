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

            <h1 class="text-center">Hello guest, nice to see you here!</h1>
            <h2 class="text-center">Please introduce yourself</h2>

            <form action="{{ route('index.create') }}" method="post">

                @csrf

                <div class="input-group mb-3">
                    <input type="text" name="guest_name" id="guest-name" class="form-control" placeholder="Your name">
                    <button class="btn btn-outline-success">Save</button>
                </div>

            </form>

        </div>
    </div>
</div>

</body>
</html>
