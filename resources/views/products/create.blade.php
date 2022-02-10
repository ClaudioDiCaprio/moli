@extends('layouts.base')

@section('pageContent')
<h1>Crea un prodotto</h1>
<a href="{{route("products.index")}}"><button type="button" class="btn btn-success ">Torna alla Lista Prodotti</button></a>
<div class="form-group mt-5">
        <label for="name">Nome</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome prodotto">
    </div>
    <div class="form-group">
        <label for="type">tipo di pasta</label>
        <select class="form-control form-control-md" id="type" name="type">
            <option value="lunga">Lunga</option>
            <option value="corta">Corta</option>
            <option value="cortissima">Cortissima</option>
        </select>
    </div>
    <div class="form-group">
        <label for="cooking_time">Tempo di Cottura</label>
        <input type="number" class="form-control" id="cooking_time" name="cooking_time" >
    </div>
    <div class="form-group">
        <label for="weight">Peso</label>
        <input type="number" class="form-control" id="weight" name="weight" placeholder="Inserisci il peso del prodotto">
    </div>
    <div class="form-group">
        <label for="description">Descrizione</label>
        <textarea class="form-control" id="description" name="description"  rows="8" placeholder="Inserisci la descrizione del prodotto"></textarea>
      </div>
    <div class="form-group">
        <label for="image">Immagine</label>
        <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'url dell'immagine
        ">
    </div>
    <button type="submit" class="btn btn-primary">Crea</button>
@endsection