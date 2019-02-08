<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        // \Log::info(print_r($cars, true));
        return view('additional.view', compact('cars'));
    }

    // public function show(Car $cars) {
    public function show($id) {
        $car = Car::findOrFail($id);
        return view('additional.show', compact('car'));
    }

}