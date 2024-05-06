<x-layout>
    <div class="container-fluid bg-secondary-grey text-center" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center align-items-center mt-5 pt-3 bg-custom-sfondo">
            <h1 class="display-3 text-white">
                Bentornato, Amministratore
            </h1>
        </div>
    </div>
    
    @if (session('message'))
    <div class="alert alert-success text-center" style="max-width: 1100px; margin: 0 auto;">
        {{ session('message') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="container bg-white" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Richieste per ruolo Amministratore
                </h2>
                <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
            </div>
        </div>
    </div>
    
    <div class="container bg-white" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Richieste per ruolo revisore
                </h2>
                <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
            </div>
        </div>
    </div>
    
    <div class="container bg-white" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    Richieste per ruolo redattore
                </h2>
                <x-requests-table :roleRequests="$writerRequests" role="redattore"/>
            </div>
        </div>
    </div>
    <div class="container bg-white" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>
                    I tags della piattaforma
                </h2>
                <x-metainfo-table :metaInfos="$tags" metaType="tags"/>
            </div>
        </div>
    </div>
    <div class="container bg-white" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Le categorie della piattaforma</h2>
                <x-metainfo-table :metaInfos="$categories" metaType="categories"/>
                <form class="d-flex" action="{{route('adminStoreCategory')}}" method="POST">
                    @csrf
                    <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                    <button type="submit" class="btn btn-color">Aggiungi</button>
                </form>    
            </div>
        </div>
    </div>
</x-layout>
