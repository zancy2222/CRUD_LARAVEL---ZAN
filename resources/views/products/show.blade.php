<!-- resources/views/products/show.blade.php -->
@extends('layout')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>{{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Quantity: {{ $product->quantity }}</p>
    <a href="{{ route('products.index') }}">Back to List</a>
@endsection
