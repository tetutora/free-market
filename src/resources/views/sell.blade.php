@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endsection

@section('content')
<form method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="商品名" required>
    <textarea name="description" placeholder="商品説明" required></textarea>
    <input type="number" name="price" placeholder="価格" required>
    <input type="file" name="image" required>
    <button type="submit">出品する</button>
</form>

@endsection
