<?php

namespace App\Http\Controllers;

use App\Comic;
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
        $comics = Comic::paginate(5);
        $data = [
            'comics' => $comics,
        ];
        return view('comics.index', $data);
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

        //è possibile evitare di ripetere l'operazione creando una variabile
        // all'inizio della funzione, che contiene i seguenti dati.
        $validateData = $request->validate([
            
            'title'=>'required',
            'description'=>'required',
            'thumb'=>'required',
            'series'=>'required',
            'author'=>'required',
            'price'=>'required|numeric'
        ]);
        // test
        // @dd($request->all());

        $data = $request->all();
        $comic = new Comic(); 
        $comic->fill($data); //inviao tutti i dati inseriti nel fillable
        $comic->save();
        //check controllo

        //cambio indirizzo in browser in automatico
        //http://127.0.0.1:8000/monitors/id
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        $data = [
            'comic' => $comic,
            ];
        return view('comics.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', ['comic' => $comic]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $validateData = $request->validate([
            
            'title'=>'required',
            'description'=>'required',
            'thumb'=>'required',
            'series'=>'required',
            'author'=>'required',
            'price'=>'required|numeric'
        ]);

       

        // @dd($request->all());
        $data = $request->all();
        $comic->update($data);

        // ricordardi di indirizzare la pagina su show
        return redirect()->route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()
        ->route('comics.index')
        ->with('status', 'Hai eliminato il dato');
    }
}
