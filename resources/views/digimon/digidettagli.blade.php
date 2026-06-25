<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h2>{{ $digimon->name }}</h2>
                <h3>Livello: {{ $digimon->level }}</h3>
                <h3>Tipo: {{ $digimon->type }}</h3>
            </div>
            <div class="col-12 col-md-6">
                <img src="{{ Storage::url($digimon->img) }}" alt="{{ $digimon->name }}">
            </div>
            <div class="row">
                <form action="{{route('digimon.delete', compact('digimon'))}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Elimina</button>
                </form>
            </div>
        </div>
    </div>    
</x-layout>
