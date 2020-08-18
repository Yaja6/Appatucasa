<?php

namespace App\Http\Controllers;
use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return Feedback::all();
    }

    public function show(Feedback $feedback)
    {
        return $feedback;
    }

    public function store(Request $request)
    {
        $feedback = Feedback::create($request->all());
        return response()->json($feedback, 201);
    }

    public function update(Request $request, Feedback $feedback)
    {
        $feedback->update($request->all());
        return response()->json($feedback, 200);
    }

    public function delete(Feedback $feedback)
    {
        $feedback->delete();
        return response()->json(null, 204);
    }
}
