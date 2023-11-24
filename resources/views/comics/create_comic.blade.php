@extends('layouts.home')

@section('content')

<h1>Inserimento nuovo fumetto</h1>

<div class="row m-3">
    <div class="col-8">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" >
            </div>
            <div class="form-floating mb-5">
                <textarea class="form-control" placeholder="Descrizione" id="description" name="description" style="height: 200px"></textarea>
                <label for="floatingTextarea2">Descrizione</label>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine thumb</label>
                <input type="text" class="form-control" id="src_h" name="thumb" >
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="src_p" name="price" >
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="type" name="series" >
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Giorno prima vendita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" >
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">genere</label>
                <input type="text" class="form-control" id="type" name="type" >
            </div>

            <button type="submit" class="btn btn-primary">Invia</button>
            <button type="reset" class="btn btn-secondary">Annulla</button>

        </form>
    </div>
</div>



@endsection
