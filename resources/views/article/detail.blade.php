<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>{{$article->name}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card bg-dark text-white">
                    <img src="{{Storage::url($article->img)}}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">{{$article->name}}</h5>
                      <p class="card-text">{{$article->description}}</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-layout>