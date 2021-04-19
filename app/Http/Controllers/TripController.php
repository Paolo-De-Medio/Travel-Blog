<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\TripRequest;
use Illuminate\Support\Facades\Auth;

class TripController extends Controller
{

    public function __construct(){

        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::all();
        return view('trip.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TripRequest $request)
    {
        $trip = Trip::create([
            'user_id'=>Auth::id(),
            'destination'=>$request->input('destination'),
            'img'=>$request->file('img')->store('public/img'),
            'description'=>$request->input('description')
        ]);

        return redirect(route('trip.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        return view('trip.detail', compact('trip'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        return view('trip.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        $trip->name = $request->name;
        $trip->description = $request->description;
        
        if($request->img){
            $trip->img = $request->file('img')->store('public/img');
        }

        $trip->save();

        return redirect(route('trip.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();

        return redirect(route('trip.index'));
    }


    public function auth($auth){

        $trips = Trip::where('user_id', $auth)->get();

        $user = User::find($auth);

        return view('trip.auth', compact('trips', 'user'));
        
    }
}
