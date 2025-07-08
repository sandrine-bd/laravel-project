@extends('base')

@section('title', 'Acheter')

@section('content')
    <div class="titre">
        <h1>JEUX EN VENTE</h1>
    </div>

    <div class="quatre-jeux">
        <div class="jeu-vente">
            <img src="{{asset("assets/cracklist.png")}}" alt="cracklist" class="image-jeu">
            <h3>CrackList</h3>
            <p>Bon état - 26 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/cracklist.png")}}" alt="cracklist" class="image-jeu">
            <h3>CrackList</h3>
            <p>Bon état - 26 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/cracklist.png")}}" alt="cracklist" class="image-jeu">
            <h3>CrackList</h3>
            <p>Bon état - 26 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/cracklist.png")}}" alt="cracklist" class="image-jeu">
            <h3>CrackList</h3>
            <p>Bon état - 26 €</p>
        </div>
    </div>


    <img src="{{asset("assets/skyjo.png")}}" alt="skyjo" class="image-jeu">
    <img src="{{asset("assets/code-names.png")}}" alt="code-names" class="image-jeu">
    <img src="{{asset("assets/wazabi.png")}}" alt="wazabi" class="image-jeu">

@endsection
