@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')

{{-- Estrutura de controle--}}

@guest
n há usuario autenticado 
@endguest
   

@endsection