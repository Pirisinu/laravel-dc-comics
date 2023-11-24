@extends('layouts.home')

@section('content')
    <div class="container">
        <h1>Modifica Fumetto</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif


        <form method="POST" action="{{ route('comics.update', $comicToEdit->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input value="{{ $comicToEdit->title }}" type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="form-floating mb-5">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px"></textarea>
                <label value="{{ $comicToEdit->description }}" for="floatingTextarea2">Descrizione</label>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine thumb</label>
                <input value="{{ $comicToEdit->thumb }}" type="text" class="form-control" id="src_h" name="thumb" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input value="{{ $comicToEdit->price }}" type="text" class="form-control" id="src_p" name="price" >
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input value="{{ $comicToEdit->series }}" type="text" class="form-control" id="type" name="series" >
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Giorno prima vendita</label>
                <input value="{{ $comicToEdit->sale_date }}" type="text" class="form-control" id="sale_date" name="sale_date" >
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">genere</label>
                <input value="{{ $comicToEdit->type }}" type="text" class="form-control" id="type" name="type" >
            </div>

            <button type="submit" class="btn btn-primary"><a href="{{route('comics.show',$comicToEdit->id)}}">Invia</a></button>
            <button type="reset" class="btn btn-warning">Annulla</button>
            <button type="reset" class="btn btn-danger"><a href="{{route('comics.show',$comicToEdit->id)}}">Torna dietro</a></button>
        </form>
    </div>
@endsection
