<x-layout>
    <!-- Blog Header -->
    <header class="blog-header py-5">
        <h1>Blog su Laravel</h1>
        <p>Selfwork su come separare la logica dalle rotte.</p>
    </header>

    <!-- Blog Section -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="featured-post">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/images/laravel.png" alt="laravel">
                        </div>
                        <div class="col-md-6">
                            <h2>Laravel blog</h2>
                            <h5>Un framework PHP</h5>
                            <p class="mt-3">Laravel è un framework PHP moderno e potente per lo sviluppo di
                                applicazioni web. Offre una sintassi elegante e strumenti avanzati come Eloquent ORM,
                                routing flessibile e autenticazione integrata. Grazie al suo ecosistema, include
                                funzionalità come Laravel Mix per la gestione delle risorse e Laravel Livewire per
                                interfacce dinamiche. È una scelta ideale per sviluppatori che cercano efficienza,
                                sicurezza e scalabilità.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog elenco -->

    <div class="container mb-5">
        <div class="row g-4">

            @foreach ($articoli as $articolo)
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{{ $articolo['url_immagine'] }}" class="card-img-top" alt="{{ $articolo['titolo'] }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $articolo['titolo'] }}</h5>
                            <p class="card-text">{{ $articolo['descrizione'] }}</p>
                            <a href="/articolo/{{ $articolo['id'] }}" class="btn btn-primary"><i class="bi bi-book"></i> Leggi tutto</a> </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</x-layout>
