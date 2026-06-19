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
        
        <a class="navbar-brand" href="/">
            <img src="{{ asset('media/logo agumon.png') }}" alt="Logo Digimon" width="50" height="50">
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuPrincipale">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuPrincipale">
            <ul class="navbar-nav ms-auto"> 
                
                <li class="nav-item">
                    <a class="nav-link fs-5" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="/chi-siamo">Chi siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-5" href="/servizi">Servizi</a>
                </li>
                
            </ul>
        </div>
    </div>
</nav>

<header>
<div class="container mt-5 text-center">
    
    <h1 class="digi-title mb-4 text-uppercase">Digiprescelti</h1>

    <img src="{{ asset('media/digiprescelti.png') }}" alt="I Digiprescelti e i loro Digimon" class="img-fluid hero-image mb-4">

    <div class="row justify-content-center">
        <div class="col-12 col-md-8">
            <p class="lead">
                Siamo i bambini prescelti, chiamati a proteggere l'equilibrio tra il mondo reale e Digiworld! 
                Insieme ai nostri fedeli compagni Digimon, esploriamo territori sconosciuti, affrontiamo forze oscure e 
                impariamo il vero valore dell'amicizia e del coraggio.
            </p>
        </div>
    </div>
    
</div>
</header>

<section>
    <div class="container mt-4"> 
        <div class="row g-4">

            @foreach ($users as $user)

                <div class="col-12 col-md-6">

                    <div class="card digi-card h-100 p-3">
                        <div class="card-body text-center">
                            <h5 class="card-title digi-title mt-3">{{ $user['name'] . " " . $user['surname'] }}</h5>
                            <p class="card-text">Il fido compagno di {{ $user['digimon'] }}</p>
                            <a href="{{route('chisiamodettagli', ['name'=>$user['name']] )}}" class="card-link">Scopri di più</a>
                        </div>
                    </div>

                </div>

            @endforeach 

        </div>
    </div>

</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
