@extends('layouts.app')

@section('content')
<div class= "container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> View Profile</div>

                <div class="card-body">

                <form method="POST" action="store">

                @csrf
                
                Name:
                <input type= "text" name="name" class="form-control" placeholder="Your name here" value= $name()->name />

                <br>

                Email:
                <input type= "text" name="email" class="form-control" placeholder="Your Email here" value= {{ Auth::user()->email }} />

                <br>

                Age:
                <input type= "text" name="age" class="form-control" placeholder="Your Age here" />

                <br>

                Telephone:
                <input type= "text" name="telephone" class="form-control" placeholder="Your Telephone here"/>

                <br>

                Password:
                <input type= "password" name="password" class="form-control" placeholder="Your password here" value= {{ Auth::user()->password }} />

                <br>

                <input type= "submit" name="submit" id="submit" class= "form-control"/>

                </form>
            
                </div>
                </div>
                </div>
                </div>
                </div>
                @endsection