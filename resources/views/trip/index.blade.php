<x-layout>
    <div class="container-fluid">
        <div class="row background-custom">
            <div class="col-12 text-center my-4 tc-second">
                <h1 class="fw-bold">Tutte le destinazioni</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @foreach ($trips as $trip)
            <div class="col-12 col-md-4">
                <div class="card my-3" style="min-height: 550px">
                    <img src="{{Storage::url($trip->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title tc-accent">{{$trip->destination}}</h5>
                      <p class="card-text">{{$trip->description}}</p>
                      <p class="card-text"><small class="text-muted">{{$trip->name}}</small></p>
                      <a href="{{route('trip.detail', compact('trip'))}}" class="btn article-button">Go to details</a>
                    </div>
                  </div>    
            </div>
            @endforeach
        </div>
    </div>
    </div>
</x-layout>