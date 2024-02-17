@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Comics: {{count($comics)}}</h1>
        <ul class="row d-flex justify-content-center">
            @foreach ($comics as $comic)

            <li class="card col-3 p-1 m-2">
                <h1 style="color: purple">{{$comic -> title}}</h1>
                <h2>{{$comic -> author}}</h2>
                <h3>{{$comic -> price}}$</h3>
            </li>
                
            @endforeach
        </ul>

@endsection
