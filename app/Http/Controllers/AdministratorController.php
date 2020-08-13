<?php

namespace App\Http\Controllers;
use App\Administrator;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{

    public function index()
    {
        return Administrator::all();
    }




    public function store(Request $request)
    {
        $admin = Administrator::create($request->all());
        return response()->json($admin, 201);
    }


    public function show(Administrator $admin)
    {
        return $admin;
    }





    public function update(Request $request, Administrator $admin)
    {
        $admin->update($request->all());
        return response()->json($admin, 200);
    }


    public function delete(Administrator $admin)
    {
        $admin->delete();
        return response()->json(null, 204);
    }
}
