@extends('layouts.home')

@section('content')



    <div class="comic">
        <div class="d-flex h-100">
            <div class="img-box w-25 p-2">
                <img class="w-100 h-100 object-fit-cover" src="{{$comic->thumb}}" alt="Card image cap">
            </div>
            <div class="txt-box w-75">
                <h5 class="card-title">Titolo:</h5>
                <p>{{$comic->title}}</p>
                <h5>Descrizione:</h5>
                <p>{{$comic->description}}</p>
                <h5>Prezzo:</h5>
                <p>{{$comic->price}}</p>
                <h5>Serie:</h5>
                <p>{{$comic->series}}</p>
                <h5>Giorno prima vendita:</h5>
                <p>{{$comic->sale_date}}</p>
                <h5>Genere:</h5>
                <p>Genere: {{$comic->type}}</p>
                <a href="{{route('comics.index')}}">Home</a>
            </div>
        </div>
        @include('partials.btn_next_prev')
    </div>


@endsection
