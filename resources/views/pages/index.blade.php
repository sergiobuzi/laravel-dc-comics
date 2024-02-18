@extends('layouts.main-layout')
@section('head')
    <title>index</title>
@endsection
@section('content')
    <h1>Comics: {{count($comics)}}</h1>

        <a href="{{ route('users.create')}}">CREATE</a>
        <ul class="row d-flex justify-content-center">
            @foreach ($comics as $comic)

            <li class="card col-3 p-1 m-2">   
                <a href="{{ route('users.show', $comic ->id)}}">{{$comic -> title}}</a>
            </li>
                
            @endforeach
        </ul>

@endsection
