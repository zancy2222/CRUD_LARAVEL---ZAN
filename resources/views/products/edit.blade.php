<!-- resources/views/products/edit.blade.php -->
@extends('layout')

@section('content')
    <h1>Edit Product</h1>

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}" required>
        <textarea name="description">{{ $product->description }}</textarea>
        <input type="text" name="price" value="{{ $product->price }}" required>
        <input type="number" name="quantity" value="{{ $product->quantity }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
