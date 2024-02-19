@extends('layouts.main-layout')
@section('head')
    <title>index</title>
@endsection
@section('content')
    <h1>Comics: {{count($comics)}}</h1>

        <a href="{{ route('users.create')}}">CREATE</a>
        <ul class="row d-flex justify-content-center">
            @foreach ($comics as $comic)

            <li class="card col-3 p-1 m-2" >   
                <a href="{{ route('users.show', $comic ->id)}}"><h3>{{$comic -> title}}</h3></a>
                <h3>{{$comic -> author}}</h3>
                <h4>{{$comic -> price}}$</h4>

                {{-- bottone per l'edit --}}
                <a href="{{ route('users.edit', $comic ->id)}}" method="GET">EDIT
                    @csrf
                    @method('GET')
                
                </a>


                {{-- form per eliminare un id --}}
                <form action="{{ route('users.destroy', $comic ->id)}}" method="POST">
                    @csrf
                    @method('DELETE')

                    <input type="submit" value="x" onclick="return confirm('confermare?');">
                </form>
            </li>

                
            @endforeach
        </ul>

@endsection
