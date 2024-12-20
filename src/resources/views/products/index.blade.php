@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<h1>商品一覧</h1>
@foreach($products as $product)
    <div>
        <img src="{{ $product->image }}" alt="{{ $product->name }}">
        <p>{{ $product->name }}</p>
        <p>{{ $product->price }}円</p>
        <a href="{{ route('product.show', $product->id) }}">詳細</a>
    </div>
@endforeach

@endsection