@extends('base')

@section('title', 'Fiche produit')

@section('content')

    <div class="titre">
        <h1>{{ $product->name }}</h1>
    </div>

    <div class="jeu-details">
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="jeu-image">
        <div>
            <p class="deroulement"> Etat : {{ $product->category->name }} </p>
            <p class="deroulement"> Prix : {{ $product->price }} € </p>
            @auth
                <form method="POST" action="{{ route('cart.add', $product->id) }}">
                    @csrf
                    <button type="submit" class="bouton bouton-style">Ajouter au panier</button>
                </form>
            @endauth
        </div>
    </div>

@endsection
