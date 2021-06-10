
@extends('layouts.main')


@section('content')
    <div class="container">
        <h1>I nostri film</h1>
        <!--Movies da Database-->

        
        <section class="movies">
            @foreach ($movies as $movie)
                <div class="movie">
                    <h2>Titolo: {{ $movie->title}}</h2>
                    <h2>Titolo originale: {{ $movie->original_title}}</h2>
                    <h3>Nazionalità: {{ $movie->nationality}}</h3>
                    <h3>Anno: {{ $movie->date}}</h3>
                    <h3>Voto: {{ $movie->vote}}</h3>
                </div>
            @endforeach
                
        </section>
            
        
    </div>
@endsection
