@extends('layouts.app')

@section('content')
    <div class="container d-flex align-items-center">
        <div class="row d-flex justify-content-center">
            <div class="col-3">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col-6">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">Description: {{ $comic->description }}</p>
                <p class="card-text">Serie: {{ $comic->series }}</p>
                <p class="card-text">Type: {{ $comic->type }}</p>
                <p class="card-text">Sale Date: {{ $comic->sale_date }}</p>
                <p class="card-text"> Price: {{ $comic->price }}</p>
                <button type="button" class="btn btn-dark">
                    <a href="/comics">Home</a>
                </button>
            </div>
        </div>
    </div>
@endsection
