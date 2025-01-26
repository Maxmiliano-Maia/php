@extends('site.layout')
@section('title', 'Essa é a página HOME')
@section('conteudo')
{{-- Isso é um comentario--}}

{{--isset($nome) ? 'existe' : 'não existe'--}}

{{$teste ?? 'padrçao'}}

@endsection