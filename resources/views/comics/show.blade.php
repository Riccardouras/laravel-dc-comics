@extends('layouts.app')

@section('content')
<h1>Comic</h1>
<a href="{{ route('comics.edit', $comic->id)}}">Modify data</a>
<div class="row g-4">
    <div class="col">
        <form action="{{ route('comics.destroy', $comic) }}" method="post">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Cancella il fumetto">
        </form>
    </div>
</div>
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $comic->title }}</td>
            <td>{{ $comic->description }}</td>
            <td> <img src={{"$comic->thumb"}} alt={{"$comic->title"}}></td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>  
        </tr>
       
    </tbody>
</table>
@endsection