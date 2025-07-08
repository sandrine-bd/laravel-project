<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>

    <div class="navbar">
        <div class="navbar-logo">
            <a href="accueil">
                <img src="{{asset("assets/logo.png")}}" alt="logo replay" class="picto-navbar">
            </a>
        </div>
        <div class="navbar-menu">
            <a href="acheter" class="{{ request()->is('acheter') ? 'active' : '' }}">Acheter</a>
            <a href="vendre" class="{{ request()->is('vendre') ? 'active' : '' }}">Vendre</a>
        </div>
        <div class="navbar-panier-compte">
            <a href="panier">
                <img src="{{asset("assets/panier.svg")}}" alt="panier" class="navbar-picto" >
            </a>
            <a href="mon-compte">
                <img src="{{asset("assets/compte.svg")}}" alt="mon-compte" class="navbar-picto">
            </a>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
    <div>
        <p class="footer">
            Made in Annecy by Campus Numérique @2025
        </p>
    </div>
</body>
</html>
