@extends('layoutS.app')

@section('content')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h1>DC Comics</h1>
                <button class="btn btn-sm btn-info">
                    <a href="{{ route('comics.index')}}">
                        Clicca qui
                    </a> 
                </button>
            </div>
        </div>
    </div>

@endsection