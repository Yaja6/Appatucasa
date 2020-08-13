<?php

namespace App\Http\Controllers;
use App\Dealer;
use Illuminate\Http\Request;

class DealerController extends Controller
{
    public function index()
    {
        return Dealer::all();
    }

    public function show(Dealer $dealer)
    {
        return $dealer;
    }

    public function store(Request $request)
    {
        $dealer = Dealer::create($request->all());
        return response()->json($dealer, 201);
    }

    public function update(Request $request, Dealer $dealer)
    {
        $dealer->update($request->all());
        return response()->json($dealer, 200);
    }

    public function delete(Dealer $dealer)
    {
        $dealer->delete();
        return response()->json(null, 204);
    }
}
