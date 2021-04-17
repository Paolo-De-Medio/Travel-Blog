<x-layout>
    <div class="container">
            <div class="row p-4 bg-main">
                <div class="col-12 text-center">
                    <h2 class="fw-bold">CONTACT US</h2>
                </div>
            </div>
    </div>
    <div class="container">
        <div class="row my-5">
            <div class="col-12 col-md-6">
                <img src="/img/Form.png" class="img-fluid" alt="">
            </div>
    
            <div class="card p-5 col-12 col-md-6">
                <form method="POST" action="{{route('contacts.submit')}}">
                    @csrf
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label tc-main fw-bold">Full Name</label>
                    <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label tc-main fw-bold">Email Address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label tc-main fw-bold">What would you like to know?</label>
                        <textarea name="message" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Richiedi le informazioni necessarie"></textarea>
                    </div>
                    <button type="submit" class="btn-custom">Send</button>
                </form>
            </div>
        </div>
        
        <div class="row p-5">
            <div class="col-12 text-center fw-light">
                <p>Lorem Impsum</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident molestias expedita ex culpa voluptate accusamus ea aliquam porro qui. Incidunt consequatur blanditiis ad quis doloremque quas iure. Earum, quod cumque.</p>
                <i class="far fa-copyright me-2"></i><span>Paolo De Medio</span>
            </div>
        </div>
    </div>   
</x-layout>