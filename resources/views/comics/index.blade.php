@extends('layouts.app')

@section('content')
<h1>Comics:</h1>


   
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
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td><a href="{{route("comics.show", $comic->id)}}">{{$comic->title}}</a></td>
            <td>{{ $comic->description }}</td>
            <td> <img src={{"$comic->thumb"}} alt={{"$comic->title"}}></td>
            <td>{{ $comic->price }}</td>
            <td>{{ $comic->series }}</td>
            <td>{{ $comic->sale_date }}</td>
            <td>{{ $comic->type }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
