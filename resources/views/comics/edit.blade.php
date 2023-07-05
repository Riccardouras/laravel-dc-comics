
<h1>Modifica fumetto</h1>


<form action="{{ route('comics.update', $comic->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ $comic->title }}">

    <label for="description">Description:</label>
    <textarea name="description">{{ $comic->description }}</textarea>


    <label for="thumb">Thumbnail:</label>
    <input type="text" name="thumb" value="{{ $comic->thumb }}">


    <label for="price">Price:</label>
    <input type="number" name="price" step="0.01" value="{{ $comic->price }}">

    
    <label for="series">Series:</label>
    <input type="text" name="series" value="{{ $comic->series }}">


    <label for="sale_date">Sale Date:</label>
    <input type="date" name="sale_date" value="{{ $comic->sale_date }}">


    <label for="type">Type:</label>
    <select name="type">
        @foreach($types as $type)
            <option value="{{ $type }}" @if($type === $comic->type) selected @endif>{{ $type }}</option>
        @endforeach
    </select>

   

    <button type="submit">Salva modifiche</button>
</form>