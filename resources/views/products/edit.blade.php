@extends('layouts.base')

@section('pageContent')
<h1>Modifica un prodotto:{{$product->name}}</h1>

<form action="{{route("products.update",$product->id)}}" method="POST">
        @csrf
        @method("PUT")

        <a href="{{route("products.index")}}"><button type="button" class="btn btn-success ">Torna alla Lista Prodotti</button></a>
    <div class="form-group mt-5">
            <label for="name">Nome</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Inserisci il nome prodotto" value="{{$product->name}}">
        </div>
        <div class="form-group">
            <label for="type">tipo di pasta</label>
            <select class="form-control form-control-md" id="type" name="type">
                <option value="lunga" {{$product->type == "lunga" ? "selected" : ""}}>Lunga</option>
                <option value="corta" {{$product->type == "corta" ? "selected" : ""}}>Corta</option>
                <option value="cortissima" {{$product->type == "cortissima" ? "selected" : ""}}>Cortissima</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cooking_time">Tempo di Cottura</label>
            <input type="number" class="form-control" id="cooking_time" name="cooking_time" value="{{$product->cooking_time}}">
        </div>
        <div class="form-group">
            <label for="weight">Peso</label>
            <input type="number" class="form-control" id="weight" name="weight" placeholder="Inserisci il peso del prodotto" value="{{$product->weight}}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description"  rows="8" placeholder="Inserisci la descrizione del prodotto">{{$product->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="text" class="form-control" id="image" name="image" placeholder="Inserisci l'url dell'immagine" value="{{$product->image}}">
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
</form>
@endsection