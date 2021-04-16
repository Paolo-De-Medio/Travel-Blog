<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>Tutte le destinazioni</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach ($trips as $trip)
            <div class="col-12 col-md-3">
                <div class="card">
                    @if($trip->img)

                    <img src="{{Storage::url($trip->img)}}" alt="">
                    @else
                    
                    <img src="/img/default.jpg" alt="">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{$trip->destination}}</h5>
                        <p class="card-text">{{$trip->description}}</p>
                        <p class="card-text">{{$trip->name}}</p>
                        <a href="{{route('trip.detail', compact('trip'))}}" class="btn btn-primary">Dettaglio</a>
                    </div>
                </div>
            </div>               
            @endforeach
        </div>
    </div>
    </div>
</x-layout>