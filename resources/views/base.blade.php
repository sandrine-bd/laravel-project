<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>@yield('title')</title>
</head>

<body>

    <div class="navbar">
        <div class="navbar-logo">
            <a href="/home">
                <img src="{{asset("assets/logo.png")}}" alt="logo replay" class="picto-navbar">
            </a>
        </div>
        <div class="navbar-menu">
            <a href="/products" class="{{ request()->is('acheter') ? 'active' : '' }}">Jeux</a>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Back Office</a>
        </div>
        <div class="navbar-panier-compte">
            <a href="/cart">
                <img src="{{asset("assets/panier.svg")}}" alt="panier" class="navbar-picto" >
            </a>
            @guest
                <a href="{{ route('login') }}" class="bouton-style">Se connecter</a>
                <a href="{{ route('register') }}" class="bouton-style">Créer un compte</a>
            @endguest
            @auth
            <a href="/account">
                <img src="{{asset("assets/compte.svg")}}" alt="mon-compte" class="navbar-picto">
            </a>
            <form method="POST" action="{{ route('logout') }}" style="display:flex;">
                @csrf
                <button type="submit" class="bouton-style" >Se déconnecter</button>
            </form>
            @endauth
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
