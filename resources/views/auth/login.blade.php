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
                <form class="shadow m-2 p-5" method="POST" action="{{ route('login') }}">

                    @csrf

                    <div class="mb-3">
                        <label for="InputEmail" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="InputEmail"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="InputPassword" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="InputPassword">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
