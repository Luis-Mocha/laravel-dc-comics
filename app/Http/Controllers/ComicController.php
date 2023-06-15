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
        $comics = Comic::All(); 

        return view('pages.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // inserisco solo la view
        return view('pages.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // funzione per salvare i nuovi dati nel database
        $form_data = $request ->all();
        // dd($form_data);

        $newComic = new Comic();
        // $newComic ->title = $form_data['title'];
        // $newComic ->description = $form_data['description'];
        // $newComic ->thumb = $form_data['thumb'];
        // $newComic ->price = $form_data['price'];
        // $newComic ->series = $form_data['series'];
        // $newComic ->sale_date = $form_data['sale_date'];
        // $newComic ->type = $form_data['type'];
        
        $newComic->fill( $form_data );

        $newComic->save();

        //ritorno ad un'altra pagina
        return redirect()->route('comics.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        // Ottengo i dati per il singolo "prodotto"
        $comic = Comic::findOrFail($id);

        return view('pages.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view( 'pages.comics.edit', compact ('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        
        // funzione per salvare i dati modificati nel database
        $form_data = $request ->all();

        $comic->update( $form_data );

        //ritorno ad un'altra pagina
        return redirect()->route('comics.show', [ 'comic' => $comic->id ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
