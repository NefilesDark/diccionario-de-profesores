<?php

namespace App\Http\Controllers;

use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        return Profesor::all();
    }

    public function store(Request $request)
    {
        $profesor = Profesor::create($request->all());
        return response()->json($profesor, 201);
    }

    public function show($id)
    {
        return Profesor::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $profesor = Profesor::findOrFail($id);
        $profesor->update($request->all());
        return response()->json($profesor, 200);
    }

    public function destroy($id)
    {
        Profesor::destroy($id);
        return response()->json(null, 204);
    }
}
