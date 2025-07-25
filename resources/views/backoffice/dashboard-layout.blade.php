<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>

    <header class="navbar navbar-backoffice sticky-top flex-md-nowrap shadow">
        <a class="col-md-3 col-lg-2 me-0 px-3 fs-6" href="{{ route('products.index') }}">Back office RePlay</a>
        <div class="navbar-nav">
            <div class="nav-item text-nowrap">
                <a class="px-3" href="{{ route('home') }}">Se déconnecter</a>
            </div>
        </div>
    </header>

    {{--
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('products.index') }}">Produits</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.show', ['product' => $product->id]) }}">
                                Détails
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.edit', ['product' => $product->id]) }}">
                                Edition
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            --}}

            <main class="col-md-12 ms-sm-auto col-lg-12 px-md-4">
                @yield('content')
            </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
</body>
</html>
