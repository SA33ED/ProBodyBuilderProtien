<?php

namespace App\Http\Controllers;

use App\Models\Protien;
use App\Http\Requests\StoreProtienRequest;
use App\Http\Requests\UpdateProtienRequest;
use App\Models\Order;
use PhpParser\Node\Stmt\Foreach_;

class ProtienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $protiens = Protien::all();
        return view("welcome", compact('protiens'));
    }

    public function indexAuth()
    {
        $protiens = Protien::all();
        return view("protiens", compact('protiens'));
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
    public function store(StoreProtienRequest $request)
    {
        $protien = new Protien;
        $protien->name = $request->name;
        $protien->about = $request->about;
        $protien->price = $request->price;

        //get the image from the form
        $file = $request->file('image');
        //store the product name
        $newFileName = str_replace(" ", "-", strtolower($protien->name));
        //add the image extension o the name
        $newFileName = $newFileName . "-" . time() . "." . $file->getClientOriginalExtension();
        //store image name to database
        $protien->image = $newFileName;
        $protien->save();
        //store thhe image  this function takes three parameter (path,name,disk)
        //mydisk(saeed) is in config/filesystems
        $file->storeAs('img', $newFileName, 'saeed');
        return redirect()->route('protiens');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $protien = Protien::find($id);

        return view("show", compact("protien"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Protien $protien)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProtienRequest $request, Protien $protien)
    {

        $protien = Protien::find($request->protienid);
        $protien->name = $request->name;
        $protien->about = $request->about;
        $protien->price = $request->price;

        //new image
        if ($request->image != null) {
            //get the image from the form
            $file = $request->file('image');
            //store the product name
            $newFileName = str_replace(" ", "-", strtolower($protien->name));
            //add the image extension o the name
            $newFileName = $newFileName . "-" . time() . "." . $file->getClientOriginalExtension();
            //store image name to database
            $protien->image = $newFileName;
            //store thhe image  this function takes three parameter (path,name,disk)
            //mydisk(saeed) is in config/filesystems
            $file->storeAs('img', $newFileName, 'saeed');
        }


        $protien->save();
        return redirect()->route('protiens');
    }

    public function updateFromTrash(UpdateProtienRequest $request, Protien $protien)
    {
        $protien = Protien::withTrashed()->find($request->protienid);
        $protien->name = $request->name;
        $protien->about = $request->about;
        $protien->price = $request->price;

        //new image
        if ($request->image != null) {
            //get the image from the form
            $file = $request->file('image');
            //store the product name
            $newFileName = str_replace(" ", "-", strtolower($protien->name));
            //add the image extension o the name
            $newFileName = $newFileName . "-" . time() . "." . $file->getClientOriginalExtension();
            //store image name to database
            $protien->image = $newFileName;
            //store thhe image  this function takes three parameter (path,name,disk)
            //mydisk(saeed) is in config/filesystems
            $file->storeAs('img', $newFileName, 'saeed');
        }

        $protien->save();
        return redirect()->route('protiensTrash');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $protien = Protien::find($id);
        $protien->delete();
        //delete related Orders with this protien
        $orders = Order::where('protien_id', $id)->get();
        foreach ($orders as $order) {
            $order->delete();
        }

        return redirect()->route("protiens");
    }

    public function fdelete($id)
    {
        $protien = Protien::withTrashed()->find($id);
        $protien->forceDelete();
        //delete related Orders with this protien
        $orders = Order::withTrashed()->where('protien_id', $id)->get();
        foreach ($orders as $order) {
            $order->forceDelete();
        }
        return redirect()->route('protiensTrash');
    }
    public function trash()
    {
        $protiens = Protien::onlyTrashed()->get();
        return view('trashprotiens', compact('protiens'));
    }

    public function restore($id)
    {
        $protien = Protien::withTrashed()->find($id);
        $protien->restore();
        //restore related Orders with this protien
        $orders = Order::withTrashed()->where('protien_id', $id)->get();
        foreach ($orders as $order) {
            $order->restore();
        }
        return redirect()->route("protiensTrash");
    }
}