@extends('layouts.master')

@section('title')
    Car
@endsection

@section('content')
    <h1>{{ $car->producer }} with {{ $car->number_of_doors }} doors</h1>
@endsection