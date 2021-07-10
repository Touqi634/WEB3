<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use http\Env\Response;

class PollController extends Controller
{
    public function index(){
        return response()->json(Movie::get(),200);
    }
    public function show($id){
        $poll = Movie::find($id);
    }
}
