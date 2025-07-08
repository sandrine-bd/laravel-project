<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>@yield('title')</title>
</head>
<body>
    <div class="navbar">
            <a href="accueil">
                    <img src="{{asset("assets/logo.png")}}" alt="logo replay" id="logo">
            </a>
            <a href="acheter">Acheter</a>
            <a href="vendre">Vendre</a>
            <a href="panier">Panier</a>
            <a href="mon-compte">Mon compte</a>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
