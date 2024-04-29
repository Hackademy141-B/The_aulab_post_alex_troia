<x-layout>

    <div class="container-fluid bg-secondary-grey text-center" style="max-width: 1100px; margin: 0 auto;">
      <div class="row justify-content-center align-items-center mt-5 pt-3 backgraund-custom-sfondo">
          <h1 class="display-1 text-white">
            Bentornato, Redattore
          </h1>
        </div>
      </div>
  
      @if(session('message'))
        <div class="alert alert-success text-center" style="max-width: 1100px; margin: 0 auto;">
          {{session('message')}}
        </div>
      @endif
  <div class="container bg-white" style="max-width: 1100px; margin: 0 auto; min-height: 100vh; padding: 20px;">
      <div class="container bg-white" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2>Articoli in fase di revisione</h2>
          </div>
          <x-writer-articles-table :articles="$unrevisionedArticles" />
        </div>
      </div>
  
      <div class="container bg-white" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2>Articoli pubblicati</h2>
          </div>
          <x-writer-articles-table :articles="$acceptedArticles" />
        </div>
      </div>
  
      <div class="container bg-white" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2>Articoli respinti</h2>
          </div>
          <x-writer-articles-table :articles="$rejectedArticles" />
        </div>
      </div>
  </div>
  
    </x-layout>