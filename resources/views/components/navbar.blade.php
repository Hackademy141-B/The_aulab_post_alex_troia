<nav class="navbar fixed-top navbar-expand-lg bg-primary-blue">
    <div class="container-fluid">
        <div>
            <a class="navbar-brand" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                aria-controls="offcanvasExample">
                <i class="fa-solid fa-bars" style="color: #ebe5e5;"></i>
                <span class="ms-2">Sezioni</span>
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('homePage') }}"><i
                            class="fa solid fa-house " style="color: #ffffff;"></i></a>
                </li>
                <div class="col-8 col-lg-3">
                    @auth
                    @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle ospite-link text-end me-0" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"
                            onclick="this.classList.add('clicked');">
                            Benvenuto {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @if (Auth::user()->is_writer)
                                <li><a class="dropdown-item nav-link1" href="{{ route('articleCreate') }}">Inserisci un
                                        articolo</a></li>
                                <li><a class="dropdown-item nav-link1" href="{{ route('writerDashboard') }}">Dashboard
                                        Redattore</a></li>
                            @endif
                            @if (Auth::user()->is_admin)
                                <li><a class="dropdown-item nav-link1" href="{{ route('adminDashboard') }}">Dashboard Admin</a>
                                </li>
                            @endif
                            @if (Auth::user()->is_revisor)
                                <li><a class="dropdown-item nav-link1" href="{{ route('revisorDashboard') }}">Dashboard del
                                        revisore</a></li>
                            @endif
                            @if (!Auth::user()->is_admin && !Auth::user()->is_revisor && !Auth::user()->is_writer)
                                <li><a class="dropdown-item fw-bold" href="{{ route('careers') }}">Lavora con noi!</a></li>
                            @endif
                            <li>
                                <a class="dropdown-item nav-link1" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a>
                            </li>
                            <form method="post" action="{{ route('logout') }}" id="form-logout" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                @endif
                    @endauth
                    </li>
                </div>

                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-end me-0" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" onclick="this.classList.add('clicked');">
                            Benvenuto Ospite
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{ route('login') }}">Accedi</a></li>
                        </ul>
                    </li>
                @endguest
            </ul>
            <form class="d-flex" method="GET" action="{{ route('articleSearch') }}">
                <input class="form-control me-2" type="search" name="query" placeholder="Cosa stai cercando?"
                    aria-label="Search">
                <button class="btn btn-outline-info" type="submit" class="btn btn-color">Cerca</button>
            </form>
        </div>
    </div>


</nav>
<div class="offcanvas offcanvas-start bg-sfondo" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
      <ol class="nav-item mx-auto">
          <a class="nav-link1" href="{{route('articleIndex')}}"><h5>The Aulab Post</h5></a>
      </ol>
  </div>
      @foreach($categories as $category)
          <ol class="nav-item">
              <a class="nav-link1" href="{{ route('articlebyCategory', ['category' => $category->id]) }}">{{ $category->name }}</a>
          </ol>
      @endforeach
      <div class="offcanvas-body">
          <div class="dropdown mt-3">
              <form method="GET" action="{{ route('articleSearch') }}">
                  <input type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
                  <button type="submit" class="btn btn-color">Cerca</button>
              </form>
          </div>
      </div>
</div>