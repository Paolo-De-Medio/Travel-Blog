<nav class="navbar navbar-expand-lg navbar-dark bg-custom sticky-top">
    <div class="container font-brand">
      <a class="navbar-brand fw-bold" href="{{route('welcome')}}"><span class="tc-accent">Travel</span>.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('trip.index')}}">Our Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts')}}">Contacts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
          </li>
          @else
          <li class="nav-item">
            <a class="nav-link" href="{{route('trip.index')}}">Our Destinations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">Articles</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('contacts')}}">Contacts</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Hi, <span class="tc-accent">{{Auth::user()->name}}</span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="{{route('trip.create')}}">Add destination</a></li>
              <li><a class="dropdown-item" href="{{route('article.create')}}">Add your article</a></li>
              <li><a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('form-logout').submit();">Logout</a></li>
              <form method="POST" action="{{route('logout')}}" id="form-logout" style="display: none">
                @csrf
            </form>
            </ul>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>