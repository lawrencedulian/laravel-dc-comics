@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">Edit: {{ $comic->title }}</h2>
        <div class="row justify-content-center">
            <div class="col-7">
                <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-2">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
                    </div>

                    <div class="mb-2">
                        <label for="description">Description</label>
                        <textarea type="text" rows="5" class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
                    </div>

                    <div class="mb-2">
                        <label for="thumb">Image</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            value="{{ $comic->thumb }}">
                    </div>

                    <div class="mb-2">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price"
                            value="{{ $comic->price }}">
                    </div>

                    <div class="mb-2">
                        <label for="series">Series</label>
                        <input type="text" class="form-control" name="series" id="series"
                            value="{{ $comic->series }}">
                    </div>

                    <div class="mb-2">
                        <label for="sale_date">Sale Date</label>
                        <input type="date" class="form-control" name="sale_date" id="sale_date"
                            value="{{ $comic->sale_date }}">
                    </div>

                    <div class="mb-2">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="type"
                            value="{{ $comic->type }}">
                    </div>

                    <button type="submit" class="btn btn-warning">Save</button>
                </form>
            </div>
        </div>

    </div>
@endsection
