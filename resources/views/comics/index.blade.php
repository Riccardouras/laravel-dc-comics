@extends('layouts.app')

@section('content')
<h1>Comics</h1>

<a href="{{ route('comics.create') }}">Create a New Comic</a>

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
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
