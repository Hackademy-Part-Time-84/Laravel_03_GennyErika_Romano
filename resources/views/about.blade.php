@extends('layout')
@section('title','Chi siamo')
@section('content')
<div class="row justify-content-center"><div class="col-lg-8"><p class="text-uppercase text-secondary small">Il progetto</p><h1 class="display-5 fw-bold mb-4">Chi siamo</h1><p class="lead">Tra le pagine è un piccolo spazio online dedicato ai libri e alle storie che ci fanno pensare.</p><p>Qui condividiamo consigli, riflessioni e racconti. Crediamo che leggere sia un modo per conoscere il mondo e incontrare punti di vista diversi.</p><a href="{{ route('articoli.index') }}" class="btn btn-dark mt-3">Scopri gli articoli</a></div></div>
@endsection
