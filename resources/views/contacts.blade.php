<x-layout>
    <div class="bg-landscape-contacts">
    <div class="container">
        <div class="row">
            <div class="card p-5 mt-5 col-12 col-md-6 offset-md-3 bg-accent form-border">
                <form method="POST" action="{{route('contacts.submit')}}">
                    @csrf
                    <div class="text-center tc-second mb-3">
                        <h1 class="fw-bold">Contact us <i class="far fa-address-card"></i></h1>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label tc-main tc-second">Full Name</label>
                    <input name="user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your full name here">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label tc-main tc-second">Email Address</label>
                    <input name="email" type="email" class="form-control" id="exampleInputPassword1" placeholder="Your email address here">
                    <div id="emailHelp" class="form-text tc-second">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label tc-main tc-second">What would you like to know?</label>
                        <textarea name="message" class="form-control tc-main" id="exampleFormControlTextarea1" rows="3" placeholder="Ask here..."></textarea>
                    </div>
                    <button type="submit" class="btn contact-button">Send</button>
                </form>
            </div>
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
</x-layout>