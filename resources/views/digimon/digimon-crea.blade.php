<x-layout>
    <div class="container-fluid">
        <div class="row">
            <h3>Crea un nuovo Digimon:</h3>
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-12 col-md-6">
                <form method="post" action="{{ route('digimon.submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome:</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedy="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="level" class="form-label">Livello:</label>
                        <input type="text" name="level" class="form-control" id="level">
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo:</label>
                        <input type="text" name="type" class="form-control" id="type">
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
