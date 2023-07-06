<?php

namespace App\Http\Controllers;
use App\Models\Comics;
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
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'thumb' => 'required|url',
            'price' => 'required|numeric',
            'series' => 'required|string|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|string|max:255',
            'artists' => 'required|string|max:255',
            'writers' => 'required|string|max:255',
        ], [
            'required' => 'Il campo :attribute è obbligatorio.',
            'string' => 'Il campo :attribute deve essere una stringa.',
            'max' => 'Il campo :attribute non può superare :max caratteri.',
            'url' => 'Il campo :attribute deve essere un URL valido.',
            'numeric' => 'Il campo :attribute deve essere un numero.',
            'date' => 'Il campo :attribute deve essere una data valida.',
        ]);
    
        $newComic = new Comics();
        $newComic->title = $validatedData['title'];
        $newComic->description = $validatedData['description'];
        $newComic->thumb = $validatedData['thumb'];
        $newComic->price = $validatedData['price'];
        $newComic->series = $validatedData['series'];
        $newComic->sale_date = $validatedData['sale_date'];
        $newComic->type = $validatedData['type'];
        $newComic->artists = $validatedData['artists'];
        $newComic->writers = $validatedData['writers'];

        $newComic->save();
    
        return redirect()->route('comics.show',$newComic->id)->with('success', 'Comic saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  Comics  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comics::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comic)
    {
            return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comic)
{
    
    $validatedData = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'thumb' => 'required|url',
        'price' => 'required|numeric',
        'series' => 'required|string|max:255',
        'sale_date' => 'required|date',
        'type' => 'required|string|max:255',
        'artists' => 'required|string|max:255',
        'writers' => 'required|string|max:255',
    ], [
        'required' => 'Il campo :attribute è obbligatorio.',
        'string' => 'Il campo :attribute deve essere una stringa.',
        'max' => 'Il campo :attribute non può superare :max caratteri.',
        'url' => 'Il campo :attribute deve essere un URL valido.',
        'numeric' => 'Il campo :attribute deve essere un numero.',
        'date' => 'Il campo :attribute deve essere una data valida.',
    ]);

   $comic->title = $validatedData['title'];
        $comic->description = $validatedData['description'];
        $comic->thumb = $validatedData['thumb'];
        $comic->price = $validatedData['price'];
        $comic->series = $validatedData['series'];
        $comic->sale_date = $validatedData['sale_date'];
        $comic->type = $validatedData['type'];

        $comic->save();
        
    return redirect()->route('comics.show', $comic->id);
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        $comic->delete();
    
        return redirect()->route('comics.index')->with('success', 'Fumetto eliminato con successo.');
    }
 
}
