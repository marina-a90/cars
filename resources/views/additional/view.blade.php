@extends('layouts.master')

@section('title')
    Car list
@endsection

@section('content')
    <ul>
        @foreach($cars as $car)
            <li>
            <a href="{{ route('single-car', ['id' => $car->id]) }}">
                {{ $car->producer }}
            </a>
            with {{ $car->number_of_doors }} doors</li>
        @endforeach
    </ul>
@endsection