<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Car;

class CarController extends Controller
{

    public function index()
    {
        return Car::all();
    }

    public function show($id)
    {
        return Car::find($id);
    }

    public function store(Request $request)
    {
        return Car::create($request->all());
        return response()->json($car, 201);

    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());

        return response()->json($car, 200);
    }

    public function delete(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->delete();

        return response()->json(null, 204);
    }
}
