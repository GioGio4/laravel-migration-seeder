<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains information</title>
    @vite('resources/js/app.js')
</head>

<body>
    <main>
        <section class="train-list container mt-5">
        
            <div class="row row-cols-4 g-3">

                @foreach ($trains as $train)
                    <div class="col">

                        <div class="card text-bg-dark mb-3">
                            <div class="card-header">{{$train->azienda}}</div>
                            <div class="card-body">
                              <h5 class="card-title">Codice:{{$train->codice_treno}}</h5>
                              <p class="card-text">Partenza: {{$train->stazione_partenza}} {{$train->orario_partenza}}</p>
                              <p class="card-text">Arrivo: {{$train->stazione_arrivo}} {{$train->orario_arrivo}}</p>
                              <p class="card-text">Carrozze: {{$train->N_carrozze}}</p>
                                <p class="card-text">Stato treno:   
                                    @if ($train->cancellato == true)
                                        <span class="text-danger">CANCELLATO</span> 
                                    @else
                                        @if($train->in_orario == true)
                                        In orario_arrivo
                                        @else 
                                        In ritardo
                                        @endif
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
    
            </div>
           
        </section>
    </main>
</body>

</html>