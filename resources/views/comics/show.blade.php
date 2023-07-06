@extends('layouts.app')
@section('page-title', 'Comic')
@section('content')
<h1>Comic</h1>
<div class="row g-4">
    <div class="col">
        
    </div>
</div>
<table class="table table-striped table-bordered">
    <thead  class="thead-dark">
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Thumbnail</th>
            <th>Price</th>
            <th>Series</th>
            <th>Sale date</th>
            <th>Type</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><a href="{{route("comics.show", $comic->id)}}">{{$comic->title}}</a></td>
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
            <td><button class="btn btn-warning"><a class="text-white" href="{{ route('comics.edit', $comic->id)}}">Edit</a></button></td>
        </tr>
    </tbody>
</table>

@endsection