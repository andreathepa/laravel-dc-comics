<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel-dc-comics</title>

    
    @vite('resources/js/app.js')

</head>

<body>

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

</body>

</html>