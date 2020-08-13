<?php

namespace App\Http\Controllers;


use App\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        return Categorie::all();
    }

    public function show(Categorie $categorie)
    {
        return $categorie;
    }

    public function store(Request $request)
    {
        $categorie = Categorie::create($request->all());
        return response()->json($categorie, 201);
    }

    public function update(Request $request, Categorie $categorie)
    {
        $categorie->update($request->all());
        return response()->json($categorie, 200);
    }

    public function delete(Categorie $categorie)
    {
        $categorie->delete();
        return response()->json(null, 204);
    }
}
