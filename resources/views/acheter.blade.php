@extends('base')

@section('title', 'Acheter')

@section('content')
    <div class="titre">
        <h1>JEUX EN VENTE</h1>
    </div>

    <div class="barre-recherche">
        <img src="{{ asset("assets/icone-recherche.svg") }}" alt="Rechercher" class="icone-recherche">
        <input type="text" name="recherche" placeholder="Recherche par nom..." class="input-recherche">
        <button class="bouton rechercher" type="submit">Rechercher</button>
    </div>

    <div class="filtres">
        <form class="filtre">
            <p><b>Etat :</b></p>
            <input type="checkbox" name="etat" value="neuf">Etat neuf
            <input type="checkbox" name="etat" value="tres-bon">Très bon état
            <input type="checkbox" name="etat" value="bon">Bon état
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
        <div class="jeu-vente">
            <img src="{{asset("assets/cracklist2.png")}}" alt="cracklist" class="image-jeu">
            <h3>CrackList</h3>
            <p>Bon état - 26 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/skyjo2.png")}}" alt="skyjo" class="image-jeu">
            <h3>Skyjo</h3>
            <p>Très bon état - 45 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/code-names2.png")}}" alt="code-names" class="image-jeu">
            <h3>Code Names</h3>
            <p>Etat neuf - 50 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/wazabi2.png")}}" alt="wazabi" class="image-jeu">
            <h3>Wazabi</h3>
            <p>Bon état - 14 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/hues.png")}}" alt="hues" class="image-jeu">
            <h3>Hues and Cues</h3>
            <p>Très bon état - 32 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/imposteur1.png")}}" alt="imposteur" class="image-jeu">
            <h3>L'imposteur</h3>
            <p>Bon état - 40 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/lol.png")}}" alt="lol" class="image-jeu">
            <h3>Lol : qui rit, sort</h3>
            <p>Très bon état - 28 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/mamie-moule.png")}}" alt="mamie-moule" class="image-jeu">
            <h3>Mamie Moule Maki</h3>
            <p>Bon état - 12 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/mytho.png")}}" alt="mytho" class="image-jeu">
            <h3>Mytho Pas Mytho</h3>
            <p>Etat neuf - 35 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/skip.png")}}" alt="skip" class="image-jeu">
            <h3>Skip-Bo</h3>
            <p>Très bon état - 17 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/uno.png")}}" alt="uno" class="image-jeu">
            <h3>Uno Show Em No Mercy</h3>
            <p>Bon état - 26 €</p>
        </div>

        <div class="jeu-vente">
            <img src="{{asset("assets/imposteur2.png")}}" alt="imposteur 2" class="image-jeu">
            <h3>L'imposteur</h3>
            <p>Très bon état - 18 €</p>
        </div>
    </div>

@endsection
