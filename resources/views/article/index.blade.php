<x-layout>
    <div class="container-fluid">
        <div class="row bg-accent">
            <div class="col-12 text-center my-5 tc-second">
                <h1>I nostri articoli</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row m-0">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 m-2">
                <div>
                    @if($article->img)

                    <img src="{{Storage::url($article->img)}}" alt="" class="img-fluid">
                    @else
                    
                    <img src="/img/default.jpg" alt="">
                    @endif
                    <div class="card-body bg-second">
                        <h5 class="card-title tc-accent">{{$article->name}}</h5>
                        <p class="card-text tc-main">{{$article->description}}</p>
                        <a href="{{route('article.detail', compact('article'))}}" class="btn contact-button">Dettaglio</a>
                    </div>
                </div>
            </div>               
            @endforeach
        </div>
    </div>
    </div>
</x-layout>