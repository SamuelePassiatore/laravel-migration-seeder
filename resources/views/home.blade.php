@extends('layouts.main')

@section('title', 'Home')

@section('content')
    Tabella treni
    <ul>
        @foreach ($trains as $train)
            <li>
                <ul class="mb-3">
                    <li><strong>Date: </strong>{{ $train->date }}</li>
                    <li><strong>Company: </strong>{{ $train->company }}</li>
                    <li><strong>Departure Station: </strong>{{ $train->departure_station }}</li>
                    <li><strong>Arrival Station: </strong>{{ $train->arrival_station }}</li>
                    <li><strong>Departure Time: </strong>{{ $train->departure_time }}</li>
                    <li><strong>Arrival Time: </strong>{{ $train->arrival_time }}</li>
                    <li><strong>Train Code: </strong>{{ $train->train_code }}</li>
                    <li><strong>Carriages Number: </strong>{{ $train->carriages_number }}</li>
                    <li><strong>On time: </strong>{{ $train->on_time }}</li>
                    <li><strong>Deleted: </strong>{{ $train->deleted }}</li>
                </ul>
            </li>
        @endforeach
    </ul>
@endsection
