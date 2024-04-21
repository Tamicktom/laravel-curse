@extends('site.layout')

@component("components.sidebar")
@slot('paragrafo')
<p>Essa é a sidebar da Home Page</p>
@endslot
@endcomponent

@section('title', 'Essa é a Home Page')

@section('conteudo')

{{-- Isso é um comentário --}}

@include('includes.mensagem', ['title' => 'Essa é uma mensagem de erro!'])

{{ isset($nome) ? $nome : 'Fulano' }} <br>
{{ $idade ?? 'Não informado' }} <br>
{{ $html ?? 'Não informado' }}

@php $i = 0; @endphp

@if ($nome == 'Roberto')
<p>Olá, Roberto!</p>
@elseif ($nome == 'Maria')
<p>Olá, Maria!</p>
@else
<p>Olá, visitante!</p>
@endif

@auth
<p>Usuário autenticado</p>
@else
<p>Usuário não autenticado</p>
@endauth

@guest
<p>Usuário não autenticado</p>
@endguest

@for ($i = 0; $i < 10; $i++) <p>Valor: {{ $i }}</p>
    @endfor

    @endsection
