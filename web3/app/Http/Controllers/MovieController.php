<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Movie;
use App\Http\Requests\MovieRequest;
use App\User;
use Image;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $user = \Auth::user();
        $movies = Movie::all();
        $this->authorize('view',$movies);
        return view('movies.index', compact('movies'), compact('img'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = \Auth::user();
        $movies = Movie::all();
        $this->authorize('view',$movies);
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Movie $movie)
    {
        $this->authorize('view',$movie);
        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'picture' => 'image|nullable'
        ]);

        //Handle file Upload
        if($request->hasFile('picture')){

            $image = $request->file('picture');
            //$img->insert(public_path('storage/picture/Watermark.png'));
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('storage/picture/'.$filename);
            $img = Image::make($image);
            $watermark = Image::make(public_path('storage/picture/Watermark.png'));
            $watermark->resize(1920,2008);
            $img->insert($watermark);
            $img->save($location);



            //$filenamewithExt = $request->file('picture')->getClientOriginalName();
           // $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
           // $extension = $request->file('picture')->getClientOriginalExtension();
            //$fileNameToStore = $filename.'_'.time().'.'.$extension;
            //$path = $request->file('picture')->storeAs('public/picture', $fileNameToStore);

        }
        else{
            $filename = 'noimage.jpg';
        }

        $movie = new Movie;
        $movie->name =$request->input('name');
        $movie->description =$request->input('description');
        $movie->picture = $filename;
        $movie->save();


        //Movie::create($request->all());
        return redirect()->route('movie.index')->with('message', 'movie has been added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Movie $movie)
    {
        $this->authorize('view',$movie);
        return view('movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Movie $movie)
    {

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'picture' => 'image|nullable',
            'current' => 'required'
        ]);

        if($request->hasFile('picture')){

            $img = $request->file('picture');
            $filename = time().'.'.$img->getClientOriginalExtension();
            $location = public_path('storage/picture/'.$filename);
            Image::make($img)->save($location);



            //$filenamewithExt = $request->file('picture')->getClientOriginalName();
           // $filename = pathinfo($filenamewithExt, PATHINFO_FILENAME);
            //$extension = $request->file('picture')->getClientOriginalExtension();
           // $fileNameToStore = $filename.'_'.time().'.'.$extension;
           // $path = $request->file('picture')->storeAs('public/picture', $fileNameToStore);

        }
        $movie->name = $request->input('name');
        $movie->description = $request->input('description');
        if($request->hasFile('picture')){
            $movie->picture = $filename;
        }
        $movie->current = $request->input('current');
        $movie->save();

        //$movie->update($request->all());
        return redirect()->route('movie.index')->with('message', 'Movie has successfully been edited');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Movie $movie)
    {
        if($movie->picture != 'noimage.jpg'){
            Storage::delete('public/picture/'.$movie->picture);

        }

        $movie->delete();
        return redirect()->route('movie.index')->with('message', 'Movie has successfully been deleted');
    }
}
