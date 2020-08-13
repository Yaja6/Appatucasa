<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        return Store::all();
    }

    public function show(Store $store)
    {
        return $store;
    }

    public function store(Request $request)
    {
        $store = Store::create($request->all());
        return response()->json($store, 201);
    }

    public function update(Request $request, Store $store)
    {
        $store->update($request->all());
        return response()->json($store, 200);
    }

    public function delete(Store $store)
    {
        $store->delete();
        return response()->json(null, 204);
    }
}
