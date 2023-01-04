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
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" value="{{ old('title', $comic->title) }}">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="description">Description</label>
                        <textarea type="text" rows="5" class="form-control @error('description') is-invalid @enderror" id="description"
                            name="description">{{ old('description', $comic->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="thumb">Image</label>
                        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                            name="thumb" value="{{ old('thumb', $comic->thumb) }}">
                        @error('thumb')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="price">Price</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                            id="price" value="{{ old('price', $comic->price) }}">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="series">Series</label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                            id="series" value="{{ old('series', $comic->series) }}">
                        @error('series')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="sale_date">Sale Date</label>
                        <input type="date" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                            id="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
                        @error('sale_date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="type">Type</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                            id="type" value="{{ old('type', $comic->type) }}">
                        @error('type')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-warning">Save</button>
                </form>
            </div>
        </div>

    </div>
@endsection
