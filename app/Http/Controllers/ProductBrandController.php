<?php

namespace App\Http\Controllers;

use App\Models\ProductBrand;
use Illuminate\Http\Request;

class ProductBrandController extends Controller
{
    public function index()
    {
        $resources = ProductBrand::oldest()->get();
        return response()->json($resources);
    }

    public function store(Request $request)
    {
        $resource = ProductBrand::create($request->all());
        return response()->json($resource, 201);
    }

    public function update(Request $request, ProductBrand $brand)
    {
        $resource = $brand->update($request->all());
        return response()->json($resource);
    }

    public function destroy(ProductBrand $brand)
    {
        $brand->delete();
        return response()->json(null, 204);
    }
}
