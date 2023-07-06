@extends('layouts.app')

@section('content')
<h1>Comics</h1>

<a href="{{ route('comics.create') }}">Create a New Comic</a>
    @foreach($comics as $comic)
    <ul>
        <li>
            <a href="{{route("comics.show", $comic->id)}}">{{$comic->title}}</a> <button id="deleteButton" onclick="confirmDelete()">Delete</button>
        </li>
    </ul>
    @endforeach
<table>
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comics as $comic)
        <tr>
            <td>{{ $comic->title }}</td>
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
