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

        // validazione
        $request->validate(
            [
                'title'=> 'unique:comics|required',
                'thumb'=> 'required|url',
                'price'=> 'required|numeric',
                'series'=> 'required',
                'sale_date'=> 'required',
                'type'=> 'required',
            ],
            [
                'title.unique'=> 'Questo titolo è già utilizzato',
                'title.required'=> 'Il campo "titolo" è richiesto',
                'thumb.required'=> 'Il campo "copertina" è richiesto',
                'thumb.url'=> 'Il campo "copertina" deve contenere un URL valido',
                'price'=> 'Il campo "prezzo" è richiesto',
                'price.numeric'=> 'Il campo "prezzo" può contenere solo numeri',
                'series'=> 'Il campo "serie" è richiesto',
                'sale_date'=> 'Il campo "data di uscita" è richiesto',
                'type'=> 'Il campo "tipo" è richiesto',
            ]
        );

        // funzione per salvare i nuovi dati nel database
        $form_data = $request ->all();
        // dd($request);

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
        return redirect()->route('comics.index')->with('success', 'Congratulazioni, hai aggiunto il tuo fumetto!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show($elem)
    {

        // Ottengo i dati per il singolo "prodotto"
        $comic = Comic::findOrFail($elem);

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

        // validazione
        $request->validate(
            [
                'title'=> 'required',
                'thumb'=> 'required|url',
                'price'=> 'required|numeric',
                'series'=> 'required',
                'sale_date'=> 'required',
                'type'=> 'required',
            ],
            [
                'title.unique'=> 'Questo titolo è già utilizzato',
                'title.required'=> 'Il campo "titolo" è richiesto',
                'thumb.required'=> 'Il campo "copertina" è richiesto',
                'thumb.url'=> 'Il campo "copertina" deve contenere un URL valido',
                'price'=> 'Il campo "prezzo" è richiesto',
                'price.numeric'=> 'Il campo "prezzo" può contenere solo numeri',
                'series'=> 'Il campo "serie" è richiesto',
                'sale_date'=> 'Il campo "data di uscita" è richiesto',
                'type'=> 'Il campo "tipo" è richiesto',
            ]
        );
        
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
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
