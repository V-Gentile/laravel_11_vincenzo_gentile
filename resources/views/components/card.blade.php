<div class="card mb-3" style="width: 18rem;">
    <img src="{{ Storage::url($digimon->img) }}" class="card-img-top cardImg img-fluid" alt="{{$digimon->name}}">
    <div class="card-body">
        <h5 class="card-title">Nome: {{$digimon->name}}</h5>
        <h5 class="card-title muted">Livello: {{$digimon->level}}</h5>
        <h5 class="card-title muted">Tipo: {{$digimon->type}}</h5>
        <a href="{{ route('digimon.show', compact('digimon')) }}" class="btn btn-primary">Info</a>
        <a href="{{ route('digimon.edit', compact('digimon')) }}" class="btn btn-primary">Modifica</a>
    </div>
</div>
