@extends('site.layout')

@section('title', 'Essa é a Home Page')

@section('conteudo')

{{-- Isso é um comentário --}}

{{ isset($nome) ? $nome : 'Fulano' }} <br>
{{ $idade ?? 'Não informado' }} <br>
{{ $html ?? 'Não informado' }}

@endsection
