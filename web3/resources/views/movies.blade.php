@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Movies</div>

                <div class="card-body">
                <table class= "table">
                <tr>
                    <th>Title</th>
                    <th>Action</th>
                </tr>
                @foreach($name as $id => $value)
                <tr>
                    <td> {{$value->name}} </td>
                    <td>
                    <a class="nav-link" href="{{ URL::to('movie'.$value->id) }}">{{ __('Edit') }}</a>
                    </td>
               </tr>

                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection