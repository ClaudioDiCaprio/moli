@extends('layouts.base')

@section('pageContent')
<h1>Modifica un prodotto:{{$product->name}}</h1>

<form action="{{route("products.update",$product->id)}}" method="POST">
        @csrf
        @method("PUT")

        <a href="{{route("products.index")}}"><button type="button" class="btn btn-success ">Torna alla Lista Prodotti</button></a>
    <div class="form-group mt-5">
            <label for="name">Nome</label>
            <input type="text" class="form-control @error ('name') is-invalid @enderror" id="name" name="name" placeholder="Inserisci il nome prodotto" value="{{old("name") ? old("name") : $product->name}}">
        </div>
        <div class="form-group">
            <label for="type">tipo di pasta</label>
            <select class="form-control form-control-md @error ('type') is-invalid @enderror" id="type" name="type">
                @php
                    // $selected = '';
                    // if(old("type")){
                    //     $selected = old("type");
                    // }else{
                    //     $selected = $product->type;
                    // }
                    $selected = old("type") ? old("type") : $product->type;
                @endphp
                    <option value="lunga" {{$selected == "lunga" ? "selected" : ""}}>Lunga</option>
                    <option value="corta" {{$selected == "corta" ? "selected" : ""}}>Corta</option>
                    <option value="cortissima" {{$selected == "cortissima" ? "selected" : ""}}>Cortissima</option>
                {{-- @if(old("type"))
                    <option value="lunga" {{old("type") == "lunga" ? "selected" : ""}}>Lunga</option>
                    <option value="corta" {{old("type") == "corta" ? "selected" : ""}}>Corta</option>
                    <option value="cortissima" {{old("type") == "cortissima" ? "selected" : ""}}>Cortissima</option>
                @else
                    <option value="lunga" {{$product->type == "lunga" ? "selected" : ""}}>Lunga</option>
                    <option value="corta" {{$product->type == "corta" ? "selected" : ""}}>Corta</option>
                    <option value="cortissima" {{$product->type == "cortissima" ? "selected" : ""}}>Cortissima</option>
                @endif                 --}}
            </select>
        @error('type')
                <div class="alert alert-danger" >{{$message}}</div>
        @enderror
        </div>
        <div class="form-group">
            <label for="cooking_time">Tempo di Cottura</label>
            <input type="number" class="form-control @error ('cooking_time') is-invalid @enderror" id="cooking_time" name="cooking_time" value="{{old("cooking_time") ? old("cooking_time") : $product->cooking_time}}">
        </div>
        @error('cooking_time')
                <div class="alert alert-danger" >{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="weight">Peso</label>
            <input type="number" class="form-control @error ('weight') is-invalid @enderror" id="weight" name="weight" placeholder="Inserisci il peso del prodotto" value="{{old("weight") ? old("weight") : $product->weight}}">
        </div>
        @error('weight')
                <div class="alert alert-danger" >{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control @error ('description') is-invalid @enderror" id="description" name="description"  rows="8" placeholder="Inserisci la descrizione del prodotto">{{old("description") ? old("description") : $product->description}}</textarea>
        </div>
        @error('description')
                <div class="alert alert-danger" >{{$message}}</div>
        @enderror
        <div class="form-group">
            <label for="image">Immagine</label>
            <input type="text" class="form-control @error ('image') is-invalid @enderror" id="image" name="image" placeholder="Inserisci l'url dell'immagine" value="{{old("image") ? old("image") : $product->image}}">
        </div>
        @error('image')
                <div class="alert alert-danger" >{{$message}}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Modifica</button>
</form>
@endsection