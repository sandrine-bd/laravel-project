@extends('backoffice.dashboard-layout')

@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="text-danger">Supprimer le produit</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
                <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-secondary">
                    <i class="bi bi-arrow-left"></i> Retour aux détails
                </a>
            </div>
        </div>
    </div>

    <div class="alert alert-warning d-flex align-items-center" role="alert">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <div>
            <strong>Attention !</strong> Cette action est irréversible. Une fois supprimé, le produit ne pourra pas être récupéré.
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Image</h2>
                </div>
                <div class="card-body text-center">
                    @if($product->image)
                        <img src="{{ asset($product->image) }}"
                             alt="{{ $product->name }}"
                             class="img-fluid rounded border"
                             style="max-height: 200px; object-fit: cover;">
                    @else
                        <div class="border rounded d-flex align-items-center justify-content-center"
                             style="height: 200px; background-color: #f8f9fa;">
                            <span class="text-muted">
                                <i class="bi bi-image" style="font-size: 3rem;"></i>
                                <br>
                                Aucune image
                            </span>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card border-danger">
                <div class="card-header bg-danger text-white">
                    <h2 class="card-title mb-0">Confirmer la suppression</h2>
                </div>
                <div class="card-body">
                    <p class="mb-4">Êtes-vous sûr de vouloir supprimer ce produit ?</p>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Nom :</strong>
                            <p class="text-muted">{{ $product->name }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Prix :</strong>
                            <p class="text-muted">{{ number_format($product->price, 2) }} €</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>État :</strong>
                            <p class="text-muted">{{ $product->state }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>ID :</strong>
                            <p class="text-muted">#{{ $product->id }}</p>
                        </div>
                    </div>

                    @if($product->description)
                        <div class="row mb-3">
                            <div class="col-12">
                                <strong>Description :</strong>
                                <p class="text-muted">{{ $product->description }}</p>
                            </div>
                        </div>
                    @endif

                    <div class="row mb-4">
                        <div class="col-md-6">
                            <strong>Créé le :</strong>
                            <p class="text-muted">{{ $product->created_at->format('d/m/Y à H:i') }}</p>
                        </div>
                        <div class="col-md-6">
                            <strong>Dernière modification :</strong>
                            <p class="text-muted">{{ $product->updated_at->format('d/m/Y à H:i') }}</p>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('products.show', $product) }}" class="btn btn-secondary">
                            <i class="bi bi-x"></i> Annuler
                        </a>

                        <form action="{{ route('products.destroy', $product) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirmDelete()">
                                <i class="bi bi-trash"></i> Supprimer définitivement
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm('Êtes-vous vraiment sûr de vouloir supprimer ce produit ? Cette action est irréversible.');
        }
    </script>

@endsection
