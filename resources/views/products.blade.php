@extends('base')

@section('title', 'Acheter')

@section('content')
    <div class="titre">
        <h1>JEUX EN VENTE</h1>
    </div>

    <form class="barre-recherche" method="GET">
        <img src="{{ asset("assets/icone-recherche.svg") }}" alt="Rechercher" class="icone-recherche">
        <input type="text" name="recherche" placeholder="Recherche par nom..." class="input-recherche" value="{{ request('search') }}">
        <button class="bouton rechercher" type="submit">Rechercher</button>
    </form>

    <div class="filtres">
        <form class="filtre">
            <p><b>Etat :</b></p>
            <input type="checkbox" name="etat" value="neuf">Très bon neuf
            <input type="checkbox" name="etat" value="tres-bon">Bon état
            <input type="checkbox" name="etat" value="bon">Correct
        </form>

        <form class="filtre">
            <p><b>Prix :</b></p>
            <input type="checkbox" name="prix" value="0-10">0 - 10 €
            <input type="checkbox" name="prix" value="10-20">10 - 20 €
            <input type="checkbox" name="prix" value="20-30">20 - 30 €
            <input type="checkbox" name="prix" value="30-40">30 - 40 €
        </form>

        <form class="filtre">
            <p><b>Age :</b></p>
            <input type="checkbox" name="age" value="0-5">0 - 5 ans
            <input type="checkbox" name="age" value="5-10">5 - 10 ans
            <input type="checkbox" name="age" value="0-16">10 - 16 ans
            <input type="checkbox" name="age" value="16">+ 16 ans
        </form>

        <form class="filtre">
            <p><b>Nombre de joueurs :</b></p>
            <input type="checkbox" name="nb" value="2">2 joueurs
            <input type="checkbox" name="nb" value="3-4">3 - 4 joueurs
            <input type="checkbox" name="nb" value="5-6">5 - 6 joueurs
            <input type="checkbox" name="nb" value="6">+ 6 joueurs
        </form>
    </div>

    <div class="quatre-jeux">
        @foreach($products as $product)
            <div class="jeu-vente">
                <img src="{{ asset($product->image) }}" alt="{{ $product->name }}" class="image-jeu">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->state }}</p>
                <p>{{ $product->price }} €</p>
                <a href="{{ route('products-details', $product->id) }}">Voir détails</a>
            </div>
        @endforeach
    </div>

@endsection
