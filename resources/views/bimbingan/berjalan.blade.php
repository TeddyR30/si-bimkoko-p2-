@extends('layout.header')
@extends('layout.sidebar')
@extends('layout.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bimbingan Schedule</title>
    <link rel="stylesheet" href="{{ asset('css/schedule.css') }}">
</head>
<body>

<div class="container">
    <h1>Bimbingan Schedule</h1>

    <div class="schedule">
        @foreach($days as $day)
            <div class="day">
                <h2>{{ $day['name'] }}</h2>
                <ul>
                    @foreach($day['schedule'] as $event)
                        <li><span class="time">{{ $event['time'] }}</span> {{ $event['title'] }}</li>
                    @endforeach
                </ul>
            </div>
        @endforeach
    </div>
</div>

</body>
</html>
