@extends('layouts.app')

@section('content')
    <div class="container">
        <section class="books">
            <div class="container d-flex flex-column align-items-center justify-content-center p-5">
                <h1>Comics</h1>
                <div class="row row-cols-6 g-5">
                    @foreach ($comics as $comic)
                        <div class="col">
                            <div class="card">
                                <img src="{{ $comic['thumb'] }}" alt="">
                                <div class="text mt-2">
                                    <h5>{{ $comic['title'] }}</h5>
                                </div>
                            </div>
                            <div class="btn-group d-flex aling-items-center mt-2" role="group" aria-label="Basic example">
                                <button type="button" class="btn btn-success">
                                    <a href="{{ route('comics.show', $comic->id) }} ">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>
                                </button>
                                <button type="button" class="btn btn-warning">
                                    <i class="fa-solid fa-pen"></i>
                                </button>
                                <button type="button" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
