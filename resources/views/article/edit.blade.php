<x-layout>
    <div class="container-fluid bg-secondary-grey text-center" style="max-width: 1100px; margin: 0 auto;">
            <div class="row justify-content-center align-items-center mt-3 pt-3 bg-custom-sfondo">
                <h1 class="display-1 text-white mt-5">
                    Modifica un articolo
                </h1>
            </div>
        </div>
                
            <div class="container bg-white" style="max-width: 1100px; margin: 0 auto; min-height: 100vh; padding: 20px;">
                <div class="row justify-content-center align-items-center" style="max-width: 1100px;">
                    <div class="col-12 col-md-8">
    
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="{{ route('articleUpdate', ['article' => $article]) }}" method="POST" class="card p-5 shadow"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label for="title" class="form-label">Titolo:</label>
                            <input name="title" type="text" class="form-control" id="title" value="{{$article->title}}">
                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Sottotitolo:</label>
                            <input name="subtitle" type="text" class="form-control" id="subtitle" value="{{$article->subtitle}}">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Immagine:</label>
                            <input name="image" type="file" class="form-control" id="image">
                        </div>
                        <div class="mb-3">
                            <label for="tags" class="form-label">Tags</label>
                            <input name="tags" class="form-control" id="tags" value="{{$article->tags->implode('name',',')}}">
                            <span class="small fst-italic">Per inserire più tag, separali con una virgola.</span>
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Categoria:</label>
                            <select name="category" id="category" class="form-control text-capitalize">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" @if($article->category && $category->id == 
                                $article->category->id) selected @endif>{{$category->name}}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="body" class="form-label">Corpo del testo:</label>
                            <textarea name="body" id="body" cols="30" rows="7" class="form-control">{{$article->body}}</textarea>
                        </div>
                        <div class="mt-2">
                            <button class="btn btn-color">Inserisci un articolo</button>
                            <a class="btn btn-color" href="{{ route('homePage') }}">Torna alla home</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
    </x-layout>
    