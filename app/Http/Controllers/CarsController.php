<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        \Log::info(print_r($cars, true));
        return view('additional.view', compact('cars'));
    }
}
