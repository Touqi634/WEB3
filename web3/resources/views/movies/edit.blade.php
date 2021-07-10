@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Movie</div>

                <div class="card-body">
                {!! Form::model($movie,array('route'=>['movie.update',$movie->id],'method'=>'PUT' , 'enctype'=>'multipart/form-data')) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'Enter Name') !!}
                        {!! Form::text('name',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                        {!! Form::label('description', 'description') !!}
                        {!! Form::text('description',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                       {{Form::label('Image','Upload Image')}}
                       <br>
                        {{Form::file('picture',['class'=>'form-control'] )}}
                        </div>

                        <div class="form-group">
                        {!! Form::label('current', 'Current movie: 1, Upcoming movie: 0') !!}
                        {!! Form::text('current',null,['class'=>'form-control']) !!}
                        </div>

                        <div class="form-group">
                        {!! Form::button('Update', ['type'=>'submit','class'=>'btn btn-primary']) !!}
                        </div>

                {!! Form::close() !!}
                


                </div>
            </div>

            @if($errors->any())
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li> {{ $error }} </li>
                @endforeach
                </ul>
                </div>
                @endif


        </div>
    </div>
</div>
@endsection