<x-layout>
    <div class="container-fluid bg-secondary-grey text-center" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center align-items-center mt-5 pt-3 bg-custom-sfondo">
                <h1 class="display-1 text-white">
                    Redatto da {{ $user->name }}
                </h1>
            </div>
        </div>
    
        <div class="container bg-sfondo" style="max-width: 1100px; margin: 0 auto; min-height: 100vh; padding: 20px;">
            <div class="row justify-content-center align-items-center" style="max-width: 1100px;">
                @foreach($articles as $article)
                    <div class="col-12 col-md-4 my-2 mx-auto">
                        <div class="card text-center h-100 custom-card">
                            <img src="{{ Storage::url($article->image) }}" class="card-img-top image-card-custom" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-text text-truncate">{{ $article->subtitle }}</p>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                                Redatto il {{ $article->created_at->format('d/m/Y') }} da {{ $article->user->name }}
                                <a href="{{route('articleShow', compact('article')) }}" class="btn btn-color">Leggi</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </x-layout>
    