@extends('layouts.html')

@section('content')
    <div class="col">

        <h1 class="text-center">{{ $guest_name }}</h1>
        <h2 class="text-center">Please review your results</h2>

        <table class="table">
            <thead>
            <tr>
                <th>Question</th>
                <th>Answer</th>
                <th>Points</th>
            </tr>
            </thead>

            <tbody>
            @foreach($answers as $answer)
                <tr>
                    <td>{{ $answer->question_name }}</td>
                    <td>{{ $answer->question_answer }}</td>
                    <td>...</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
