<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;
use Illuminate\Support\Facades\DB;
class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $channels = Channel::all();
        return view('index', compact('channels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'ChannelName' => 'required',
            'Description' => 'required',
            'URL' => 'nullable|url',
        ]);

        Channel::create($data);

        return redirect()->route('channels.index')->with('success', 'Channel has been created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $channel = Channel::find($id);
        return view('detail', compact('channel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $channel = Channel::where('ChannelID', $id)->first();
        return view('edit', compact('channel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $query = "UPDATE channels SET ChannelName = ?, Description = ?, URL = ? WHERE ChannelID = ?";
        $parameters = [$request->input('ChannelName'), $request->input('Description'), $request->input('URL'), $id];

        DB::statement($query, $parameters);

        return redirect()->route('channels.index')->with('success', 'Channel has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = "DELETE FROM channels WHERE ChannelID = ?";
        $parameters = [$id];

        DB::statement($query, $parameters);
        return redirect()->route('channels.index')->with('success','Channel Has Been deleted successfully '.$id);
    }
}
