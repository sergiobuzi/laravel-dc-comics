<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\comic;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $comics = comic :: all();

        return view('pages.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // prendiamo i dati dal form
        $data = $request -> all();

        //costruiamo la nuova variabile vuota
        $newComic = new Comic();

        //assegniamo i valori alla variabile
        $newComic -> title = $data['title'];
        $newComic -> author = $data['author'];
        $newComic -> price =$data['price'];

        //salviamo la variabile
        $newComic -> save();

        // andiamo alla show di quella variabile
        return redirect() -> route('users.show', $newComic ->id);


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = comic :: find($id);
        return view('pages.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = comic :: find($id);
        return view('pages.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data =$request -> all();
        $comic = Comic::find($id);

        $comic -> title = $data['title'];
        $comic -> author = $data['author'];
        $comic -> price = $data['price'];

        $comic ->update();

        return redirect() -> route('users.show', $comic -> id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = comic :: find($id);
        $comic -> delete();

        return redirect() -> route('users.index');
    }
}
