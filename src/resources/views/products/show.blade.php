@extends('layouts.app')

@section
<link rel="stylesheet" href="{{ asset('css/show.css') }}">
@endsection

@section('content')

<h1>{{ $product->name }}</h1>
<img src="{{ $product->image }}" alt="{{ $product->name }}">
<p>{{ $product->description }}</p>
<p>{{ $product->price }}円</p>
<p>カテゴリ: {{ $product->category }}</p>
<form action="{{ route('product.like', $product->id) }}" method="POST">
    @csrf
    <button type="submit">いいね</button>
</form>

@endsection