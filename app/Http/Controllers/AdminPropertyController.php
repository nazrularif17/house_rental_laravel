<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Owner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AdminPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rumah = Property::get();

        return view('admin.db_property',compact('rumah'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $existingOwnIDs = Owner::pluck('id');
        $ownersWithIDs = [];
        foreach ($existingOwnIDs as $ownerID) {
            // Create an object with 'id' and 'name' properties
            $owner = Owner::find($ownerID); // Fetch the owner model using the ID
            $ownerObject = (object)['id' => $owner->id, 'name' => $owner->name];
            $ownersWithIDs[] = $ownerObject;
        }
        return view('admin.db_property_add', compact('ownersWithIDs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'ownerID'=> 'required',
            'propertyImage'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'propertyTitle'=> 'required',
            'propertyType'=> 'required',
            'propertyPrice'=> 'required',
            'propertyRange'=> 'required',
            'propertyAddress'=> 'required',
            'propertyFurnishings'=> 'required',
            'propertyDesc'=> 'required',
        ]);


        if ($request->hasFile('propertyImage')) {
            $imagefile = $request->file('propertyImage');
            $imageName = $imagefile->getClientOriginalName();
            $imagefile->move(public_path('propertys/'), $imageName);
        }

        $rumah = new Property([
            'ownerID' => $request->input('ownerID'),
            'propertyImage' => $imageName,
            'propertyTitle' => $request->input('propertyTitle'),
            'propertyType' => $request->input('propertyType'),
            'propertyPrice' => $request->input('propertyPrice'),
            'propertyRange' => $request->input('propertyRange'),
            'propertyAddress' => $request->input('propertyAddress'),
            'propertyFurnishings' => $request->input('propertyFurnishings'),
            'propertyDesc' => $request->input('propertyDesc'),
            'propertyStatus'=> 'rented out',
        ]);

        $rumah->save();

        return redirect()->route('rumah.index')->with('success','Property created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Property $rumah): View
    {
        return view ('admin.db_property_detail',compact('rumah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Property $rumah): View
    {
        return view ('admin.db_property_update',compact('rumah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Property $rumah): RedirectResponse
    {
        
        $request->validate([
            'propertyTitle'=> 'required',
            'propertyPrice'=> 'required',
            'propertyFurnishings'=> 'required',
            'propertyDesc'=> 'required',
            'propertyStatus'=> 'required',
        ]);
       
        $rumah->update($request->all());
        
        return redirect()->route('rumah.index')
                        ->with('success','Property updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $rumah): RedirectResponse
    {
        $rumah->delete();
        
        return redirect()->route('rumah.index')
                        ->with('success','Property deleted successfully');
    }
}
