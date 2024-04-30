<x-layout>
    <div class="container-fluid bg-secondary-grey text-center" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center align-items-center mt-5 pt-3 bg-custom-sfondo">
            <h1 class="display-3 text-white">
                Titolo : {{ $article->title }}
            </h1>
        </div>
    </div>

    
    <div class="container bg-sfondo" style="max-width: 1100px; margin: 0 auto; min-height: 100vh; padding: 20px;">
        <div class="row justify-content-center align-items-center" style="max-width: 1100px;">
            <div class="col-12 col-md-8">
                <img src="{{ Storage::url($article->image) }}" alt="" class="img-fluid my-3">
                <div class="text-center">
                    <h2>{{ $article->subtitle }}</h2>
                    <div class="my-3 text-muted fst-italic">
                        <p>Redatto da {{ $article->user->name }} il {{ $article->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
                <hr>
                <p>{{ $article->body }}</p>
                <div class="row">
                    <div class="col-md-3">
                        @if(Auth::user() && Auth::user()->is_revisor)
                            <form action="{{route('revisorRejectArticle', compact('article'))}}" method="POST">
                                @csrf
                                <button class="btn btn-danger text-white my-5" style="margin-right: 10px;">Rifiuta</button>
                            </form>
                        @endif
                    </div>
                    <div class="col-md-3 text-center">
                        @if(Auth::user() && Auth::user()->is_writer)
                        <form action="{{ route('articleDestroy', compact('article')) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger text-white my-5">Elimina</button>
                            </form>
                        @endif
                    </div>
                    <div class="col-md-3 text-center">
                        @if(Auth::user() && Auth::user()->is_writer)
                        <a href="{{route('articleEdit', compact('article'))}}" class="btn btn-warning text-white my-5">Modifica</a>
                        @endif
                    </div>
                    <div class="col-md-3 text-end">
                        @if(Auth::user() && Auth::user()->is_revisor)
                            <form action="{{route('revisorAcceptArticle', compact('article'))}}" method="POST">
                                @csrf
                                <button class="btn btn-success text-white my-5">Accetta</button>
                            </form>
                        @endif
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{route('homePage')}}" class="btn btn-color my-5">Torna indietro</a>
                </div>
                
            </div>
        </div>
    </div>
</x-layout>
