@extends('base')

@section('title', 'Vendre')

@section('content')
    <div class="titre">
        <h1>VENDRE MON JEU</h1>
    </div>

    <div>
        <h2>
           Le déroulement
        </h2>
        <p class="deroulement">
            1) Remplissez un <b>court formulaire</b> décrivant votre jeu<br>
            2) Recevez une <b>estimation du prix</b> de vente<br>
            3) Imprimez le bon de livraison et <b>envoyez votre jeu gratuitement</b> !
        </p>
        <button class="bouton bouton-style" type="submit">Vendre mon jeu</button>
    </div>

    <div>
        <h2>
            Programme qualité
        </h2>
        <p class="deroulement">
            Nous effectuons un contrôle des jeux réceptionnés afin de s’assurer de l’état du matériel, à la suite de quoi une note est attribué selon certains critères.
        </p>
    </div>

    <div class="qualite">
        <div class="etat">
            <h2>TRES BON</h2>
            <p>Jeu en excellent état, presque comme neuf, utilisé peu de fois</p>
        </div>
        <div class="etat">
            <h2>BON</h2>
            <p>Jeu utilisé, quelques marques d’usures sur l'extérieur</p>
        </div>
        <div class="etat">
            <h2>CORRECT</h2>
            <p>Marques d’usures et pièces abimées mais fonctionnelles</p>
        </div>
    </div>

@endsection
