@extends('base')

@section('title', 'Mon compte')

@section('content')
    <div class="titre">
        <h1>MON COMPTE</h1>
    </div>

    <div class="paragraphe">
    <p><strong>Nom :</strong> {{ $user->name }}</p>
    <p><strong>Email :</strong> {{ $user->email }}</p>
    <p><strong>Date de création :</strong> {{ $user->created_at->format('d/m/Y') }}</p>

    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="bouton bouton-style" type="submit">Se déconnecter</button>
    </form>

    </div>

@endsection

