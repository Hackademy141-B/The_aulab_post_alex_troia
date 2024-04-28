<table class="table table-striped table-hover border">
    <thead class="table-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Redattore</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <th scope="row">{{$article->id}}</th>
            <td>{{ $article->title }}</td>
            <td>{{ $article->subtitle }}</td>
            <td>{{ $article->user->name }}</td>
            <td>
        @if(is_null($article->is_accepted))
            <a href="{{route('articleShow', compact('article'))}}" class="btn btn-color">Leggi l'articolo</a>
        @else
            <form action="{{route('revisorUndoArticle', compact('article'))}}" method="POST">
                @csrf
                <button class="btn btn-color">Riporta in revisione</button>
            </form>
        @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>