<x-layout>
    <div class="container-fluid bg-secondary-grey text-center" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center align-items-center mt-5 pt-3">
            <h1 class="display-1 text-white">
                Titolo : {{ $article->title }}
            </h1>
        </div>
    </div>

    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <img src="{{ Storage::url($article->image)}}" alt="" class="img-fluid my-3">
           <div class="text-center">
            <h2> {{$article->subtitle}}</h2>
            <div class="my-3 text-muted-fst-italic">
                <p>Redatto da {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
            </div>
           </div>
           <hr>
           <p>{{$article->body}}</p>
           <div class="text-center">
            <a href="{{route('articleIndex')}}" class="btn btn-info text-white my-5">Torna indietro</a>
           </div>
        </div>
    </div>
</x-layout>
