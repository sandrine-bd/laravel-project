@extends('base')

@section('title', 'Fiche produit')

@section('content')

    <div class="titre">
        <h1>{{ $product->name }}</h1>
    </div>

    <div class="jeu-details">
        <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="jeu-image">
        <div>
            <p class="deroulement"> Etat : {{ $product->state }} </p>
            <p class="deroulement"> Prix : {{ $product->price }} € </p>
            <button type="submit" class="bouton bouton-style">Ajouter au panier</button>
        </div>
    </div>

@endsection
