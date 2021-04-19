<x-layout>
    <div class="container-fluid">
        <div class="row background-custom">
            <div class="col-12 text-center my-4 tc-second">
                <h1>Articles posted by {{$user->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach ($articles as $article)
            <div class="col-12 col-md-6 p-4">
                <div class="card p-3">
                    @if($article->img)

                    <img src="{{Storage::url($article->img)}}" alt="" class="img-fluid">
                    @else
                    
                    <img src="/img/default.jpg" alt="" class="img-fluid">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title tc-accent">{{$article->name}}</h5>
                        <p class="card-text tc-main">{{$article->description}}</p>
                        <a class="card-text" href="{{route('article.auth', ['auth'=>$article->user->id])}}"><small class="text-muted">{{$article->user->name}}</small></a>
                        <br>
                        <br>
                        <a href="{{route('article.detail', compact('article'))}}" class="btn article-button">View More</a>
                    </div>
                </div>
            </div>               
            @endforeach
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <a href="{{route('article.index')}}" class="btn detail-button">Back to all the articles</a>
            </div>
        </div>
    </div>
</x-layout>