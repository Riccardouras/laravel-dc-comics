@extends('layouts.app')

@section('content-top')
    @include('partials.jumbotron')
@endsection

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4 justify-content-around">
        <div class="col">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, delectus ad esse illum omnis earum eligendi sint a minus quasi, inventore nulla autem. Maxime voluptatem eligendi veniam voluptates. Soluta, sunt!</p>
                <div class="d-flex justify-content-around flex">
                    @foreach ( config("store.listaImg") as $immagine)
                        <img id="img-witdh" src="{{ Vite::asset( $immagine ) }}" alt="">
                    @endforeach
                </div>
                
            </div>
        </div>
    </div>
    <div class="row g-4 mt-5">
        <div class="col-12">
            <div class="d-flex flex-wrap justify-content-around no-stretch gap-4">
                @foreach ($comics as $comic)
                    <div class="card" style="width: 18rem" >
                        <h3 class="card-header">{{ $comic["title"] }}</h3> 
                        <img class="card-img" style="width:300px" class="comicCover" src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}" />
                        <div>
                            <ul class="mt-3 card-footer">
                                @php
                                    $artistsCount = count($comic["artists"]);
                                @endphp
                                @foreach ($comic["artists"] as $index => $artist)
                                    <li class=" " style="list-style: none">
                                        {{ $artist }}@if($index < $artistsCount - 1),@endif
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection