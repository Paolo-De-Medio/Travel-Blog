<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>I nostri articoli</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card">
                    @if($article->img)

                    <img src="{{Storage::url($article->img)}}" alt="">
                    @else
                    
                    <img src="/img/default.jpg" alt="">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$article->name}}</h5>
                        <p class="card-text">{{$article->description}}</p>
                        <a href="{{route('article.detail', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
                    </div>
                </div>
            </div>               
            @endforeach
        </div>
    </div>
    </div>
</x-layout>