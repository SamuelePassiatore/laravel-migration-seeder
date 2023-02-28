<?php
use Carbon\Carbon;
?>

@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <section class="section-home container-fluid text-center">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">Company</th>
                    <th scope="col">Departure Station</th>
                    <th scope="col">Arrival Station</th>
                    <th scope="col">Departure Time</th>
                    <th scope="col">Arrival Time</th>
                    <th scope="col">Train Code</th>
                    <th scope="col">Carriages Number</th>
                    <th scope="col">On Time / Late</th>
                    <th scope="col">Deleted / Confirmed</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                    <tr>
                        <td>{{ Carbon::parse($train->date)->format('d/m/Y') }}</td>
                        <td>{{ $train->company }}</td>
                        <td>{{ $train->departure_station }}</td>
                        <td>{{ $train->arrival_station }}</td>
                        <td>{{ $train->departure_time }}</td>
                        <td>{{ $train->arrival_time }}</td>
                        <td>{{ $train->train_code }}</td>
                        <td>{{ $train->carriages_number }}</td>
                        <td>{{ $train->on_time ? 'ON TIME' : 'LATE' }}</td>
                        <td>{{ $train->deleted ? 'DELETED' : 'CONFIRMED' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>

@endsection
