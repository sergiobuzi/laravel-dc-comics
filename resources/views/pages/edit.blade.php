@extends('layouts.main-layout')
@section('head')
    <title>index</title>
@endsection
@section('content')
    <h1>EDIT Comic</h1>

    {{-- guarda web.php dove abbiamo la rotta --}}
    <form action="{{ route('users.update', $comic ->id)}}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title</label>
        <input type="text" name="title" id="title" value={{$comic -> title}}>
        <br>
        <label for="title">Author</label>
        <input type="text" name="author" id="author" value={{$comic -> author}}>
        <br>
        <label for="title">Price</label>
        <input type="text" name="price" id="price" value={{$comic -> price}}>
        <br>
        <input type="submit" value="EDIT">
    </form>

@endsection
