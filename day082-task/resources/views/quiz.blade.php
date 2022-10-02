@extends('layouts.html')

@section('content')
    <div class="col">

        <h1 class="text-center">Hello {{ $guest_name }}!</h1>
        <h2 class="text-center">Lets answer some questions</h2>

        <form action="{{ route('quiz', ['id' => $q['id']]) }}" method="post">

            @csrf

            <p>{{ $q['question_text'] }}</p>

            @foreach($q['variants'] as $variant)

                <div class="form-check">
                    <input
                        type="radio"
                        name="{{ $q['id'] }}"
                        value="{{ $variant['value'] }}"
                        id="{{ $variant['value'] }}"
                    >
                    <label for="{{ $variant['value'] }}">{{ $variant['label'] }}</label>
                </div>

            @endforeach

            <button class="btn btn-outline-success">Next question</button>
        </form>

    </div>
@endsection
