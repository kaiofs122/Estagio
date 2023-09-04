@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')
    <h1> Essa é a nossa Home </h1>

{{--Isso é um comentário--}}    

{{-- isset($nome) ? 'existe' : 'não existe'--}}

{{--$teste ?? 'Padrao'--}}

{{--Estrutura de controle--}}

@foreach ($frutas as $fruta)
    {{$fruta}} <br>
@endforeach
 

@endsection
