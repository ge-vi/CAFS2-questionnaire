@extends('layouts.html')

@section('content')
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
@endsection
