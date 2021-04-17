<x-layout>
    <div class="container-fluid mb-5">
        <div class="row bg-accent">
            <div class="col-12 text-center my-5">
                <h1 class="fw-bold tc-second">Tutte le destinazioni</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach ($trips as $trip)
            <div class="col-12 col-md-3">
                <div class="card mb-3">
                    <img src="{{Storage::url($trip->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$trip->destination}}</h5>
                      <p class="card-text">{{$trip->description}}</p>
                      <p class="card-text"><small class="text-muted">{{$trip->name}}</small></p>
                    </div>
                  </div>    
            </div>
            @endforeach
        </div>
    </div>
    </div>
</x-layout>