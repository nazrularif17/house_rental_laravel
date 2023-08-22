<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class StudentRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with('user')->where('roomStatus','available')->get();

        return view('student.room',compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('student.room_ads');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'roomImage'=> 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'roomTitle'=> 'required',
            'roomType'=> 'required',
            'roomPrice'=> 'required',
            'roomRange'=> 'required',
            'roomAddress'=> 'required',
            'roomFurnishings'=> 'required',
            'roomDesc'=> 'required',
        ]);

        if ($request->hasFile('roomImage')) {
            $file = $request->file('roomImage');
            $imageName = $file->getClientOriginalName();
            $file->move(public_path('rooms/'), $imageName);
        }

        $user = Auth::user();
        $room = new Room([
            'roomImage' => $imageName,
            'roomTitle' => $request->input('roomTitle'),
            'roomType' => $request->input('roomType'),
            'roomPrice' => $request->input('roomPrice'),
            'roomRange' => $request->input('roomRange'),
            'roomAddress' => $request->input('roomAddress'),
            'roomFurnishings' => $request->input('roomFurnishings'),
            'roomDesc' => $request->input('roomDesc'),
        ]);

        $user->rooms()->save($room);
        
        return redirect()->route('room.index')->with('success','Room created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room): View
    {
        return view ('student.room_detail',compact('room'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room): View
    {
        return view ('student.room_update',compact('room'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room): RedirectResponse
    {
        $request->validate([
            'roomTitle'=> 'required',
            'roomPrice'=> 'required',
            'roomFurnishings'=> 'required',
            'roomDesc'=> 'required',
            'roomStatus'=> 'required',
        ]);
        
        $room->update($request->all());
        
        return redirect()->route('room.index')
                        ->with('success','Room updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room): RedirectResponse
    {
        $room->delete();
        
        return redirect()->route('room.index')
                        ->with('success','Room deleted successfully');
    }
}
