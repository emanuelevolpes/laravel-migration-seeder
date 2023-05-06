<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trains</title>
    @vite('resources/js/app.js')
</head>

<body>
    <div class="container">
        <ul>
            @foreach ($trains as $train)
            <li>Company: {{ $train->company }}</li>
            <li>Departure time: {{ $train->departure_time}}</li>
            <li>Arrival time: {{ $train->arrival_time}}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>
