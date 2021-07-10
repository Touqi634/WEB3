<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tickets;
use App\User;

class ApiController extends Controller
{
    public function createticket(Request $request)
    {
    $ticket = new Tickets();

        $ticket->user_id = $request->input('user_id');
        $ticket->movie_room_id = $request->input('movie_room_id');
        $ticket->price = $request->input('price');

        $ticket->save();
        return response()->json($ticket);

    }

    public function showticket()
    {
        $tickets = Tickets::all();
        return response()->json($tickets);
    }

    public function showbyticketid($id)
    {
        $tickets = Tickets::find($id);
        return response()->json($tickets);
    }

    public function deletebyticketid(Request $request, $id)
    {
        $tickets = Tickets::find($id);
        $tickets->delete();

        return response()->json($tickets);

    }



    public function createuser(Request $request)
    {
    $user = new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->age = $request->input('age');
        $user->telephone = $request->input('telephone');

        $user->save();
        return response()->json($user);

    }

    public function showuser()
    {
        $users = User::all();
        return response()->json($users);
    }


    public function showbyuserid($id)
    {
        $user = User::find($id);
        return response()->json($user);
    }


    public function deletebyuserid(Request $request, $id)
    {
        $user = User::find($id);
        $user->delete();

        return response()->json($user);

    }




}
