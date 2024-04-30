<x-layout>
    <div class="container-fluid bg-secondary-grey text-center" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center align-items-center mt-5 pt-3 bg-custom-sfondo">
            <h1 class="display-1 text-white">
                The Aulab Post
            </h1>
        </div>
    </div>
    
    @if (session('message'))
    <div class="alert alert-success text-center" style="max-width: 1100px; margin: 0 auto;">
        {{ session('message') }}
    </div>
    @endif
    
    <div class="container text-center text-black bg-sfondo mx-auto" style="max-width: 1100px;">
        <div class="row justify-content-center">
            <h2 class="display-6 mt-4">
                Ultimi articoli
            </h2>
        </div>
    </div>
    
    <div class="container bg-sfondo" style="max-width: 1100px; margin: 0 auto; min-height: 100vh; padding: 20px;">
        <div class="row justify-content-center align-items-center" style="max-width: 1100px;">
            @foreach($articles as $article)
                <div class="col-12 col-md-4 my-4 mx-auto">
                    <div class="card text-center custom-card">
                        <img src="{{ Storage::url($article->image) }}" class="card-img-top image-card-custom" alt="{{ $article->title }}">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $article->title }}</h5>
                            <p class="card-text text-center text-truncate">{{ $article->subtitle }}</p>
                            <p class="small text-muted fst-italic text-capitalize">
                                @if($article->category)
                                    {{ $article->category->name }}
                                @else
                                    Non categorizzato
                                @endif
                                <span class="text-muted small fst-italic">- tempo di lettura: {{ $article->readDuration() }} min</span>
                            </p>
                            <p class="small text-muted fst-italic text-capitalize">
                                @foreach($article->tags as $tag)
                                    #{{ $tag->name }}
                                @endforeach
                            </p>
                        </div>
                        <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                            <span class="text-muted">
                                Redatto il {{$article->created_at->format('d/m/Y')}} da 
                                <a class="text-secondary" href="{{ route('articleByUser', ['user' => $article->user->id]) }}">
                                    {{$article->user->name}}
                                </a>
                            </span>
                            <a href="{{route('articleShow', compact('article'))}}" class="btn btn-color">Leggi</a>
                        </div>
                    </div>
                </div>
            @endforeach
            
        </div>
    </div>
</x-layout>
