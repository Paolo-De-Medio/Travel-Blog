<x-layout>
    {{-- FLASH MESSAGE --}}
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif

    {{-- HEADER --}}
    <header class="masthead">
        <div class="overlay"></div>
        <div class="container h-100">
            <div class="row h-100 align-items-center">
              <div class="col-12 custom-title text-center tc-second">
                <h1 class="fw-bold display-1" data-aos="flip-down" data-aos-once="true" data-aos-duration="1000"><span class="tc-accent">Travel</span>.it</h1>
                <p class="lead">Make your dreams come true!</p>
              </div>
            </div>
          </div>
    </header>

    <!-- Page Content -->
    <div class="container py-5">
      <div class="row">
        <div class="col-12 col-md-6 p-3">
          <h2 class="fw-bold tc-accent">What they say about us:</h2>
          <p class="lead mt-3 tc-second">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam blanditiis, dicta consequatur hic fugit similique quibusdam enim repellendus eveniet obcaecati saepe accusantium at molestias nulla, labore numquam necessitatibus animi nesciunt.!</p>
        </div>
        <div class="col-12 col-md-6 p-3">
          <div class="d-flex" data-aos="flip-down" data-aos-once="true" data-aos-delay="100" data-aos-duration="1000">
          <div alt="Avatar" class="avatar avatar-1 img-thumbnail rounded-circle"></div>
          <i class="far fa-comment-dots tc-accent fs-2 ms-2"></i>
          </div>
          <p class="message mt-4 p-4 bg-second tc-main" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">Lorem ipsum dolor sit amet <br> voluptas quos eos esse laboriosam? Dolore, et!</p>
        </div>

        <div class="col-12 col-md-6 p-3 mt-3">
          <div class="d-flex" data-aos="flip-up" data-aos-once="true" data-aos-delay="200" data-aos-duration="1000">
            <div alt="Avatar" class="avatar avatar-2 img-thumbnail rounded-circle"></div>
            <i class="far fa-comment-dots tc-accent fs-2 ms-2"></i>
          </div>        
          <p class="message mt-4 p-4 bg-second tc-main" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus eligendi dolorem adipisci, quisquam sapiente iure harum porro nobis cum! Odit mollitia reiciendis ipsam est! Numquam voluptas laborum eveniet sunt tempore!</p>
        </div>

        <div class="col-12 col-md-6 p-3 mt-3">
          <div class="d-flex" data-aos="flip-up" data-aos-once="true" data-aos-delay="100" data-aos-duration="1000">
            <div alt="Avatar" class="avatar avatar-3 img-thumbnail rounded-circle"></div>
            <i class="far fa-comment-dots tc-accent fs-2 ms-2"></i>
          </div>         
          <p class="message mt-4 p-4 bg-second tc-main" data-aos="fade-left" data-aos-once="true" data-aos-duration="1000">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deleniti atque nam eius harum eaque doloremque nobis, sunt corrupti, repellat illum ratione dolore libero officia asperiores molestias sed ipsum? Cupiditate, explicabo.</p>
        </div>
      </div>
    </div>
    <hr class="tc-accent mb-5">
    <div class="container">
      <div class="row text-center my-5">
        <div class="col-6 col-md-4" data-aos="fade-right" data-aos-once="true" data-aos-delay="100">
          <i class="fas fa-home tc-accent fs-1 my-3"></i>
          <p class="tc-second fw-light">Feel home with our community!</p>
        </div>
        <div class="col-6 col-md-4" data-aos="fade-up" data-aos-once="true" data-aos-delay="150">
          <i class="fas fa-caravan tc-accent fs-1 my-3"></i>
          <p class="tc-second fw-light">New adventures are coming!</p>
        </div>
        <div class="col-6 col-md-4" data-aos="fade-left" data-aos-once="true" data-aos-delay="100">
          <i class="fas fa-bed tc-accent fs-1 my-3"></i>
          <p class="tc-second fw-light">More than 30% off for new members!</p>
        </div>
      </div>
    </div>
    
</x-layout>