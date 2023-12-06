<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $resources = Product::oldest()
        ->with('productBrand')
        ->get();
        return response()->json($resources);
    }

    public function store(Request $request)
    {
        $resource = Product::create($request->all());
        return response()->json($resource, 201);
    }

    public function update(Request $request, Product $product)
    {
        $resource = $product->update($request->all());
        return response()->json($resource);
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return response()->json(null, 204);
    }
}
