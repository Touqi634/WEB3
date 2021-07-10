<?php

namespace App\Http\Controllers;

use App\Tickets;
use App\Movie;
use App\MovieRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;  

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tickets = DB::table('ticket')
            ->join('movie_room', 'ticket.movie_room_id', '=', 'movie_room.id')
            ->join('movie', 'movie.id', '=', 'movie_room.movie_id')
            ->join('room', 'room.id' , '=', 'movie_room.room_id')
            ->select('movie_room.room_id AS room', 'ticket.price AS price', 'movie.name AS moviename', 'movie_room.time AS time', 'room.nr_seats AS seatsleft')
            ->where('ticket.user_id', Auth::user()->id)
            ->get();
        return view('tickets', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $movie = Movie::find($id);
        $movie_room = MovieRoom::where('movie_id',$movie->id)->first();
        
        $tickets = new Tickets;
        $tickets->user_id = Auth::User()->id;
        $tickets->movie_room_id = $movie_room->id;
        $tickets->price = 15;
        $tickets->save();
        
        return redirect('tickets');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function show(Tickets $tickets)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function edit(Tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tickets  $tickets
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tickets $tickets)
    {
        //
    }
}
