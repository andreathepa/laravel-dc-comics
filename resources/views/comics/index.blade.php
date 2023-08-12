@extends('layouts.app')

@section('content')


<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titolo</th>
                        <th>Serie</th>
                        <th>Prezzo</th>
                        <th>Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{$comic->id}}</td>
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->series}}</td>
                            <td>{{$comic->price}}</td>
                            <td><a href="#"></a></td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection