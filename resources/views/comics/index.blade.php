@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Comics</h1>

        <section>
            <div class="container text-center mt-4">
                <h1>Tutti i comics</h1>
                <a href="{{ route('comics.create') }}" class="btn btn-primary">Aggiungi Comic</a>
                <div class="row row-cols-4 g-3">
                    @foreach ($comics as $comic)
                        <div class="col">
                            <div class="card">
                                <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $comic->title }}</h5>
                                    <p class="card-text">Serie: {{ $comic->series }}</p>
                                    <p class="card-text">Tipo: {{ $comic->type }}</p>

                                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Vedi
                                        dettagli</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
