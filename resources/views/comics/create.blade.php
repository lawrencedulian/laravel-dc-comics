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
                        <input type="text" class="form-control" id="title" name="title">
                    </div>

                    <div class="mb-2">
                        <label for="description">Description</label>
                        <textarea type="text" class="form-control" rows="3" id="description" name="description"></textarea>
                    </div>

                    <div class="mb-2">
                        <label for="thumb">Image</label>
                        <input type="text" class="form-control" id="thumb" name="thumb">
                    </div>

                    <div class="mb-2">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" name="price" id="price">
                    </div>

                    <div class="mb-2">
                        <label for="series">Series</label>
                        <input type="text" class="form-control" name="series" id="series">
                    </div>

                    <div class="mb-2">
                        <label for="sale_date">Sale Date</label>
                        <input type="date" class="form-control" name="sale_date" id="sale_date">
                    </div>

                    <div class="mb-2">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" id="type">
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
