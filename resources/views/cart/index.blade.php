@extends('base')

@section('title', 'Mon Panier')

@section('content')
    <div class="titre">
        <h1>MON PANIER</h1>
    </div>

    @if(session('success'))
        <p class="paragraphe" style="color:green;">{{ session('success') }}</p>
    @endif

    @if($cartItems->isEmpty())
        <p class="paragraphe">Votre panier est vide.</p>
    @else
        <table class="paragraphe">
            <thead>
            <tr>
                <th>Produit</th>
                <th>Prix</th>
                <th>Quantité</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php $total = 0; @endphp
            @foreach($cartItems as $item)
                @php
                    $product = $item->product;
                    $total += $product->price * $item->quantity;
                @endphp
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }} €</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $product->price * $item->quantity }} €</td>
                    <td>
                        <form action="{{ route('cart.remove', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Retirer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <h3 class="paragraphe">Total : {{ $total }} €</h3>

        <form action="{{ route('cart.clear') }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="bouton-style bouton" type="submit">Vider le panier</button>
        </form>
    @endif
@endsection
