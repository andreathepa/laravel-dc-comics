@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <img class="img-fluid" src="{{ $comic->thumb}}" alt="">
        </div>
        <div class="col-12">
            <h2>{{$comic->title}}</h2>
            <p>Genere: {{$comic->description}}</p>
            <p>Prezzo: {{$comic->price}}</p>
            <p>Serie: {{$comic->series}}</p>
            <p>Data di uscita: {{$comic->sale_date}}</p>
        </div>
    </div>
</div>
@endsection