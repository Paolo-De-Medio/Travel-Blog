<x-layout>
    <div class="bg-landscape-createTrip">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5 tc-accent">
                    <h1 class="fw-bold">Add a destination</h1>
                </div>
            </div>
        </div>
    
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
        </div>
        @endif
        
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3 my-5 p-5 bg-accent form-border">
                    <form method="POST" action="{{route('trip.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label tc-second">Full Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Your full name here">
                          </div>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label tc-second">Destination</label>
                          <input name="destination" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter destination">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label tc-second">Photo</label>
                            <input name="img" type="file" class="form-control" id="exampleInputEmail1" placeholder="upload image">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputText1" class="form-label tc-second">Description</label>
                            <textarea name="description" id="exampleInputText1" cols="30" rows="5" placeholder="write here..."></textarea>
                          </div>
                        <button type="submit" class="btn contact-button">Post</button>
                      </form>
                </div>
            </div>
            <div class="row p-5">
                <div class="col-12 text-center fw-light tc-second">
                    <p>Lorem Impsum</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident molestias expedita ex culpa voluptate accusamus ea aliquam porro qui. Incidunt consequatur blanditiis ad quis doloremque quas iure. Earum, quod cumque.</p>
                    <i class="far fa-copyright me-2"></i><span>Paolo De Medio</span>
                </div>
            </div>
        </div>
    </div>
</x-layout>