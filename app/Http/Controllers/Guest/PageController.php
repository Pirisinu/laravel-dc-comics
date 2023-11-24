<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comics;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // prendo tutti i dati dal form
        $form_data = $request->all();

        // creo un nuovo oggetto Comic
        $new_comic = new Comics();
        $new_comic->fill($form_data);
        // lo salvo nel db
        $new_comic->save();

        // vado alla show del nuovo comic
        return redirect()->route('comics.show', $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Trova il comic corrente
        $comic = Comics::find($id);

        // Trova il comic successivo
        $nextComic = Comics::where('id', '>', $id)->first();

        // Trova il comic precedente
        $prevComic = Comics::where('id', '<', $id)->orderBy('id', 'desc')->first();

        return view('comics.show', compact('comic', 'nextComic', 'prevComic'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   //seleziono il fumetto da editare
        $comicToEdit = Comics::find($id);

        return view('comics.edit', compact('comicToEdit'));

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
        $comicToUpdate = Comics::find($id);
        $comicToUpdate->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'thumb' => $request->input('thumb'),
            'price' => $request->input('price'),
            'series' => $request->input('series'),
            'sale_date' => $request->input('sale_date'),
            'type' => $request->input('type'),
        ]);

        $comicToUpdate->save();


        return redirect()->route('comics.show',['comic' => $comicToUpdate->id])->with('success', 'Fumetto aggiornato con successo.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comicToDelete = Comics::find($id);
        $comicToDelete->delete();
        return redirect()->route('comics.index')->with('success', 'Record eliminato con successo.');
    }
}
