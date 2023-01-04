@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="text-center">Create New Comic</h2>
        <div class="row justify-content-center">
            <div class="col-7">
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="title">Title</label>
                        <input type="text" value="{{ old('title') }}"
                            class="form-control @error('title')
                                is-invalid
                            @enderror
                        "
                            id="title" name="title">
                        @error('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="description">Description</label>
                        <textarea type="text" value="{{ old('description') }}"
                            class="form-control @error('description')
                                is-invalid
                            @enderror
                            rows="3"
                            id="description" name="description"></textarea>
                        @error('description')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="thumb">Image</label>
                        <input type="text" value="{{ old('thumb') }}"
                            class="form-control @error('thumb')
                                is-invalid
                            @enderror"
                            id="thumb" name="thumb">
                        @error('thumb')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="price">Price</label>
                        <input type="text" value="{{ old('price') }}"
                            class="form-control @error('price')
                                is-invalid
                            @enderror"
                            name="price" id="price">
                        @error('price')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="series">Series</label>
                        <input type="text" value="{{ old('series') }}"
                            class="form-control @error('series')
                                is-invalid
                            @enderror"
                            name="series" id="series">
                        @error('series')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="sale_date">Sale Date</label>
                        <input type="date" value="{{ old('sale_date') }}"
                            class="form-control @error('sale_date')
                                is-invalid
                            @enderror"
                            name="sale_date" id="sale_date">
                        @error('sale_date')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label for="type">Type</label>
                        <input type="text" value="{{ old('type') }}"
                            class="form-control @error('type')
                                is-invalid
                            @enderror"
                            name="type" id="type">
                        @error('type')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
