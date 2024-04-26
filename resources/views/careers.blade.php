<x-layout>
        <div class="container-fluid bg-secondary-grey text-center" style="max-width: 1100px; margin: 0 auto;">
            <div class="row justify-content-center align-items-center mt-5 pt-3 bg-custom-sfondo">
                <h1 class="display-1 text-white">
                    Lavora con noi
                </h1>
            </div>
        </div>
        
        <div class="container bg-white">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-6 bg-white">
                    <h2>Lavora come amministratore</h2>
                    <p>
                        Lavorare come amministratore di un sito web implica la gestione e la supervisione di varie attività per assicurare il corretto funzionamento del sito e offrire un'esperienza positiva agli utenti.</p>
                        
                        <h2>Lavora come revisore</h2>
                        <p>Lavorare come revisore per un sito web richiede una particolare attenzione ai dettagli, competenze linguistiche solide e la capacità di valutare e migliorare la qualità del contenuto.</p>
                        
                        <h2>Lavora come redattore</h2>
                        <p>Lavorare come redattore per un sito web implica la creazione di contenuti coinvolgenti, accurati e rilevanti per il pubblico di destinazione. </p>
                    </div>
                    
                    <div class="col-12 col-md-6">
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        <form class="p-5" action="{{route('careersSubmit')}}" method="POST">
                            @csrf
                            <div class="dropdown mb-3">
                                <label for="role" class="form-label">Per quale ruolo ti stai candidando?</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="">Scegli qui</option>
                                    <ul class="dropdown-menu">
                                        <option value="admin">Amministratore</option>
                                        <option value="revisor">Revisore</option>
                                        <option value="writer">Redattore</option>
                                    </ul>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" id="email" value="{{ old('email') ?? Auth::user()->email }}">
                            </div>
                            
                            <div class="mb-3">
                                <label for="message" class="form-label">Parlaci di te</label>
                                <textarea name="message" id="message" cols="58" rows="8" class="form-control">{{ old('message') }}</textarea>
                            </div>
                            
                            <div class="mt-2">
                                <button class="btn btn-color" type="submit">Invia la candidatura</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </x-layout>
        