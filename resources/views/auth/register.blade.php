<x-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <h1 class="text-center">
                    The Aulab Post
                </h1>
            </div>
        </div>
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <form class="shadow m-2 p-5" method="POST" action="{{route('register')}}">
                    
                    @csrf 
                    
                    
                    <div class="mb-3">
                        <label for="InputName" class="form-label">Nome:</label>
                        <input name="name" type="text" class="form-control" id="InputName" aria-describedby="nameHelp">
                    </div>
                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email:</label>
                        <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password:</label>
                        <input name="password" type="password" class="form-control" id="InputPassword">
                    </div>
                    <div class="mb-3">
                        <label for="InputConfirmPassword" class="form-label"> Conferma Password:</label>
                        <input name="password_confirmation" type="password" class="form-control" id="InputConfirmPassword">
                    </div>
                    
                    <button type="submit" class="btn btn-color">Registrati</button>
                    <p class="small mt-3">Già registrato?</p> <a href="{{route('login')}}" class="text-dark">Clicca qui</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>