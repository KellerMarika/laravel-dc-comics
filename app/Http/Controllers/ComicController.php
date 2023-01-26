<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $navLinks = config("DBheaderNav");
        $topBunner = config("DBtopBunner");
        $footerLinks = config("DBfooter");
        $bottomBunnerLinks = config("DBbottomBunnerSocial");


        $comics = Comic::all();


        return view('comics.index', compact('navLinks', 'topBunner', 'footerLinks', 'bottomBunnerLinks', 'comics'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $comics = Comic::all();
        return view('comics.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        // dump($newComic);
        $newComic = new Comic();
        $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->series = $data['series'];
        $newComic->type = $data['type'];
        $newComic->price = $data["price"];
        $newComic->sale_date = $data['sale_date'];
        $newComic->artists = $data["artists"];
        $newComic->writers = $data["writers"];
        $newComic->thumb =  $data["thumb"];
        $newComic->save();

        return redirect()->route("comics.show",  $newComic->id);
    }


    /************** SHOW **************************************/
    /**
     * 
     *viene passato l'id del fumetto cliccato. è la funxione che autonomamente sovrascrive la varabile con l'intera riga della tabella corrispondente all'id
     * @param  int  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $navLinks = config("DBheaderNav");
        $topBunner = config("DBtopBunner");
        $footerLinks = config("DBfooter");
        $bottomBunnerLinks = config("DBbottomBunnerSocial");

        return view("comics.show", compact('comic', 'navLinks', 'footerLinks', 'bottomBunnerLinks'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}