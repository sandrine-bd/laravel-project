@extends('backoffice.dashboard-layout')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Détails du produit {{ $product->id }}</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('products.index') }}" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Retour à la liste
                </a>
                <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-primary">
                    <i class="bi bi-pencil"></i> Modifier
                </a>
            </div>

            <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="bi bi-trash"></i> Supprimer
                </button>
            </form>

        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Image</h2>
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset($product->image) }}"
                         alt="{{ $product->name }}"
                         class="img-fluid rounded border"
                         style="max-height: 300px; object-fit: cover;">
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Informations</h2>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <strong>Nom :</strong>
                        </div>
                        <div class="col-sm-9">
                            {{ $product->name }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <strong>Etat :</strong>
                        </div>
                        <div class="col-sm-9">
                            {{ $product->category->name }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <strong>Prix :</strong>
                        </div>
                        <div class="col-sm-9">
                            <span class="fs-4 text-primary">{{ number_format($product->price, 2) }} €</span>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <strong>Date de création :</strong>
                        </div>
                        <div class="col-sm-9 text-muted">
                            {{ $product->created_at->format('d/m/Y à H:i') }}
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-sm-3">
                            <strong>Dernière modification :</strong>
                        </div>
                        <div class="col-sm-9 text-muted">
                            @if($product->updated_at && $product->updated_at != $product->created_at)
                                {{ $product->updated_at->format('d/m/Y à H:i') }}
                            @else
                                Jamais modifié
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
