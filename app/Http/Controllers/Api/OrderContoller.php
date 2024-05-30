<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ShowOrderResource;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::list();
        $orders = OrderResource::collection($orders);
        return response()->json(['success' => true, 'data' =>$orders], 200);
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
    public function store(Request $request)
    {
        Order::store($request);
        return response()->json([
            'success' => true,
            'data' => true,
            'message' => 'category created successfully'
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orders = Order::find($id);
        $orders = new ShowOrderResource($orders);
        return response()->json(['success' => true, 'data' => $orders], 200);
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
    public function update(Request $request, string $id)
    {
        Order::store($request,$id);
        return response()->json([
            'success' => true,
            'data' => true,
            'message' => 'Order updated successfully'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orders = Order::find($id);
        $orders->delete();
        return response()->json([
            'success' => true,
            'data' => true,
            'message' => 'Order cancel successfully'
        ], 200);
    }
}
