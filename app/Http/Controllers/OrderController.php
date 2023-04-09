<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders=Order::where("status","0")->get();
        return view("orders",compact("orders"));
    }
    public function underProcessingIndex()
    {
        $orders=Order::where("status","1")->get();
        return view("underprocessingorders",compact("orders"));
    }
    public function doneIndex()
    {
        $orders=Order::where("status","2")->get();
        return view("doneorders",compact("orders"));
    }
    public function underProcessingOrder($id)
    {
        $order=Order::find($id);
        $order->status=1;
        $order->save();
        return redirect()->route("orders");

    }
    public function doneOrder($id)
    {
        $order=Order::find($id);
        $order->status=2;
        $order->save();
        return redirect()->route("orders");

    }

    /**
     * Show the form for creating a new resource.
     */
    public function trash()
    {
        $orders=Order::onlyTrashed()->get();
        return view("trashorders",compact('orders'));

    }
    public function showTrash($id)
    {
        $order=Order::withTrashed()->find($id);
        return view("showtrashorder",compact('order'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $order= new Order;
        $order->name=$request->name;
        $order->phone=$request->phone;
        $order->address=$request->address;
        $order->quantity=$request->quantity;
        $order->protien_id=$request->protien_id;
        $order->message=$request->message;
        $order->save();
        return redirect()->route("welcome");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order=Order::find($id);
        return view("showorder",compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function restore($id)
    {
        $order=Order::withTrashed()->find($id);
        $order->restore();
        $order->status=0;
        return redirect()->route("ordersTrash");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order=Order::find($id);
        $order->delete();
        return redirect()->route("orders");
    }
}
