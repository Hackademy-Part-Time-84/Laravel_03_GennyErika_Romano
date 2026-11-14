@extends('layout')
@section('title',$articolo['titolo'])
@section('content')
<div class="row justify-content-center"><article class="col-lg-9"><a href="{{ route('articoli.index') }}">← Tutti gli articoli</a><p class="text-uppercase text-secondary small mt-4">{{ $articolo['categoria'] }} · {{ $articolo['data'] }}</p><h1 class="display-5 fw-bold mb-3">{{ $articolo['titolo'] }}</h1><p class="text-secondary">Scritto da {{ $articolo['autore'] }}</p><img src="{{ $articolo['immagine'] }}" alt="{{ $articolo['titolo'] }}" class="article-cover my-4"><p class="lead">{{ $articolo['contenuto'] }}</p></article></div>
@endsection
