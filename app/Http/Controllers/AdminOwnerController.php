<?php

namespace App\Http\Controllers;

use App\Models\Owner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AdminOwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $owners = Owner::get();

        return view('admin.db_owner',compact('owners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.db_owner_add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'=> 'required',
            'phoneNo'=> 'required',
            'email'=> 'required',
        ]);
        Owner::create($request->all());

        return redirect()->route('owners.index')->with('success','Owner created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Owner $owner): View
    {
        return view ('admin.db_owner_detail',compact('owner'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Owner $owner): View
    {
        return view ('admin.db_owner_update',compact('owner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Owner $owner): RedirectResponse
    {
        $request->validate([
            'phoneNo'=> 'required',
            'email'=> 'required',
        ]);
        
        $owner->update($request->all());
        
        return redirect()->route('owners.index')
                        ->with('success','Owner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owner $owner): RedirectResponse
    {
        $owner->delete();
        
        return redirect()->route('owners.index')
                        ->with('success','Owner deleted successfully');
    }
}
