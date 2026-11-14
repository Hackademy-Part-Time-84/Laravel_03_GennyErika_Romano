@extends('layout')
@section('title','Tutti gli articoli')
@section('content')
<p class="text-uppercase text-secondary small">Archivio</p><h1 class="display-5 fw-bold mb-4">Tutti gli articoli</h1>
<div class="row g-4">
@foreach($articoli as $articolo)
<div class="col-md-6 col-lg-4"><article class="card article-card"><img src="{{ $articolo['immagine'] }}" class="card-img-top" alt="{{ $articolo['titolo'] }}"><div class="card-body d-flex flex-column"><span class="badge text-bg-light align-self-start mb-2">{{ $articolo['categoria'] }}</span><h2 class="h5">{{ $articolo['titolo'] }}</h2><p class="small text-secondary">{{ $articolo['autore'] }} · {{ $articolo['data'] }}</p><p>{{ Str::limit($articolo['contenuto'],100) }}</p><a class="mt-auto" href="{{ route('articoli.show',$articolo['slug']) }}">Leggi →</a></div></article></div>
@endforeach
</div>
@endsection
