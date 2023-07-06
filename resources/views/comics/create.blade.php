@extends('layouts.app')

@section('content')
<form action="{{ route('comics.store') }}" method="POST">
    @csrf
    <label for="title">Title:</label>
    <input  class="form-control"type="text" name="title" id="title" required>

    <label for="description">Description:</label>
    <textarea  class="form-control"name="description" id="description" required></textarea>

    <label for="thumb">Thumbnail:</label>
    <input  class="form-control"type="text" name="thumb" id="thumb" required>

    <label for="price">Price:</label>
    <input  class="form-control"type="text" name="price" id="price" required>

    <label for="series">Series:</label>
    <input  class="form-control"type="text" name="series" id="series" required>

    <label for="sale_date">Sale Date:</label>
    <input  class="form-control"type="date" name="sale_date" id="sale_date" required>

    <label for="type">Type:</label>
    <input  class="form-control"type="text" name="type" id="type" required>

    <label for="artists">Artists:</label>
    <input class="form-control" type="text" name="artists" id="artists" required>

    <label for="writers">Writers:</label>
    <input class="form-control" type="text" name="writers" id="writers" required>


    <button type="submit" class="form-control mt-4 btn btn-primary">Save <a href="{{ route('comics.index') }}"></a></button>
</form>
@endsection