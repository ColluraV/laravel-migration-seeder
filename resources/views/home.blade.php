<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<body>

    <main class="text-center">
        <h1>Lista Treni</h1>

        <div class="row row-col-2 text-center">
         
    @foreach ($trains as $train)

        <div class="card col-3 g-3 m-2">

            <div class="card-body">
                <p class="card-title">{{$train->azienda}}</p>
                <p class="card-text">{{$train->stazione_partenza}}</p>
                <p class="card-text">{{$train->stazione_arrivo}}</p>
                <p class="card-text">{{$train->codice_treno}}</p>
                <p class="card-text">{{$train->numero_carrozza}}</p>
                <p class="card-text">{{$train->orario_partenza}}</p>
                <p class="card-text">{{$train->orario_arrivo}}</p>
            </div>
        </div>

    @endforeach
        </div>
   {{--   --}}
    </main>
</body>
</html>