<?php

namespace App\Http\Controllers;
use App\Offer;
use Illuminate\Http\Request;
use App\Http\Resources\OfferCollection;
use App\Http\Resources\Offer as OfferResource;
class OfferController extends Controller
{
    private static $messages = [
        'required' => 'El campo :attribute es obligatorio.'
    ];
    public function index()
    {
        return new OfferCollection(Offer::all());
    }

    public function show(Offer $offer)
    {
        $this->authorize('view', $offer);
        return response()->json(new CourseResource($offer), 200);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Offer::class);

        $request->validate([
            'description' => 'required|string',

        ]);

        $offer = Offer::create([
            'description' => $request->get('description'),


        ]);

        return response()->json(new OfferResource($offer), 201);
    }

    public function update(Request $request, Offer $offer)
    {
        $this->authorize('update', $offer);
        $offer->update($request->all());
        return response()->json($offer, 200);
    }

    public function delete(Offer $offer)
    {
        $this->authorize('delete', $offer);
        $offer->delete();
        return response()->json(null, 204);
    }
}
