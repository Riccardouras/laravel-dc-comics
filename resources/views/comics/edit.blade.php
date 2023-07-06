@extends('layouts.app')

@section('content')
<h1>Modifica fumetto</h1>

<form action="{{ route('comics.update', $comic->id ) }}" method="post">
@csrf
    @method("PUT")

    <label for="name">title</label>
    <input class="form-control" type="text" name="title" value="{{$comic->title}}">

    <label for="name">description</label>
    <textarea name="description" class="form-control" cols="30" rows="5">{{$comic->description}}</textarea>

    <label for="name">type</label>
    <select class="form-control" name="type">
        <option value="comic book" @selected($comic->type=="$comic book") >comic book</option>
        <option value="graphic novel" @selected($comic->type=="graphic novel") >graphic novel</option>
    </select>

    <label for="name">image</label>
    <input class="form-control" type="text" name="thumb" value="{{$comic->thumbprice}}">

    <label for="name">price</label>
    <input class="form-control" type="text" name="price" value="{{$comic->price}}">

    <label for="name">series</label>
    <input class="form-control" type="text" name="series" value="{{$comic->series}}">
    
    <  <label for="sale_date">Sale Date:</label>
    <input class="form-control" type="date" name="sale_date" value="{{ $comic->sale_date }}">

    <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
 </form>
 @endsection