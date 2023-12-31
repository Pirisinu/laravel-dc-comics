@extends('layouts.home')

@section('content')



    <div class="container d-flex flex-wrap gap-3">
        @foreach ($comics as $comic)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top w-100 h-75 object-fit-cover " src="{{$comic->thumb}}" alt="Card image cap">
                <div class="card-body p-0">
                    <h5 class="card-title">{{$comic->title}}</h5>
                    <p class="card-text">{{$comic->price}}</p>
                    <a href="{{route('comics.show', $comic)}}" class="btn btn-primary">More Info</a>
                </div>
            </div>
            @endforeach
    </div>


@endsection
