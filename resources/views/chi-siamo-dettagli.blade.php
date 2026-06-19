<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Digimon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('media/style.css') }}">
  </head>
  <body>
<nav class="navbar navbar-expand-lg custom-navbar">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('media/logo agumon.png') }}" alt="Logo Digimon" width="50" height="50">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipale">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipale">
            <ul class="navbar-nav ms-auto"> <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/chi-siamo">Chi siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/servizi">Servizi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<header>
    <div class="container-fluid header mt-5">
        <div class="row h-100 justify-content-center text-center">
            
            <div class="col-12 col-md-8">
                
                <h1 class="digi-title text-uppercase">
                    {{ $user['name'] }} {{ $user['surname'] }}
                </h1>
                
                <h3 class="mt-3">
                    Compagno Digimon: <span class="card-link">{{ $user['digimon'] }}</span>
                </h3>
                
            </div>
            
        </div>
    </div>
</header>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
