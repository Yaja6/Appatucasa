<?php

namespace App\Http\Controllers;


use App\Category;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function show(Category $categorie)
    {
        return $categorie;
    }

    public function store(Request $request)
    {
        $categorie = Category::create($request->all());
        return response()->json($categorie, 201);
    }

    public function update(Request $request, Category $categorie)
    {
        $categorie->update($request->all());
        return response()->json($categorie, 200);
    }

    public function delete(Category $categorie)
    {
        $categorie->delete();
        return response()->json(null, 204);
    }
}
