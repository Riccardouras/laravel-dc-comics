@extends('layouts.app')
@section('page-title', 'Modifica')
@section('content')
    <h1>Modifica fumetto</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method("PUT")

        <label for="title">Titolo</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title"
            value="{{ old('title', $comic->title) }}">
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="description">Descrizione</label>
        <textarea name="description" class="form-control @error('description') is-invalid @enderror" cols="30"
            rows="5">{{ old('description', $comic->description) }}</textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="type">Tipo</label>
        <select class="form-control @error('type') is-invalid @enderror" name="type">
            <option value="comic book" {{ old('type', $comic->type) == 'comic book' ? 'selected' : '' }}>comic book</option>
            <option value="graphic novel" {{ old('type', $comic->type) == 'graphic novel' ? 'selected' : '' }}>graphic novel</option>
        </select>
        @error('type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="thumb">Immagine</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb"
            value="{{ old('thumb', $comic->thumb) }}">
        @error('thumb')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="price">Prezzo</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" name="price"
            value="{{ old('price', $comic->price) }}">
        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="series">Serie</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" name="series"
            value="{{ old('series', $comic->series) }}">
        @error('series')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="sale_date">Data di vendita</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date"
            value="{{ old('sale_date', $comic->sale_date) }}">
        @error('sale_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <label for="artists">Artisti:</label>
        <input class="form-control @error('artists') is-invalid @enderror" type="text" name="artists" id="artists"
            value="Unknown" required>
        @error('artists')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="writers">Scrittori:</label>
        <input class="form-control @error('writers') is-invalid @enderror" type="text" name="writers" id="writers"
            value="Unknown" required>
        @error('writers')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror


        <input class="form-control mt-4 btn btn-primary" type="submit" value="Invia">
    </form>
@endsection
