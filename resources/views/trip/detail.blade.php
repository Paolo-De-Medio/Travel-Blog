<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>{{$trip->destination}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="card bg-dark text-white">
                    <img src="{{Storage::url($trip->img)}}" class="card-img" alt="...">
                    <div class="card-img-overlay">
                      <h5 class="card-title">{{$trip->destination}}</h5>
                      <p class="card-text">{{$trip->description}}</p>
                      <p class="card-text">{{$trip->name}}</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</x-layout>