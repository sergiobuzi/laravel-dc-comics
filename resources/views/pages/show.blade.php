@extends('layouts.main-layout')
@section('head')
    <title>Show</title>
@endsection
@section('content')

    <h1>Comic title:[ {{$comic -> id}} ]</h1>
    <h1>Comic title: {{$comic -> title}}</h1>
    <h1>Comic author: {{$comic -> author}}</h1>
    <h1>Comic price: {{$comic -> price}}$</h1>

@endsection
