<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-5">
                <h1>Aggiungi una destinazione</h1>
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
            <div class="col-12 col-md-6 offset-md-3 my-5">
                <form method="POST" action="{{route('trip.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nome Inserzionista</label>
                        <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Destinazione</label>
                      <input name="destination" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Foto</label>
                        <input name="img" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputText1" class="form-label">Inserisci la descrizione</label>
                        <textarea name="description" id="exampleInputText1" cols="30" rows="5"></textarea>
                      </div>
                    <button type="submit" class="btn btn-primary">Pubblica</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>