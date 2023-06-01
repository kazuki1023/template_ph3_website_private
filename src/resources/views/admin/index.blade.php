@extends('layouts.admin')

@section('content')
    @foreach ($questions as $question)
        <div class="card h-full">
            <div class="card-body">
                <h5 class="card-title">{{ $question->id }}</h5>
                <p class="card-text">{{ $question->content }}</p>
            </div>
        </div>
    @endforeach
@endsection
