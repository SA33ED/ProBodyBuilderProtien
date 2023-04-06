<?php

namespace App\Http\Controllers;

use App\Models\Protien;
use App\Http\Requests\StoreProtienRequest;
use App\Http\Requests\UpdateProtienRequest;
use GuzzleHttp\Handler\Proxy;

class ProtienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $protiens=Protien::all();
        return view("template.welcome",compact('protiens'));
    }

    public function indexAuth()
    {
        $protiens=Protien::all();
        return view("dashboard.protiens",compact('protiens'));
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
        $protien=new Protien;
        $protien->name=$request->name;
        $protien->about=$request->about;
        $protien->price=$request->price;

        //get the image from the form
        $file = $request->file('image');
        //store the product name
        $newFileName = str_replace(" ", "-", strtolower($protien->name));
        //add the image extension o the name
        $newFileName = $newFileName . "." . $file->getClientOriginalExtension();
        //store image name to database
        $protien->image = $newFileName;
        $protien->save();
        //store thhe image  this function takes three parameter (path,name,disk)
        //mydisk(saeed) is in config/filesystems
        $file->storeAs('img', $newFileName , 'saeed');
        return redirect()->route('protiens');
    }

    /**
     * Display the specified resource.
     */
    public function show(Protien $protien)
    {
        //
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
            $protien= Protien::find($request->protienid);
            $protien->name=$request->name;
            $protien->about=$request->about;
            $protien->price=$request->price;
            $protien->save();
            return redirect()->route('protiens');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $protien=Protien::find($id);
        $protien->delete();
        return redirect()->route("protiens");
    }
}