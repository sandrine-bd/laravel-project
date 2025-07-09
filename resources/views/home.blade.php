@extends('base')

@section('title', 'Accueil RePlay')

@section('content')
    <div>
        <img src="{{asset("assets/replay-logo.jpg")}}" alt="replay-seconde-main-du-jeu" class="image-replay">
    </div>

    <div>
        <h3 class="sous-titre">
            Achetez et revendez vos jeux de société en toute simplicité : petits prix pour les passionnés, zéro tracas pour les vendeurs.
        </h3>
    </div>

    <div class="titre">
        <h1>NOS MEILLEURES VENTES</h1>
    </div>

    <div class="quatre-jeux">
        <img src="{{asset("assets/cracklist.png")}}" alt="cracklist" class="image-jeu">
        <img src="{{asset("assets/skyjo.png")}}" alt="skyjo" class="image-jeu">
        <img src="{{asset("assets/code-names.png")}}" alt="code-names" class="image-jeu">
        <img src="{{asset("assets/wazabi.png")}}" alt="wazabi" class="image-jeu">
    </div>

    <div class="bouton">
        <a href="products">Voir tous les jeux</a>
    </div>

    <div class="accueil-avis">
        <img src="{{asset("assets/nuage.png")}}" alt="nuage" class="image-accueil">
        <h3>
            99% des vendeurs qui utilisent notre service sont satisfaits
        </h3>
    </div>

    <div class="accueil-avis">
        <img src="{{asset("assets/smiley-rouge.png")}}" alt="smiley-rouge" class="image-accueil">
        <h3>
            98% de nos utilisateurs affirment avoir trouvé le jeu qu’ils cherchaient
        </h3>
    </div>

    <div class="bouton">
        <a href="products">Voir tous les jeux</a>
    </div>

@endsection
