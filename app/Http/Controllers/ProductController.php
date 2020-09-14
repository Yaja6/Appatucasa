<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Resources\ProductCollection;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    private static $messages = [
        'required' => 'El campo :attribute es obligatorio.'
    ];
    public function index()
    {
        return new ProductCollection(Product::all());
    }

    public function show(Product $product)
    {
        $this->authorize('view', $product);
        return response()->json(new ProductResource($product), 200);
    }

    public function store(Request $request)
    {
        $this->authorize('create', Product::class);

        $request->validate([
            'name' => 'required|string|max:200',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required|integer'

        ]);

        $product = Product::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price' => $request->get('price'),
            'stock' => $request->get('stock'),

        ]);

        return response()->json(new ProductResource($product), 201);
    }

    public function update(Request $request, Product $product)
    {
        $this->authorize('update', $product);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    public function delete(Product $product)
    {
        $this->authorize('delete', $product);
        $product->delete();
        return response()->json(null, 204);
    }

}
