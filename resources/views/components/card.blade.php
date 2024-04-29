<div class="card">
    <img src="{{ Storage::url($image) }}" alt="" class="card-img-top">
    <div class="card-body">
        <h5 class="card-title">
            {{ $title }}
        </h5>
        <p class="card-text">
            {{ $subtitle }}
        </p>
        @if ($category)
            <a href="{{ $urlCategory }}"
                class="small text-muted d-flex justify-content-center align-items-center">{{ $category }}
            </a>
        @else
            <p class="small text-muted fst-italic text-capitalize">
                Non Categorizzato
            </p>
        @endif

        @if ($tags)

            <p class="small fst-italic text-capitalize">
                @foreach ($tags as $tag)
                    #{{ $tag->name }}
                @endforeach
            </p>
        @endif
        <div class="card-footer text-muted d-flex justify-content-center align-items-center">
            Redatto il {{ $data }} da {{ $user }}
            <a href="{{ $url }}" class="btn btn-info text-white">Leggi</a>
        </div>
    </div>
</div>
