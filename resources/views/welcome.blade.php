<x-layout>
    <div class="container-fluid bg-secondary-grey text-center" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center align-items-center mt-5 pt-3">
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
                url="#"
                />
            </div>
            
            
            
            
            @endforeach
            
        </div>
    </div>
</x-layout>
