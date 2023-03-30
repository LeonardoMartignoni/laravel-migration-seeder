<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Trains</title>

  {{-- Includiamo gli assets con la direttiva @vite --}}
  @vite('resources/js/app.js')
</head>

<body>
  <div class="container">
    <h1 class="my-4">Train list</h1>

    <div class="row row-cols-4 g-4">
      @forelse ($trains as $train)
        <div class="col">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">Train {{ $train['train_code'] }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ ucwords($train['departure_station']) }} ->
                {{ ucwords($train['arrival_station']) }}
              </h6>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Departure: {{ substr($train['departure_time'], 0, -3) }}</li>
              <li class="list-group-item">Arrival: {{ substr($train['arrival_time'], 0, -3) }}</li>
            </ul>
            {{-- <div class="card-body">
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div> --}}
          </div>
        </div>
      @empty
        <p>Nessun treno trovato</p>
      @endforelse
    </div>
  </div>

</body>

</html>
