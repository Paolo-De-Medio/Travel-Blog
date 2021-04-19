<x-layout>
    <div class="bg-landscape-login">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 offset-md-3 mt-5 p-5 bg-accent form-border">
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="mb-3 text-center">
                            <h1 class="tc-second fw-bold">Login <i class="far fa-user"></i></h1>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label tc-second">Email Address</label>
                            <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Your email address here">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label tc-second">Password</label>
                            <input name="password" type="password" class="form-control" id="exampleInputEmail1" placeholder="Your password here">
                        </div>
                        <button type="submit" class="btn contact-button">Login</button>
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