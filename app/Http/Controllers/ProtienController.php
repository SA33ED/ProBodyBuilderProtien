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
                                //$city = new City;
                                //$city->name = request('name');
                                // $city->name = $request->input('name');
                                // $file = $request->file('image');
                                // $newFileName = str_replace(" ", "-", strtolower($city->name));
                                // $newFileName = $newFileName . "." . $file->getClientOriginalExtension();
                                // $city->image = $newFileName;
                                // $city->save();

                                // $file->storeAs('public/cities', $newFileName);
                                // return redirect()->route('cities.list');

                                // Get file Name
                                //return $file->getClientOriginalName();
                                // File Extension
                                //return $file->getClientOriginalExtension();
                                // File Size in bytes
                                //return $file->getSize();
                                // Store with a random Name
                                //$newFileName = $file->store('public/cities');
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
    public function destroy(Protien $protien)
    {
        //
    }
}