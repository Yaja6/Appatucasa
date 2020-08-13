<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function index()
    {
        return Sale::all();
    }

    public function show(Sale $sale)
    {
        return $sale;
    }

    public function store(Request $request)
    {
        $sale = Sale::create($request->all());
        return response()->json($sale, 201);
    }

    public function update(Request $request, Sale $sale)
    {
        $sale->update($request->all());
        return response()->json($sale, 200);
    }

    public function delete(Sale $sale)
    {
        $sale->delete();
        return response()->json(null, 204);
    }
}
