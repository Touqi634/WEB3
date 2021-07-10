@extends('layouts.app')

@section('content')
<div class= "container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> View Profile</div>
                <div class="card-body"><a href="{{ url('tickets')}}" class="h4">See your tickets!</a></div>
                <div class="card-body">
                
                <form method="POST" action="store" enctype="multipart/form-data">

                @csrf

                Avatar:
                <br>
                <img class="hover" src="{{asset('storage/picture/'.Auth::user()->avatar)}}" style="width:150px; height:150px; float:left; border-radius:50%; margin:15px;"/>
                <input type= "file" id="avatar" name="avatar" style="margin:90px;" placeholder="Your name here" value= {{ Auth::user()->avatar }} />
                
                Name:
                <input type= "text" name="name" class="form-control" placeholder="Your name here" value= "{{ Auth::user()->name }}">

                <br>

                Email:
                <input type= "text" name="email" class="form-control" placeholder="Your Email here" value= {{ Auth::user()->email }} >

                <br>

                Age:
                <input type= "text" name="age" class="form-control" placeholder="Your Age here" value = {{ Auth::user()->age}}>

                <br>

                Telephone:
                <input type= "text" name="telephone" class="form-control" placeholder="Your Telephone here" value ={{Auth::user()->telephone}}>

                <br>

                
                <input type= "password" name="password" class="form-control" hidden placeholder="Your password here" value= {{ Auth::user()->password }}>

                <br>

                <input type= "submit" name="submit" id="submit" class= "form-control"/>

                </form>
                
                </div>
                </div>
                </div>
                </div>
                </div>
                @endsection