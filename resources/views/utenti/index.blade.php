@extends('layout')
@section('title','Utenti')
@section('content')
<p class="text-uppercase text-secondary small">Community</p><h1 class="display-5 fw-bold mb-4">I nostri autori</h1>
<div class="table-responsive bg-white rounded-4 shadow-sm"><table class="table table-hover align-middle mb-0"><thead class="table-light"><tr><th>Nome</th><th>Email</th><th>Ruolo</th><th></th></tr></thead><tbody>
@foreach($utenti as $utente)<tr><td class="fw-semibold">{{ $utente['nome'] }}</td><td>{{ $utente['email'] }}</td><td>{{ $utente['ruolo'] }}</td><td class="text-end"><a href="{{ route('utenti.show',$utente['id']) }}">Profilo →</a></td></tr>@endforeach
</tbody></table></div>
@endsection
