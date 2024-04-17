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
                <li> <a href="{{route ('articleCreate')}}" class="nav-link">Inserisci un Articolo</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Benvenuto
                    </a>
                    <ul class="dropdown-menu">
                        @guest
                        <li><a class="dropdown-item" href="{{ route('register') }}">Registrati</a></li>
                        @endguest
                        @auth
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                                <a class="dropdown-item" href="#"
                                    onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">
                                    Logout</a>
                                <form action="{{ route('logout') }}" method="POST" id="form-logout" class="d-none">
                                    @csrf
                                </form>
                            @endauth
                        </li>
                    </ul>
                </li>
            </ul>
            @auth
                <p class="text-white">Ciao {{ Auth::user()->name }}</p> 
            @else
                <a href="{{ route('login') }}" class="text-white">Accedi</a>


            @endauth
        </div>
    </div>
</nav>
