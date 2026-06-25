<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @if ($errors->any())
                <div class="alert alert-danger col-6 text-center">
                    <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            <div class="col-12 col-md-8">
                <h2 class="display-4 text-center">Modifica il Digimon:</h2>
                <form method="post" action="{{route('digimon.update', compact('digimon'))}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" name="name" class="form-control" id="name" value="{{$digimon->name}}" aria-describedy="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">Livello:</label>
                        <input type="text" name="level" class="form-control" id="level" value="{{$digimon->level}}">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo:</label>
                        <input type="text" name="type" class="form-control" id="type" value="{{$digimon->type}}">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Immagine del Digimon:</label>
                        <input type="file" name="img" class="form-control" id="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci un Digimon</button>
                </form>
            </div>    
        </div>        
    </div>
</x-layout>
