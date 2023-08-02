<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        body {
            font-size: 2rem;
        }
    </style>
</head>

<body>
    <h1>Olá mundo</h1>
    @if(10 < 5) <p>A condição é verdadeira</p>
        @else
        <p>A condição é falsa</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @else
        <p>O nome não é Pedro</p>
        @endif

</body>

</html>