@extends('layouts.app')
@section('page-title', 'Crea il tuo fumetto')
@section('content')
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf

        <label for="title">Titolo:</label>
        <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" id="title"
            value="{{ old('title') }}" required>
        @error('title')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="description">Descrizione:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description"
            id="description" required>{{ old('description') }}</textarea>
        @error('description')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="thumb">Thumbnail:</label>
        <input class="form-control @error('thumb') is-invalid @enderror" type="text" name="thumb" id="thumb"
            value="{{ old('thumb') }}" required>
        @error('thumb')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="price">Prezzo:</label>
        <input class="form-control @error('price') is-invalid @enderror" type="text" name="price" id="price"
            value="{{ old('price') }}" required>
        @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="series">Serie:</label>
        <input class="form-control @error('series') is-invalid @enderror" type="text" name="series" id="series"
            value="{{ old('series') }}" required>
        @error('series')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="sale_date">Data di vendita:</label>
        <input class="form-control @error('sale_date') is-invalid @enderror" type="date" name="sale_date" id="sale_date"
            value="{{ old('sale_date') }}" required>
        @error('sale_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror

        <label for="type">Tipo:</label>
        <input class="form-control @error('type') is-invalid @enderror" type="text" name="type" id="type"
            value="{{ old('type') }}" required>
        @error('type')
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

        <button type="submit" class="form-control mt-4 btn btn-primary">Salva</button>
    </form>
@endsection
