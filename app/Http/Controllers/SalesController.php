<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class SalesController extends Controller
{

    public function index()
    {
        return Sales::all();
    }

    public function show($id)
    {
        return Sales::find($id);
    }

    public function store(Request $request)
    {
        return Sales::create($request->all());
        return response()->json($sales, 201);

    }

    public function update(Request $request, $id)
    {
        $sales = Sales::findOrFail($id);
        $sales->update($request->all());

        return response()->json($sales, 200);
    }

    public function delete(Request $request, $id)
    {
        $sales = Sales::findOrFail($id);
        $sales->delete();

        return response()->json(null, 204);
    }
}
