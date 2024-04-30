<x-layout>
    <div class="container-fluid bg-secondary-grey text-center bg-custom-sfondo position-relative" style="max-width: 1100px; margin: 0 auto;">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
            <h1 class="display-1 font-size position-absolute">
                Accedi
            </h1>
        </div>
    </div>
        <div class="container my-5">
            <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                <form class="card p-5 shadow" action="{{route('login')}}" method="post">
                @csrf

                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email:</label>
                        <input name="email" type="email" class="form-control" id="InputEmail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password:</label>
                        <input name="password" type="password" class="form-control" id="InputPassword">
                    </div>
                    <button type="submit" class="btn btn-color">Accedi</button>
                    <p class="small mt-3">Non sei registrato?</p> <a href="{{route('register')}}" class="text-dark">Clicca qui</a>

                </form>
            </div>
        </div>
    </div>
</x-layout>
