@extends('layouts.app')

@section('content')
    <div class="container mt-10">
        <h1>Edit Product with ID: {{ $product->id }}</h1>

        <form action="{{ route('products.update', ['id' => $product->id]) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" required>
            </div>



            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
@endsection
