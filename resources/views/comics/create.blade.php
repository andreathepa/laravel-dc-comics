@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('comics.store')}}" method="POST">

                <div class="form-group">
                    <label class="control-label">Titolo</label>
                    <input type="text" class="form-control mt-2" id="title" name="title" placeholder="Titolo">
                </div>
                <div class="form-group">
                    <label class="control-label">Serie</label>
                    <input type="text" class="form-control mt-2" id="serie" name="serie" placeholder="Serie">
                </div>
                <div class="form-group">
                    <label class="control-label">Prezzo</label>
                    <input type="text" class="form-control mt-2" id="price" name="price" placeholder="Prezzo">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success mt-2">Salva</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection