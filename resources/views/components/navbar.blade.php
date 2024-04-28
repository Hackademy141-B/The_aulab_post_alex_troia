<nav class="navbar fixed-top navbar-expand-lg bg-primary-blue">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homePage') }}">The Aulab Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('homePage')}}"><i class="fa solid fa-house " style="color: #ffffff;"></i></a>
                </li>
                <div class="col-8 col-lg-3">
                    <li class="nav-item dropdown">
                        @auth
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle ospite-link text-end me-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="this.classList.add('clicked');">
                              Benvenuto {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="{{route('careers')}}">Lavora con noi!</a></li>
                              @if(Auth::user()->is_writer)
                                <li>
                                  <a class="dropdown-item" href="{{route('articleCreate')}}">Inserisci un articolo</a>
                                </li>
                              @endif
                              @if(Auth::user()->is_writer)
                                <li>
                                  <a class="dropdown-item" href="{{route('writerDashboard')}}">Dashboard Redattore</a>
                                </li>
                              @endif
                              @if(Auth::user()->is_admin)
                                <li><a class="dropdown-item" href="{{route('adminDashboard')}}">Dashboard Admin</a></li>
                              @endif
                              @if(Auth::user()->is_revisor)
                                <li><a class="dropdown-item" href="{{route('revisorDashboard')}}">Dashboard del revisore</a></li>
                              @endif
                              <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">Logout</a></li>
                              <form method="post" action="{{route('logout')}}" id="form-logout" class="d-none">
                                @csrf
                              </form>
                            </ul>
                          </li>
                        @endauth
                </div>
                
                @guest
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle text-end me-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" onclick="this.classList.add('clicked');">
                            Benvenuto Ospite
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route('register')}}">Registrati</a></li>
                            <li><a class="dropdown-item" href="{{route('login')}}">Accedi</a></li>
                          </ul>
                        </li>
                      @endguest
                        </li>
                    </ul>
                </li>
            </ul>
                <form class="d-flex" method="GET" action="{{route('articleSearch') }}">
                  <input class="form-control me-2" type="search" name="query" placeholder="Cosa stai cercando?" aria-label="Search">
                  <button class="btn btn-outline-info" type="submit" class="btn btn-color">Cerca</button>
                </form>
        </div>
    </div>
</nav>
