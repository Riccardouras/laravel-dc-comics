<header class="p-3 d-flex gap-4">
    <img class="logo" src="{{ Vite::asset('resources/img/logo.png') }}" alt="Laravel Logo">
    <span>Some links: </span>
    <a href="{{ route('welcome') }}">Homepage</a>
    <a href="{{ route('comics.index') }}">index</a>
    <a href="{{ route('comics.create') }}">Create a New Comic</a>
</header>