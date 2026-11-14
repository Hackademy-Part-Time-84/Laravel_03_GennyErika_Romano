@extends('layout')
@section('title','Home')
@section('content')
<section class="hero p-5 mb-5"><p class="text-uppercase small mb-2">Storie, idee e ispirazioni</p><h1 class="display-4 fw-bold">Un posto per chi ama leggere.</h1><p class="lead mb-4">Articoli, consigli e pensieri da condividere, una pagina alla volta.</p><a href="{{ route('articoli.index') }}" class="btn btn-light">Tutti gli articoli</a></section>
<div class="d-flex justify-content-between align-items-end mb-4"><div><p class="text-uppercase text-secondary small mb-1">Dal nostro blog</p><h2 class="fw-bold mb-0">Ultimi articoli</h2></div><a href="{{ route('articoli.index') }}">Vedi tutti →</a></div>
<div class="row g-4">@foreach($articoli as $articolo)<div class="col-md-6 col-lg-4"><article class="card article-card"><img src="{{ $articolo['immagine'] }}" class="card-img-top" alt="{{ $articolo['titolo'] }}"><div class="card-body d-flex flex-column"><span class="badge text-bg-light align-self-start mb-2">{{ $articolo['categoria'] }}</span><h3 class="h5">{{ $articolo['titolo'] }}</h3><p class="text-secondary small">{{ $articolo['autore'] }} · {{ $articolo['data'] }}</p><p>{{ Str::limit($articolo['contenuto'],100) }}</p><a class="mt-auto" href="{{ route('articoli.show',$articolo['slug']) }}">Leggi l'articolo →</a></div></article></div>@endforeach</div>
@endsection
