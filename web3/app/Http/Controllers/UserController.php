<?php

namespace App\Http\Controllers;

use App\User;
use App\Movie;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Auth;
use Image;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('home');
    }

    public function store (Request $request){

        if($request->hasFile('avatar')){

            $image = $request->file('avatar');
            //$img->insert(public_path('storage/picture/Watermark.png'));
            $filename = time().'.'.$image->getClientOriginalExtension();
            $location = public_path('storage/picture/'.$filename);
            $img = Image::make($image);
            $watermark = Image::make(public_path('storage/picture/Watermark.png'));
            $watermark->resize(1920,2008);
            $img->insert($watermark);
            $img->save($location);

        }
        else{
            $filename = 'default_profile.png';
        }



        $user = Auth::User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->telephone = $request->telephone;
        $user->password = $request->password;
        $user->avatar = $filename;
        $user->save();
        
        return view('message');

    }
    public function profile(){
        $user = Auth::User();
        $this->authorize('view',$user);
        return view('profile')->withName($user);
    }
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
}