<x-layout>
    <div class="container-fluid bg-secondary-grey text-center" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center align-items-center mt-5 pt-3">
            <h1 class="display-1 text-white">
                Tutti gli Articoli
            </h1>
        </div>
    </div>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                
                <x-card 
                title="{{$article->title}}"
                subtitle="{{$article->subtitle}}"  
                image="{{$article->image}}"   
                category="{{$article->category->name}}"
                data="{{$article->created_at->format('d/m/Y')}}"
                user="{{$article->user->name}}"
                url="{{route('articleShow', compact('article'))}}"
                />
            </div>
            
            
            
            
            @endforeach
            
        </div>
    </div>
</x-layout>
