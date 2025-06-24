@vite(['resources/css/products.css'])

@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <div class="container flex-column">

        <form method="GET" action="{{ route('products.index') }}" class="flex categorie-selector">
            <label for="categorie-list">Filtrer par catégorie</label>
            <select name="id" id="categorie-list" onchange="this.form.submit()">
                <option value="">-- Toutes les catégories --</option>
                @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}" {{ request('id') == $categorie->id ? 'selected' : '' }}>
                        {{ $categorie->name }}
                    </option>
                @endforeach
            </select>
        </form>

        <h2 style='text-align:center;'>Liste des produits</h2>

        <div class="products-container">
                @foreach($products as $product)
                    <div class="product">
                    <img src="{{ asset('images/products/' . $product->image) }}" 
                        alt="{{ $product->name }}"
                        onclick="window.location.href='{{ route('products.show', $product->slug) }}'"
                        style="cursor: pointer;">
                        <strong><span>{{$product->name}}</span></strong>
                        <span>{{ Str::words($product->description, 15, '...') }}</span>
                        <span>{{$product->price}}</span>
                        <span>{{ $product->category->name }}</span>
                        <button>Ajouter au panier</button>
                    </div>
                @endforeach
        </div>
    </div>
@endsection