@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$movie->name}}</div>

                <br>

                <div class="card-body">
                <table class= "table">
                    <th>Image</th>
                    <tr>
                    <td><img class="hover" src="{{asset('storage/picture/'.$movie->picture)}}" style="width:150px; height:150px; float:left; border-radius:50%;"> </td>
                    </tr>
                    <th>Description</th>
                <tr>
                <td>{{$movie->description}}</td>
                </tr>
                <tr>
                <td>
                @if($movie->current)         
                    <a href="{{ url('/ticket', [ 'id' => $movie->id ])}}">Buy a ticket</a>
                @endif
                </td>
                </tr>
                </table>
                </div>
            </div>

            <br>

            


        </div>
    </div>
</div>
@endsection