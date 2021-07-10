@extends('layouts.app')

@section('title', 'Hello World!')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>
    Hello WorldS
    </p>
@endsection



    