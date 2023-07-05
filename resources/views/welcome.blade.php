@extends('layouts.app')

@section('content-top')
    @include('partials.jumbotron')
@endsection

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, delectus ad esse illum omnis earum eligendi sint a minus quasi, inventore nulla autem. Maxime voluptatem eligendi veniam voluptates. Soluta, sunt!</p>
                
                <img src="{{ Vite::asset( config("store.advImage") ) }}" alt="" style="width:6rem;">

                <img src="{{ Vite::asset( 'resources/img/adv.jpg' ) }}" alt="" style="width:6rem;">

                @foreach ( config("store.listaImg") as $immagine)
                    <img src="{{ Vite::asset( $immagine ) }}" alt="">
                @endforeach

            </div>
        </div>
    </div>
    <div class="row g-4">
        <div class="col">
            <div>
                @foreach ($comics as $comic)
                    <div>
                        {{ $comic["title"] }}
                        <img class="comicCover" src="{{ $comic["thumb"] }}" alt="{{ $comic["title"] }}" />
                        
                        <ul>
                            @foreach ($comic["artists"] as $artist)
                            <li>{{$artist}}</li>
                            @endforeach
                        </ul>
                        
                        

                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection