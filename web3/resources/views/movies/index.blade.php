@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Movies</div>

                @if(Session::has('message'))
                    <div class = "alert alert-success">{{Session::get('message')}}</div>

                @endif

                <br>

                <div class="card-body">
                <table class= "table">
                <tr>
                <th>Image</th>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                @foreach($movies as $movie)
                <tr>
                <td><img class= "img-rounded corners" width="120px" src="{{asset('storage/picture/'.$movie->picture)}}"> </td>
                    <td> {{$movie->name}} </td>
                    <td>
                    {!! Form::open(array('route'=>['movie.destroy', $movie->id], 'method'=> 'DELETE')) !!}
                    {{link_to_route('movie.show', 'View', [$movie->id], ['class'=>'btn btn-primary'])}}
                    |
                    {{link_to_route('movie.edit', 'Edit', [$movie->id], ['class'=>'btn btn-primary'])}}
                    |
                    
                    {!! Form::button('Delete', ['class' => 'btn btn-danger', 'type' => 'submit']) !!}
                    {!! Form::close() !!}
                    </td>
               </tr>

                @endforeach
                </table>
                </div>
            </div>

            <br>

            {{link_to_route('movie.create', 'Add new movie', null, ['class'=>'btn btn-success'])}}

            


        </div>
    </div>
</div>
@endsection