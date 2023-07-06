@extends('layouts.app')

@section('content')
<h1>Comic</h1>
<div class="row g-4">
    <div class="col">
        
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
            <td> <form action="{{ route('comics.destroy', $comic) }}" method="post">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Delete">
            </form></td> 
            <td><button class="btn btn-warning"><a href="{{ route('comics.edit', $comic->id)}}">Edit</a></button></td>
        </tr>
       
    </tbody>
</table>
@endsection