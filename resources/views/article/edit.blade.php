<x-layout>
    <div class="bg-landscape-createArticle">
    
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
                <div class="card col-12 col-md-6 offset-md-3 mt-5 p-5 bg-accent form-border">
                    <form method="POST" action="{{route('article.update', compact('article'))}}" enctype="multipart/form-data">
                        @csrf
                        @method('put') 
                        <div class="text-center tc-second mb-4">
                            <h2 class="fw-bold">Edit this article <i class="far fa-edit"></i></h2>
                        </div>                     
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label tc-second">Title</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your title" value="{{$article->name}}">
                          </div>
                        <div class="mb-3">
                            <img src="{{Storage::url($article->img)}}" alt="" class="img-fluid mb-3">
                            <label for="exampleInputEmail1" class="form-label tc-second">Photo</label>
                            <input name="img" type="file" class="form-control" id="exampleInputEmail1" placeholder="upload image">
                          </div>
                          <label for="exampleInputText1" class="form-label tc-second">Description</label>
                          <div class="mb-3">
                            <textarea name="description" id="exampleInputText1" cols="55" rows="5" placeholder="Write here...">{{$article->description}}</textarea>
                          </div>
                        <button type="submit" class="btn contact-button">Update</button>
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