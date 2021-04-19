<x-layout>
    <div class="main-background">
        <div class="container-fluid">
            <div class="row background-custom">
                <div class="col-12 text-center my-4 tc-second">
                    <h1>Destinations available</h1>
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
                          <a class="card-text" href="{{route('trip.auth', ['auth'=>$trip->user->id])}}"><small class="text-muted">{{$trip->user->name}}</small></a>
                          <br>
                          <br>
                          <a href="{{route('trip.detail', compact('trip'))}}" class="btn article-button">Go to details</a>
                        </div>
                      </div>    
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>