<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ComicController extends Controller
{

    /************** INDEX **************************************/
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

        /** ARRAY  **/

        $formInputguide = config("DBdformInputguide"); 




        $comicTableShema = DB::select(DB::raw('SELECT 
        `COLUMN_NAME`,
            `COLUMN_TYPE`,
            `DATA_TYPE`,
            `CHARACTER_MAXIMUM_LENGTH`,
            `CHARACTER_OCTET_LENGTH`, 
            `NUMERIC_PRECISION`, 
            `NUMERIC_SCALE`, 
            `DATETIME_PRECISION`,
            `IS_NULLABLE`,
            `COLUMN_DEFAULT`,
            `COLUMN_COMMENT`
    FROM 
        INFORMATION_SCHEMA.COLUMNS
    WHERE 
        TABLE_SCHEMA = "comics_try" 
        AND TABLE_NAME = "datatypes"
        ORDER BY "DATA_TYPE"'));



        return view('comics.index', compact('navLinks', 'topBunner', 'footerLinks', 'bottomBunnerLinks', 'comics', 'comicTableShema', 'formInputguide'));
        //
    }
    /************** CREATE **************************************/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
        //
    }

    /************** STORE **************************************/

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
        /*       $newComic->title = $data['title'];
        $newComic->description = $data['description'];
        $newComic->series = $data['series'];
        $newComic->type = $data['type'];
        $newComic->price = $data["price"];
        $newComic->sale_date = $data['sale_date'];
        $newComic->artists = $data["artists"];
        $newComic->writers = $data["writers"];
        $newComic->thumb =  $data["thumb"]; */
        $newComic->fill($data);
        $newComic->save();

        return redirect()->route("comics.show", $newComic->id);
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


    /************** EDIT **************************************/
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {


        /* 
        return view() */
        return view('comics.edit', compact('comic'));
    }


    /************** UPDATE **************************************/
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $data = $request->all();

        $comic->update($data);

        return redirect()->route('comics.show', $comic->id);
    }


    /* DESTROY (ma delete nel cuore) */
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {

        $comic->delete();

        return redirect()->route("comics.index");
    }
}