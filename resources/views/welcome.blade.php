@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Olá mundo</h1>
<img src="/img/331035.png" alt="imagem">
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

    @for($i = 0; $i < count($arr); $i++) <p>{{$arr [$i]}}</p>
        @endfor


        @endsection