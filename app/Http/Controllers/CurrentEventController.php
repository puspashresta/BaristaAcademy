<?php

namespace App\Http\Controllers;

use App\Models\Current_Event;
use Illuminate\Http\Request;

class CurrentEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add_currentEvent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $name = $request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public/events',$name);

        $cevents = new Current_Event;
        $cevents->image=$name;
        $cevents->title=$request->input('title');
        $cevents->description=$request->input('description');
        // $events->is_current=$request->input('type');
        $cevents->save();

        return redirect()->back();
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Current_Event  $current_Event
     * @return \Illuminate\Http\Response
     */
    public function show(Current_Event $current_Event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Current_Event  $current_Event
     * @return \Illuminate\Http\Response
     */
    public function edit(Current_Event $current_Event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Current_Event  $current_Event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Current_Event $current_Event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Current_Event  $current_Event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Current_Event $current_Event)
    {
        //
    }
}
