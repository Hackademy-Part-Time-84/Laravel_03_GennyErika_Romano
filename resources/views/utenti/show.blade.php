@extends('layout')
@section('title',$utente['nome'])
@section('content')
<div class="row justify-content-center"><div class="col-lg-7"><a href="{{ route('utenti.index') }}">← Tutti gli utenti</a><div class="card border-0 shadow-sm mt-4"><div class="card-body p-5"><div class="rounded-circle bg-dark text-white d-flex align-items-center justify-content-center mb-4" style="width:72px;height:72px;font-size:1.5rem">{{ strtoupper(substr($utente['nome'],0,1)) }}</div><p class="text-uppercase text-secondary small">Profilo autore</p><h1 class="fw-bold">{{ $utente['nome'] }}</h1><span class="badge text-bg-secondary mb-3">{{ $utente['ruolo'] }}</span><p>{{ $utente['bio'] }}</p><p class="mb-0"><strong>Email:</strong> {{ $utente['email'] }}</p></div></div></div></div>
@endsection
