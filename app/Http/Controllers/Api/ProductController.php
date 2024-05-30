<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Resources\ProductResource;
use App\Http\Resources\ShowProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::list();
        $products = ProductResource::collection($products);
        return response()->json(['success' => true, 'data' =>$products], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        Product::store($request);
        return response()->json([
            'success' => true,
            'data' => true,
            'message' => 'Product created successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::find($id);
        $products = new ShowProductResource($products);
        return response()->json(['success' => true, 'data' => $products], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        Product::store($request,$id);
        return response()->json([
            'success' => true,
            'data' => true,
            'message' => 'Product updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::find($id);
        $products->delete();
        return response()->json([
            'success' => true,
            'data' => true,
            'message' => 'Product delete successfully'
        ], 200);
    }
}
