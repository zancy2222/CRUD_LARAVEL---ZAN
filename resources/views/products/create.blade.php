<!-- resources/views/products/create.blade.php -->
@extends('layout')

@section('content')
    <h1>Add Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Product Name" required>
        <textarea name="description" placeholder="Product Description"></textarea>
        <input type="text" name="price" placeholder="Price" required>
        <input type="number" name="quantity" placeholder="Quantity" required>
        <button type="submit">Save</button>
    </form>
@endsection
