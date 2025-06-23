@vite(['resources/css/products.css'])

@extends('layouts.app')

@section('title', 'Amazom - ' . $product->name)

@section('content')
    <div class="product-view">
        <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->name }}">
        
        <h1>{{$product->name}}</h1>
        <p>{{$product->description}}</p>
        <p class="price">{{$product->price}}€</p>
        <p>Catégorie: {{$product->category->name}}</p>
        
        <div class="quantity">
            Quantité: <input type="number" value="1" min="1">
        </div>
        
        <button>Ajouter au panier</button>
        <br>
        <button onclick="window.history.back()">Retour</button>
    </div>
@endsection