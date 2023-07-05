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
        //
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
            'title' => 'required',
            'description' => 'required',
            'thumb' => 'required|url',
            'price' => 'required',
            'series' => 'required',
            'sale_date' => 'required|date',
            'type' => 'required',
            'artists' => 'required|array',
            'writers' => 'required|array',
        ]);
    
        $comic = new Comics();
        $comic->title = $validatedData['title'];
        $comic->description = $validatedData['description'];
        $comic->thumb = $validatedData['thumb'];
        $comic->price = $validatedData['price'];
        $comic->series = $validatedData['series'];
        $comic->sale_date = $validatedData['sale_date'];
        $comic->type = $validatedData['type'];
        $comic->artists = $validatedData['artists'];
        $comic->writers = $validatedData['writers'];
        $comic->save();
    
        return redirect()->route('comics.index')->with('success', 'Comic saved successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
