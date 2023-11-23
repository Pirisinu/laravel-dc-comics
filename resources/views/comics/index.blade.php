@extends('layouts.home')

@section('content')



        @foreach ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$comic->thumb}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->price}}</p>
                    <p class="card-text">{{$comic->type}}</p>
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
        @endforeach


@endsection
