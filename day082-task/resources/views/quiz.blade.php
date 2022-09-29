@extends('layouts.html')

@section('content')
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
@endsection
