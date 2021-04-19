<x-layout>
    <div class="container-fluid">
        <div class="row background-custom">
            <div class="col-12 text-center my-4 tc-second">
                <h1>Details about this trip</h1>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-5">
                <div class="card bg-dark text-white">
                    <img src="{{Storage::url($trip->img)}}" class="card-img" alt="...">
                    <div class="card-img-overlay"></div>
                  </div>
                  <a href="{{route('trip.index')}}" class="btn detail-button my-5">Back to trips</a>
                  @if ($trip->user->id == Auth::id())
                    <a href="{{route('trip.edit', compact('trip'))}}" class="btn detail-button my-5">Edit</a>
                    <form method="POST" action="{{route('trip.destroy', compact('trip'))}}">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>  
                  @endif
            </div>
            <div class="col-12 col-md-7 tc-second">
                <h3 class="tc-accent">{{$trip->destination}}</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui vel repudiandae reprehenderit. Sequi ea tenetur placeat enim! Vero reprehenderit rem atque veritatis perferendis nisi cumque praesentium, porro adipisci. Pariatur, nobis.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur harum, labore necessitatibus</p>
                <hr class="tc-accent">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt id voluptate quasi officiis, inventore mollitia reprehenderit cupiditate nesciunt cumque, sapiente earum consequatur saepe qui natus ipsa iste culpa dicta minus?</p>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim ab voluptatem nesciunt error minima! Ut laborum dicta labore nulla soluta ipsa perferendis aliquam dolorem, iure qui deleniti suscipit reiciendis esse?</p>
            </div>
        </div>
    </div>
    <hr class="tc-accent">
    <br>
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 tc-second text-center">
                <p>Click <a href="{{route('trip.create')}}" class="tc-accent">here</a> if you want to add your destination!</p>
            </div>
        </div>
    </div>
</x-layout>