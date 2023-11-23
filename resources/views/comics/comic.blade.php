@extends('layouts.home')

@section('content')



    <div class="container d-flex">

                <img class="w-100 w-75 object-fit-cover " src="{{$comic->thumb}}" alt="Card image cap">
                <div>
                    <h5 class="card-title"><strong>Titolo: </strong>{{$comic->title}}</h5>
                    <p class="card-text"><strong>Descrizione: </strong>{{$comic->description}}</p>
                    <p class="card-text"><strong>Prezzo: </strong>{{$comic->price}}</p>
                    <p class="card-text"><strong>Serie: </strong>{{$comic->series}}</p>
                    <p class="card-text"><strong>Giorno prima vendita: </strong>{{$comic->sale_date}}</p>
                    <p class="card-text"><strong>Genere: </strong>{{$comic->type}}</p>
                    <a href="{{route('comics.index')}}">Home</a>
                </div>

    </div>


@endsection
