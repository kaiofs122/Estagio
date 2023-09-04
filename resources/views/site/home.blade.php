@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')
    <h1> Essa é a nossa Home </h1>

@include('includes.mensagem', ['Titulo' => 'Mensagem de sucesso!'])

@component('components.sidebar')
    @slot('paragrafo')
        Texto qualquer vindo do slot
    @endslot
@endcomponent

@endsection
