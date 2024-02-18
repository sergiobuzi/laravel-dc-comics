@extends('layouts.main-layout')
@section('head')
    <title>index</title>
@endsection
@section('content')
    <h1>New Comic</h1>

    {{-- guarda web.php dove abbiamo la rotta --}}
    <form action="{{route('users.store')}}" method="GET">
        @csrf
        @method('GET')

        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="title">Author</label>
        <input type="text" name="author" id="author">
        <br>
        <label for="title">Price</label>
        <input type="text" name="price" id="price">
        <br>
        <input type="submit" value="CREATE">
    </form>

@endsection
