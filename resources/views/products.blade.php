@extends('base')

@section('title', 'Acheter')

@section('content')
    <div class="titre">
        <h1>JEUX EN VENTE</h1>
    </div>

    <form class="recherche-barre" method="GET" action="{{ route('products') }}">
        <img src="{{ asset("assets/icone-recherche.svg") }}" alt="Rechercher" class="recherche-icone">
        <input type="text" name="search" placeholder="Recherche par nom..." class="recherche-input" value="{{ request('search') }}">
        <button class="bouton bouton-style" type="submit">Rechercher</button>

        <div class="filtres">
            <p><b>État :</b></p>
            @foreach($categories as $category)
                <label>
                    <input
                        type="checkbox"
                        name="category_ids[]"
                        value="{{ $category->id }}"
                        {{ in_array($category->id, request('category_ids', [])) ? 'checked' : '' }}
                        onchange="this.form.submit();"
                    >
                    {{ $category->name }}
                </label>
            @endforeach
        </div>
    </form>

    <div class="jeux-div">
        @forelse($products as $product)
            <div class="jeu-liste">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="jeu-image">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->category->name }} - {{ $product->price }} €</p>
                <a class="bouton bouton-style" href="{{ route('products.details', $product->id) }}">Voir les détails</a>
            </div>
        @empty
            <div class="aucun-resultat">
                <p>Aucun jeu trouvé avec ces critères.</p>
                <a href="{{ route('products') }}" class="bouton bouton-style">Voir tous les jeux</a>
            </div>
        @endforelse
    </div>

@endsection
