<?php

namespace App\Http\Controllers;

use App\Dealer;
use Illuminate\Http\Request;
use App\Http\Resources\DealerCollection;
use App\Http\Resources\Dealer as DealerResource;
use Illuminate\Support\Facades\Auth;

class DealerController extends Controller
{
    public function index()
    {
        return new DealerCollection(Dealer::all());
    }

    public function show(Dealer $dealer)
    {
        $this->authorize('view', $dealer);
        return response()->json(new DealerResource($dealer), 200);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Dealer::class);

        $request->validate([
            'name' => 'required|string|max:200',
            'lastname' => 'required|string|max:200',
            'email' => 'required|email',
            'phone' => 'required|max:10'
        ]);

        $dealer = Dealer::create([
            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'phone' => $request->get('phone')
        ]);

        return response()->json(new DealerResource($dealer), 201);
    }

    public function update(Request $request, Dealer $dealer)
    {
        $this->authorize('update', $dealer);
        $dealer->update($request->all());
        return response()->json($dealer, 200);
    }

    public function delete(Dealer $dealer)
    {
        $this->authorize('delete', $dealer);
        $dealer->delete();
        return response()->json(null, 204);
    }

    public function dealersBySeller()
    {
        $user = Auth::user();
        $dealers = $user->dealer;
        return response()->json(DealerResource::collection($dealers), 200);
    }
}
