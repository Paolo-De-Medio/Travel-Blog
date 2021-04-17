<x-layout>
    <div class="bg-landscape-register">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mt-5">
                    <h1 class="tc-accent fw-bold">Register <i class="far fa-address-book"></i></h1>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3 mt-4 mb-5 p-5 bg-accent form-border">
                    <form method="POST" action="{{route('register')}}">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label tc-second">Full Name</label>
                            <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Your name here">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label tc-second">Email Address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Your email address here">
                            <div id="emailHelp" class="form-text tc-second">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label tc-second">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Your password here">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label tc-second">Confirm Password</label>
                            <input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Confirm your password">
                        </div>
                        <button type="submit" class="btn contact-button">Register</button>
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